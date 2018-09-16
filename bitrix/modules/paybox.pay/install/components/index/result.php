<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule("sale");
CModule::IncludeModule("paybox.pay");

/*
 * Configuration and parameters
 */
$strScriptName = PayBoxSignature::getOurScriptName();

$arrRequest = PayBoxIO::getRequest();

$objShop = CSalePaySystemAction::GetList('', array("PS_NAME"=>$arrRequest['PAYMENT_SYSTEM']));
$arrShop = $objShop->Fetch();
if(!empty($arrShop))
	$arrShopParams = unserialize($arrShop['PARAMS']);
else
{
	PayBoxIO::makeResponse($strScriptName, '', 'error',
		'Please re-configure the module PayBox.PAY in Bitrix CMS. The payment system should have a name '.$arrRequest['PAYMENT_SYSTEM']);
}

$strSecretKey = $arrShopParams['SHOP_SECRET_KEY']['VALUE'];

$strSalt = $arrRequest["pg_salt"];

$nOrderAmount = $arrRequest["pg_amount"];
$nOrderId = intval($arrRequest["pg_order_id"]);

$strStatusFailed = $arrRequest["STATUS_FAILED"];

/*
 * Signature
 */

if(!PayBoxSignature::check($arrRequest['pg_sig'], $strScriptName, $arrRequest, $strSecretKey) )
	PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'error',
		'signature is not valid', $strSalt);

if(!($arrOrder = CSaleOrder::GetByID($nOrderId)))
	PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'error',
		'order not found', $strSalt);

if($nOrderAmount != $arrOrder['PRICE'])
	PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'error',
		'amount is not correct', $strSalt);

if($arrRequest["pg_result"] == 1){
	if($arrOrder['PAYED']=="Y")
		PayBoxIO::makeResponse($strScriptName, $strSecretKey, "ok",
			"Order alredy payed", $strSalt);
		
	if($arrOrder['CANCELED']=="Y") {
		CSaleOrder::Update($nOrderId, array(
			'STATUS_ID' => $strStatusFailed,
			'PS_STATUS' => $strStatusFailed,
			'PS_STATUS_CODE' => "0",
			'PS_SUM' => $arrRequest['pg_amount'],
			'PS_CURRENCY' => $arrRequest['pg_currency'],
			'PS_RESPONSE_DATE' => Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG))),
		));		
		
		PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'rejected',
			'Order canceled', $strSalt);
		
		return false;
	}
		
	if(!CSaleOrder::PayOrder($nOrderId, "Y"))
		PayBoxIO::makeResponse($strScriptName, $strSecretKey, "error",
			"Order can\'t be payed", $strSalt);

	PayBoxIO::makeResponse($strScriptName, $strSecretKey, "ok",
		"Order payed",$strSalt);
}
/*
 * Order cancel
 */
else{
	if($arrOrder['CANCELED']=="Y") {
		PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'ok',
			'Order alredy canceled', $strSalt);
	}
		
	if($arrOrder['PAYED']=="Y")
		PayBoxIO::makeResponse($strScriptName, $strSecretKey, "error",
			"Order alredy paid", $strSalt);

	if(!CSaleOrder::CancelOrder($nOrderId, "Y", !empty($arrRequest['pg_failure_description'])? $arrRequest['pg_failure_description'] : ''))
		PayBoxIO::makeResponse($strScriptName, $strSecretKey, "error",
			"Order can\'t be cancel", $strSalt);
	
	CSaleOrder::Update($nOrderId, array(
			'STATUS_ID' => $strStatusFailed,
			'PS_STATUS' => $strStatusFailed,
			'PS_STATUS_CODE' => "1",
			'PS_SUM' => $arrRequest['pg_amount'],
			'PS_CURRENCY' => $arrRequest['pg_currency'],
			'PS_RESPONSE_DATE' => Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG))),
	));		

	PayBoxIO::makeResponse($strScriptName, $strSecretKey, "ok",
			"Order cancel", $strSalt);
}
