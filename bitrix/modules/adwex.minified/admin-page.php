<?
require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_admin_before.php");
?>
<?
use \Bitrix\Main\Localization\Loc as Loc,
    \Bitrix\Main\Config\Option as Option,
    \Bitrix\Main\Loader,
    \Bitrix\Main\Page\Asset;

Loader::IncludeModule('adwex.minified');
Loc::loadMessages(__FILE__);
CJSCore::Init(array("jquery"));

$request = Bitrix\Main\Application::getInstance()->getContext()->getRequest();

$action = $request->get('action');
$add_path = ($request->get('url_data_file')) ? $request->get('url_data_file') : '/';

// $OptiImg = new \Alfa1c\Optiimg\OptiImg();

//$APPLICATION->AddHeadScript('/bitrix/js/alfa1c.optiimg/scripts.js');


$POST_RIGHT = $APPLICATION->GetGroupRight('adwex.minified');

if ($POST_RIGHT == "D")
    $APPLICATION->AuthForm(Loc::getMessage("ACCESS_DENIED"));

if(!isset($indexLimit)) {
    $indexLimit = 1000;
} else {
    $indexLimit = intval($indexLimit);
}

if(!isset($optimizeLimit)) {
    $optimizeLimit = 5;
} else {
    $optimizeLimit = intval($optimizeLimit);
}

if ($request->isPost() && $action == 'optimize') {
    require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_js.php");

    echo \AdwMinified\Minified::findImages($request->get('limit'), $request->get('offset'), $add_path);

    require($_SERVER['DOCUMENT_ROOT'] . BX_ROOT . "/modules/main/include/epilog_admin_js.php");
}

if ($request->isPost() && $action == 'getcount') {
    require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_js.php");

    echo \AdwMinified\Minified::getImagesCount($add_path, false, $dirignore);

    require($_SERVER['DOCUMENT_ROOT'] . BX_ROOT . "/modules/main/include/epilog_admin_js.php");
}

if ($request->isPost() && $action == 'save_position') {
    require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_js.php");

    echo \AdwMinified\Minified::savePosition($request->get('directory'), $request->get('position'), 0);

    require($_SERVER['DOCUMENT_ROOT'] . BX_ROOT . "/modules/main/include/epilog_admin_js.php");
}

