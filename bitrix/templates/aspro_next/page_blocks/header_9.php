<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<?
global $arTheme, $arRegion;
$arRegions = CNextRegionality::getRegions();
if($arRegion)
	$bPhone = ($arRegion['PHONES'] ? true : false);
else
	$bPhone = ((int)$arTheme['HEADER_PHONES'] ? true : false);
$logoClass = ($arTheme['COLORED_LOGO']['VALUE'] !== 'Y' ? '' : ' colored');
?>
<div class="header-v9 header-wrapper">
	<div class="logo_and_menu-row">
		<div class="logo-row">
			<div class="maxwidth-theme">
				<div class="row">
					<div class="logo-block col-md-2 col-sm-3">
						<div class="logo<?=$logoClass?>">
							<?=CNext::ShowLogo();?>
						</div>
					</div>
					<div class="col-md-2 visible-lg nopadding_right">
						<div class="top-description slogan">
							<?$APPLICATION->IncludeFile(SITE_DIR."include/top_page/slogan.php", array(), array(
									"MODE" => "html",
									"NAME" => "Text in title",
									"TEMPLATE" => "include_area.php",
								)
							);?>
						</div>
					</div>
					<?if($arRegions):?>
						<div class="inline-block pull-left">
							<div class="top-description">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
									array(
										"COMPONENT_TEMPLATE" => ".default",
										"PATH" => SITE_DIR."include/top_page/regionality.list.php",
										"AREA_FILE_SHOW" => "file",
										"AREA_FILE_SUFFIX" => "",
										"AREA_FILE_RECURSIVE" => "Y",
										"EDIT_TEMPLATE" => "include_area.php"
									),
									false
								);?>
							</div>
						</div>
					<?endif;?>
					<div class="right-icons pull-right">
						<div class="pull-right block-link">
							<?=CNext::ShowBasketWithCompareLink('with_price', 'big', true, 'wrap_icon inner-table-block baskets');?>
						</div>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<?=CNext::showCabinetLink(true, true, 'big', true);?>
							</div>
						</div>
						<div class="pull-right">
							<div class="wrap_icon inner-table-block">
								<div class="phone-block">
									<div class="visible-lg">
										<?if($bPhone):?>
											<?CNext::ShowHeaderPhones();?>
										<?endif?>
									</div>
									<?if($arTheme['SHOW_CALLBACK']['VALUE'] == 'Y'):?>
										<span class="callback-block animate-load twosmallfont colored" data-event="jqm" data-param-form_id="CALLBACK" data-name="callback"><?=GetMessage("CALLBACK")?></span>
									<?endif;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><?// class=logo-row?>
	</div>
	<div class="menu-row middle-block bg<?=strtolower($arTheme["MENU_COLOR"]["VALUE"]);?> sliced">
		<div class="maxwidth-theme">
			<div class="row">
				<div class="col-md-12">
					<div class="right-icons pull-right show-fixed">
						<div class="wrap_icon">
							<button class="inline-search-show twosmallfont">
								<?=CNext::showIconSvg("search", SITE_TEMPLATE_PATH."/images/svg/Search_black.svg");?>
							</button>
						</div>
					</div>
					<div class="menu-only">
						<nav class="mega-menu sliced">
							<?$APPLICATION->IncludeComponent("bitrix:main.include", ".default",
								array(
									"COMPONENT_TEMPLATE" => ".default",
									"PATH" => SITE_DIR."include/menu/menu.top.php",
									"AREA_FILE_SHOW" => "file",
									"AREA_FILE_SUFFIX" => "",
									"AREA_FILE_RECURSIVE" => "Y",
									"EDIT_TEMPLATE" => "include_area.php"
								),
								false, array("HIDE_ICONS" => "Y")
							);?>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="line-row visible-xs"></div>
</div>