<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

include(GetLangFileName(dirname(__FILE__)."/", "/payment.php"));

CModule::IncludeModule("sale");
CModule::IncludeModule("paybox.pay");

$useNew = GetMessage("USE_NEW");
$newEmail = GetMessage("NEW_EMAIL");
$useNewEmail = GetMessage("USE_NEW_EMAIL");

$arrRequestMethods = array("POST", "GET");
$arrUserRedirectMethods = array("POST", "GET", "AUTOPOST", "AUTOGET");

$userID = $USER->GetID();
$rsUser = CUser::GetByID($userID);
$arrUser = $rsUser->Fetch();

$strCustomerEmail = $arrUser['EMAIL'];
$strCustomerPhone = PayBoxIO::checkAndConvertUserPhone($arrUser['PERSONAL_MOBILE']);

if ($_SERVER["REQUEST_METHOD"] == "POST" && trim($_POST["SET_NEW_USER_DATA"])!="")
{
	if(!empty($_POST["NEW_EMAIL"]))
		$strCustomerEmail = $_POST["NEW_EMAIL"];
	if(!empty($_POST["NEW_PHONE"]))
		$strCustomerPhone = $_POST["NEW_PHONE"];
}

if(!PayBoxIO::emailIsValid($strCustomerEmail)){
		echo "
			<form method=\"POST\" action=\"".POST_FORM_ACTION_URI."\">
			<p><font color=\"Red\">$newEmail</font></p>
			<input type=\"text\" name=\"NEW_EMAIL\" size=\"30\" value=\"$strCustomerEmail\" />";
	echo "<br><br>
			<input type=\"submit\" name=\"SET_NEW_USER_DATA\" value=\"$useNew".
			(!PayBoxIO::emailIsValid($strCustomerEmail)? "$useNewEmail" : "").
			"\" />
	</form>";
	exit();
}

$nAmount = CSalePaySystemAction::GetParamValue("SHOULD_PAY");
$nMerchantId = CSalePaySystemAction::GetParamValue("SHOP_MERCHANT_ID");
$strSecretKey = CSalePaySystemAction::GetParamValue("SHOP_SECRET_KEY");
$bTestingMode = CSalePaySystemAction::GetParamValue("SHOP_TESTING_MODE") == "Y"? 1 : 0;
$nOrderId = CSalePaySystemAction::GetParamValue("ORDER_ID");
$nOrderLivetime = CSalePaySystemAction::GetParamValue("ORDER_LIVETIME");

$strSiteUrl = CSalePaySystemAction::GetParamValue("SITE_URL");
$strCheckUrl = CSalePaySystemAction::GetParamValue("CHECK_URL");
$strResultUrl = CSalePaySystemAction::GetParamValue("RESULT_URL");
$strRefundUrl = CSalePaySystemAction::GetParamValue("REFUND_URL");
$strRequestMethod = CSalePaySystemAction::GetParamValue("REQUEST_METHOD");

$strSuccessUrl = CSalePaySystemAction::GetParamValue("SUCCESS_URL");
$strSuccessUrlMethod = CSalePaySystemAction::GetParamValue("SUCCESS_URL_METHOD");

$strFailureUrl = CSalePaySystemAction::GetParamValue("FAILURE_URL");
$strFailureUrlMethod = CSalePaySystemAction::GetParamValue("FAILURE_URL_METHOD");

$strStatusFailed = CSalePaySystemAction::GetParamValue("STATUS_FAILED");
$strStatusRevoked = CSalePaySystemAction::GetParamValue("STATUS_REVOKED");

$nAmount = number_format($nAmount, 2, '.', '');

$arrRequest['pg_salt'] = uniqid();
$arrRequest['pg_merchant_id'] = $nMerchantId;
$arrRequest['pg_order_id']    = $nOrderId;

if(CSalePaySystemAction::GetParamValue("PAYMENT_SYSTEM")) {
	$arrRequest['pg_payment_system'] = CSalePaySystemAction::GetParamValue("PAYMENT_SYSTEM");
}

