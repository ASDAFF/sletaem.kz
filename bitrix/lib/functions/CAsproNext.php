<?
namespace Aspro\Functions;

use Bitrix\Main\Application;
use Bitrix\Main\Web\DOM\Document;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Web\DOM\CssParser;
use Bitrix\Main\Text\HtmlFilter;
use Bitrix\Main\IO\File;
use Bitrix\Main\IO\Directory;
use Bitrix\Main\Config\Option;

Loc::loadMessages(__FILE__);
\Bitrix\Main\Loader::includeModule('sale');
\Bitrix\Main\Loader::includeModule('catalog');

if(!class_exists("CAsproNext"))
{
	class CAsproNext{
		const MODULE_ID = \CNext::moduleID;

		/*function OnAsproShowPriceMatrixHandler($arItem, $arParams, $strMeasure, $arAddToBasketData, &$html){
			// ... some code
		}*/

		/*function OnAsproShowPriceRangeTopHandler($arItem, $arParams, $strMeasure, &$html){
			// ... some code
		}*/

		/*function OnAsproItemShowItemPricesHandler($arParams, $arPrices, $strMeasure, &$price_id, $bShort, &$html){
			// ... some code
		}*/

		/*function OnAsproSkuShowItemPricesHandler($arParams, $arItem, &$item_id, &$min_price_id, $arItemIDs, $bShort, &$html){
			//... some code
		}*/

		/*function OnAsproGetTotalQuantityHandler($arItem, $arParams, &$totalCount){
			//... some code
		}*/

		/*function OnAsproGetTotalQuantityBlockHandler($totalCount, &$arOptions){
			//... some code
		}*/

		/*function OnAsproGetBuyBlockElementHandler($arItem, $totalCount, $arParams, &$arOptions){
			//... some code
		}*/
	}
}?>