<?global $arTheme;
$bHideOnNarrow = $arTheme['BIGBANNER_HIDEONNARROW']['VALUE'] === 'Y';?>
<div class="top_slider_wrapp maxwidth-banner<?=($bHideOnNarrow ? ' hidden_narrow' : '')?>">
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.flexslider-min.js',true)?> 
	<div class="flexslider">
		<ul class="slides">
			<?foreach($arResult["ITEMS"][$arParams["BANNER_TYPE_THEME"]]["ITEMS"] as $i => $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				$background = is_array($arItem["DETAIL_PICTURE"]) ? $arItem["DETAIL_PICTURE"]["SRC"] : $this->GetFolder()."/images/background.jpg";
				$target = $arItem["PROPERTIES"]["TARGETS"]["VALUE_XML_ID"];

				// video options
				$videoSource = strlen($arItem['PROPERTIES']['VIDEO_SOURCE']['VALUE_XML_ID']) ? $arItem['PROPERTIES']['VIDEO_SOURCE']['VALUE_XML_ID'] : 'LINK';
				$videoSrc = $arItem['PROPERTIES']['VIDEO_SRC']['VALUE'];
				if($videoFileID = $arItem['PROPERTIES']['VIDEO']['VALUE']){
					$videoFileSrc = CFile::GetPath($videoFileID);
				}
				$videoPlayer = $videoPlayerSrc = '';
				if($bShowVideo = $arItem['PROPERTIES']['SHOW_VIDEO']['VALUE_XML_ID'] === 'YES' && ($videoSource == 'LINK' ? strlen($videoSrc) : strlen($videoFileSrc))){
					$colorSubstrates = ($arItem['PROPERTIES']['COLOR_SUBSTRATES']['VALUE_XML_ID'] ? $arItem['PROPERTIES']['COLOR_SUBSTRATES']['VALUE_XML_ID'] : '');
					$buttonVideoText = $arItem['PROPERTIES']['BUTTON_VIDEO_TEXT']['VALUE'];
					$bVideoLoop = $arItem['PROPERTIES']['VIDEO_LOOP']['VALUE_XML_ID'] === 'YES';
					$bVideoDisableSound = $arItem['PROPERTIES']['VIDEO_DISABLE_SOUND']['VALUE_XML_ID'] === 'YES';
					$bVideoAutoStart = $arItem['PROPERTIES']['VIDEO_AUTOSTART']['VALUE_XML_ID'] === 'YES';
					$bVideoCover = $arItem['PROPERTIES']['VIDEO_COVER']['VALUE_XML_ID'] === 'YES';
					$bVideoUnderText = $arItem['PROPERTIES']['VIDEO_UNDER_TEXT']['VALUE_XML_ID'] === 'YES';
					if(strlen($videoSrc) && $videoSource === 'LINK'){
						// videoSrc available values
						// YOTUBE:
						// https://youtu.be/WxUOLN933Ko
						// <iframe width="560" height="315" src="https://www.youtube.com/embed/WxUOLN933Ko" frameborder="0" allowfullscreen></iframe>
						// VIMEO:
						// https://vimeo.com/211336204
						// <iframe src="https://player.vimeo.com/video/211336204?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						// RUTUBE:
						// <iframe width="720" height="405" src="//rutube.ru/play/embed/10314281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowfullscreen></iframe>
						
						$videoPlayer = 'YOUTUBE';
						$videoSrc = htmlspecialchars_decode($videoSrc);
						if(strpos($videoSrc, 'iframe') !== false){
							$re = '/<iframe.*src=\"(.*)\".*><\/iframe>/isU';
							preg_match_all($re, $videoSrc, $arMatch);
							$videoSrc = $arMatch[1][0];
						}
						$videoPlayerSrc = $videoSrc;

						switch($videoSrc){
							case(($v = strpos($videoSrc, 'vimeo.com/')) !== false):
								$videoPlayer = 'VIMEO';
								if(strpos($videoSrc, 'player.vimeo.com/') === false){
									$videoPlayerSrc = str_replace('vimeo.com/', 'player.vimeo.com/', $videoPlayerSrc);
								}
								if(strpos($videoSrc, 'vimeo.com/video/') === false){
									$videoPlayerSrc = str_replace('vimeo.com/', 'vimeo.com/video/', $videoPlayerSrc);
								}
								break;
							case(($v = strpos($videoSrc, 'rutube.ru/')) !== false):
								$videoPlayer = 'RUTUBE';
								break;
							case(strpos($videoSrc, 'watch?') !== false && ($v = strpos($videoSrc, 'v=')) !== false):
								$videoPlayerSrc = 'https://www.youtube.com/embed/'.substr($videoSrc, $v + 2, 11);
								break;
							case(strpos($videoSrc, 'youtu.be/') !== false && $v = strpos($videoSrc, 'youtu.be/')):
								$videoPlayerSrc = 'https://www.youtube.com/embed/'.substr($videoSrc, $v + 9, 11);
								break;
							case(strpos($videoSrc, 'embed/') !== false && $v = strpos($videoSrc, 'embed/')):
								$videoPlayerSrc = 'https://www.youtube.com/embed/'.substr($videoSrc, $v + 6, 11);
								break;
						}

						$bVideoPlayerYoutube = $videoPlayer === 'YOUTUBE';
						$bVideoPlayerVimeo = $videoPlayer === 'VIMEO';
						$bVideoPlayerRutube = $videoPlayer === 'RUTUBE';

						if(strlen($videoPlayerSrc)){
							$videoPlayerSrc = trim($videoPlayerSrc.
								($bVideoPlayerYoutube ? '?autoplay=1&enablejsapi=1&controls=0&showinfo=0&rel=0&disablekb=1&iv_load_policy=3' :
								($bVideoPlayerVimeo ? '?autoplay=1&badge=0&byline=0&portrait=0&title=0' :
								($bVideoPlayerRutube ? '?quality=1&autoStart=0&sTitle=false&sAuthor=false&platform=someplatform' : '')))
							);
						}
					}
					else{
						$videoPlayer = 'HTML5';
						$videoPlayerSrc = $videoFileSrc;
					}
				}?>
				<li class="box<?=($arItem["PROPERTIES"]["TEXTCOLOR"]["VALUE_XML_ID"] ? " ".$arItem["PROPERTIES"]["TEXTCOLOR"]["VALUE_XML_ID"] : "");?><?=($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] ? " ".$arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] : " left");?><?=($bShowVideo ? ' wvideo' : '');?>" data-nav_color="<?=($arItem["PROPERTIES"]["NAV_COLOR"]["VALUE_XML_ID"] ? $arItem["PROPERTIES"]["NAV_COLOR"]["VALUE_XML_ID"] : "");?>" data-slide_index="<?=$i?>" <?=($bShowVideo ? ' data-video_source="'.$videoSource.'"' : '')?><?=(strlen($videoPlayer) ? ' data-video_player="'.$videoPlayer.'"' : '')?><?=(strlen($videoPlayerSrc) ? ' data-video_src="'.$videoPlayerSrc.'"' : '')?><?=($bVideoAutoStart ? ' data-video_autoplay="1"' : '')?><?=($bVideoDisableSound ? ' data-video_disable_sound="1"' : '')?><?=($bVideoLoop ? ' data-video_loop="1"' : '')?><?=($bVideoCover ? ' data-video_cover="1"' : '')?> id="<?=$this->GetEditAreaId($arItem['ID']);?>" style="background-image: url('<?=$background?>') !important;">
					<?if($arItem["PROPERTIES"]["URL_STRING"]["VALUE"]):?>
						<a class="target" href="<?=$arItem["PROPERTIES"]["URL_STRING"]["VALUE"]?>" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>></a>
					<?endif;?>
					<div class="wrapper_inner">	
						<? 
						$position = "0% 100%";
						if($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"])
						{
							if($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "left")
								$position = "100% 100%";
							elseif($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "right")
								$position = "0% 100%";
							else
								$position = "center center";									
						}
						?>
						<table class="table-no-border" <?/*if($arItem["PREVIEW_PICTURE"]):?>style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) <?=$position;?> no-repeat"<?endif;*/?>>
							<tbody><tr>
								<?if($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] != "image"):?>
									<?ob_start();?>
										<td class="text <?=$arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"];?>">
											<?
												$bShowButton1 = (strlen($arItem['PROPERTIES']['BUTTON1TEXT']['VALUE']) && strlen($arItem['PROPERTIES']['BUTTON1LINK']['VALUE']));
												$bShowButton2 = (strlen($arItem['PROPERTIES']['BUTTON2TEXT']['VALUE']) && strlen($arItem['PROPERTIES']['BUTTON2LINK']['VALUE']));
											?>
											<?if($arItem["NAME"]):?>
												<div class="banner_title">
													<span>
														<?if($arItem["PROPERTIES"]["URL_STRING"]["VALUE"]):?>
															<a href="<?=$arItem["PROPERTIES"]["URL_STRING"]["VALUE"]?>" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>>
														<?endif;?>
														<?=strip_tags($arItem["~NAME"], "<br><br/>");?>
														<?if($arItem["PROPERTIES"]["URL_STRING"]["VALUE"]):?>
															</a>
														<?endif;?>
													</span>
												</div>
											<?endif;?>
											<?if($arItem["PREVIEW_TEXT"]):?>
												<div class="banner_text"><?=$arItem["PREVIEW_TEXT"];?></div>
											<?endif;?>
											<?if($bShowButton1 || $bShowButton2 || ($bShowVideo && !$bVideoAutoStart)):?>
												<div class="banner_buttons">
													<?if($bShowVideo && !$bVideoAutoStart && !$bShowButton1 && !$bShowButton2):?>
														<span class="play btn-video small <?=(strlen($arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID']) ? $arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID'] : 'btn-default')?>" title="<?=$buttonVideoText?>"></span>
													<?elseif($bShowButton1 || $bShowButton2):?>
														<?if($bShowVideo && !$bVideoAutoStart):?>
															<span class="btn <?=(strlen($arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID']) ? $arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID'] : 'btn-default')?> btn-video" title="<?=$buttonVideoText?>"></span>
														<?endif;?>
														<?if($bShowButton1):?>
															<a href="<?=$arItem["PROPERTIES"]["BUTTON1LINK"]["VALUE"]?>" class="<?=!empty($arItem["PROPERTIES"]["BUTTON1CLASS"]["VALUE"]) ? $arItem["PROPERTIES"]["BUTTON1CLASS"]["VALUE"] : "btn btn-default btn-lg"?>" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>>
																<?=$arItem["PROPERTIES"]["BUTTON1TEXT"]["VALUE"]?>
															</a>
														<?endif;?>
														<?if($bShowButton2):?>
															<a href="<?=$arItem["PROPERTIES"]["BUTTON2LINK"]["VALUE"]?>" class="<?=!empty( $arItem["PROPERTIES"]["BUTTON2CLASS"]["VALUE"]) ? $arItem["PROPERTIES"]["BUTTON2CLASS"]["VALUE"] : "btn btn-default btn-lg btn-info"?>" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>>
																<?=$arItem["PROPERTIES"]["BUTTON2TEXT"]["VALUE"]?>
															</a>
														<?endif;?>
													<?endif;?>
												</div>
											<?endif;?>
										</td>
									<?$text = ob_get_clean();?>
								<?endif;?>
								<?ob_start();?>
									<?$bHasVideo = ($bShowVideo && !$bVideoAutoStart && $arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "image");?>
									<td class="img <?=($bHasVideo ? 'with_video' : '');?>">
										<?if($bHasVideo):?>
											<div class="video_block">
												<span class="play btn btn-video  <?=(strlen($arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID']) ? $arItem['PROPERTIES']['BUTTON_VIDEO_CLASS']['VALUE_XML_ID'] : 'btn-default')?>" title="<?=$buttonVideoText?>"></span>
											</div>
										<?elseif($arItem["PREVIEW_PICTURE"]):?>
											<?if(!empty($arItem["PROPERTIES"]["URL_STRING"]["VALUE"])):?>
												<a href="<?=$arItem["PROPERTIES"]["URL_STRING"]["VALUE"]?>" <?=(strlen($target) ? 'target="'.$target.'"' : '')?>>
											<?endif;?>
											<img class="plaxy" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=($arItem['PREVIEW_PICTURE']['ALT'] ? $arItem['PREVIEW_PICTURE']['ALT'] : $arItem['NAME'])?>" title="<?=($arItem['PREVIEW_PICTURE']['TITLE'] ? $arItem['PREVIEW_PICTURE']['TITLE'] : $arItem['NAME'])?>" />
											<?if(!empty($arItem["PROPERTIES"]["URL_STRING"]["VALUE"])):?>
												</a>
											<?endif;?>
										<?endif;?>									
									</td>
								<?$image = ob_get_clean();?>
								<? 
								if($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"]){
									if($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "left"){
										echo $text.$image;
									}
									elseif($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "right"){
										echo $image.$text;
									}
									elseif($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "center"){
										echo $text;
									}
									elseif($arItem["PROPERTIES"]["TEXT_POSITION"]["VALUE_XML_ID"] == "image"){
										echo $image;
									}
								}
								else{
									echo $text.$image;
								}
								?>
							</tr></tbody>
						</table>
					</div>
				</li>
			<?endforeach;?>
		</ul>
	</div>
</div>

<?if($bInitYoutubeJSApi):?>
	<script type="text/javascript">
	BX.ready(function(){
		var tag = document.createElement('script');
		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	});
	</script>
<?endif;?>