if ($request->isPost() && $action == 'reset_position') {
    require_once($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_js.php");

    echo \AdwMinified\Minified::savePosition('', 0, 0);

    require($_SERVER['DOCUMENT_ROOT'] . BX_ROOT . "/modules/main/include/epilog_admin_js.php");
}
?>

<?
$APPLICATION->SetTitle(Loc::getMessage("ADWMINI_MODULE_NAME"));
require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include/prolog_admin_after.php"); // prolog 2
?>

<div class="adwex-optiimg">
    <?
    $aTabs = array(
        array(
            "DIV" => "edit1",
            "TAB" => Loc::getMessage("ADWMINI_MODULE_NAME"),
            "ICON" => "main_user_edit",
            "TITLE" => Loc::getMessage("ADWMINI_MODULE_TITLE"),
        ),
    );
    $tabControl = new CAdminTabControl("tabControl", $aTabs, true, true);
    $tabControl->Begin();
    $tabControl->BeginNextTab();
    $saved_position = \AdwMinified\Minified::getPosition('', 0 , 0);
    $directory = ($saved_position['DIRECTORY']) ? $saved_position['DIRECTORY'] : '/';
    $saved_position = ($saved_position['POSITION'] > 0) ? $saved_position['POSITION'] : 0;
    $save_pos_count = (Option::get("optiimg", "save_pos_count")) ? Option::get("optiimg", "save_pos_count") : '50';
    ?>
    <tr>
        <td>
            <div id="optiimg_compress_result_div">

            </div>
        </td>
    </tr>
    <tr class="heading">
        <td colspan="2">
            <?=Loc::getMessage("ADWMINI_OPTIMIZE_BLOCK_TITLE");?>
        </td>
    </tr>
    <tr>
        <td><?echo Loc::getMessage("ADWMINI_OPTIMIZE_LIMIT")?></td>
        <td>

            <input type="text" id="optimizeLimit" name="optimizeLimit" size="5" value="<?echo intval($optimizeLimit)?>">
            <input type="hidden" id="OPTIMIZE_OFFSET" name="OPTIMIZE_OFFSET" size="5" value="0">
        </td>
    </tr>
    <tr>
        <td><?echo Loc::getMessage("ADWMINI_SELECT_FOLDER")?></td>
        <td>
            <form method="POST" action="<?echo $APPLICATION->GetCurPage()?>?lang=<?echo htmlspecialcharsbx(LANG)?>" name="form1" id="form1">
                <input type="text" id="url_data_file" name="url_data_file" size="30" value="<?=$directory;?>">
                <input type="button" value="<?echo Loc::getMessage("ADWMINI_URL_DATA_FILE_OPEN")?>" OnClick="BtnClick()">
                <?
                CAdminFileDialog::ShowScript
                (
                    Array(
                        "event" => "BtnClick",
                        "arResultDest" => array("FORM_NAME" => "form1", "FORM_ELEMENT_NAME" => "url_data_file"),
                        "arPath" => array("SITE" => SITE_ID, "PATH" =>"/"),
                        "select" => 'D',// F - file only, D - folder only
                        "operation" => 'O',// O - open, S - save
                        "showUploadTab" => true,
                        "showAddToMenuTab" => false,
                        "fileFilter" => 'image',
                        "allowAllFiles" => true,
                        "SaveConfig" => true,
                    )
                );
                ?>
            </form>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div class="message-log-wrap">
                <div class="message-log">
                    <span class="message-log-title traffic-title"><?echo Loc::getMessage("ADWMINI_LOG_TITLE")?></span>
                    <ul class="file-list">
                    </ul>
                </div>
                <div class="controls">
                    <label for="filter_errors"><input type="checkbox" id="filter_errors" value=""/> <?echo Loc::getMessage("ADWMINI_LOG_FILTER_ERRORS")?></label>
                    <input type="button" class="clear-log" OnClick="clearLog();" value="<?echo Loc::getMessage("ADWMINI_LOG_CLEAR")?>">
                </div>
            </div>
        </td>
    </tr>
    <?$tabControl->Buttons();?>
    <input type="button" id="start_button" value="<?=($saved_position > 0) ? Loc::getMessage("ADWMINI_CONT_FILE_OPTIMIZE") : Loc::getMessage("ADWMINI_FILE_OPTIMIZE");?>"  class="adm-btn-save" OnClick="StartOptimize();">
    <input type="button" id="stop_button" value="<?echo Loc::getMessage("ADWMINI_STOP_FILE_OPTIMIZE")?>" OnClick="EndOptimize();"  disabled="true">
    <?if($saved_position > 0):?>
        <input type="button" id="reset_button" value="<?echo Loc::getMessage("ADWMINI_RESET_FILE_OPTIMIZE")?>" OnClick="ResetPosition ();">
    <?endif;?>
    <?$tabControl->End();?>
</div>

<script>
    var running = false;
    var offset = 0;

    function getCount(){
        files_ready = 0;
        var queryString = 'action=getcount'
                + '&url_data_file='+jsUtils.urlencode(document.getElementById('url_data_file').value)
            ;
        BX.ajax.post(
            'adwex_minify_image.php?'+queryString,
            false,
            function(result){
                var tmp_count = JSON.parse(result);
                f_count = tmp_count.count;
                if(f_count > 0){
                    Optimize(<?=$saved_position;?>, <?=$saved_position;?>);
                }else{
                    document.getElementById("stop_button").value="<?echo Loc::getMessage("ADWMINI_STOP_FILE_OPTIMIZE")?>";
                    document.getElementById('stop_button').disabled = true;
                    running = document.getElementById('start_button').disabled = false;
                    document.getElementById('optiimg_compress_result_div').innerHTML = '<div class="adm-info-message-wrap adm-info-message-red"><div class="adm-info-message"><div class="adm-info-message-title"><?echo Loc::getMessage("ADWMINI_OPTIMIZE_ERROR")?> '+ tmp_count.error['response_ru'] +'</div><div class="adm-info-message-icon"></div></div></div>';
                    CloseWaitWindow();
                }
            }
        );
    }
    function Optimize(offset, saved_files_ready) {
        if(parseInt(saved_files_ready) > 0) {
            files_ready = saved_files_ready;
        }
        var limit = parseInt(document.getElementById('optimizeLimit').value);

        if(!limit) {
            limit = 5;
        }

        var url_data_file = jsUtils.urlencode(document.getElementById('url_data_file').value);

        var queryString =
                'action=optimize'
                + '&lang=<?=LANGUAGE_ID?>'
                + '&<?echo bitrix_sessid_get()?>'
                + '&limit=' + limit
                + '&offset=' + offset
                + '&url_data_file='+url_data_file
            ;

        if(running && f_count > 0) {
            ShowWaitWindow();
            BX.ajax.post(
                'adwex_minify_image.php?'+queryString,
                offset,
                function(result){

                    result = JSON.parse(result);
                    files_ready += parseInt(result.count);
                    if(parseInt(files_ready) < parseInt(f_count) && parseInt(result.count) != 0 && !result.stop){
                        offset += parseInt(limit);
                        document.getElementById('OPTIMIZE_OFFSET').value = offset;
                        document.getElementById('optiimg_compress_result_div').innerHTML = '<div class="adm-info-message-wrap adm-info-message-gray"><div class="adm-info-message"><div class="adm-info-message-title"></div><p><?echo Loc::getMessage("ADWMINI_FILE_COUNT")?> '+ files_ready +' <?echo Loc::getMessage("ADWMINI_OPTIMIZE_FROM")?> '+ f_count +'</p></div></div>';
                        result.errors.forEach(function(entry) {
                            $('.message-log-wrap ul').append('<li class="error"><span class="filename">' + entry.file + '</span><span class="filestatus">' + entry.response_ru + '</span></li>');
                        });
                        result.success.forEach(function(entry) {
                            $('.message-log-wrap ul').append('<li class="success"><span class="filename"> '+ entry +' </span><span class="filestatus"> <?echo Loc::getMessage("ADWMINI_LOG_SUCCESS")?> </span></li>');
                        });
                        if(files_ready%<?=$save_pos_count;?> == 0){
                            SavePosition(url_data_file, files_ready, 0);
                        }
                        //NOW WE HAVE PROPER COUNT OF OPTIMIZED FILES, WILL SEND ZERO TO PREVENT ISSUES WITH NUMBERS
                        Optimize(offset, 0);
                    } else if(result.stop) {
                        CloseWaitWindow();
                        running = document.getElementById('start_button').disabled = false;
                        result.errors.forEach(function(entry) {
                            document.getElementById('optiimg_compress_result_div').innerHTML = '<div class="adm-info-message-wrap adm-info-message-red"><div class="adm-info-message"><div class="adm-info-message-title"><?echo Loc::getMessage("ADWMINI_OPTIMIZE_ERROR")?> ' + entry.response_ru + '</div><div class="adm-info-message-icon"></div></div></div>';
                        });
                    } else {
                        CloseWaitWindow();
                        running = document.getElementById('start_button').disabled = false;
                        document.getElementById('optiimg_compress_result_div').innerHTML = '<div class="adm-info-message-wrap adm-info-message-green"><div class="adm-info-message"><div class="adm-info-message-title"></div><p><?echo Loc::getMessage("ADWMINI_FILE_COUNT")?> '+ files_ready +'</p><div class="adm-info-message-icon"></div></div></div>';
                        result.errors.forEach(function(entry) {
                            $('.message-log-wrap ul').append('<li class="error"><span class="filename">' + entry.file + '</span><span class="filestatus">' + entry.response_ru + '</span></li>');
                        });
                        result.success.forEach(function(entry) {
                            $('.message-log-wrap ul').append('<li class="success"><span class="filename"> '+ entry +' </span><span class="filestatus"> <?echo Loc::getMessage("ADWMINI_LOG_SUCCESS")?> </span></li>');
                        });
                    }
                }
            );
        }
        else{
            running = document.getElementById('start_button').disabled = false;
            document.getElementById('optiimg_compress_result_div').innerHTML = '<div class="adm-info-message-wrap adm-info-message-green"><div class="adm-info-message"><div class="adm-info-message-title"></div><p><?echo Loc::getMessage("ADWMINI_FILE_COUNT")?> '+ files_ready +'</p><div class="adm-info-message-icon"></div></div></div>';
        }
    }

    function SavePosition(directory, position) {
        var queryString =
            'action=save_position'
            +'&directory=' + directory
            +'&position=' + position;
        BX.ajax.post(
            'adwex_minify_image.php?'+queryString,
            false,
            function(result){
            }
        );
    }
    function ResetPosition(position) {
        var queryString =
            'action=reset_position';
        BX.ajax.post(
            'adwex_minify_image.php?'+queryString,
            false,
            function(result){
                if(result = 1){
                    location.reload();
                }
            }
        );
    }

    function StartOptimize() {
        document.getElementById("stop_button").value="<?echo Loc::getMessage("ADWMINI_STOP_FILE_OPTIMIZE")?>";
        running = document.getElementById('start_button').disabled = true;
        document.getElementById('stop_button').disabled = false;
        getCount();
    }
    function EndOptimize() {
        if(running){
            document.getElementById("stop_button").value="<?echo Loc::getMessage("ADWMINI_CONT_FILE_OPTIMIZE")?>";
            running = document.getElementById('start_button').disabled = false;
            CloseWaitWindow();
        }
        else{
            document.getElementById("stop_button").value="<?echo Loc::getMessage("ADWMINI_STOP_FILE_OPTIMIZE")?>";
            running = document.getElementById('start_button').disabled = true;
            var opt_offset = parseInt(document.getElementById('OPTIMIZE_OFFSET').value);
            Optimize(opt_offset);
            ShowWaitWindow();
        }

    }

    function clearLog() {
        $('.adwex-optiimg .message-log-wrap ul').empty();
    }

    $(document).on('click', '.adwex-optiimg .message-log-wrap .controls #filter_errors', function(){
        $('.adwex-optiimg .message-log-wrap .success').toggle();
    })
</script>
<style>
.message-log-title {
    font-weight: bold;
    font-size: 1rem;
}

.file-list {
    list-style: none;
    padding: 0;
}

.file-list li {
    width: 60%;
    padding: 0.4rem;
    border-radius:  0.2rem;
    border: 1px solid;
    text-shadow: 0 1px 0 rgba(255,255,255, 0.7);
}

.file-list li + li {
    margin-top: 0.5rem;
}

.filename {
    display: block;
    white-space: nowrap;
}

.file-list li.success {
    border-color: #20a236;
    color: #32520f;
}
.file-list li.error {
    border-color: #bd2323;
    color: #822f3b
}
</style>
<?require($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/epilog_admin.php");?>