$arrOrder = CSaleOrder::GetByID($nOrderId);
$arrPaymentSystem = CSalePaySystem::GetByID($arrOrder['PAY_SYSTEM_ID']);
$arrRequest['PAYMENT_SYSTEM'] = $arrPaymentSystem['NAME'];

if(!empty($nOrderLivetime))
	$arrRequest['pg_lifetime']   = $nOrderLivetime;
else	
	$arrRequest['pg_lifetime']    = 3600*24;

$arrRequest['pg_amount']      = $nAmount;

$basketList = CSaleBasket::GetList(array(), array("ORDER_ID" => $nOrderId));
$arrItems = array();
while ($arrItem = $basketList->Fetch()) {
   $arrItems[] = $arrItem['NAME'].', ';
}
$arrRequest['pg_description'] = 'Order ID: '.$nOrderId;
$arrRequest['pg_user_phone'] = $strCustomerPhone;
$arrRequest['pg_user_contact_email'] = $strCustomerEmail;
$arrRequest['pg_user_email'] = $strCustomerEmail;
$arrRequest['pg_user_ip'] = $_SERVER['REMOTE_ADDR'];

if(!empty($strSiteUrl))
	$arrRequest['pg_site_url']   = $strSiteUrl;
else
	$arrRequest['pg_sire_url']		= "http://".$_SERVER['HTTP_HOST'];
if(!empty($strCheckUrl))
	$arrRequest['pg_check_url']   = $strCheckUrl;
else
	$arrRequest['pg_check_url']		= "https://".$_SERVER['HTTP_HOST']."/paybox/check.php"; 
if(!empty($strResultUrl))
	$arrRequest['pg_result_url']	= $strResultUrl;
else
	$arrRequest['pg_result_url'] = "https://".$_SERVER['HTTP_HOST']."/paybox/result.php";
if(!empty($strRequestMethod) && array_search($strRequestMethod, $arrRequestMethods) !== false)
	$arrRequest['pg_request_method']	= $strRequestMethod;
else
	$arrRequest['pg_request_method']	= 'POST';

if(!empty($strSuccessUrl))
	$arrRequest['pg_success_url']   = $strSuccessUrl;
else
	$arrRequest['pg_success_url']   = "https://".$_SERVER['HTTP_HOST']."/paybox/success.php";
if(!empty($strRefundUrl))
	$arrRequest['pg_refund_url'] = $strRefundUrl;
else
	$arrRequest['pg_refund_url']   = "https://".$_SERVER['HTTP_HOST']."/paybox/refund.php";
if(!empty($strSuccessUrlMethod) && array_search($strSuccessUrlMethod, $arrUserRedirectMethods) !== false)
	$arrRequest['pg_success_url_method']	= $strSuccessUrlMethod;
else
	$arrRequest['pg_success_url_method']	= 'AUTOPOST';
if(!empty($strFailureUrl))
	$arrRequest['pg_failure_url']   = $strFailureUrl;
else
	$arrRequest['pg_failure_url']   = "https://".$_SERVER['HTTP_HOST']."/paybox/failure.php";
if(!empty($strFailureUrlMethod) && array_search($strFailureUrlMethod, $arrUserRedirectMethods) !== false)
	$arrRequest['pg_failure_url_method']	= $strFailureUrlMethod;
else
	$arrRequest['pg_failure_url_method']	= 'AUTOPOST';

if($bTestingMode)
	$arrRequest['pg_testing_mode']	= '1';

$arrRequest['STATUS_FAILED'] = $strStatusFailed;
$arrRequest['STATUS_REVOKED'] = $strStatusRevoked;

$arrRequest['pg_encoding'] = 'windows-1251';

/*
 * PayBox Request
 */

$arrRequest['pg_sig'] = PayBoxSignature::make('payment.php', $arrRequest, $strSecretKey);

print "<form name=\"payment\" method='".$strRequestMethod."' action='https://paybox.kz/payment.php'";
foreach($arrRequest as $key => $value) {
	print "<label for=''>				<input type='hidden' name='".$key."' value='".$value."' />			</label>";
}

print "<input type=\"submit\"></form>";
?>
<script>
	document.payment.submit();
</script>