<?

ini_set("display_errors", false);
ignore_user_abort(1);
set_time_limit(0);

use Bitrix\Main\Application;
use Bitrix\Iblock;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Config\Option;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

Loc::loadMessages(__FILE__);

defined('ADMIN_MODULE_NAME') or define('ADMIN_MODULE_NAME', 'hardkod.turboyandex');
define("DOCUMENT_ROOT", $_SERVER['DOCUMENT_ROOT']);

if (!function_exists("yandex_text2xml_text"))
{
	function yandex_text2xml_text($text, $bHSC = false, $bDblQuote = false)
	{
		global $APPLICATION;
		$bHSC = (true == $bHSC ? true : false);
		$bDblQuote = (true == $bDblQuote ? true: false);
		if ($bHSC)
		{
			$text = htmlspecialcharsbx($text);
			if ($bDblQuote)
				$text = str_replace('&quot;', '"', $text);
		}
		$text = preg_replace("/[\x1-\x8\xB-\xC\xE-\x1F]/", "", $text);
		$text = str_replace("'", "&apos;", $text);
		$text = str_replace("&", "&amp;", $text);
		$text = $APPLICATION->ConvertCharset($text, LANG_CHARSET, 'windows-1251');
		return $text;
	}
}

if (!function_exists("yandex_text2xml"))
{
	function yandex_text2xml($text, $bHSC = false, $bDblQuote = false)
	{
		global $APPLICATION;
		$bHSC = (true == $bHSC ? true : false);
		$bDblQuote = (true == $bDblQuote ? true: false);
		if ($bHSC)
		{
			$text = htmlspecialcharsbx($text);
			if ($bDblQuote)
				$text = str_replace('&quot;', '"', $text);
		}
		$text = preg_replace("/[\x1-\x8\xB-\xC\xE-\x1F]/", "", $text);
		$text = str_replace("'", "&apos;", $text);
		$text = str_replace("&", "&amp;", $text);
		$text = str_replace(">", "&gt;", $text);
		$text = str_replace("<", "&lt;", $text);
		$text = str_replace("\"", "&quot;", $text);
		$text = $APPLICATION->ConvertCharset($text, LANG_CHARSET, 'windows-1251');
		return $text;
	}
}

if (!function_exists("yandex_replace_special"))
{
	function yandex_replace_special($arg)
	{
		if (in_array($arg[0], array("&quot;", "&amp;", "&lt;", "&gt;")))
			return $arg[0];
		else
			return " ";
	}
}

class RssExport
{
    
    public $filename;
    public $infoblocks;
    public $static_pages;
    public $title;
    public $description;
    public $counter_type;
    public $counter_id;
    private $file;
    private $allowed_tags = '<a><figure><h1><h2><p><br><ul><ol><li><b><strong><i><em><sup><sub><ins><del><small><big><pre><abbr><u><img><figcaption><video><figure><header>';
    private $system_folders = array(
        'bitrix', 'include', 'local', 'search', 'themes', 'upload'
    );
    private $static_pages_list = array();
    
    public function __construct() {
        
        $this->filename = $_SERVER['DOCUMENT_ROOT'] . "/" . Option::get(ADMIN_MODULE_NAME, "rss_file_name");
        $this->infoblocks = unserialize(Option::get(ADMIN_MODULE_NAME, "infoblocks"));
        $this->static_pages = Option::get(ADMIN_MODULE_NAME, "static_pages");
        
        $this->title = ((Option::get(ADMIN_MODULE_NAME, "channel_name")) ? Option::get(ADMIN_MODULE_NAME, "channel_name") : "");
        $this->description = ((Option::get(ADMIN_MODULE_NAME, "channel_description")) ? Option::get(ADMIN_MODULE_NAME, "channel_description") : "");
        $this->counter_type = ((Option::get(ADMIN_MODULE_NAME, "counter_type")) ? Option::get(ADMIN_MODULE_NAME, "counter_type") : "");
        $this->counter_id = ((Option::get(ADMIN_MODULE_NAME, "counter_number")) ? Option::get(ADMIN_MODULE_NAME, "counter_number") : "");
        
    }
    
    public function export() {
        
        $this->open_file();
        $this->add_header();
        $this->add_title();
        $this->add_description();
        $this->add_counter();
        $this->add_items();
        $this->add_footer();
        $this->close_file();
        return 1;
        
    }
    
    private function add_items() {
        if($this->static_pages) {
            $this->get_static_pages();
            $this->prepare_static_pages();
        }
        $this->prepare_infoblock_pages();
        
    }
    
    private function format_item($data) {
        $data['content'] = trim(strip_tags($data['content'], $this->allowed_tags));
        $data['content'] = preg_replace('/^\s*\/\/<!\[CDATA\[([\s\S]*)\/\/\]\]>\s*\z/', '$1', $data['content']);
        if($data['title'] && $data['content']) {
            $item = "        <item turbo=\"true\">\r\n";
            $item .= "            <link>" . yandex_text2xml($data['link']) . "</link>\r\n";
            $item .= "            <title>" . yandex_text2xml($data['title']) . "</title>\r\n";
            if($data['author']) {
                $item .= "            <author>" . yandex_text2xml($data['author']) . "</author>\r\n";
            }        
            $item .= "            <pubDate>" . date("r", $data['pubDate']) . "</pubDate>\r\n";   
            $item .= "            <turbo:content>\r\n";
            $item .= "                <![CDATA[\r\n";
            $item .= "                    " . yandex_text2xml_text($data['content']) . "\r\n";      
            $item .= "                 ]]>\r\n";    
            $item .= "             </turbo:content>\r\n";    
            $item .= "        </item>\r\n";    
            
            $this->writeToFile($item);
        }
        
    }
    
