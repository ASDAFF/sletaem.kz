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
    public $counter_id;
	public $site_adress;
    private $file;
	public $statistic;
    private $allowed_tags = '<a><figure><h1><h2><p><br><ul><ol><li><b><strong><i><em><sup><sub><ins><del><small><big><pre><abbr><u><img><figcaption><video><figure><header>';
    private $system_folders = array(
        'bitrix', 'include', 'local', 'search', 'themes', 'upload', 'auth', 'desktop_app', 'eshop_app', 'login', 'personal', 'search'
    );
    private $static_pages_list = array();
	private $max_items = 1000;
    
    public function __construct() {
        
        $this->filename = $_SERVER['DOCUMENT_ROOT'] . "/" . Option::get(ADMIN_MODULE_NAME, "rss_file_name");
        $this->infoblocks = unserialize(Option::get(ADMIN_MODULE_NAME, "infoblocks"));
        $this->static_pages = Option::get(ADMIN_MODULE_NAME, "static_pages");
        
        $this->title = ((Option::get(ADMIN_MODULE_NAME, "channel_name")) ? Option::get(ADMIN_MODULE_NAME, "channel_name") : "");
        $this->description = ((Option::get(ADMIN_MODULE_NAME, "channel_description")) ? Option::get(ADMIN_MODULE_NAME, "channel_description") : "");
		$this->site_adress = preg_replace("#\/$#", "", Option::get(ADMIN_MODULE_NAME, "site_address"));
        
    }
    
    public function export() {
        
        $this->open_file();
        $this->add_header();
        $this->add_title();
        $this->add_description();
        $this->add_cms_plugin();
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
		$data['content'] = $this->getParseContent($data);
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
            
			$this->statistic['current_infoblock_list'] = $this->statistic['current_infoblock_list'] + 1;
            $this->writeToFile($item);
        }
        
    }
	
	/**
	 * Возвращает валидный контент для яндекса. Проверяет, есть ли вообще текст, если более 400 символов, пытается разбить текст на параграфы
	 * @param array $arFields = массив с данными о записи
	 * @return string
	 */
    private function getParseContent($data)
	{
		$content = $data['content'];
		
		// Если нет вообще ни одной буковки текста, то возвращаем хотя бы заголовок записи, иначе не пройдёт фильтрацию в яндексе
		if (!$content) {
			return "<p>" . $data['title'] . "</p>";
		}
		
		// Если текст больше 400 символов, то яндекс требует расставить параграфы, но мы делаем от 350
		$content_text = strip_tags($content);
		if (strlen($content_text) > 350) {
			
			$content = preg_replace('~(?:\r?\n){2,}~',"\n",$content);
			$content = explode("\n", $content);
			foreach ($content as $line_key => $line_val) {
				if (strlen($line_val) > 350) {
					
					$line_val = explode(' ', $line_val);
					for ($i = 20; $i < count($line_val); $i = $i + 20) {
						$line_val[ $i ] .= '<br>';
					}
					
					$content[ $line_key ] = implode(' ', $line_val);
				} else {
					if (!preg_match("/(\<p|\<br|\<ol|\<ul|\<li)/is", $line_val)) {
						$content[ $line_key ] .= '<br>';
					}
				}
			}
			
			$content = implode("\n", $content);
		}
		
		return $content;
	}
    
    private function prepare_infoblock_pages() {
        if(CModule::IncludeModule("iblock")) :
 
            $infoblocks = array_keys($this->infoblocks);
            if(is_array($infoblocks) && !empty($infoblocks)) {
                foreach ($infoblocks as $infoblock) {
					
					if ($this->statistic['current_infoblock_list'] >= $this->max_items) {
						break;
					}
					
                    $arSelect = Array("ID", "IBLOCK_ID", "NAME", "DATE_CREATE", "PREVIEW_PICTURE", "DETAIL_PICTURE", "PREVIEW_TEXT", "DETAIL_TEXT", "CREATED_BY", "DETAIL_PAGE_URL");
                    $arFilter = Array("IBLOCK_ID"=>IntVal($infoblock), "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
                    $res = CIblockElement::GetList(Array(), $arFilter, false, false , $arSelect);
                    while($ob = $res->GetNextElement()){
						
						if ($this->statistic['current_infoblock_list'] >= $this->max_items) {
							break;
						}
						
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
                            $content .= "                            <img src=\"".$this->site_adress.$picture['src']."\" />\r\n";
                            $content .= "                        </figure>\r\n";
                        }
                        $content .= "                        <h1>".$arFields['NAME']."</h1>\r\n";
                        $content .= "                    </header>\r\n";
						$content_text = $arFields['DETAIL_TEXT'] ? $arFields['DETAIL_TEXT'] : $arFields['PREVIEW_TEXT'];
						$content .= "                    ".$content_text ? $content_text : $arFields['NAME'];
                        $data = array(
                            "link" => $this->site_adress . $arFields['DETAIL_PAGE_URL'],
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
			
			if ($this->statistic['current_infoblock_list'] >= $this->max_items) {
				break;
			}
			
            $author = '';
            $content = file_get_contents($page);
            preg_match_all("#SetTitle\((\'|\")(.*)(\'|\")\)#", $content, $title);
			
            if($title[2][0]) {
                $title = $title[2][0];
			} else {
				continue;
			}
			
            $pubDate = filemtime($page);
            $data = array(
                "link" => $this->site_adress . str_replace(array(DOCUMENT_ROOT, "index.php"), "", $page),
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
    
    function add_cms_plugin() {
        fputs($this->file, "        <turbo:cms_plugin>A4D9EAC0296782024934983ECCE0292A</turbo:cms_plugin>\r\n");
    }
    
    private function open_file() {
        $this->file = fopen($this->filename, "w");
    }
    
    private function close_file() {
        fclose($this->file);
    }
    
}