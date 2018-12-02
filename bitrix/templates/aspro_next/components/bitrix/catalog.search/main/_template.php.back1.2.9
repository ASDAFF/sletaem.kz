<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?$isAjax="N";?>
<?if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest"  && isset($_GET["ajax_get"]) && $_GET["ajax_get"] == "Y" || (isset($_GET["ajax_basket"]) && $_GET["ajax_basket"]=="Y")){
	$isAjax="Y";
}?>
<?if(isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == "xmlhttprequest" && isset($_GET["ajax_get_filter"]) && $_GET["ajax_get_filter"] == "Y" ){
	$isAjaxFilter="Y";
}?>
<?
global $searchFilter, $arTheme, $arRegion;
$arParams["AJAX_FILTER_CATALOG"] = "N";
$bShowFilter = ($arTheme["SEARCH_VIEW_TYPE"]["VALUE"] == "with_filter");
if($bShowFilter)
{
	$APPLICATION->SetPageProperty("HIDE_LEFT_BLOCK", "Y");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.history.js');
}

$arIBlocks = array($arParams["IBLOCK_ID"]);
$arSKU = array();
if($arParams['IBLOCK_ID'])
{
	$arSKU = CCatalogSKU::GetInfoByProductIBlock($arParams['IBLOCK_ID']);
	if($arSKU['IBLOCK_ID'])
		$arIBlocks[] = $arSKU['IBLOCK_ID'];
}?>
<?if($bShowFilter):?>
	<div class="right_block wide_N">
	<div class="middle">
		<?$catalogIBlockID = $arParams["IBLOCK_ID"];?>
		<?
		if($arParams["FILTER_NAME"] == '' || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $arParams["FILTER_NAME"]))
			$arParams["FILTER_NAME"] = "arrFilter";
		?>
