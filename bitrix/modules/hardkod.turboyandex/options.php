<?php

defined('ADMIN_MODULE_NAME') or define('ADMIN_MODULE_NAME', 'hardkod.turboyandex');

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/'.ADMIN_MODULE_NAME.'/lib/export.php');

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\Localization\Loc;

CJSCore::Init(array("jquery"));
$APPLICATION->SetAdditionalCSS('/bitrix/css/'.ADMIN_MODULE_NAME.'/style.css');
$APPLICATION->AddHeadScript('/bitrix/js/'.ADMIN_MODULE_NAME.'/scripts.js');

if (!$USER->isAdmin()) {
    $APPLICATION->authForm('Nope');
}

$app = Application::getInstance();
$context = $app->getContext();
$request = $context->getRequest();

Loc::loadMessages($context->getServer()->getDocumentRoot()."/bitrix/modules/main/options.php");
Loc::loadMessages(__FILE__);

$tabControl = new CAdminTabControl("tabControl", array(
    array(
        "DIV" => "edit1",
        "TAB" => Loc::getMessage("HARDKOD_TURBOYANDEX_EXPORT_TAB"),
        "TITLE" => Loc::getMessage("HARDKOD_TURBOYANDEX_EXPORT_TAB_TITLE"),
    ),
    array(
        "DIV" => "edit2",
        "TAB" => Loc::getMessage("MAIN_TAB_SET"),
        "TITLE" => Loc::getMessage("MAIN_TAB_TITLE_SET"),
    ),
));

if ((!empty($save) || !empty($restore) || !empty($request->getPost('create'))) && $request->isPost() && check_bitrix_sessid()) {
    if (!empty($restore)) {
        Option::delete(ADMIN_MODULE_NAME);
        CAdminMessage::showMessage(array(
            "MESSAGE" => Loc::getMessage("REFERENCES_OPTIONS_RESTORED"),
            "TYPE" => "OK",
        ));
    }
    else {
        Option::set(
            ADMIN_MODULE_NAME,
            "infoblocks",
            ((!empty($request->getPost('infoblocks'))) ? serialize($request->getPost('infoblocks')) : "''")
        );
        Option::set(
            ADMIN_MODULE_NAME,
            "static_pages",
            (($request->getPost('static_pages')) ? 1 : 0)
        );
        Option::set(
            ADMIN_MODULE_NAME,
            "rss_file_name",
            $request->getPost('rss_file_name')
        );
        Option::set(
            ADMIN_MODULE_NAME,
            "site_address",
            $request->getPost('site_address')
        );
        Option::set(
            ADMIN_MODULE_NAME,
            "channel_name",
            $request->getPost('channel_name')
        );
        Option::set(
            ADMIN_MODULE_NAME,
            "channel_description",
            $request->getPost('channel_description')
        );
        
        CAdminMessage::showMessage(array(
            "MESSAGE" => Loc::getMessage("REFERENCES_OPTIONS_SAVED"),
            "TYPE" => "OK",
        ));
        if($request->getPost('create')) {
            $export = new RssExport();
            if($export->export()) {
                CAdminMessage::showMessage(array(
                    "MESSAGE" => Loc::getMessage("HARDKOD_TURBOYANDEX_EXPORT_COMPLETE"),
                    "TYPE" => "OK",
                ));
            } else {
                CAdminMessage::showMessage(array(
                    "MESSAGE" => Loc::getMessage("HARDKOD_TURBOYANDEX_EXPORT_ERROR"),
                    "TYPE" => "ERROR",
                ));
            }
        }
    }
}

