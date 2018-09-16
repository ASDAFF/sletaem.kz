<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");?>
<?
global $USER;

if($_GET["auth_service_error"]){
	LocalRedirect(SITE_DIR.'personal/');
}
if(!$USER->IsAuthorized()){?>
	<?if(isset($_REQUEST['backurl']) && $_REQUEST['backurl']) // fix ajax url
	{
		if($_REQUEST['backurl'] != $_SERVER['REQUEST_URI'])
		{
			$_SERVER['QUERY_STRING'] = '';
			$_SERVER['REQUEST_URI'] = $_REQUEST['backurl'];
			$APPLICATION->reinitPath();
		}
	}?>
	<a href="#" class="close jqmClose"><i></i></a>
	<div id="wrap_ajax_auth" class="form">
		<div class="form_head">
			<h2><?=\Bitrix\Main\Localization\Loc::getMessage('AUTHORIZE_TITLE');?></h2>
		</div>
		<?
		$APPLICATION->IncludeComponent(
			"bitrix:system.auth.form",
			"main",
			Array(
				"REGISTER_URL" => SITE_DIR."auth/registration/?register=yes",
				"PROFILE_URL" => SITE_DIR."auth/",
				"FORGOT_PASSWORD_URL" => SITE_DIR."auth/forgot-password/?forgot-password=yes",
				"AUTH_URL" => SITE_DIR."auth/",
				"SHOW_ERRORS" => "Y",
				"POPUP_AUTH" => "Y",
				"AJAX_MODE" => "Y",
				"BACKURL" => ((isset($_REQUEST['backurl']) && $_REQUEST['backurl']) ? $_REQUEST['backurl'] : "")
			)
		);?>
	</div>
<?}
elseif(strlen($_REQUEST['backurl'])){
	LocalRedirect($_REQUEST['backurl']);
}
else{
	if(strpos($_SERVER['HTTP_REFERER'], SITE_DIR.'personal/') === false && strpos($_SERVER['HTTP_REFERER'], SITE_DIR.'ajax/form.php') === false){
		$APPLICATION->ShowHead();
		?>
		<script>
			jsAjaxUtil.ShowLocalWaitWindow( 'id', 'wrap_ajax_auth', true );
			BX.reload(false)
		</script>
		<?
	}
	else{
		LocalRedirect(SITE_DIR.'personal/');
	}
}