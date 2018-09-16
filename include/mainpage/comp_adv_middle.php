<h2 style="text-align: center;"><b><span style="color: #003562;">Популярные страны</span></b></h2>
<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?global $isShowMiddleAdvBottomBanner;?>
<?if($isShowMiddleAdvBottomBanner):?>
	<?$APPLICATION->IncludeComponent(
	"aspro:com.banners.next",
	"adv_middle",
	Array(
		"BANNER_TYPE_THEME" => "SMALL",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "aspro_next_adv",
		"NEWS_COUNT" => "10",
		"PROPERTY_CODE" => array(0=>"URL",1=>"",),
		"SET_BANNER_TYPE_FROM_THEME" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"TYPE_BANNERS_IBLOCK_ID" => "1"
	)
);?>
<?endif;?>