$file_path = $_SERVER['DOCUMENT_ROOT'] . "/" . Option::get(ADMIN_MODULE_NAME, "rss_file_name");
$file_name = (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . "/" . SITE_DIR . Option::get(ADMIN_MODULE_NAME, "rss_file_name");

// Получаем выбранные инфоблоки из настроек или обрабатываем дефолтное значение
$infoblocks_value = Option::get(ADMIN_MODULE_NAME, "infoblocks");
if($infoblocks_value == "all") {
    $all_infoblocks = 1;
} else {
    $all_infoblocks = 0;
    $infoblocks = unserialize($infoblocks_value);
}

$tabControl->begin();
?>
<form method="post" class="hardkod-turboyandex" action="<?=sprintf('%s?mid=%s&lang=%s', $request->getRequestedPage(), urlencode($mid), LANGUAGE_ID)?>">
    <?php
    echo bitrix_sessid_post();
    
    // Закладка Выгрузка
    $tabControl->beginNextTab();
    ?>
    <tr>
        <td colspan="2">
            <? if(file_exists($file_path)) :?>
            <?=Loc::getMessage("HARDKOD_TURBOYANDEX_RSS_LINK");?>: <a target="_blank" href="<?=$file_name;?>"><?=$file_name;?></a><br>
            <?=Loc::getMessage("HARDKOD_TURBOYANDEX_LAST_UPDATE");?>: <?= date ("H:i:s d.m.Y", filemtime($file_path)); ?>
            <? else : ?>
            <?=Loc::getMessage("HARDKOD_TURBOYANDEX_NO_RSS");?>
            <? endif; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <br>
            <input type="submit"
                name="create"
                value="<?=Loc::getMessage("HARDKOD_TURBOYANDEX_CREATE") ?>"
                title="<?=Loc::getMessage("HARDKOD_TURBOYANDEX_CREATE_TITLE") ?>"
                class="adm-btn-save"
            />
        </td>
    </tr>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="2">
            <?=Loc::getMessage("HARDKOD_TURBOYANDEX_CREATORS_MESSAGE") ?>: <a href="mailto:<?=Loc::getMessage("HARDKOD_TURBOYANDEX_CREATORS_EMAIL") ?>"><?=Loc::getMessage("HARDKOD_TURBOYANDEX_CREATORS_EMAIL") ?></a>
        </td>
    </tr>
    <? // Закладка Настройки ?>
    <? $tabControl->beginNextTab(); ?>
    <tr class="infoblock-tr">
        <td width="40%" valign="top">
            <b><?=Loc::getMessage("HARDKOD_TURBOYANDEX_INFOBLOCK_LABEL") ?></b>
        </td>
        <td width="60%">
    <? 
        // Проходим по всем типам инфоблокам и собираем инфоблоки, строя дерево
        if(CModule::IncludeModule("iblock")) :
            $db_iblock_type = CIBlockType::GetList(Array("SORT"=>"ASC"));
            while($ar_iblock_type = $db_iblock_type->Fetch()) :
                if($arIBType = CIBlockType::GetByIDLang($ar_iblock_type["ID"], LANG)) :
    ?>
            <div>
                <input type="checkbox"
                    class="infoblock_types"
                    id="infoblock_types_<?=$ar_iblock_type['ID'];?>"
                    data-type="infoblock_type"
                    data-id="<?=$ar_iblock_type['ID'];?>"
                    name="infoblock_types[<?=$ar_iblock_type['ID'];?>]"
                    value="1"
                    />
                <label for="infoblock_types_<?=$ar_iblock_type['ID'];?>"><?= htmlspecialcharsEx($arIBType["NAME"]); ?></label>
            </div>
            <?
                $res = CIBlock::GetList(
                    Array("SORT"=>"ASC"),
                    Array("TYPE"=>$ar_iblock_type["ID"]),
                    false
                ); 
                while($ar_res = $res->Fetch()) :
            ?>
    
                <div class="infoblock-input">
                    <input type="checkbox"
                        class="infoblocks"
                        id="infoblocks_<?=$ar_res['ID'];?>"
                        data-type="infoblock"
                        data-infoblock_type_id="<?=$ar_iblock_type['ID'];?>"
                        data-id="<?=$ar_res['ID'];?>"
                        name="infoblocks[<?=$ar_res['ID'];?>]"
                        value="1"
                        <?=(($infoblocks[$ar_res['ID']] || $all_infoblocks) ? " checked='checked'" : "");?>
                    />
                    <label for="infoblocks_<?=$ar_res['ID'];?>"><?=$ar_res['NAME'];?></label> <br>
                </div>
    <?
                endwhile;
                endif;
            endwhile; 
        endif;
    ?>
        </td>
    </tr>
    
    <tr>
        <td width="40%">
            <label for="static_pages"><b><?=Loc::getMessage("HARDKOD_TURBOYANDEX_STATIC_PAGES_FIELD_LABEL") ?></b></label>
        </td>
        <td width="60%">
            <input type="checkbox"
                id="static_pages"
                name="static_pages"
                value="1"
                <?=((Option::get(ADMIN_MODULE_NAME, "static_pages")) ? " checked='checked'" : "");?>
            />
        </td>
    </tr>
    
    <tr>
        <td width="40%"><label for="rss_file_name"><b><?=Loc::getMessage("HARDKOD_TURBOYANDEX_SAVE_TO_FILE") ?>: </b></label></td>
        <td width="60%">
            <b><?=(stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://');?><?=$_SERVER['HTTP_HOST'];?>/<?=SITE_DIR;?></b>
            <input type="text" id="rss_file_name" name="rss_file_name" value="<?=Option::get(ADMIN_MODULE_NAME, "rss_file_name");?>" size="50">
        </td>
    </tr>
	
	<tr>
        <td width="40%" class="adm-detail-content-cell-l">
            <label for="site_address"><b><?=Loc::getMessage("HARDKOD_TURBOYANDEX_SITE_URL") ?>: </b></label>
        </td>
        <td width="60%">
            <input type="text" id="site_address" name="site_address" value="<?=(Option::get(ADMIN_MODULE_NAME, "site_address") ? Option::get(ADMIN_MODULE_NAME, "site_address") : (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . "/");?>" size="50">
        </td>
    </tr>
    
    <tr>
        <td width="40%"><label for="channel_name"><b><?=Loc::getMessage("HARDKOD_TURBOYANDEX_CHANNEL_NAME") ?>: </b></label></td>
        <td width="60%">
            <input type="text" id="channel_name" name="channel_name" value="<?=Option::get(ADMIN_MODULE_NAME, "channel_name");?>" size="50">
        </td>
    </tr>
    
    <tr>
        <td width="40%"><label for="channel_description"><b><?=Loc::getMessage("HARDKOD_TURBOYANDEX_CHANNEL_DESCRIPTION") ?>: </b></label></td>
        <td width="60%">
            <input type="text" id="channel_description" name="channel_description" value="<?=Option::get(ADMIN_MODULE_NAME, "channel_description");?>" size="50">
        </td>
    </tr>
 
    <? $tabControl->buttons(); ?>
    <input type="submit"
        name="save"
        value="<?=Loc::getMessage("MAIN_SAVE") ?>"
        title="<?=Loc::getMessage("MAIN_OPT_SAVE_TITLE") ?>"
        class="adm-btn-save"
    />
    <input type="submit"
        name="restore"
        title="<?=Loc::getMessage("MAIN_HINT_RESTORE_DEFAULTS") ?>"
        onclick="return confirm('<?= AddSlashes(GetMessage("MAIN_HINT_RESTORE_DEFAULTS_WARNING")) ?>')"
        value="<?=Loc::getMessage("MAIN_RESTORE_DEFAULTS") ?>"
    />
    <? $tabControl->end(); ?>
</form>