<?$bFromModule = (isset($arParams['FROM_MODULE']) && $arParams['FROM_MODULE'] == 'Y');
if(!$bFromModule)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

	if(\Bitrix\Main\Loader::includeModule('aspro.next'))
		CNext::clearBasketCounters();
}


$APPLICATION->IncludeComponent(
	"bitrix:catalog.compare.list", 
	"compare_top", 
	array(
		"IBLOCK_TYPE" => "aspro_next_catalog",
		"IBLOCK_ID" => "17",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"DETAIL_URL" => "/catalog/#SECTION_CODE_PATH#/#ELEMENT_ID#/",
		"COMPARE_URL" => CNext::GetFrontParametrValue("COMPARE_PAGE_URL"),
		"CLASS_LINK" => (isset($arParams["CLASS_LINK"])?$arParams["CLASS_LINK"]:""),
		"CLASS_ICON" => (isset($arParams["CLASS_ICON"])?$arParams["CLASS_ICON"]:""),
		"NAME" => "CATALOG_COMPARE_LIST",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "compare_top",
		"POSITION_FIXED" => "Y",
		"POSITION" => "top left",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id"
	),
	false
);

if(!$bFromModule)
{
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
}?>