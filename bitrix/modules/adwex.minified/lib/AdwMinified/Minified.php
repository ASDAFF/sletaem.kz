<?php
namespace AdwMinified;
use AdwMinified\Tools;
use AdwMinified\DirFilter;

class Minified {

    public static function inlineCss(&$content) {
        global $USER;
        if (\COption::GetOptionString(Tools::moduleID, 'INLINE_CSS', '', SITE_ID) == 'Y' && defined('SITE_ID')) {
            $regexp = '<link\s[^>]*href="(\/bitrix[^\" >]*)"([^\>]*)rel="stylesheet"([^\>]*)(\/>|>)';
            preg_match_all("/$regexp/m", $content, $matches, PREG_SET_ORDER);
            foreach($matches as $match) {
                $cut = explode('?', $match[1]);
                $obCache = new \CPHPCache();
                if( $obCache->InitCache(86400, $cut[0], Tools::moduleID) ) {
                    $cache = $obCache->GetVars();
                    $css = $cache['css'];
                } elseif( $obCache->StartDataCache()) {
                    $pathAr = explode('/', $match[1]);
                    unset($pathAr[count($pathAr) - 1]);
                    $path = implode('/', $pathAr);
                    $css = file_get_contents($_SERVER['DOCUMENT_ROOT'] . $cut[0]);
                    $newPath = $path . '/';
                    $css = preg_replace_callback(
                        '/url\s?\([\'"]?(?![\'"]?data:)([^\'")]*)(["\']?\))/m',
                        function($urls) use ($newPath) {
                            if (strpos($urls[1], '/') !== 0) {
                                return 'url("' . $newPath . $urls[1] . '")' ;
                            }
                            return 'url("' . $urls[1] . '")' ;
                        }, 
                        $css
                    );
                    $css = \PHPWee\Minify::css($css);
                    $obCache->EndDataCache(array('css' => $css));
                }
                $content = str_replace($match[0], '<style>' . $css . '</style>', $content);
            }
        }
    }
    
    public static function minifiCss(&$content) {
		global $APPLICATION;
        if (\COption::GetOptionString(Tools::moduleID, 'MINIFIED_CSS', '', SITE_ID) == 'Y' && defined('SITE_ID') 
            && \COption::GetOptionString(Tools::moduleID, 'INLINE_CSS', '', SITE_ID) !== 'Y') {
            $pattern = '/\/bitrix\/cache\/css\/.*css\?[0-9]+/';

            preg_match_all($pattern, $content, $links_cache, PREG_PATTERN_ORDER);

            $links_min = array();
            $links = array();

            foreach($links_cache[0] as $key) {
                $cut = explode('?', $key);
                $cut_min = explode('.css', $key);
                $shortLink =  $cut_min[0] . '.min.css';
                $links_min[] = $shortLink . $cut_min[1];
                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $shortLink) 
                    || filemtime($_SERVER['DOCUMENT_ROOT'] . $shortLink) < filemtime($_SERVER['DOCUMENT_ROOT'] . $cut[0])) {
                    $links[] = $cut[0];
                }
            }

            foreach($links as $value) {
                $sourcePath = $_SERVER['DOCUMENT_ROOT'] . $value;
                $link_parts = explode('.', $value);
                $extens = $link_parts[count($link_parts) - 1];
                unset($link_parts[count($link_parts) - 1]);
                $minifiedPath = $_SERVER['DOCUMENT_ROOT'] . implode('.', $link_parts) . '.min.' . $extens;
                
				$cssString = $APPLICATION->GetFileContent($sourcePath);
                if (\COption::GetOptionString(Tools::moduleID, 'MINIFY_CSS_TOOLS') == 'PHPWee') {
                    $miniCSS = \PHPWee\Minify::css($cssString);
                } else {
                    $minifier = new \MatthiasMullie\Minify\CSS();
                    $minifier->add($cssString);
                    $miniCSS = $minifier->minify();
                }
                
				if ($miniCSS !== '' && $miniCSS !== null) {
					file_put_contents($minifiedPath, $miniCSS);
				} else {
					copy($sourcePath, $minifiedPath);
				}
            }

