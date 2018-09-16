<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<div class="subscribe_wrap">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:subscribe.form",
	"main",
	Array(
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"ALLOW_ANONYMOUS" => "Y",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "3600000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "main",
		"LK" => "Y",
		"PAGE" => SITE_DIR."personal/subscribe/",
		"SET_TITLE" => "N",
		"SHOW_AUTH_LINKS" => "N",
		"SHOW_HIDDEN" => "N",
		"URL_SUBSCRIBE" => SITE_DIR."personal/subscribe/",
		"USE_PERSONALIZATION" => "Y"
	)
);?>
</div>
<br>