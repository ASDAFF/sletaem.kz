<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if(\Bitrix\Main\Loader::includeModule('iblock'))
{
	$arProperty = $arPropertyF = array();
	$rsProp = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("IBLOCK_ID"=>$arCurrentValues["IBLOCK_ID"], "ACTIVE"=>"Y"));
	while ($arr=$rsProp->Fetch())
	{
		if($arr["PROPERTY_TYPE"] != "F")
			$arProperty[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
		else
			$arPropertyF[$arr["CODE"]] = "[".$arr["CODE"]."] ".$arr["NAME"];
	}
}

/* get component template pages & params array */
$arPageBlocksParams = array();
if(\Bitrix\Main\Loader::includeModule('aspro.next')){
	$arPageBlocks = CNext::GetComponentTemplatePageBlocks(__DIR__);
	$arPageBlocksParams = CNext::GetComponentTemplatePageBlocksParams($arPageBlocks);
	CNext::AddComponentTemplateModulePageBlocksParams(__DIR__, $arPageBlocksParams); // add option value FROM_MODULE
}
	// print_r($arPageBlocksParams);

$arListView = array(
	'slider' => GetMessage("SLIDER_VIEW"),
	'block' => GetMessage("BLOCK_VIEW"),
);

$arTemplateParameters = array_merge($arPageBlocksParams, array(
	'T_GOODS' => array(
		'SORT' => 704,
		'NAME' => GetMessage('T_GOODS'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_GOODS_SECTION' => array(
		'SORT' => 704,
		'NAME' => GetMessage('T_GOODS_SECTION'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'T_GALLERY' => array(
		'SORT' => 704,
		'NAME' => GetMessage('T_GALLERY'),
		'TYPE' => 'TEXT',
		'DEFAULT' => '',
	),
	'LINKED_PRODUCTS_PROPERTY' => array(
		'NAME' => GetMessage('LINKED_PRODUCTS_PROPERTY'),
		'TYPE' => 'LIST',
		'PARENT' => 'DETAIL_SETTINGS',
		'VALUES' => $arProperty,
		'ADDITIONAL_VALUES' => 'Y',
		'DEFAULT' => 'BRAND'
	),
	'SHOW_LINKED_PRODUCTS' => array(
		'NAME' => GetMessage('SHOW_LINKED_PRODUCTS'),
		'TYPE' => 'CHECKBOX',
		'PARENT' => 'DETAIL_SETTINGS',
		'DEFAULT' => 'N',
	),
	"LIST_VIEW" => array(
		"NAME" => GetMessage("LIST_VIEW"),
		"TYPE" => "LIST",
		"PARENT" => "DETAIL_SETTINGS",
		"VALUES" => $arListView,
		"ADDITIONAL_VALUES" => "N",
		"DEFAULT" => "slider"
	),
	'LINKED_ELEMENST_PAGE_COUNT' => array(
		'SORT' => 704,
		'NAME' => GetMessage('LINKED_ELEMENST_PAGE_COUNT'),
		'TYPE' => 'TEXT',
		"PARENT" => "DETAIL_SETTINGS",
		'DEFAULT' => '20',
	),
));

$arTemplateParameters['SHOW_GALLERY'] = array(
	'NAME' => GetMessage('SHOW_GALLERY'),
	'TYPE' => 'CHECKBOX',
	'SORT' => 707,
	'PARENT' => 'DETAIL_SETTINGS',
	'DEFAULT' => 'Y',
);
$arTemplateParameters['GALLERY_PRODUCTS_PROPERTY'] = array(
	'NAME' => GetMessage('GALLERY_PRODUCTS_PROPERTY'),
	'TYPE' => 'LIST',
	'SORT' => 708,
	'PARENT' => 'DETAIL_SETTINGS',
	'VALUES' => $arPropertyF,
	'ADDITIONAL_VALUES' => 'Y',
	'DEFAULT' => 'PHOTOS'
);
$arTemplateParameters['DEPTH_LEVEL_BRAND'] = array(
	'NAME' => GetMessage('DEPTH_LEVEL_BRAND'),
	'SORT' => 709,
	'TYPE' => 'TEXT',
	'PARENT' => 'DETAIL_SETTINGS',
	'DEFAULT' => '2'
);

$arTemplateParameters['IMAGE_POSITION'] = array(
	'PARENT' => 'LIST_SETTINGS',
	'SORT' => 250,
	'NAME' => GetMessage('IMAGE_POSITION'),
	'TYPE' => 'LIST',
	'VALUES' => array(
		'left' => GetMessage('IMAGE_POSITION_LEFT'),
		'right' => GetMessage('IMAGE_POSITION_RIGHT'),
	),
	'DEFAULT' => 'left',
);

$arTemplateParameters['COUNT_IN_LINE'] = array(
	'PARENT' => 'LIST_SETTINGS',
	'NAME' => GetMessage('COUNT_IN_LINE'),
	'TYPE' => 'STRING',
	'DEFAULT' => '3',
);

$arPrice = array();
if (\Bitrix\Main\Loader::includeModule('catalog'))
{
	$arPrice = CCatalogIBlockParameters::getPriceTypesList();
	$arTemplateParameters['PRICE_CODE'] = array(
		'PARENT' => 'DETAIL_SETTINGS',
		'NAME' => GetMessage('PRICE_CODE_TITLE'),
		'TYPE' => 'LIST',
		'MULTIPLE' => 'Y',
		'VALUES' => $arPrice,
		'ADDITIONAL_VALUES' => 'Y'
	);

	$arStore = array();
	global $USER_FIELD_MANAGER;
	$storeIterator = CCatalogStore::GetList(
		array(),
		array('ISSUING_CENTER' => 'Y'),
		false,
		false,
		array('ID', 'TITLE')
	);
	while ($store = $storeIterator->GetNext())
		$arStore[$store['ID']] = "[".$store['ID']."] ".$store['TITLE'];

	$userFields = $USER_FIELD_MANAGER->GetUserFields("CAT_STORE", 0, LANGUAGE_ID);
	$propertyUF = array();

	foreach($userFields as $fieldName => $userField)
		$propertyUF[$fieldName] = $userField["LIST_COLUMN_LABEL"] ? $userField["LIST_COLUMN_LABEL"] : $fieldName;

	$arTemplateParameters['STORES'] = array(
		'PARENT' => 'DETAIL_SETTINGS',
		'NAME' => GetMessage('STORES'),
		'TYPE' => 'LIST',
		'MULTIPLE' => 'Y',
		'VALUES' => $arStore,
		'ADDITIONAL_VALUES' => 'Y'
	);
	$arTemplateParameters['HIDE_NOT_AVAILABLE'] = array(
		'PARENT' => 'DETAIL_SETTINGS',
		'NAME' => GetMessage('T_HIDE_NOT_AVAILABLE'),
		'TYPE' => 'CHECKBOX',
		'DEFAULT' => 'N',
	);
}
?>