            $content = str_replace($links_cache[0], $links_min, $content);
        }
    }
    
    public static function minifiJs(&$content) {
		global $APPLICATION;
        if (\COption::GetOptionString(Tools::moduleID, 'MINIFIED_JS', '', SITE_ID) == 'Y' && defined('SITE_ID')) {
            $pattern = '/\/bitrix\/cache\/js\/.*js\?[0-9]+/';

            preg_match_all($pattern, $content, $links_cache, PREG_PATTERN_ORDER);

            $links_min = array();
            $links = array();

            foreach($links_cache[0] as $key) {
                $cut = explode('?', $key);
                $cut_min = explode('.js', $key);
                $shortLink =  $cut_min[0] . '.min.js';
                $links_min[] = $shortLink . $cut_min[1];
                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $shortLink) 
                    || filemtime($_SERVER['DOCUMENT_ROOT'] . $shortLink) < filemtime($_SERVER['DOCUMENT_ROOT'] . $cut[0])) {
                    $links[] = $cut[0];
                }
            }

            foreach($links as $value) {
                $sourcePath = $_SERVER['DOCUMENT_ROOT'] . $value;
                $link_parts = explode('.', $value);
                $extens = $link_parts[count($link_parts) - 1];
                unset($link_parts[count($link_parts) - 1]);
                $minifiedPath = $_SERVER['DOCUMENT_ROOT'] . implode('.', $link_parts) . '.min.' . $extens;
                
				$jsString = $APPLICATION->GetFileContent($sourcePath);
                if (\COption::GetOptionString(Tools::moduleID, 'MINIFY_JS_TOOLS') == 'MatthiasMullie') {
                    $minifier = new \MatthiasMullie\Minify\JS();
                    $minifier->add($jsString);
                    $miniJs = $minifier->minify();
                } elseif (\COption::GetOptionString(Tools::moduleID, 'MINIFY_JS_TOOLS') == 'PHPWee') {
                    $miniJs = \PHPWee\Minify::js($jsString);
                } elseif (\COption::GetOptionString(Tools::moduleID, 'MINIFY_JS_TOOLS') == 'JSMin') {
                    $miniJs = \JSMin\JSMin::minify($jsString);
                } else {
                    $minifier = new \Patchwork\JSqueeze();
                    $miniJs = $minifier->squeeze(
                        $jsString,
                        true,
                        false,
                        false
                    );
                }

				if ($miniJs !== '' && $miniJs !== null) {
					file_put_contents($minifiedPath, $miniJs);
				} else {
					copy($sourcePath, $minifiedPath);
				}
            }

            $content = str_replace($links_cache[0], $links_min, $content);
        }
    }
    
    public static function minifiHtml(&$content) {
        $canMinify = true;
		// Is JSON?
		if (is_object(json_decode($content))) {
			$canMinify = false;
		} elseif (stripos($content, '<!DOCTYPE') === false ) { // Is not Html
			$canMinify = false;
		} 
        $context = \Bitrix\Main\Application::getInstance()->getContext();
        $request = $context->getRequest();
        if ($request->isAjaxRequest()) {
            $canMinify = false;
        }
		if ($canMinify && \COption::GetOptionString(Tools::moduleID, 'MINIFIED_HTML', '', SITE_ID) == 'Y' && defined('SITE_ID')) {
			$key = strlen($content);
			$html = $content;
			$obCache = new \CPHPCache();
            if( $obCache->InitCache(86400, $key, Tools::moduleID) ) {
                $cache = $obCache->GetVars();
                $html = $cache['html'];
            } elseif( $obCache->StartDataCache()) {
                if (\COption::GetOptionString(Tools::moduleID, 'MINIFY_HTML_TOOLS') == 'PHPWee') {
                    $miniHtml = \PHPWee\Minify::html($content);
                } elseif (\COption::GetOptionString(Tools::moduleID, 'MINIFY_HTML_TOOLS') == 'Shaun') {
                    $miniHtml = \Shaun\Minify::html($content);
                } else {
                    $miniHtml = TinyMinify::html($content);
                    $miniHtml = str_replace('< <!DOCTYPE html>', '<!DOCTYPE html>', $miniHtml);
                }
                if ($miniHtml !== '' && $miniHtml !== null) {
                    $html = $miniHtml;
                    unset($miniHtml);
                }
                $obCache->EndDataCache(array('html' => $html));
			}
            $content = $html;
			unset($html);
		}
    }
    
    public static function findImages($limit = 100, $offset = 0, $addPath) {
        try {
            $charset = LANG_CHARSET;
            $i = 0;
            $rdi = new \recursiveDirectoryIterator($_SERVER["DOCUMENT_ROOT"] . $addPath, \FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS);
            $exceptSt = \COption::GetOptionString(Tools::moduleID, 'EXCEPT_FOLDER');
            $filtered = new DirFilter($rdi, explode(',', $exceptSt));
            $ffiltered = new \recursiveIteratorIterator($filtered);
            $it = new \RegexIterator($ffiltered, '/\.(?:png|PNG|jpg|JPG|jpeg|JPEG)$/');

            $limitIterator = new \LimitIterator($it, $offset, $limit);
            foreach ($limitIterator as $key => $value) {
                $fabsname = $limitIterator->getPathname();
                if ($charset == 'windows-1251') {
                    $fabsname = iconv("UTF-8", "CP1251", $fabsname);
                }
                $fsname = $fabsname;

                $l = strlen($_SERVER['DOCUMENT_ROOT']);
                $fabsname = strlen($fabsname) > $l ? substr($fabsname, $l) : '/';
                $requestFiles[] = self::prepareImageData($fsname);
            }
            
            $stop = false;
            $minify = self::minifiImage($requestFiles);
            if ($minify['status']) {            
                $minify['count'] = count($minify['errors']) + count($minify['success']);
                if (count($minify['errors']) > 0) {
                    foreach ($minify['errors'] as $key => $error){
                        $minify['errors'][$key] = $error;
                        if($error['code'] == 402 || $error['code'] == 401 || $error['code'] == 500) {
                            $stop = false;
                        }
                    }
                }

                $minify['status'] = 'ok';
                $minify['stop'] = $stop;
            }
        } catch(Exception $e) {
            echo $e->getMessage();
        }

        return \Bitrix\Main\Web\Json::encode($minify);
    }    

    public static function prepareImageData($destinationUrl) {
        
        $imageData = array(
            'qltJpg' => \COption::GetOptionString(Tools::moduleID, 'QUALITY_JPG'),
            'qltPng' => \COption::GetOptionString(Tools::moduleID, 'QUALITY_PNG'),
            'image' => $destinationUrl,
        );

        return $imageData;
    }
    
    public static function minifiImageAgent ($offset = 0, $limit = 1, $count = 0){
        $addPath = '/images';
        if ($count <= 0) {
            $tmp_count = \Bitrix\Main\Web\Json::decode(self::getFieldsCount($addPath, $size = false, $dirIgnore = array('tmp')));
        }

        if ($tmpCount) {
            $count = $tmpCount['count'];

            self::findImages($limit, $offset);

            if ($offset >= $count) {
                return '';
            } else {
                $offset += 1;
                return 'AdwMinified::minifiImageAgent(' . $offset . ', ' . $limit . ', ' . $count . ');';
            }
        } else {
            return '';
        }
    }
    
    public static function minifiImage($images) {
        return self::minifiImageLocal($images);
    }
    
    private static function minifiImageLocal($images) {
        $charset = LANG_CHARSET;
        $result = array(
            'status' => false,
            'errors' => array(),
            'success' => array(),
        );
        
        $factory = new \ImageOptimizer\OptimizerFactory();
        foreach($images as $image){
            $qualityJpg = $image['qltJpg'];
            $qualityPng = $image['qltPng'];
            $oldSize = filesize($image['image']);
            copy($image['image'], $image['image'] . '.factory');
            copy($image['image'], $image['image'] . '.php');
            
            $info = getimagesize($image['image']);
            $optimizer = $factory->get();
            if ($info['mime'] == 'image/jpeg') {
                $optimizer = $factory->get('jpeg');
                $imageF = imagecreatefromjpeg($image['image'] . '.php');
                unlink ($image['image'] . '.php'); 
                $result['status'] = imagejpeg($imageF, $image['image'] . '.php', $qualityJpg);
                imagedestroy($imageF);
            } elseif ($info['mime'] == 'image/png') {
                $optimizer = $factory->get('png');
                $imageF = imagecreatefrompng($image['image'] . '.php');
                imageAlphaBlending($imageF, true);
                imageSaveAlpha($imageF, true);
                $qualityPng = 9 - (($qualityPng * 9 ) / 100 );
                unlink ($image['image'] . '.php'); 
                $result['status'] = imagePng($imageF, $image['image'] . '.php', $qualityPng);
                imagedestroy($imageF);
            }
            $optimizer->optimize($image['image'] . '.factory');
            $result['status'] = true;
            if (filesize($image['image'] . '.factory') >= filesize($image['image'] . '.php')) {
                unlink ($image['image'] . '.factory');
                if (filesize($image['image'] . '.php') < $oldSize) {
                    copy($image['image'] . '.php', $image['image']);
                }
                unlink ($image['image'] . '.php');
            } else if ((filesize($image['image'] . '.factory') < filesize($image['image'] . '.php'))){
                unlink ($image['image'] . '.php'); 
                if (filesize($image['image'] . '.factory') < $oldSize) {
                    copy($image['image'] . '.factory', $image['image']);
                }
                unlink ($image['image'] . '.factory');
            } else {
                unlink ($image['image'] . '.factory'); 
                unlink ($image['image'] . '.php'); 
            }
            
            if($result['status']) {
                $result['success'][] = $image['image'];
            } else {
                $result['errors'][] = (array('code' => 401, 'response' => GetMessage('MINIERROR_MESS_401')));
            }
        }

        return $result;        
    }
    
    public static function getImagesCount($addPath, $needSize = false) {
        try {
            $result['count'] = 0;
            $result['size_out'] = $result['size_in'] = 0;

            $rdi = new \recursiveDirectoryIterator($_SERVER['DOCUMENT_ROOT'] . $addPath,  \FilesystemIterator::SKIP_DOTS | \FilesystemIterator::UNIX_PATHS);
            $exceptSt = \COption::GetOptionString(Tools::moduleID, 'EXCEPT_FOLDER');
            $filtered = new DirFilter($rdi, explode(',', $exceptSt));
            $ffiltered = new \recursiveIteratorIterator($filtered);
            $it = new \RegexIterator($ffiltered,'/\.(?:png|PNG|jpg|JPG|jpeg|JPEG)$/');

            if ($needSize) {
                foreach ($it as $key => $value) {
                    $result['count'] ++;
                    $result['size_in'] += $value->getSize();
                }
            } else {
                foreach ($it as $key => $value) {
                    $result['count'] ++;
                }
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }

        if ($needSize) {
            $result['size_out'] = Tools::FileSizeConvert($result['size_in'] * 0.7);
            $result['size_in'] = Tools::FileSizeConvert($result['size_in']);
        }

        if ($result['count'] <= 0) {
            $result = array('error' => array('code' => 404, 'message' => GetMessage('MINIERROR_MESS_404')));
        }

        return \Bitrix\Main\Web\Json::encode($result);
    }
    
    public static function minifiImageByID($intFileID){
        global $DB;
        $result = array('status' => false);
        if(!$intFileID) {
            return null;
        }
        $arFile  = \CFile::GetByID($intFileID)->GetNext();
        if (!$arFile) {
            $z = $DB->Query("SELECT * FROM b_file ORDER BY ID desc LIMIT 10");
            $lastFile = $z->GetNext();
            $intFileID = $lastFile['ID'];
            $arFile = \CFile::GetByID($intFileID)->GetNext();
        }

        $strFilePath = $_SERVER["DOCUMENT_ROOT"] . \CFile::GetPath($intFileID);
        $type = mime_content_type($strFilePath);
        
        if($type != 'image/jpeg' && $type != 'image/png') {
            return null;
        }

        if(file_exists($strFilePath)) {
            $image = self::prepareImageData($strFilePath);
            $result = self::minifiImage(array($image));
            
            if($result['status']) {
                clearstatcache(true, $strFilePath);
                $newSize = filesize($strFilePath);
                $DB->Query("UPDATE b_file SET FILE_SIZE='" . $DB->ForSql($newSize, 255) . "' WHERE ID=" . intval($intFileID));
            }
        } 
        return $result;
    }

    public static function minifiImageOnElementEvent(&$arFields) {
        if (!\COption::GetOptionString(Tools::moduleID,'MINIFY_LOADELEMNT') == 'Y') {
            return;
        }
        if (is_array($arFields['PREVIEW_PICTURE'])){
            if (intval($arFields['PREVIEW_PICTURE']['old_file']) > 0) {
                self::minifiImageByID($arFields['PREVIEW_PICTURE']['old_file']);
            } else if (!empty($arFields['PREVIEW_PICTURE']['tmp_name'])) {
                $image = self::prepareImageData($arFields['PREVIEW_PICTURE']['tmp_name']);
                $result = self::minifiImage(array($image));
            }
        }
        if (is_array($arFields['DETAIL_PICTURE'])){
            if (intval($arFields['DETAIL_PICTURE']['old_file']) > 0) {
                self::minifiImageByID($arFields['DETAIL_PICTURE']['old_file']);
            } else if (!empty($arFields['DETAIL_PICTURE']['tmp_name'])) {
                $image = self::prepareImageData($arFields['DETAIL_PICTURE']['tmp_name']);
                $result = self::minifiImage(array($image));
            }
        }
        $arEl = false;

        if($arFields['PROPERTY_VALUES']) {
            foreach ($arFields['PROPERTY_VALUES'] as $key => $values) {
                foreach ($values as $k => $v) {
                    if ($v['VALUE']['type'] == 'image/png' || $v['VALUE']['type'] == 'image/jpeg') {
                        if (!$arEl) {
                            $rsEl = \CIBlockElement::GetByID($arFields['ID']);
                            if ($obEl = $rsEl->GetNextElement()) {
                                $arEl = $obEl->GetFields();
                                $arEl['PROPERTIES'] = $obEl->GetProperties();
                            }
                        }
                        foreach ($arEl['PROPERTIES'] as $strPropCode => $arProp) {
                            if ($arProp['ID'] == $key) {
                                if ($arProp['MULTIPLE'] != 'N') {
                                    foreach ($arProp['VALUE'] as $intFileID) {
                                        self::minifiImageByID($intFileID);
                                    }
                                } else {
                                    self::minifiImageByID($arProp['VALUE']);
                                }
                            }
                        }
                    }
                }
            }
        }
    }

    public static function minifiImageOnSectionEvent(&$arFields) {
        if(\COption::GetOptionString(Tools::moduleID,'MINIFY_LOADSECTION') == 'Y' && $arFields['PICTURE']) {
            $rsSection = \CIBlockSection::GetByID($arFields["ID"]);
            $arSection = $rsSection->GetNext();
            self::minifiImageByID($arSection['PICTURE']);
        }
    }

    public static function minifiImageOnFileEvent(&$arFile, $strFileName, $strSavePath, $bForceMD5, $bSkipExt) {
        if(!\COption::GetOptionString(Tools::moduleID,'MINIFY_ADDINFILETABLE') == 'Y') {
            return;
        }
        if ((!isset($arFile['MODULE_ID']) || $arFile['MODULE_ID'] != 'iblock')){
            if ($arFile['type'] == 'image/jpeg' || $arFile['type'] == 'image/png') {
                $image = self::prepareImageData($arFile['tmp_name']);
                $result = self::minifiImage(array($image));
                if($result['success']) {
                    $arFile['size'] = filesize($arFile['tmp_name']);
                }
            }
        }
    }

    public static function minifiImageOnResizeEvent(
        $arFile,
        $arParams,
        &$callbackData,
        &$cacheImageFile,
        &$cacheImageFileTmp,
        &$arImageSize
    ) {
        if(!\COption::GetOptionString(Tools::moduleID,'MINIFY_RESIZE') == 'Y') {
            return;
        }
        if ($arFile["CONTENT_TYPE"] == "image/jpeg" || $arFile["CONTENT_TYPE"] == "image/png") {
            $image = self::prepareImageData($cacheImageFileTmp);
            $result = self::minifiImage(array($image));
        }
    }

    public static function savePosition($directory = '', $position, $mode = 0) {
        \COption::SetOptionString(Tools::moduleID, 'MINIFY_DIRECTORY', $directory);
        \COption::SetOptionString(Tools::moduleID, 'MINIFY_POSITION', $position);
        \COption::SetOptionString(Tools::moduleID, 'MINIFY_MODE', $mode);
    }

    public static function getPosition($directory = '', $position = 0, $mode = 0) {
        return array(
            'DIRECTORY' => \COption::GetOptionString(Tools::moduleID, 'MINIFY_DIRECTORY', $directory),
            'POSITION' => \COption::GetOptionString(Tools::moduleID, 'MINIFY_POSITION', $position),
            'MODE' => \COption::GetOptionString(Tools::moduleID, 'MINIFY_MODE', $mode)
        );
    }
}