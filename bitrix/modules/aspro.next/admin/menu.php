<?
AddEventHandler('main', 'OnBuildGlobalMenu', 'OnBuildGlobalMenuHandlerNext');
function OnBuildGlobalMenuHandlerNext(&$arGlobalMenu, &$arModuleMenu){
	if(!defined('ASPRO_NEXT_MENU_INCLUDED')){
		define('ASPRO_NEXT_MENU_INCLUDED', true);

		IncludeModuleLangFile(__FILE__);
		$moduleID = 'aspro.next';

		$GLOBALS['APPLICATION']->SetAdditionalCss("/bitrix/css/".$moduleID."/menu.css");

		if($GLOBALS['APPLICATION']->GetGroupRight($moduleID) >= 'R'){
			$arMenu = array(
				'menu_id' => 'global_menu_aspro_next',
				'text' => GetMessage('ASPRO_NEXT_GLOBAL_MENU_TEXT'),
				'title' => GetMessage('ASPRO_NEXT_GLOBAL_MENU_TITLE'),
				'sort' => 1000,
				'items_id' => 'global_menu_aspro_next_items',
				'icon' => 'imi_next',
				'items' => array(
					array(
						'text' => GetMessage('ASPRO_NEXT_MENU_CONTROL_CENTER_TEXT'),
						'title' => GetMessage('ASPRO_NEXT_MENU_CONTROL_CENTER_TITLE'),
						'sort' => 10,
						'url' => '/bitrix/admin/'.$moduleID.'_mc.php',
						'icon' => 'imi_control_center',
						'page_icon' => 'pi_control_center',
						'items_id' => 'control_center',
					),
					array(
						'text' => GetMessage('ASPRO_NEXT_MENU_TYPOGRAPHY_TEXT'),
						'title' => GetMessage('ASPRO_NEXT_MENU_TYPOGRAPHY_TITLE'),
						'sort' => 20,
						'url' => '/bitrix/admin/'.$moduleID.'_options.php?mid=main',
						'icon' => 'imi_typography',
						'page_icon' => 'pi_typography',
						'items_id' => 'main',
					),
					array(
						'text' => GetMessage('ASPRO_NEXT_MENU_CRM_TEXT'),
						'title' => GetMessage('ASPRO_NEXT_MENU_CRM_TITLE'),
						'sort' => 30,
						'url' => '/bitrix/admin/'.$moduleID.'_crm_amo.php?mid=main',
						'icon' => 'imi_marketing',
						'page_icon' => 'pi_typography',
						'items_id' => 'ncrm',
						"items" => array(
							array(
								'text' => GetMessage('ASPRO_NEXT_MENU_AMO_CRM_TEXT'),
								'title' => GetMessage('ASPRO_NEXT_MENU_AMO_CRM_TITLE'),
								'sort' => 10,
								'url' => '/bitrix/admin/'.$moduleID.'_crm_amo.php?mid=main',
								'icon' => '',
								'page_icon' => 'pi_typography',
								'items_id' => 'crm_amo',
							),
							array(
								'text' => GetMessage('ASPRO_NEXT_MENU_FLOWLU_CRM_TEXT'),
								'title' => GetMessage('ASPRO_NEXT_MENU_FLOWLU_CRM_TITLE'),
								'sort' => 20,
								'url' => '/bitrix/admin/'.$moduleID.'_crm_flowlu.php?mid=main',
								'icon' => '',
								'page_icon' => 'pi_typography',
								'items_id' => 'crm_flowlu',
							),
						)
					),
					array(
						'text' => GetMessage('ASPRO_NEXT_MENU_DEVELOP_TEXT'),
						'title' => GetMessage('ASPRO_NEXT_MENU_DEVELOP_TITLE'),
						'sort' => 40,
						'url' => '/bitrix/admin/'.$moduleID.'_develop.php?mid=main',
						'icon' => 'util_menu_icon',
						'page_icon' => 'pi_typography',
						'items_id' => 'develop',
					),
					array(
						'text' => GetMessage('ASPRO_NEXT_MENU_GENERATE_FILES_TEXT'),
						'title' => GetMessage('ASPRO_NEXT_MENU_GENERATE_FILES_TITLE'),
						'sort' => 50,
						'url' => '/bitrix/admin/'.$moduleID.'_generate_robots.php?mid=main',
						'icon' => 'imi_marketing',
						'page_icon' => 'pi_typography',
						'items_id' => 'gfiles',
						"items" => array(
							array(
								'text' => GetMessage('ASPRO_NEXT_MENU_GENERATE_ROBOTS_TEXT'),
								'title' => GetMessage('ASPRO_NEXT_MENU_GENERATE_ROBOTS_TITLE'),
								'sort' => 10,
								'url' => '/bitrix/admin/'.$moduleID.'_generate_robots.php?mid=main',
								'icon' => '',
								'page_icon' => 'pi_typography',
								'items_id' => 'grobots',
							),
							array(
								'text' => GetMessage('ASPRO_NEXT_MENU_GENERATE_SITEMAP_TEXT'),
								'title' => GetMessage('ASPRO_NEXT_MENU_GENERATE_SITEMAP_TITLE'),
								'sort' => 20,
								'url' => '/bitrix/admin/'.$moduleID.'_generate_sitemap.php?mid=main',
								'icon' => '',
								'page_icon' => 'pi_typography',
								'items_id' => 'gsitemap',
							),
						)
					),
					array(
						'text' => GetMessage('ASPRO_NEXT_MENU_SYNC_STORES_TEXT'),
						'title' => GetMessage('ASPRO_NEXT_MENU_SYNC_STORES_TITLE'),
						'sort' => 60,
						'url' => '/bitrix/admin/'.$moduleID.'_sync_stores.php?mid=main',
						'icon' => 'imi_pages',
						'page_icon' => 'pi_typography',
						'items_id' => 'main',
					),
				),
			);
			if(!isset($arGlobalMenu['global_menu_aspro'])){
				$arGlobalMenu['global_menu_aspro'] = array(
					'menu_id' => 'global_menu_aspro',
					'text' => GetMessage('ASPRO_NEXT_GLOBAL_ASPRO_MENU_TEXT'),
					'title' => GetMessage('ASPRO_NEXT_GLOBAL_ASPRO_MENU_TITLE'),
					'sort' => 1000,
					'items_id' => 'global_menu_aspro_items',
				);
			}

			$arGlobalMenu['global_menu_aspro']['items'][$moduleID] = $arMenu;
		}
	}
}
?>