<?endif;?>
<?$arElements = $APPLICATION->IncludeComponent(
	"bitrix:search.page",
	"",
	Array(
		"RESTART" => $arParams["RESTART"],
		"NO_WORD_LOGIC" => $arParams["NO_WORD_LOGIC"],
		"USE_LANGUAGE_GUESS" => $arParams["USE_LANGUAGE_GUESS"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
		"arrFILTER" => array("iblock_".$arParams["IBLOCK_TYPE"]),
		"arrFILTER_iblock_".$arParams["IBLOCK_TYPE"] => $arIBlocks,
		"USE_TITLE_RANK" => "N",
		"DEFAULT_SORT" => "rank",
		"FILTER_NAME" => "",
		"SHOW_WHERE" => "N",
		"arrWHERE" => array(),
		"SHOW_WHEN" => "N",
		"PAGE_RESULT_COUNT" => 200,
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"FROM_AJAX" => $isAjaxFilter,
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "N",
	),
	$component
);

if (is_array($arElements) && !empty($arElements))
{

	if($arSKU)
	{
		foreach($arElements as $key => $value)
		{
			$arTmp = CIBlockElement::GetProperty($arSKU['IBLOCK_ID'], $value, array("sort" => "asc"), Array("ID"=>$arSKU['SKU_PROPERTY_ID']))->Fetch();
			if($arTmp['VALUE'])
				$arElements[$arTmp['VALUE']] = $arTmp['VALUE'];
		}
	}

	$searchFilter = array(
		"=ID" => $arElements,
	);

	if($arRegion)
	{
		if($arRegion['LIST_PRICES'])
		{
			if(reset($arRegion['LIST_PRICES']) != 'component')
				$arParams['PRICE_CODE'] = array_keys($arRegion['LIST_PRICES']);
		}
		if($arRegion['LIST_STORES'])
		{
			if(reset($arRegion['LIST_STORES']) != 'component')
				$arParams['STORES'] = $arRegion['LIST_STORES'];

			if($arParams["HIDE_NOT_AVAILABLE"] == "Y")
			{
				$arTmpFilter["LOGIC"] = "OR";
				foreach($arParams['STORES'] as $storeID)
				{
					$arTmpFilter[] = array(">CATALOG_STORE_AMOUNT_".$storeID => 0);
				}
				$GLOBALS[$arParams["FILTER_NAME"]][] = $arTmpFilter;
			}
		}
	}

	?>
	<?$arItems = CNextCache::CIBLockElement_GetList(array('CACHE' => array("MULTI" =>"Y", "TAG" => CNextCache::GetIBlockCacheTag($catalogIBlockID))), array("IBLOCK_ID" => $catalogIBlockID, "ACTIVE"=>"Y", "ID" => $arElements), false, false, array("ID", "IBLOCK_ID", "IBLOCK_SECTION_ID"));
	$arAllSections = $arSectionsID = $arItemsID = array();

	if($arItems)
	{
		foreach($arItems as $arItem)
		{
			$arItemsID[$arItem["ID"]] = $arItem["ID"];
			if($arItem["IBLOCK_SECTION_ID"])
			{
				if(is_array($arItem["IBLOCK_SECTION_ID"]))
				{
					foreach($arItem["IBLOCK_SECTION_ID"] as $id)
					{
						$arAllSections[$id]["COUNT"]++;
						$arAllSections[$id]["ITEMS"][$arItem["ID"]] = $arItem["ID"];
					}
				}
				else
				{
					$arAllSections[$arItem["IBLOCK_SECTION_ID"]]["COUNT"]++;
					$arAllSections[$arItem["IBLOCK_SECTION_ID"]]["ITEMS"][$arItem["ID"]] = $arItem["ID"];
				}
			}
		}
		if($arAllSections)
		{
			$arSectionsID = array_keys($arAllSections);
			$arSections = CNextCache::CIBlockSection_GetList(array('CACHE' => array("MULTI" =>"N", "GROUP" => "ID", "TAG" => CNextCache::GetIBlockCacheTag($catalogIBlockID))), array("ID" => $arSectionsID, "IBLOCK_ID" => $catalogIBlockID), false, array("ID", "IBLOCK_ID", "NAME"));
		}?>
		<?$setionIDRequest = (isset($_GET["section_id"]) && $_GET["section_id"] ? $_GET["section_id"] : 0);?>

		<?ob_start()?>
			<?if(count($arAllSections) > 1):?>
				<div class="top_block_filter_section">
					<div class="title"><a class="dark_link" title="<?=GetMessage("FILTER_ALL_SECTON");?>" href="<?=$APPLICATION->GetCurPageParam('', array('section_id'))?>"><?=GetMessage("FILTER_SECTON");?></a></div>
					<div class="items">
						<?foreach($arAllSections as $key => $arTmpSection):?>
							<div class="item <?=($setionIDRequest ? ($key == $setionIDRequest ? 'current' : '') : '');?>"><a href="<?=$APPLICATION->GetCurPageParam('section_id='.$key, array('section_id'))?>" class="dark_link"><span><?=$arSections[$key]["NAME"];?></span><span><?=$arTmpSection["COUNT"];?></span></a></div>
						<?endforeach;?>
					</div>
				</div>
			<?endif;?>
		<?$htmlSections=ob_get_clean();?>
		<?$APPLICATION->AddViewContent('filter_section', $htmlSections);?>

		<?ob_start()?>
			<div class="visible_mobile_filter">
				<?$APPLICATION->IncludeComponent(
					"aspro:catalog.smart.filter",
					($arParams["AJAX_FILTER_CATALOG"]=="Y" ? "main_ajax" : "main"),
					Array(
						"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
						"IBLOCK_ID" => $catalogIBlockID,
						"AJAX_FILTER_FLAG" => $isAjaxFilter,
						"SECTION_ID" => '',
						"FILTER_NAME" => "searchFilter",
						"PRICE_CODE" => ($arParams["USE_FILTER_PRICE"] == 'Y' ? $arParams["FILTER_PRICE_CODE"] : $arParams["PRICE_CODE"]),
						"CACHE_TYPE" => $arParams["CACHE_TYPE"],
						"CACHE_TIME" => $arParams["CACHE_TIME"],
						"CACHE_NOTES" => "",
						"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
						"SECTION_IDS" => ($setionIDRequest ? array($setionIDRequest) : $arSectionsID),
						"ELEMENT_IDS" => ($setionIDRequest ? $arAllSections[$setionIDRequest]["ITEMS"] : $arItemsID),
						"SAVE_IN_SESSION" => "N",
						"XML_EXPORT" => "Y",
						"SECTION_TITLE" => "NAME",
						"SECTION_DESCRIPTION" => "DESCRIPTION",
						"SHOW_HINTS" => $arParams["SHOW_HINTS"],
						'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
						'CURRENCY_ID' => $arParams['CURRENCY_ID'],
						'DISPLAY_ELEMENT_COUNT' => $arParams['DISPLAY_ELEMENT_COUNT'],
						"INSTANT_RELOAD" => "Y",
						"VIEW_MODE" => strtolower($arTheme["FILTER_VIEW"]["VALUE"]),
						"SEF_MODE" => (strlen($arResult["URL_TEMPLATES"]["smart_filter"]) ? "Y" : "N"),
						"SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
						"SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
						"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
					),
					$component);
				?>
			</div>
			<?if(isset($searchFilter["FACET_OPTIONS"]))
				unset($searchFilter["FACET_OPTIONS"]);
			if(isset($searchFilter["OFFERS"]))
			{
				$searchFilter[] = array(
					"=ID" => $searchFilter["=ID"]
				);
			}?>
		<?$html=ob_get_clean();?>
		<?$APPLICATION->AddViewContent('filter_content', $html);?>
	<?}?>
	<?if($isAjax=="Y"):?>
		<?$APPLICATION->RestartBuffer();?>
	<?endif;?>
	<?$APPLICATION->ShowViewContent('search_content');?>
	<div class="catalog">
		<?$arDisplays = array("block", "list", "table");
		if(array_key_exists("display", $_REQUEST) || (array_key_exists("display", $_SESSION)) || $arParams["DEFAULT_LIST_TEMPLATE"]){
			if($_REQUEST["display"] && (in_array(trim($_REQUEST["display"]), $arDisplays))){
				$display = trim($_REQUEST["display"]);
				$_SESSION["display"]=trim($_REQUEST["display"]);
			}
			elseif($_SESSION["display"] && (in_array(trim($_SESSION["display"]), $arDisplays))){
				$display = $_SESSION["display"];
			}
			else{
				$display = $arParams["DEFAULT_LIST_TEMPLATE"];
			}
		}
		else{
			$display = "block";
		}
		$template = "catalog_".$display;
		?>
		<?=$htmlSections;?>
		<br/>
		<div class="adaptive_filter">
			<a class="filter_opener<?=($_REQUEST["set_filter"] == "y" ? " active" : "")?>"><i></i><span><?=GetMessage("CATALOG_SMART_FILTER_TITLE")?></span></a>
		</div>
		<script type="text/javascript">
			$(".filter_opener").click(function(){
				$(this).toggleClass("opened");
				$(".visible_mobile_filter").slideToggle(333);
			});
		</script>
		<div class="sort_header view_<?=$display?>">
			<!--noindex-->
				<div class="sort_filter">
					<?
					$arAvailableSort = array();
					$arSorts = $arParams["SORT_BUTTONS"];
					if(in_array("POPULARITY", $arSorts)){
						$arAvailableSort["SHOWS"] = array("SHOWS", "desc");
					}
					if(in_array("NAME", $arSorts)){
						$arAvailableSort["NAME"] = array("NAME", "asc");
					}
					if(in_array("PRICE", $arSorts)){
						$arSortPrices = $arParams["SORT_PRICES"];
						if($arSortPrices == "MINIMUM_PRICE" || $arSortPrices == "MAXIMUM_PRICE"){
							$arAvailableSort["PRICE"] = array("PROPERTY_".$arSortPrices, "desc");
						}
						else{
							if($arSortPrices == "REGION_PRICE")
							{
								global $arRegion;
								if($arRegion)
								{
									if(!$arRegion["PROPERTY_SORT_REGION_PRICE_VALUE"] || $arRegion["PROPERTY_SORT_REGION_PRICE_VALUE"] == "component")
									{
										$price = CCatalogGroup::GetList(array(), array("NAME" => $arParams["SORT_REGION_PRICE"]), false, false, array("ID", "NAME"))->GetNext();
										$arAvailableSort["PRICE"] = array("CATALOG_PRICE_".$price["ID"], "desc");
									}
									else
									{
										$arAvailableSort["PRICE"] = array("CATALOG_PRICE_".$arRegion["PROPERTY_SORT_REGION_PRICE_VALUE"], "desc"); 
									}
								}
								else
								{
									$price_name = ($arParams["SORT_REGION_PRICE"] ? $arParams["SORT_REGION_PRICE"] : "BASE");
									$price = CCatalogGroup::GetList(array(), array("NAME" => $price_name), false, false, array("ID", "NAME"))->GetNext();
									$arAvailableSort["PRICE"] = array("CATALOG_PRICE_".$price["ID"], "desc"); 
								}
							}
							else
							{
								$price = CCatalogGroup::GetList(array(), array("NAME" => $arParams["SORT_PRICES"]), false, false, array("ID", "NAME"))->GetNext();
								$arAvailableSort["PRICE"] = array("CATALOG_PRICE_".$price["ID"], "desc"); 
							}
						}
					}
					if(in_array("QUANTITY", $arSorts)){
						$arAvailableSort["CATALOG_AVAILABLE"] = array("QUANTITY", "desc");
					}
					$sort = "SHOWS";
					if((array_key_exists("sort", $_REQUEST) && array_key_exists(ToUpper($_REQUEST["sort"]), $arAvailableSort)) || (array_key_exists("sort", $_SESSION) && array_key_exists(ToUpper($_SESSION["sort"]), $arAvailableSort)) || $arParams["ELEMENT_SORT_FIELD"]){
						if($_REQUEST["sort"]){
							$sort = ToUpper($_REQUEST["sort"]);
							$_SESSION["sort"] = ToUpper($_REQUEST["sort"]);
						}
						elseif($_SESSION["sort"]){
							$sort = ToUpper($_SESSION["sort"]);
						}
						else{
							$sort = ToUpper($arParams["ELEMENT_SORT_FIELD"]);
						}
					}

					$sort_order=$arAvailableSort[$sort][1];
					if((array_key_exists("order", $_REQUEST) && in_array(ToLower($_REQUEST["order"]), Array("asc", "desc"))) || (array_key_exists("order", $_REQUEST) && in_array(ToLower($_REQUEST["order"]), Array("asc", "desc")) ) || $arParams["ELEMENT_SORT_ORDER"]){
						if($_REQUEST["order"]){
							$sort_order = $_REQUEST["order"];
							$_SESSION["order"] = $_REQUEST["order"];
						}
						elseif($_SESSION["order"]){
							$sort_order = $_SESSION["order"];
						}
						else{
							$sort_order = ToLower($arParams["ELEMENT_SORT_ORDER"]);
						}
					}
					?>
					<?foreach($arAvailableSort as $key => $val):?>
						<?$newSort = $sort_order == 'desc' ? 'asc' : 'desc';?>
						<a rel="nofollow" href="<?=$APPLICATION->GetCurPageParam('sort='.$key.'&order='.$newSort, 	array('sort', 'order'))?>" class="sort_btn <?=($sort == $key ? 'current' : '')?> <?=$sort_order?> <?=$key?>" rel="nofollow">
							<i class="icon" title="<?=GetMessage('SECT_SORT_'.$key)?>"></i><span><?=GetMessage('SECT_SORT_'.$key)?></span><i class="arr icons_fa"></i>
						</a>
					<?endforeach;?>
					<?
					if($sort == "PRICE"){
						$sort = $arAvailableSort["PRICE"][0];
					}
					if($sort == "CATALOG_AVAILABLE"){
						$sort = "CATALOG_QUANTITY";
					}
					?>
				</div>
				<div class="sort_display">
					<?foreach($arDisplays as $displayType):?>
						<a rel="nofollow" href="<?=$APPLICATION->GetCurPageParam('display='.$displayType, 	array('display'))?>" class="sort_btn <?=$displayType?> <?=($display == $displayType ? 'current' : '')?>"><i title="<?=GetMessage("SECT_DISPLAY_".strtoupper($displayType))?>"></i></a>
					<?endforeach;?>
				</div>
				<div class="clearfix"></div>
			<!--/noindex-->
		</div>
		<div class="ajax_load <?=$display;?>">
		<div class="catalog <?=$display;?> search">
		<?if($isAjax=="Y" && $isAjaxFilter != "Y"):?>
					<?$APPLICATION->RestartBuffer();?>
				<?endif;?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section",
				$template,
				array(
					"USE_REGION" => ($arRegion ? "Y" : "N"),
					"STORES" => $arParams['STORES'],
					"TYPE_SKU" => $arTheme["TYPE_SKU"]["VALUE"],
					"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
					"IBLOCK_ID" => $arParams["IBLOCK_ID"],
					"ELEMENT_SORT_FIELD" => $sort,
					"ELEMENT_SORT_ORDER" => $sort_order,
					"PAGE_ELEMENT_COUNT" => $arParams["PAGE_ELEMENT_COUNT"],
					"LINE_ELEMENT_COUNT" => $arParams["LINE_ELEMENT_COUNT"],
					"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
					"PROPERTY_CODE" => $arParams["PROPERTY_CODE"],

					"SHOW_ARTICLE_SKU" => $arParams["SHOW_ARTICLE_SKU"],
					"SHOW_MEASURE_WITH_RATIO" => $arParams["SHOW_MEASURE_WITH_RATIO"],

					"OFFERS_CART_PROPERTIES" => $arParams["OFFERS_CART_PROPERTIES"],
					"OFFERS_FIELD_CODE" => $arParams["OFFERS_FIELD_CODE"],
					"OFFERS_PROPERTY_CODE" => $arParams["OFFERS_PROPERTY_CODE"],
					"OFFERS_SORT_FIELD" => $arParams["OFFERS_SORT_FIELD"],
					"OFFERS_SORT_ORDER" => $arParams["OFFERS_SORT_ORDER"],
					"OFFERS_LIMIT" => $arParams["OFFERS_LIMIT"],
					"OFFERS_SORT_FIELD2" => $arParams["OFFERS_SORT_FIELD2"],
					"OFFERS_SORT_ORDER2" => $arParams["OFFERS_SORT_ORDER2"],
					'OFFER_TREE_PROPS' => $arParams['OFFER_TREE_PROPS'],
					"SHOW_COUNTER_LIST" => $arParams["SHOW_COUNTER_LIST"],

					"SECTION_URL" => $arParams["SECTION_URL"],
					"DETAIL_URL" => $arParams["DETAIL_URL"],
					"BASKET_URL" => $arParams["BASKET_URL"],
					"ACTION_VARIABLE" => $arParams["ACTION_VARIABLE"],
					"PRODUCT_ID_VARIABLE" => $arParams["PRODUCT_ID_VARIABLE"],
					"PRODUCT_QUANTITY_VARIABLE" => $arParams["PRODUCT_QUANTITY_VARIABLE"],
					"PRODUCT_PROPS_VARIABLE" => $arParams["PRODUCT_PROPS_VARIABLE"],
					"SECTION_ID_VARIABLE" => $arParams["SECTION_ID_VARIABLE"],
					"CACHE_TYPE" => $arParams["CACHE_TYPE"],
					"CACHE_TIME" => $arParams["CACHE_TIME"],
					"DISPLAY_COMPARE" => $arParams["USE_COMPARE"],
					"PRICE_CODE" => $arParams["PRICE_CODE"],
					"USE_PRICE_COUNT" => $arParams["USE_PRICE_COUNT"],
					"SHOW_PRICE_COUNT" => $arParams["SHOW_PRICE_COUNT"],
					"PRICE_VAT_INCLUDE" => $arParams["PRICE_VAT_INCLUDE"],
					"PRODUCT_PROPERTIES" => $arParams["PRODUCT_PROPERTIES"],
					"USE_PRODUCT_QUANTITY" => $arParams["USE_PRODUCT_QUANTITY"],
					"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
					"CURRENCY_ID" => $arParams["CURRENCY_ID"],
					"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
					"SHOW_DISCOUNT_PERCENT_NUMBER" => $arParams["SHOW_DISCOUNT_PERCENT_NUMBER"],
					"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
					"PAGER_TITLE" => $arParams["PAGER_TITLE"],
					"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
					"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
					"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
					"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
					"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
					"FILTER_NAME" => "searchFilter",
					"SECTION_ID" => ($setionIDRequest ? $setionIDRequest : ""),
					"SECTION_CODE" => "",
					"SECTION_USER_FIELDS" => array(),
					"INCLUDE_SUBSECTIONS" => "Y",
					"SHOW_ALL_WO_SECTION" => "Y",
					"META_KEYWORDS" => "",
					"META_DESCRIPTION" => "",
					"BROWSER_TITLE" => "",
					"ADD_SECTIONS_CHAIN" => "N",
					"SET_TITLE" => "N",
					"SET_STATUS_404" => "N",
					"CACHE_FILTER" => "Y",
					"AJAX_REQUEST" => (($isAjax == "Y" && $isAjaxFilter != "Y") ? "Y" : "N"),
					"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
					"CONVERT_CURRENCY" => $arParams["CONVERT_CURRENCY"],
					"CURRENCY_ID" => $arParams["CURRENCY_ID"],
					"DISPLAY_SHOW_NUMBER" => "N",
					"DEFAULT_COUNT" => $arParams["DEFAULT_COUNT"],
					"SHOW_DISCOUNT_PERCENT" => $arParams["SHOW_DISCOUNT_PERCENT"],
					"SHOW_OLD_PRICE" => $arParams["SHOW_OLD_PRICE"],
					"SALE_STIKER" => $arParams["SALE_STIKER"],
					"STIKERS_PROP" => $arParams["STIKERS_PROP"],
					"SHOW_RATING" => $arParams["SHOW_RATING"],
					"SHOW_DISCOUNT_TIME" => $arParams["SHOW_DISCOUNT_TIME"],
					"ADD_PROPERTIES_TO_BASKET" => (isset($arParams["ADD_PROPERTIES_TO_BASKET"]) ? $arParams["ADD_PROPERTIES_TO_BASKET"] : ''),
					"PARTIAL_PRODUCT_PROPERTIES" => (isset($arParams["PARTIAL_PRODUCT_PROPERTIES"]) ? $arParams["PARTIAL_PRODUCT_PROPERTIES"] : ''),
					"USE_MAIN_ELEMENT_SECTION" => $arParams["USE_MAIN_ELEMENT_SECTION"],
					"OFFER_HIDE_NAME_PROPS" => $arParams["OFFER_HIDE_NAME_PROPS"],
					"SHOW_MEASURE" => $arParams["SHOW_MEASURE"],
					"HIDE_NOT_AVAILABLE_OFFERS" => $arParams["HIDE_NOT_AVAILABLE_OFFERS"],
				),
				$arResult["THEME_COMPONENT"]
			);?>
			<?if($isAjax=="Y" && $isAjaxFilter != "Y"):?>
							<?die();?>
						<?endif;?>
		</div>
		</div>
	</div>
	<?if($isAjax == "Y"):?>
			<?die();?>
		<?endif;?>
<?}else{
	if($_GET["q"] == '')
		echo GetMessage("CT_BCSE_EMPTY_QUERY")."<br /><br />";
	else
		echo GetMessage("CT_BCSE_NOT_FOUND")."<br /><br />";
}
?>
<?if($bShowFilter):?>
	</div>
</div>
<div class="left_block filter_visible">
	<?$APPLICATION->ShowViewContent('filter_section');?>

	<?$APPLICATION->ShowViewContent('filter_content');?>

	<?$APPLICATION->ShowViewContent('under_sidebar_content');?>

	<?CNext::get_banners_position('SIDE', 'Y');?>
	<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
		array(
			"COMPONENT_TEMPLATE" => ".default",
			"PATH" => SITE_DIR."include/left_block/comp_subscribe.php",
			"AREA_FILE_SHOW" => "file",
			"AREA_FILE_SUFFIX" => "",
			"AREA_FILE_RECURSIVE" => "Y",
			"EDIT_TEMPLATE" => "include_area.php"
		),
		false
	);?>
</div>
<?endif;?>