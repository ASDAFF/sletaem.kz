<?
use \AdwMinified\Tools;

require ('include.php');
global $APPLICATION;
IncludeModuleLangFile(__FILE__);
$RIGHT = $APPLICATION->GetGroupRight(Tools::moduleID);

if($RIGHT >= "R"){
	$res = Tools::getModuleSiteTabList(true);
	$arTabs = $res["TABS"];

	$tabControl = new CAdminTabControl("tabControl", $arTabs);
	if($REQUEST_METHOD == "POST" && strlen($Update.$Apply.$RestoreDefaults) > 0 && $RIGHT >= "W" && check_bitrix_sessid()) {
		global $APPLICATION, $CACHE_MANAGER;
        COption::RemoveOption(Tools::moduleID, "sid");
		foreach($arTabs as $key => $arTab) {                
		  foreach($arTab["OPTIONS"] as $arOption) {
			 $arOption[0] = $arOption[0] . "_" . $arTab["SITE_ID"];
			 Tools::saveOptionRow(Tools::moduleID, $arOption);
            }
		  }

		$APPLICATION->RestartBuffer();
	}
	CJSCore::Init(array("jquery"));
	CAjax::Init();
    if(!count($arTabs)): ?>
        <div class="adm-info-message-wrap adm-info-message-red">
            <div class="adm-info-message">
                <div class="adm-info-message-title">
                    <?= GetMessage("NO_SITE_WAS_INSTALLED", array("#SESSION_ID#"=>bitrix_sessid_get())) ?>
                </div>
                <div class="adm-info-message-icon"></div>
            </div>
        </div>
        <? else: ?>
            <?$tabControl->Begin();?>
                <form method="post" action="<?=$APPLICATION->GetCurPage()?>?mid=<?=urlencode($mid)?>&amp;lang=<?=LANGUAGE_ID?>" class="adwex_options" ENCTYPE="multipart/form-data">
                    <?= bitrix_sessid_post(); ?>
                    <? foreach($arTabs as $key => $arTab){
                        $tabControl->BeginNextTab();
                        if($arTab["SITE_ID"]){
                            foreach($arTab["OPTIONS"] as $arOption){
                                $arOption[0] = $arOption[0]."_".$arTab["SITE_ID"];
                                Tools::drawOptionRow(Tools::moduleID, $arOption, $arTab["SITE_ID"]);
                            }
                        }
                    }
                    if($REQUEST_METHOD == "POST" && strlen($Update.$Apply.$RestoreDefaults) > 0 && check_bitrix_sessid()){
                        if(strlen($Update)>0 && strlen($_REQUEST["back_url_settings"]) > 0) {
                            LocalRedirect($_REQUEST["back_url_settings"]);
                        } else {
                            LocalRedirect($APPLICATION->GetCurPage()."?mid=".urlencode($mid)."&lang=".urlencode(LANGUAGE_ID)."&back_url_settings=".urlencode($_REQUEST["back_url_settings"])."&".$tabControl->ActiveTabParam());
                        }
                    }
                    $tabControl->Buttons(); ?>
                    <input <?if($RIGHT < "W") echo "disabled"?> type="submit" name="Apply" class="submit-btn" value="<?=GetMessage("MAIN_OPT_APPLY")?>" title="<?=GetMessage("MAIN_OPT_APPLY_TITLE")?>">
                    <?if(strlen($_REQUEST["back_url_settings"]) > 0): ?>
                        <input type="button" name="Cancel" value="<?=GetMessage(" MAIN_OPT_CANCEL ")?>" title="<?=GetMessage(" MAIN_OPT_CANCEL_TITLE ")?>" onclick="window.location='<?=htmlspecialcharsbx(CUtil::addslashes($_REQUEST[" back_url_settings "]))?>'">
                        <input type="hidden" name="back_url_settings" value="<?=htmlspecialcharsbx($_REQUEST[" back_url_settings "])?>">
                    <?endif;?>
                </form>
                <?$tabControl->End();?>
            <?endif;?>
<? } else { ?>
    <?= CAdminMessage::ShowMessage(GetMessage('NO_RIGHTS_FOR_VIEWING')); ?>
<? } ?>