    private function prepare_infoblock_pages() {
        if(CModule::IncludeModule("iblock")) :
 
            $infoblocks = array_keys($this->infoblocks);
            if(is_array($infoblocks) && !empty($infoblocks)) {
                foreach ($infoblocks as $infoblock) {
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_CREATE", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "CREATED_BY", "DETAIL_PAGE_URL");
                    $arFilter = Array("IBLOCK_ID"=>IntVal($infoblock), "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
                    $res = CIblockElement::GetList(Array(), $arFilter, false, false , $arSelect);
                    while($ob = $res->GetNextElement()){
                        $author = '';
                        $arFields = $ob->GetFields();  
                        $rsUser = CUser::GetByID($arFields['CREATED_BY']);
                        $arUser = $rsUser->Fetch();
                        if($arUser['NAME'] && $arUser['LAST_NAME']) {
                            $author = $arUser['LAST_NAME'] . " " . $arUser['NAME'];
                        }
                        $content = "                    <header>\r\n";
                        $picture = (($arFields['DETAIL_PICTURE']) ? $arFields['DETAIL_PICTURE'] : $arFields['DETAIL_PICTURE']);
                        if($picture) {
                            $picture = CFile::ResizeImageGet($picture, array('width'=>400), BX_RESIZE_IMAGE_PROPORTIONAL, true);
                            $content .= "                        <figure>\r\n";
                            $content .= "                            <img src=\"".(stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'].$picture['src']."\" />\r\n";
                            $content .= "                        </figure>\r\n";
                        }
                        $content .= "                        <h1>".$arFields['NAME']."</h1>\r\n";
                        $content .= "                    </header>\r\n";
                        $content .= (($arFields['DETAIL_TEXT']) ? $arFields['DETAIL_TEXT'] : $arFields['PREVIEW_TEXT']);
                        $data = array(
                            "link" => (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $arFields['DETAIL_PAGE_URL'],
                            "title" => $arFields['NAME'],
                            "author" => $author,
                            "pubDate" => strtotime($arFields['DATE_CREATE']),
                            "content" => $content,
                        );
                        $this->format_item($data);
                    }
                   
                }
            }
        
        endif;
    
    }
    
    private function prepare_static_pages() {

        foreach($this->static_pages_list as $page) {
            $author = '';
            $content = file_get_contents($page);
            preg_match_all("#SetTitle\((\'|\")(.*)(\'|\")\)#", $content, $title);
            if($title[2][0]) {
                $title = $title[2][0];
            }
            $pubDate = filemtime($page);
            $data = array(
                "link" => (stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . SITE_DIR . str_replace(array(DOCUMENT_ROOT, "index.php"), "", $page),
                "title" => $title,
                "author" => $author,
                "pubDate" => $pubDate,
                "content" => $content,
            );
            
            $this->format_item($data);
            
        }
        
    }
    
    private function writeToFile($data) {
        fputs($this->file, $data);

    }
    
    private function get_static_pages($folder = DOCUMENT_ROOT) {
        
        $files = scandir($folder);
        foreach($files as $file) {
            if(!preg_match("#^\.#", $file) && !preg_match("#^sect_#", $file) && !preg_match("#^sect_#", $file) && !in_array($file, $this->system_folders)) {
                $result_folders[] = $file;
            }
        }
        foreach($result_folders as $child_folder) {
            if(is_file($folder . "/" . $child_folder) && $folder !== DOCUMENT_ROOT) {
                if(preg_match("#\.php$#", $child_folder)) {
                    $this->static_pages_list[] = $folder . "/" . $child_folder;
                }
            }
            if(is_dir($folder . "/" . $child_folder)) {
                $this->get_static_pages($folder . "/" . $child_folder);
            }
        }
        return true;
        
    }
    
    private function add_header() {
        $header = <<<HEADER
<?xml version="1.0" encoding="windows-1251"?>
<rss
    xmlns:yandex="http://news.yandex.ru"
    xmlns:media="http://search.yahoo.com/mrss/"
    xmlns:turbo="http://turbo.yandex.ru"
    version="2.0"
>
    <channel>

HEADER;

        fputs($this->file, $header);
    }
    
    private function add_footer() {
        $footer = <<<FOOTER
    </channel>
</rss>
FOOTER;
        fputs($this->file, $footer);
    }
    
    function add_title() {
        if($this->title) {
            fputs($this->file, "        <title>" . yandex_text2xml($this->title) . "</title>\r\n");
        }
    }
    
    function add_description() {
        if($this->description) {
            fputs($this->file, "        <description>" . yandex_text2xml($this->description) . "</description>\r\n");
        }
    }
    
    function add_counter() {
        if($this->counter_type) {
            fputs($this->file, "        <yandex:analytics" . (($this->counter_id) ? " id=\"" . $this->counter_id . "\"" : "" ) . " type=\"" . $this->counter_type . "\"></yandex:analytics>\r\n");
        }
    }
    
    private function open_file() {
        $this->file = fopen($this->filename, "w");
    }
    
    private function close_file() {
        fclose($this->file);
    }
    
}