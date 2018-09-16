<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule("sale");
CModule::IncludeModule("paybox.pay");

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
$nOrderId = intval($arrRequest["pg_order_id"]);

if(!($arrOrder = CSaleOrder::GetByID($nOrderId)))
	PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'error',
		'order not found', $strSalt);

if(!PayBoxSignature::check($arrRequest['pg_sig'], $strScriptName, $arrRequest, $strSecretKey) )
	PayBoxIO::makeResponse($strScriptName, $strSecretKey, 'error',
		'signature is not valid', $strSalt);

$strStatusRevoked = $arrRequest['STATUS_REVOKED'];

CSaleOrder::Update($nOrderId, array(
			'STATUS_ID' => $strStatusRevoked,
			'PS_STATUS' => $strStatusRevoked,
));

$arrRequest['pg_salt'] = uniqid();
$arrRequest['pg_status'] = 'ok';

$arrRequest['pg_sig'] = PayBoxSignature::make('refund.php', $arrRequest, $strSecretKey);

PayBoxIO::makeResponse($strScriptName, $strSecretKey, "ok", "", $arrRequest['pg_salt']);