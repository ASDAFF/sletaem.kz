<?
namespace AdwMinified;

class EventListener {
    public static function OnBuildGlobalMenu(&$adminMenu, &$moduleMenu) {
        \AdwMinified\Tools::addMenu($adminMenu, $moduleMenu);
    }
    public static function OnAfterIBlockElementAdd(&$arFields) {
        \AdwMinified\Minified::minifiImageOnElementEvent($arFields);
    }
    public static function OnAfterIBlockElementUpdate(&$arFields) {
        \AdwMinified\Minified::minifiImageOnElementEvent($arFields);
    }
    public static function OnAfterIBlockSectionAdd(&$arFields) {
        \AdwMinified\Minified::minifiImageOnSectionEvent($arFields);
    }
    public static function OnAfterIBlockSectionUpdate(&$arFields) {
        \AdwMinified\Minified::minifiImageOnSectionEvent($arFields);
    }
    public static function OnFileSave(&$arFile, $strFileName, $strSavePath, $bForceMD5, $bSkipExt) {
        \AdwMinified\Minified::minifiImageOnFileEvent($arFile, $strFileName, $strSavePath, $bForceMD5, $bSkipExt);
    }
    public static function OnAfterResizeImage($arFile, $arParams, &$callbackData, &$cacheImageFile, &$cacheImageFileTmp, &$arImageSize) {
        \AdwMinified\Minified::minifiImageOnResizeEvent($arFile, $arParams, $callbackData, $cacheImageFile, $cacheImageFileTmp, $arImageSize);
    }
    public static function OnEndBufferContent(&$content) {
        \AdwMinified\Minified::inlineCss($content);
        \AdwMinified\Minified::minifiCss($content);
        \AdwMinified\Minified::minifiJs($content);
        \AdwMinified\Minified::minifiHtml($content);
    }
}