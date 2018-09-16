<?php
/**
 * Aspro:Next module params
 * @copyright 2017 Aspro
 */

IncludeModuleLangFile(__FILE__);
$moduleClass = 'CNext';
$solution = ASPRO_NEXT_MODULE_ID;

// initialize module parametrs list and default values
$moduleClass::$arParametrsList = array(
	'MAIN' => array(
		'TITLE' => GetMessage('MAIN_OPTIONS_PARAMETERS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'THEME_SWITCHER' =>	array(
				'TITLE' => GetMessage('THEME_SWITCHER'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'BASE_COLOR' => array(
				'TITLE' => GetMessage('BASE_COLOR'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'CUSTOM' => array('COLOR' => '', 'TITLE' => GetMessage('BASE_COLOR_CUSTOM')),
					'1' => array('COLOR' => '#ffad00', 'TITLE' => GetMessage('BASE_COLOR_1')),
					'2' => array('COLOR' => '#ff6d00', 'TITLE' => GetMessage('BASE_COLOR_2')),
					'3' => array('COLOR' => '#e65100', 'TITLE' => GetMessage('BASE_COLOR_3')),
					'4' => array('COLOR' => '#de002b', 'TITLE' => GetMessage('BASE_COLOR_4')),
					'5' => array('COLOR' => '#b41818', 'TITLE' => GetMessage('BASE_COLOR_5')),
					'6' => array('COLOR' => '#bd1c3c', 'TITLE' => GetMessage('BASE_COLOR_6')),
					'7' => array('COLOR' => '#d75cb6', 'TITLE' => GetMessage('BASE_COLOR_7')),
					'8' => array('COLOR' => '#5f58ac', 'TITLE' => GetMessage('BASE_COLOR_8')),
					'9' => array('COLOR' => '#1976d2', 'TITLE' => GetMessage('BASE_COLOR_9')),
					'10' => array('COLOR' => '#0088cc', 'TITLE' => GetMessage('BASE_COLOR_10')),
					'11' => array('COLOR' => '#107bb1', 'TITLE' => GetMessage('BASE_COLOR_11')),
					'12' => array('COLOR' => '#497c9d', 'TITLE' => GetMessage('BASE_COLOR_12')),
					'13' => array('COLOR' => '#0fa8ae', 'TITLE' => GetMessage('BASE_COLOR_13')),
					'14' => array('COLOR' => '#0d897f', 'TITLE' => GetMessage('BASE_COLOR_14')),
					'15' => array('COLOR' => '#1b9e77', 'TITLE' => GetMessage('BASE_COLOR_15')),
					'16' => array('COLOR' => '#188b30', 'TITLE' => GetMessage('BASE_COLOR_16')),
					'17' => array('COLOR' => '#48a216', 'TITLE' => GetMessage('BASE_COLOR_17')),

				),
				'DEFAULT' => '9',
				'TYPE_EXT' => 'colorpicker',
				'THEME' => 'Y',
			),
			'BASE_COLOR_CUSTOM' => array(
				'TITLE' => GetMessage('BASE_COLOR_CUSTOM'),
				'TYPE' => 'text',
				'DEFAULT' => 'de002b',
				'PARENT_PROP' => 'BASE_COLOR',
				'THEME' => 'Y',
			),
			'BGCOLOR_THEME' => array(
				'TITLE' => GetMessage('BGCOLOR_THEME_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'CUSTOM' => array('COLOR' => '', 'TITLE' => GetMessage('COLOR_THEME_CUSTOM')),
					'LIGHT' => array('COLOR' => '#f6f6f7', 'TITLE' => GetMessage('BGCOLOR_THEME_LIGHT')),
					'DARK' => array('COLOR' => '#272a39', 'TITLE' => GetMessage('BGCOLOR_THEME_DARK')),

				),
				'DEFAULT' => 'LIGHT',
				'TYPE_EXT' => 'colorpicker',
				'THEME' => 'Y',
			),
			'CUSTOM_BGCOLOR_THEME' => array(
				'TITLE' => GetMessage('CUSTOM_BGCOLOR_THEME_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => 'f6f6f7',
				'PARENT_PROP' => 'BGCOLOR_THEME',
				'THEME' => 'Y',
			),
			'SHOW_BG_BLOCK' => array(
				'TITLE' => GetMessage('SHOW_BG_BLOCK_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
			'COLORED_LOGO' => array(
				'TITLE' => GetMessage('COLORED_LOGO'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'LOGO_IMAGE' => array(
				'TITLE' => GetMessage('LOGO_IMAGE'),
				'TYPE' => 'file',
				'DEFAULT' => serialize(array()),
				'THEME' => 'N',
			),
			'FAVICON_IMAGE' => array(
				'TITLE' => GetMessage('FAVICON_IMAGE'),
				'TYPE' => 'file',
				'DEFAULT' => serialize(array()),
				'THEME' => 'N',
			),
			'APPLE_TOUCH_ICON_IMAGE' => array(
				'TITLE' => GetMessage('APPLE_TOUCH_ICON_IMAGE'),
				'TYPE' => 'file',
				'DEFAULT' => serialize(array()),
				'THEME' => 'N',
			),
			'CUSTOM_FONT' => array(
				'TITLE' => GetMessage('CUSTOM_FONT_TITLE'),
				'TYPE' => 'text',
				'SIZE' => '',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'PAGE_WIDTH' => array(
				'TITLE' => GetMessage('PAGE_WIDTH'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => '1 700 px',
					'2' => '1 500 px',
					'3' => '1 344 px',
					'4' => '1 200 px'
				),
				'DEFAULT' => '3',
				'THEME' => 'Y',
			),
			'FONT_STYLE' => array(
				'TITLE' => GetMessage('FONT_STYLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => array(
						'TITLE' => '15px Open Sans',
						'GROUP' => 'Open Sans',
						'LINK' => 'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,500,600,700,800&subset=latin,cyrillic-ext',
						'VALUE' => '15 px',
					),
					'2' => array(
						'TITLE' => '14px Open Sans',
						'GROUP' => 'Open Sans',
						'LINK' => 'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,500,600,700,800&subset=latin,cyrillic-ext',
						'VALUE' => '14 px',
					),
					'3' => array(
						'TITLE' => '13px Open Sans',
						'GROUP' => 'Open Sans',
						'LINK' => 'Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,500,600,700,800&subset=latin,cyrillic-ext',
						'VALUE' => '13 px',
					),
					'4' => array(
						'TITLE' => '15px PT Sans Caption',
						'GROUP' => 'PT Sans',
						'LINK' => 'PT+Sans+Caption:400italic,700italic,400,700&subset=latin,cyrillic-ext',
						'VALUE' => '15 px',
					),
					'5' => array(
						'TITLE' => '14px PT Sans Caption',
						'GROUP' => 'PT Sans',
						'LINK' => 'PT+Sans+Caption:400italic,700italic,400,700&subset=latin,cyrillic-ext',
						'VALUE' => '14 px',
					),
					'6' => array(
						'TITLE' => '13px PT Sans Caption',
						'GROUP' => 'PT Sans',
						'LINK' => 'PT+Sans+Caption:400italic,700italic,400,700&subset=latin,cyrillic-ext',
						'VALUE' => '13 px',
					),
					'7' => array(
						'TITLE' => '15px Ubuntu',
						'GROUP' => 'Ubuntu',
						'LINK' => 'Ubuntu:300italic,400italic,500italic,700italic,400,300,500,700subset=latin,cyrillic-ext',
						'VALUE' => '15 px',
					),
					'8' => array(
						'TITLE' => '14px Ubuntu',
						'GROUP' => 'Ubuntu',
						'LINK' => 'Ubuntu:300italic,400italic,500italic,700italic,400,300,500,700subset=latin,cyrillic-ext',
						'VALUE' => '14 px',
					),
					'9' => array(
						'TITLE' => '13px Ubuntu',
						'GROUP' => 'Ubuntu',
						'LINK' => 'Ubuntu:300italic,400italic,500italic,700italic,400,300,500,700subset=latin,cyrillic-ext',
						'VALUE' => '13 px',
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
				'GROUPS' => 'Y',
			),
			'MENU_COLOR' => array(
				'TITLE' => GetMessage('MENU_COLOR_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'COLORED' => GetMessage('MENU_COLOR_COLORED'),
					'LIGHT' => GetMessage('MENU_COLOR_LIGHT'),
					'DARK' => GetMessage('MENU_COLOR_DARK'),
				),
				'DEFAULT' => 'COLORED',
				'THEME' => 'Y',
			),
			'LEFT_BLOCK' => array(
				'TITLE' => GetMessage('LEFT_BLOCK_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => GetMessage('LEFT_BLOCK_FULL'),
					'2' => GetMessage('LEFT_BLOCK_MIDDLE'),
					'3' => GetMessage('LEFT_BLOCK_SMALL'),
					'custom' => array(
						'TITLE' => 'Custom',
						'HIDE' => 'Y'
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
			),
			'SIDE_MENU' => array(
				'TITLE' => GetMessage('SIDE_MENU'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'LEFT' => GetMessage('SIDE_MENU_LEFT'),
					'RIGHT' => GetMessage('SIDE_MENU_RIGHT'),
				),
				'DEFAULT' => 'LEFT',
				'THEME' => 'Y',
			),
			'H1_STYLE' => array(
				'TITLE' => GetMessage('H1FONT'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => array(
						'TITLE' => 'Bold',
						'GROUP' => GetMessage('H1FONT_STYLE'),
						'VALUE' => 'Bold',
					),
					'2' => array(
						'TITLE' => 'Normal',
						'GROUP' => GetMessage('H1FONT_STYLE'),
						'VALUE' => 'Normal',
					)
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
				'GROUPS' => 'Y',
			),
			'TYPE_SEARCH' => array(
				'TITLE' => GetMessage('TYPE_SEARCH'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'corp' => '1',
					'fixed' => '2',
					'custom' => array(
						'TITLE' => 'Custom',
						'HIDE' => 'Y'
					)
				),
				'DEFAULT' => 'fixed',
				'THEME' => 'Y',
			),
			'PAGE_TITLE' => array(
				'TITLE' => GetMessage('PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => '1',
					'2' => '2',
					'3' => '3',
					'4' => '4',
					'custom' => array(
						'TITLE' => 'Custom',
						'HIDE' => 'Y'
					),
				),
				'DEFAULT' => '3',
				'THEME' => 'Y',
			),
			'HOVER_TYPE_IMG' => array(
				'TITLE' => GetMessage('HOVER_TYPE_IMG_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'shine' => GetMessage('HOVER_TYPE_IMG_SHINE'),
					'blink' => GetMessage('HOVER_TYPE_IMG_BLINK'),
					'none' => GetMessage('HOVER_TYPE_IMG_NONE'),
				),
				'DEFAULT' => 'shine',
				'THEME' => 'Y',
			),
			'SHOW_LICENCE' => array(
				'TITLE' => GetMessage('SHOW_LICENCE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'ONE_ROW' => 'Y',
				'HINT' => GetMessage('LICENCE_TEXT_VALUE_HINT'),
				'DEPENDENT_PARAMS' => array(
					'LICENCE_CHECKED' => array(
						'TITLE' => GetMessage('LICENCE_CHECKED_TITLE'),
						'TYPE' => 'checkbox',
						'CONDITIONAL_VALUE' => 'Y',
						'DEFAULT' => 'N',
						'THEME' => 'N',
					),
					'LICENCE_TEXT' => array(
						'TITLE' => GetMessage('LICENCE_TEXT_TITLE'),
						'HIDE_TITLE' => 'Y',
						'TYPE' => 'includefile',
						'INCLUDEFILE' => '#SITE_DIR#include/licenses_text.php',
						'CONDITIONAL_VALUE' => 'Y',
						'PARAMS' => array(
							'WIDTH' => '100%'
						),
						'DEFAULT' => GetMessage('LICENCE_TEXT_VALUE'),
						'THEME' => 'N',
					),
				),
				'THEME' => 'Y',
			),
			'MAX_DEPTH_MENU' => array(
				'TITLE' => GetMessage('MAX_DEPTH_MENU_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'2' => 2,
					'3' => 3,
					'4' => 4,
				),
				'DEFAULT' => '4',
				'THEME' => 'Y',
			),
			'MAX_VISIBLE_ITEMS_MENU' => array(
				'TITLE' => GetMessage('MAX_VISIBLE_ITEMS_MENU_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '10',
				'THEME' => 'N',
			),
			'HIDE_SITE_NAME_TITLE' => array(
				'TITLE' => GetMessage('HIDE_SITE_NAME_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'STORES_SOURCE' => array(
				'TITLE' => GetMessage('STORES_SOURCE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'STORES' => GetMessage('STORES_SOURCE_STORES'),
					'IBLOCK' => GetMessage('STORES_SOURCE_STORES_IBLOCK'),
				),
				'TYPE_SELECT' => 'STORES',
				'DEFAULT' => 'IBLOCK',
				'THEME' => 'N',
			),
			'SHOW_CALLBACK' => array(
				'TITLE' => GetMessage('SHOW_CALLBACK_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'ONE_ROW' => 'Y',
				'THEME' => 'Y',
			),
			'PRINT_BUTTON' => array(
				'TITLE' => GetMessage('PRINT_BUTTON'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'ONE_ROW' => 'Y',
				'THEME' => 'Y',
			),
			'SCROLLTOTOP_TYPE' => array(
				'TITLE' => GetMessage('SCROLLTOTOP_TYPE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'NONE' => GetMessage('SCROLLTOTOP_TYPE_NONE'),
					'ROUND_COLOR' => GetMessage('SCROLLTOTOP_TYPE_ROUND_COLOR'),
					'ROUND_GREY' => GetMessage('SCROLLTOTOP_TYPE_ROUND_GREY'),
					'ROUND_WHITE' => GetMessage('SCROLLTOTOP_TYPE_ROUND_WHITE'),
					'RECT_COLOR' => GetMessage('SCROLLTOTOP_TYPE_RECT_COLOR'),
					'RECT_GREY' => GetMessage('SCROLLTOTOP_TYPE_RECT_GREY'),
					'RECT_WHITE' => GetMessage('SCROLLTOTOP_TYPE_RECT_WHITE'),
				),
				'DEFAULT' => 'ROUND_COLOR',
				'THEME' => 'N',
			),
			'SCROLLTOTOP_POSITION' => array(
				'TITLE' => GetMessage('SCROLLTOTOP_POSITION'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'TOUCH' => GetMessage('SCROLLTOTOP_POSITION_TOUCH'),
					'PADDING' => GetMessage('SCROLLTOTOP_POSITION_PADDING'),
					'CONTENT' => GetMessage('SCROLLTOTOP_POSITION_CONTENT'),
				),
				'DEFAULT' => 'PADDING',
				'THEME' => 'N',
			),
		),
	),
	'GOOGLE_RECAPTCHA' => array(
		'TITLE' => GetMessage('GOOGLE_RECAPTCHA'),
		'OPTIONS' => array(
			'USE_GOOGLE_RECAPTCHA' => array(
				'TITLE' => GetMessage('USE_GOOGLE_RECAPTCHA_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_PUBLIC_KEY' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_PUBLIC_KEY_TITLE'),
				'TYPE' => 'text',
				'SIZE' => '75',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_PRIVATE_KEY' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_PRIVATE_KEY_TITLE'),
				'TYPE' => 'text',
				'SIZE' => '75',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_MASK_PAGE' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_MASK_PAGE_TITLE'),
				'TYPE' => 'textarea',
				'ROWS' => '5',
				'COLS' => '77',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_COLOR' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_COLOR_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'DARK' => GetMessage('GOOGLE_RECAPTCHA_COLOR_DARK_TITLE'),
					'LIGHT' => GetMessage('GOOGLE_RECAPTCHA_COLOR_LIGHT_TITLE'),
				),
				'DEFAULT' => 'LIGHT',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_SIZE' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_SIZE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'NORMAL' => GetMessage('GOOGLE_RECAPTCHA_SIZE_NORMAL_TITLE'),
					'COMPACT' => GetMessage('GOOGLE_RECAPTCHA_SIZE_COMPACT_TITLE'),
					'INVISIBLE' => GetMessage('GOOGLE_RECAPTCHA_SIZE_INVISIBLE_TITLE'),
				),
				'DEFAULT' => 'NORMAL',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_SHOW_LOGO' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_SHOW_LOGO_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_BADGE' => array(
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_BADGE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'BOTTOMRIGHT' => GetMessage('GOOGLE_RECAPTCHA_BADGE_BOTTOMRIGHT_TITLE'),
					'BOTTOMLEFT' => GetMessage('GOOGLE_RECAPTCHA_BADGE_BOTTOMLEFT_TITLE'),
					'INLINE' => GetMessage('GOOGLE_RECAPTCHA_BADGE_INLINE_TITLE'),
				),
				'DEFAULT' => 'BOTTOMRIGHT',
				'THEME' => 'N',
			),
			'GOOGLE_RECAPTCHA_NOTE' => array(
				'TYPE' => 'note',
				'TITLE' => GetMessage('GOOGLE_RECAPTCHA_NOTE_TEXT'),
				'THEME' => 'N',
			),
		),
	),
	'FORMS' => array(
		'TITLE' => GetMessage('FORMS_OPTIONS'),
		'OPTIONS' => array(
			'HIDDEN_CAPTCHA' => array(
				'TITLE' => GetMessage('HIDDEN_CAPTCHA_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			/*'CAPTCHA_FORM_TYPE' => array(
				'TITLE' => GetMessage('CAPTCHA_FORM_TYPE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'NONE' => GetMessage('VALIDATION_NONE'),
					'IMG' => GetMessage('VALIDATION_IMG'),
					'HIDE' => GetMessage('VALIDATION_HIDE'),
				),
				'DEFAULT' => 'HIDE',
				'THEME' => 'N',
			),*/
			'PHONE_MASK' => array(
				'TITLE' => GetMessage('PHONE_MASK'),
				'TYPE' => 'text',
				'DEFAULT' => '+7 (999) 999-99-99',
				'THEME' => 'N',
			),
			'VALIDATE_PHONE_MASK' => array(
				'TITLE' => GetMessage('VALIDATE_PHONE_MASK'),
				'TYPE' => 'text',
				'DEFAULT' => '^[+][0-9] [(][0-9]{3}[)] [0-9]{3}[-][0-9]{2}[-][0-9]{2}$',
				'THEME' => 'N',
			),
			'DATE_FORMAT' => array(
				'TITLE' => GetMessage('DATE_FORMAT'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'DOT' => GetMessage('DATE_FORMAT_DOT'),
					'HYPHEN' => GetMessage('DATE_FORMAT_HYPHEN'),
					'SPACE' => GetMessage('DATE_FORMAT_SPACE'),
					'SLASH' => GetMessage('DATE_FORMAT_SLASH'),
					'COLON' => GetMessage('DATE_FORMAT_COLON'),
				),
				'DEFAULT' => 'DOT',
				'THEME' => 'N',
			),
			'VALIDATE_FILE_EXT' => array(
				'TITLE' => GetMessage('VALIDATE_FILE_EXT'),
				'TYPE' => 'text',
				'DEFAULT' => 'png|jpg|jpeg|gif|doc|docx|xls|xlsx|txt|pdf|odt|rtf',
				'THEME' => 'N',
			),
		),
	),
	'SOCIAL' => array(
		'TITLE' => GetMessage('SOCIAL_OPTIONS'),
		'OPTIONS' => array(
			'SOCIAL_VK' => array(
				'TITLE' => GetMessage('SOCIAL_VK'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_FACEBOOK' => array(
				'TITLE' => GetMessage('SOCIAL_FACEBOOK'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_TWITTER' =>	array(
				'TITLE' => GetMessage('SOCIAL_TWITTER'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_INSTAGRAM' => array(
				'TITLE' => GetMessage('SOCIAL_INSTAGRAM'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_TELEGRAM' => array(
				'TITLE' => GetMessage('SOCIAL_TELEGRAM'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_YOUTUBE' => array(
				'TITLE' => GetMessage('SOCIAL_YOUTUBE'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_ODNOKLASSNIKI' => array(
				'TITLE' => GetMessage('SOCIAL_ODNOKLASSNIKI'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_GOOGLEPLUS' => array(
				'TITLE' => GetMessage('SOCIAL_GOOGLEPLUS'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SOCIAL_MAIL' => array(
				'TITLE' => GetMessage('SOCIAL_MAILRU'),
				'TYPE' => 'text',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
		),
	),
	'INSTAGRAMM_SETTINGS' => array(
		'TITLE' => GetMessage('INSTAGRAMM_INDEX'),
		'THEME' => 'N',
		'OPTIONS' => array(
			'API_TOKEN_INSTAGRAMM' => array(
				'TITLE' => GetMessage('API_TOKEN_INSTAGRAMM'),
				'TYPE' => 'text',
				'SIZE' => '50',
				'DEFAULT' => '1056017790.9b6cbfe.4dfb9d965b5c4c599121872c23b4dfd0',
				'THEME' => 'N',
			),
			'INSTAGRAMM_TITLE_BLOCK' => array(
				'TITLE' => GetMessage('INSTAGRAMM_TITLE_BLOCK'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('INSTAGRAMM_VALUE'),
				'THEME' => 'N',
			),
			'INSTAGRAMM_WIDE_BLOCK' => array(
				'TITLE' => GetMessage('INSTAGRAMM_WIDE_BLOCK'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'INSTAGRAMM_WIDE_BLOCK_NOTE' => array(
				'TITLE' => GetMessage('INSTAGRAMM_WIDE_BLOCK_NOTE_TEXT'),
				'TYPE' => 'note',
				'THEME' => 'N',
			),
			'INSTAGRAMM_TEXT_LENGTH' => array(
				'TITLE' => GetMessage('INSTAGRAMM_TEXT_LENGTH'),
				'TYPE' => 'text',
				'DEFAULT' => '400',
				'THEME' => 'N',
			),
			'INSTAGRAMM_ITEMS_COUNT' => array(
				'TITLE' => GetMessage('INSTAGRAMM_ITEMS_COUNT'),
				'TYPE' => 'text',
				'DEFAULT' => '8',
				'THEME' => 'N',
			),
			'INSTAGRAMM_ITEMS_VISIBLE' => array(
				'TITLE' => GetMessage('INSTAGRAMM_ITEMS_VISIBLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'4' => 4,
					'5' => 5,
					'6' => 6,
				),
				'DEFAULT' => 4,
				'THEME' => 'N',
			),
		)
	),
	'INDEX_PAGE' => array(
		'TITLE' => GetMessage('INDEX_PAGE_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			/*'BANNER_WIDTH' => array(
				'TITLE' => GetMessage('BANNER_WIDTH'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'AUTO' => GetMessage('BANNER_WIDTH_AUTO'),
					'WIDE' => GetMessage('BANNER_WIDTH_WIDE'),
					'MIDDLE' => GetMessage('BANNER_WIDTH_MIDDLE'),
					'NARROW' => GetMessage('BANNER_WIDTH_NARROW'),
				),
				'DEFAULT' => 'AUTO',
				'THEME' => 'Y',
			),*/
			'BIGBANNER_ANIMATIONTYPE' => array(
				'TITLE' => GetMessage('BIGBANNER_ANIMATIONTYPE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'SLIDE_HORIZONTAL' => GetMessage('ANIMATION_SLIDE_HORIZONTAL'),
					'SLIDE_VERTICAL' => GetMessage('ANIMATION_SLIDE_VERTICAL'),
					'FADE' => GetMessage('ANIMATION_FADE'),
				),
				'DEFAULT' => 'SLIDE_HORIZONTAL',
				'THEME' => 'N',
			),
			'BIGBANNER_SLIDESSHOWSPEED' => array(
				'TITLE' => GetMessage('BIGBANNER_SLIDESSHOWSPEED'),
				'TYPE' => 'text',
				'DEFAULT' => '5000',
				'THEME' => 'N',
			),
			'BIGBANNER_ANIMATIONSPEED' => array(
				'TITLE' => GetMessage('BIGBANNER_ANIMATIONSPEED'),
				'TYPE' => 'text',
				'DEFAULT' => '600',
				'THEME' => 'N',
			),
			'BIGBANNER_HIDEONNARROW' => array(
				'TITLE' => GetMessage('BIGBANNER_HIDEONNARROW'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'PARTNERSBANNER_SLIDESSHOWSPEED' => array(
				'TITLE' => GetMessage('PARTNERSBANNER_SLIDESSHOWSPEED'),
				'TYPE' => 'text',
				'DEFAULT' => '5000',
				'THEME' => 'N',
			),
			'PARTNERSBANNER_ANIMATIONSPEED' => array(
				'TITLE' => GetMessage('PARTNERSBANNER_ANIMATIONSPEED'),
				'TYPE' => 'text',
				'DEFAULT' => '600',
				'THEME' => 'N',
			),
			'INDEX_TYPE' => array(
				'TITLE' => GetMessage('INDEX_TYPE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'index1' => '1',
					'index2' => '2',
					'index3' => '3',
					'index4' => '4',
					'custom' => array(
						'TITLE' => 'Custom',
						'HIDE' => 'Y'
					),
				),
				'DEFAULT' => 'index1',
				'THEME' => 'Y',
				'REFRESH' => 'Y',
				'PREVIEW' => array(
					'URL' => ''
				),
				'SUB_PARAMS' => array(
					'index1' => array(
						'WITH_LEFT_BLOCK' => array(
							'TITLE' => GetMessage('WITH_LEFT_BLOCK_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'N',
							'VISIBLE' => 'N',
							'THEME' => 'N',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'TIZERS' => array(
							'TITLE' => GetMessage('TIZERS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'CATALOG_SECTIONS' => array(
							'TITLE' => GetMessage('CATALOG_SECTIONS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'CATALOG_TAB' => array(
							'TITLE' => GetMessage('CATALOG_TAB_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'MIDDLE_ADV' => array(
							'TITLE' => GetMessage('MIDDLE_ADV_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'SALE' => array(
							'TITLE' => GetMessage('SALE_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'BLOG' => array(
							'TITLE' => GetMessage('BLOG_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'BOTTOM_BANNERS' => array(
							'TITLE' => GetMessage('BOTTOM_BANNERS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'COMPANY_TEXT' => array(
							'TITLE' => GetMessage('COMPANY_TEXT_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'BRANDS' => array(
							'TITLE' => GetMessage('BRANDS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'INSTAGRAMM' => array(
							'TITLE' => GetMessage('INSTAGRAMM_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'N',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
					),
					'index2' => array(
						'WITH_LEFT_BLOCK' => array(
							'TITLE' => GetMessage('WITH_LEFT_BLOCK_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'N',
							'VISIBLE' => 'N',
							'THEME' => 'N',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
					),
					'index3' => array(
						'WITH_LEFT_BLOCK' => array(
							'TITLE' => GetMessage('WITH_LEFT_BLOCK_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'VISIBLE' => 'N',
							'THEME' => 'N',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'TOP_ADV_BOTTOM_BANNER' => array(
							'TITLE' => GetMessage('TOP_ADV_BOTTOM_BANNER_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'FLOAT_BANNER' => array(
							'TITLE' => GetMessage('FLOAT_BANNER_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'CATALOG_SECTIONS' => array(
							'TITLE' => GetMessage('CATALOG_SECTIONS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'CATALOG_TAB' => array(
							'TITLE' => GetMessage('CATALOG_TAB_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'TIZERS' => array(
							'TITLE' => GetMessage('TIZERS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'SALE' => array(
							'TITLE' => GetMessage('SALE_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'BOTTOM_BANNERS' => array(
							'TITLE' => GetMessage('BOTTOM_BANNERS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'COMPANY_TEXT' => array(
							'TITLE' => GetMessage('COMPANY_TEXT_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'BRANDS' => array(
							'TITLE' => GetMessage('BRANDS_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
						'INSTAGRAMM' => array(
							'TITLE' => GetMessage('INSTAGRAMM_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'N',
							'THEME' => 'Y',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
					),
					'index4' => array(
						'WITH_LEFT_BLOCK' => array(
							'TITLE' => GetMessage('WITH_LEFT_BLOCK_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'Y',
							'VISIBLE' => 'N',
							'THEME' => 'N',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
					),
					'custom' => array(
						'WITH_LEFT_BLOCK' => array(
							'TITLE' => GetMessage('WITH_LEFT_BLOCK_INDEX'),
							'TYPE' => 'checkbox',
							'DEFAULT' => 'N',
							'ONE_ROW' => 'Y',
							'SMALL_TOGGLE' => 'Y',
						),
					),
				)
			),
			'FRONT_PAGE_BRANDS' => array(
				'TITLE' => GetMessage('FRONT_PAGE_BRANDS_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'brands_slider' => GetMessage('PAGE_SLIDER'),
					'brands_list' => GetMessage('PAGE_LIST'),
				),
				'DEFAULT' => 'brands_slider',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'SCROLL_BLOCK' => '.brand_main_wrapper',
					'URL' => '',
				),
			),
			'FRONT_PAGE_SECTIONS' => array(
				'TITLE' => GetMessage('FRONT_PAGE_SECTIONS_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'front_sections_only' => GetMessage('FRONT_PAGE_SECTIONS_BLOCK'),
					'front_sections_with_childs' => GetMessage('FRONT_PAGE_SECTIONS_CHILDS'),
				),
				'DEFAULT' => 'front_sections_only',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'SCROLL_BLOCK' => '.sections_wrapper',
					'URL' => '',
				),
			),
		),
	),
	'HEADER' => array(
		'TITLE' => GetMessage('HEADER_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'TOP_MENU_FIXED' => array(
				'TITLE' => GetMessage('TOP_MENU_FIXED'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
				'ONE_ROW' => 'Y',
				'DEPENDENT_PARAMS' => array(
					'HEADER_FIXED' => array(
						'TITLE' => GetMessage('HEADER_FIXED'),
						'HIDE_TITLE' => 'Y',
						'TYPE' => 'selectbox',
						'LIST' => array(
							'1' => array(
								'IMG' => '/bitrix/images/'.$solution.'/themes/fixed_header1.png',
								'TITLE' => '1',
								'POSITION_BLOCK' => 'block',
								'POSITION_TITLE' => 'left',
							),
							'2' => array(
								'IMG' => '/bitrix/images/'.$solution.'/themes/fixed_header2.png',
								'TITLE' => '2',
								'POSITION_BLOCK' => 'block',
								'POSITION_TITLE' => 'left',
							),
							'custom' => array(
								'TITLE' => 'Custom',
								'POSITION_BLOCK' => 'block',
								'HIDE' => 'Y'
							),
						),
						'CONDITIONAL_VALUE' => 'Y',
						'DEFAULT' => '2',
						'THEME' => 'Y',
					),
				)
			),
			'HEADER_TYPE' => array(
				'TITLE' => GetMessage('HEADER_TYPE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header1.png',
						'TITLE' => '1',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'2' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header2.png',
						'TITLE' => '2',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'3' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header3.png',
						'TITLE' => '3',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'4' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header4.png',
						'TITLE' => '4',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'5' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header5.png',
						'TITLE' => '5',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'6' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header6.png',
						'TITLE' => '6',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'7' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header7.png',
						'TITLE' => '7',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'8' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header8.png',
						'TITLE' => '8',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'9' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header9.png',
						'TITLE' => '9',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'10' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header10.png',
						'TITLE' => '10',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'11' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header11.png',
						'TITLE' => '11',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'12' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header12.png',
						'TITLE' => '12',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'13' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header13.png',
						'TITLE' => '13',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'14' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header14.png',
						'TITLE' => '14',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'15' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header15.png',
						'TITLE' => '15',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'16' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header16.png',
						'TITLE' => '16',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'17' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header17.png',
						'TITLE' => '17',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'custom' => array(
						'TITLE' => 'Custom',
						'POSITION_BLOCK' => 'block',
						'HIDE' => 'Y'
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
			),
			'HEADER_PHONES' => array(
				'TITLE' => GetMessage('HEADER_PHONES_OPTIONS_TITLE'),
				'TYPE' => 'array',
				'THEME' => 'N',
				'OPTIONS' => $arContactOptions = array(
					'PHONE_VALUE' => array(
						'TITLE' => GetMessage('HEADER_PHONE_OPTION_VALUE_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => '',
						'THEME' => 'N',
						'REQUIRED' => 'Y',
					),
				),
			),
		),
	),
	'REGIONALITY_PAGE' => array(
		'TITLE' => GetMessage('REGIONALITY_PAGE_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'USE_REGIONALITY' => array(
				'TITLE' => GetMessage('USE_REGIONALITY_TITLE'),
				'TYPE' => 'checkbox',
				'DEPENDENT_PARAMS' => array(
					'REGIONALITY_TYPE' => array(
						'TITLE' => GetMessage('REGIONALITY_TYPE_TITLE'),
						'HIDE_TITLE' => 'Y',
						'TYPE' => 'selectbox',
						'LIST' => array(
							'ONE_DOMAIN' => GetMessage('REGIONALITY_TYPE_ONE_DOMAIN'),
							'SUBDOMAIN' => GetMessage('REGIONALITY_TYPE_SUBDOMAIN'),
						),
						'DEFAULT' => 'ONE_DOMAIN',
						'THEME' => 'Y',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'REGIONALITY_VIEW' => array(
						'TITLE' => GetMessage('REGIONALITY_VIEW_TITLE'),
						'TOP_BORDER' => 'Y',
						'TYPE' => 'selectbox',
						'LIST' => array(
							'SELECT' => GetMessage('REGIONALITY_VIEW_SELECT'),
							'POPUP_REGIONS' => GetMessage('REGIONALITY_VIEW_POPUP_EXT'),
							'POPUP_REGIONS_SMALL' => GetMessage('REGIONALITY_VIEW_POPUP_SMALL'),
						),
						'DEFAULT' => 'POPUP_REGIONS',
						'THEME' => 'Y',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'REGIONALITY_FILTER_ITEM' => array(
						'TITLE' => GetMessage('REGIONALITY_FILTER_ITEM_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'N',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'REGIONALITY_FILTER_ITEM_NOTE' => array(
						'NOTE' => GetMessage('REGIONALITY_FILTER_ITEM_NOTE_TEXT'),
						'TYPE' => 'note',
						'DEFAULT' => 'N',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'REGIONALITY_SEARCH_ROW' => array(
						'TITLE' => GetMessage('REGIONALITY_SEARCH_ROW_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'N',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'REGIONALITY_SEARCH_ROW_NOTE' => array(
						'NOTE' => GetMessage('REGIONALITY_SEARCH_ROW_NOTE_TEXT'),
						'TYPE' => 'note',
						'DEFAULT' => 'N',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
				),
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
		)
	),
	'CATALOG_PAGE' => array(
		'TITLE' => GetMessage('CATALOG_PAGE_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'FILTER_VIEW' => array(
				'TITLE' => GetMessage('M_FILTER_VIEW'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'VERTICAL' => GetMessage('M_FILTER_VIEW_VERTICAL'),
					'HORIZONTAL' => GetMessage('M_FILTER_VIEW_HORIZONTAL'),
				),
				'DEFAULT' => 'VERTICAL',
				'THEME' => 'Y',
			),
			'SEARCH_VIEW_TYPE' => array(
				'TITLE' => GetMessage('SEARCH_VIEW_TYPE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'with_menu' => array(
						'TITLE' => GetMessage('SEARCH_VIEW_TYPE_NORMAL'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/search1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'with_filter' => array(
						'TITLE' => GetMessage('SEARCH_VIEW_TYPE_FILTER'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/search2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'with_menu',
				'THEME' => 'Y',
			),
			'USE_FAST_VIEW_PAGE_DETAIL' => array(
				'TITLE' => GetMessage('USE_FAST_VIEW_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'NO' => GetMessage('NO'),
					'fast_view_1' => 1,
				),
				'DEFAULT' => 'fast_view_1',
				'THEME' => 'Y',
			),
			'SHOW_TOTAL_SUMM' => array(
				'TITLE' => GetMessage('SHOW_TOTAL_SUMM_TITLE'),
				'TYPE' => 'checkbox',
				'DEPENDENT_PARAMS' => array(
					'SHOW_TOTAL_SUMM_TYPE' => array(
						'TITLE' => GetMessage('SHOW_TOTAL_SUMM_TYPE_TITLE'),
						'TYPE' => 'selectbox',
						'LIST' => array(
							'ALWAYS' => GetMessage('SHOW_TOTAL_SUMM_TYPE_ALWAYS'),
							'CHANGE' => GetMessage('SHOW_TOTAL_SUMM_TYPE_CHANGE'),
						),
						'DEFAULT' => 'CHANGE',
						'THEME' => 'Y',
						'HIDE_TITLE' => 'Y',
						'CONDITIONAL_VALUE' => 'Y',
					),
				),
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
			'CHANGE_TITLE_ITEM' => array(
				'TITLE' => GetMessage('CHANGE_TITLE_ITEM_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
			'VIEW_TYPE_HIGHLOAD_PROP' => array(
				'TITLE' => GetMessage('VIEW_TYPE_HIGHLOAD_PROP_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
			'SHOW_HEADER_GOODS' => array(
				'TITLE' => GetMessage('SHOW_HEADER_GOODS_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
			),
			'SEARCH_HIDE_NOT_AVAILABLE' => array(
				'TITLE' => GetMessage('SEARCH_HIDE_NOT_AVAILABLE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'LEFT_BLOCK_CATALOG_ICONS' => array(
				'TITLE' => GetMessage('LEFT_BLOCK_CATALOG_ICONS_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
			'SHOW_CATALOG_SECTIONS_ICONS' => array(
				'TITLE' => GetMessage('SHOW_CATALOG_SECTIONS_ICONS_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
			),
			'LEFT_BLOCK_CATALOG_DETAIL' => array(
				'TITLE' => GetMessage('LEFT_BLOCK_CATALOG_DETAIL_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
			),
			'CATALOG_PAGE_DETAIL' => array(
				'TITLE' => GetMessage('CATALOG_DETAIL_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'element_1' => array(
						'TITLE' => GetMessage('PAGE_TAB'),
					),
					'element_2' => array(
						'TITLE' => GetMessage('PAGE_NOTAB'),
					),
					'element_3' => array(
						'TITLE' => GetMessage('PAGE_CLOTHES'),
					),
					'element_4' => array(
						'TITLE' => GetMessage('PAGE_STROY'),
					),
					'element_5' => array(
						'TITLE' => GetMessage('PAGE_BIGA'),
					),
				),
				'DEFAULT' => 'element_1',
				'THEME' => 'Y',
			),
			'CATALOG_IBLOCK_ID' => array(
				'TITLE' => GetMessage('CATALOG_IBLOCK_ID_TITLE'),
				'TYPE' => 'selectbox',
				'TYPE_SELECT' => 'IBLOCK',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'DISCOUNT_PRICE' => array(
				'TITLE' => GetMessage('DISCOUNT_PRICE_TITLE'),
				'TYPE' => 'multiselectbox',
				'TYPE_SELECT' => 'PRICES',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SHOW_BREADCRUMBS_CATALOG_SUBSECTIONS' => array(
				'TITLE' => GetMessage('SHOW_BREADCRUMBS_CATALOG_SUBSECTIONS_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
			),
			'SHOW_BREADCRUMBS_CATALOG_CHAIN' => array(
				'TITLE' => GetMessage('SHOW_BREADCRUMBS_CATALOG_CHAIN_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'H1' => GetMessage('SHOW_BREADCRUMBS_CATALOG_CHAIN_H1'),
					'NAME' => GetMessage('SHOW_BREADCRUMBS_CATALOG_CHAIN_NAME'),
				),
				'DEFAULT' => 'H1',
				'THEME' => 'Y',
			),
			'SHOW_SECTION_DESCRIPTION' => array(
				'TITLE' => GetMessage('SHOW_SECTION_DESCRIPTION_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'TOP' => GetMessage('TOP_SECTION'),
					'BOTTOM' => GetMessage('BOTTOM_SECTION'),
					'BOTH' => GetMessage('BOTH_SECTION'),
				),
				'DEFAULT' => 'BOTTOM',
				'THEME' => 'N',
			),
			'TOP_SECTION_DESCRIPTION_POSITION' => array(
				'TITLE' => GetMessage('TOP_SECTION_DESCRIPTION_POSITION_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'DESCRIPTION' => GetMessage('DESCRIPTION_SECTION').'(DESCRIPTION)',
					'UF_SECTION_DESCR' => GetMessage('SEO_DESCRIPTION_SECTION').'(UF_SECTION_DESCR)',
				),
				'DEFAULT' => 'UF_SECTION_DESCR',
				'THEME' => 'N',
			),
			'BOTTOM_SECTION_DESCRIPTION_POSITION' => array(
				'TITLE' => GetMessage('BOTTOM_SECTION_DESCRIPTION_POSITION_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'DESCRIPTION' => GetMessage('DESCRIPTION_SECTION').'(DESCRIPTION)',
					'UF_SECTION_DESCR' => GetMessage('SEO_DESCRIPTION_SECTION').'(UF_SECTION_DESCR)',
				),
				'DEFAULT' => 'DESCRIPTION',
				'THEME' => 'N',
			),
			'ITEM_STICKER_CLASS_SOURCE' => array(
				'TITLE' => GetMessage('ITEM_STICKER_CLASS_SOURCE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'PROPERTY_VALUE' => GetMessage('ITEM_STICKER_CLASS_SOURCE_PROPERTY_VALUE'),
					'PROPERTY_XML_ID' => GetMessage('ITEM_STICKER_CLASS_SOURCE_PROPERTY_XML_ID'),
				),
				'DEFAULT' => 'PROPERTY_VALUE',
				'THEME' => 'N',
			),
			'TYPE_SKU' => array(
				'TITLE' => GetMessage('TYPE_SKU_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'TYPE_1' => 1,
					'TYPE_2' => 2,
				),
				'DEFAULT' => 'TYPE_1',
				'THEME' => 'Y',
			),
			'DETAIL_PICTURE_MODE' => array(
				'TITLE' => GetMessage('DETAIL_PICTURE_MODE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'POPUP' => GetMessage('DETAIL_PICTURE_MODE_POPUP'),
					'MAGNIFIER' => GetMessage('DETAIL_PICTURE_MODE_MAGNIFIER'),
				),
				'DEFAULT' => 'POPUP',
				'THEME' => 'Y',
			),
			'MENU_POSITION' => array(
				'TITLE' => GetMessage('MENU_POSITION_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'TOP' => GetMessage('TOP_MENU_HOVER'),
					'LINE' => GetMessage('LINE_MENU_HOVER'),
				),
				'DEFAULT' => 'LINE',
				'THEME' => 'Y',
			),
			'MENU_TYPE_VIEW' => array(
				'TITLE' => GetMessage('MENU_TYPE_VIEW_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'HOVER' => GetMessage('MENU_TYPE_VIEW_HOVER'),
					'BOTTOM' => GetMessage('MENU_TYPE_VIEW_BOTTOM'),
				),
				'DEFAULT' => 'HOVER',
				'THEME' => 'Y',
			),
			'VIEWED_TYPE' => array(
				'TITLE' => GetMessage('VIEWED_TYPE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'LOCAL' => GetMessage('VIEWED_TYPE_LOGIC_COOKIE'),
					'COMPONENT' => GetMessage('VIEWED_TYPE_LOGIC_COMPONENT'),
				),
				'DEFAULT' => 'LOCAL',
				'THEME' => 'Y',
			),
			'VIEWED_TEMPLATE' => array(
				'TITLE' => GetMessage('VIEWED_TEMPLATE_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'VERTICAL' => GetMessage('VIEWED_TEMPLATE_VERTICAL'),
					'HORIZONTAL' => GetMessage('VIEWED_TEMPLATE_HORIZONTAL'),
				),
				'DEFAULT' => 'HORIZONTAL',
				'THEME' => 'Y',
			),
			'GRUPPER_PROPS' => array(
				'TITLE' => GetMessage('GRUPPER_PROPS_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'NOT' => array(
						"TITLE" => GetMessage('GRUPPER_PROPS_NO')
					),
				),
				'DEFAULT' => 'NOT',
				'THEME' => 'N',
			),
		),
	),
	'QUANTITY' => array(
		'TITLE' => GetMessage('QUANTITY_OPTIONS'),
		'THEME' => 'N',
		'OPTIONS' => array(
			'SHOW_QUANTITY_FOR_GROUPS' => array(
				'TITLE' => GetMessage('SHOW_QUANTITY_FOR_GROUPS_TITLE'),
				'TYPE' => 'multiselectbox',
				'TYPE_SELECT' => 'GROUP',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SHOW_QUANTITY_COUNT_FOR_GROUPS' => array(
				'TITLE' => GetMessage('SHOW_QUANTITY_COUNT_FOR_GROUPS_TITLE'),
				'TYPE' => 'multiselectbox',
				'TYPE_SELECT' => 'GROUP',
				'DEFAULT' => '',
				'THEME' => 'N',
			),
			'SHOW_QUANTITY_NOTE' => array(
				'TITLE' => GetMessage('SHOW_QUANTITY_NOTE'),
				'TYPE' => 'note',
				'THEME' => 'N',
			),
			'USE_WORD_EXPRESSION' => array(
				'TITLE' => GetMessage('USE_WORD_EXPRESSION_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
				'DEPENDENT_PARAMS' => array(
					'MAX_AMOUNT' => array(
						'TITLE' => GetMessage('MAX_AMOUNT_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => '10',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'MIN_AMOUNT' => array(
						'TITLE' => GetMessage('MIN_AMOUNT_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => '2',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
				)
			),
		),
	),
	'EXPRESSIONS' => array(
		'TITLE' => GetMessage('EXPRESSIONS_OPTIONS'),
		'THEME' => 'N',
		'OPTIONS' => array(
			'EXPRESSION_ADDTOBASKET_BUTTON_DEFAULT' => array(
				'TITLE' => GetMessage('EXPRESSION_ADDTOBASKET_BUTTON_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_ADDTOBASKET_BUTTON_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_ADDEDTOBASKET_BUTTON_DEFAULT' => array(
				'TITLE' => GetMessage('EXPRESSION_ADDEDTOBASKET_BUTTON_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_ADDEDTOBASKET_BUTTON_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_READ_MORE_OFFERS_DEFAULT' => array(
				'TITLE' => GetMessage('EXPRESSION_READ_MORE_OFFERS_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_READ_MORE_OFFERS_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_SUBSCRIBE_BUTTON' => array(
				'TITLE' => GetMessage('EXPRESSION_SUBSCRIBE_BUTTON_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_SUBSCRIBE_BUTTON_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_SUBSCRIBED_BUTTON' => array(
				'TITLE' => GetMessage('EXPRESSION_SUBSCRIBED_BUTTON_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_SUBSCRIBED_BUTTON_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_ORDER_BUTTON' => array(
				'TITLE' => GetMessage('EXPRESSION_ORDER_BUTTON_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_ORDER_BUTTON_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_ORDER_TEXT' => array(
				'TITLE' => GetMessage('EXPRESSION_ORDER_TEXT_TITLE'),
				'TYPE' => 'text',
				'SIZE' => '70',
				'DEFAULT' => GetMessage('EXPRESSION_ORDER_TEXT_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_EXISTS' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_EXISTS_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_EXISTS_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_NOTEXISTS' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_NOTEXISTS_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_NOTEXISTS_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_MIN' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_MIN_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_MIN_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_MID' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_MID_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_MID_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_MAX' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_MAX_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_MAX_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_PRINT_PAGE' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_PRINT_PAGE_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_PRINT_PAGE_DEFAULT'),
				'THEME' => 'N',
			),
			'EXPRESSION_FOR_FAST_VIEW' => array(
				'TITLE' => GetMessage('EXPRESSION_FOR_FAST_VIEW_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => GetMessage('EXPRESSION_FOR_FAST_VIEW_DEFAULT'),
				'THEME' => 'N',
			),
		),
	),
	'BASKET' => array(
		'TITLE' => GetMessage('BASKET_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'ORDER_BASKET_VIEW' => array(
				'TITLE' => GetMessage('ORDER_BASKET_VIEW_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'NORMAL' => GetMessage('ORDER_BASKET_VIEW_HEADER_TITLE'),
					'FLY2' => GetMessage('ORDER_BASKET_VIEW_FLY_TITLE'),
					'FLY' => GetMessage('ORDER_BASKET_VIEW_FLY2_TITLE'),
					'BOTTOM' => GetMessage('ORDER_BASKET_VIEW_BOTTOM_TITLE'),
				),
				'DEFAULT' => 'FLY',
				'THEME' => 'Y',
			),
			'ORDER_BASKET_COLOR' => array(
				'TITLE' => GetMessage('ORDER_BASKET_COLOR_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'DARK' => GetMessage('ORDER_BASKET_COLOR_DARK_TITLE'),
					'COLOR' => GetMessage('ORDER_BASKET_COLOR_COLOR_TITLE'),
					'WHITE' => GetMessage('ORDER_BASKET_COLOR_WHITE_TITLE'),
				),
				'DEFAULT' => 'DARK',
				'THEME' => 'Y',
			),
			'SHOW_BASKET_ONADDTOCART' => array(
				'TITLE' => GetMessage('SHOW_BASKET_ONADDTOCART_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
			),
			'SHOW_BASKET_PRINT' => array(
				'TITLE' => GetMessage('SHOW_BASKET_PRINT_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
			),
			'SHOW_BASKET_ON_PAGES' => array(
				'TITLE' => GetMessage('SHOW_BASKET_ON_PAGES_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
				'HINT' => GetMessage('SHOW_BASKET_ON_PAGES_HINT'),
			),
			'USE_PRODUCT_QUANTITY_LIST' => array(
				'TITLE' => GetMessage('USE_PRODUCT_QUANTITY_LIST_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'USE_PRODUCT_QUANTITY_DETAIL' => array(
				'TITLE' => GetMessage('USE_PRODUCT_QUANTITY_DETAIL_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'BUYNOPRICEGGOODS' => array(
				'TITLE' => GetMessage('BUYNOPRICEGGOODS_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'ORDER' => GetMessage('BUYNOPRICEGGOODS_ORDER'),
					'NOTHING' => GetMessage('BUYNOPRICEGGOODS_NOTHING'),
				),
				'DEFAULT' => 'NOTHING',
				'THEME' => 'N',
			),
			'BUYMISSINGGOODS' => array(
				'TITLE' => GetMessage('BUYMISSINGGOODS_TITLE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'ADD' => GetMessage('BUYMISSINGGOODS_ADD'),
					'ORDER' => GetMessage('BUYMISSINGGOODS_ORDER'),
					'SUBSCRIBE' => GetMessage('BUYMISSINGGOODS_SUBSCRIBE'),
					'NOTHING' => GetMessage('BUYMISSINGGOODS_NOTHING'),
				),
				'DEFAULT' => 'ADD',
				'THEME' => 'N',
			),
			'MIN_ORDER_PRICE' => array(
				'TITLE' => GetMessage('MIN_ORDER_PRICE_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '1000',
				'THEME' => 'N',
			),
			'MIN_ORDER_PRICE_TEXT' => array(
				'TITLE' => GetMessage('MIN_ORDER_PRICE_TEXT_TITLE'),
				'TYPE' => 'textarea',
				'ROWS' => '3',
				'COLS' => '70',
				'DEFAULT' => GetMessage('MIN_ORDER_PRICE_TEXT_EXAMPLE'),
				'THEME' => 'N',
			),
		),
	),
	'URL_PAGES' => array(
		'TITLE' => GetMessage('URL_PAGES_OPTIONS'),
		'THEME' => 'N',
		'OPTIONS' => array(
			'CATALOG_PAGE_URL' => array(
				'TITLE' => GetMessage('CATALOG_PAGE_URL_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '#SITE_DIR#catalog/',
				'THEME' => 'N',
			),
			'BASKET_PAGE_URL' => array(
				'TITLE' => GetMessage('BASKET_PAGE_URL_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '#SITE_DIR#basket/',
				'THEME' => 'N',
			),
			'ORDER_PAGE_URL' => array(
				'TITLE' => GetMessage('ORDER_PAGE_URL_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '#SITE_DIR#order/',
				'THEME' => 'N',
			),
			'COMPARE_PAGE_URL' => array(
				'TITLE' => GetMessage('COMPARE_PAGE_URL_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '#SITE_DIR#catalog/compare.php',
				'THEME' => 'N',
			),
			'PERSONAL_PAGE_URL' => array(
				'TITLE' => GetMessage('PERSONAL_PAGE_URL_TITLE'),
				'TYPE' => 'text',
				'DEFAULT' => '#SITE_DIR#personal/',
				'THEME' => 'N',
			),
		),
	),
	'ONECLICKBUY' => array(
		'TITLE' => GetMessage('ONECLICKBUY_OPTIONS'),
		'THEME' => 'N',
		'OPTIONS' => array(
			'ONE_CLICK_BUY_CAPTCHA' => array(
				'TITLE' => GetMessage('ONE_CLICK_BUY_CAPTCHA_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'SHOW_ONECLICKBUY_ON_BASKET_PAGE' => array(
				'TITLE' => GetMessage('SHOW_ONECLICKBUY_ON_BASKET_PAGE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'ONECLICKBUY_SHOW_DELIVERY_NOTE' => array(
				'TITLE' => GetMessage('ONECLICKBUY_SHOW_DELIVERY_NOTE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'ONECLICKBUY_PERSON_TYPE' => array(
				'TITLE' => GetMessage('ONECLICKBUY_PERSON_TYPE_TITLE'),
				'TYPE' => 'selectbox',
				'DEFAULT' => '1',
				'THEME' => 'N',
			),
			'ONECLICKBUY_DELIVERY' => array(
				'TITLE' => GetMessage('ONECLICKBUY_DELIVERY_TITLE'),
				'TYPE' => 'selectbox',
				'DEFAULT' => '2',
				'THEME' => 'N',
			),
			'ONECLICKBUY_PAYMENT' => array(
				'TITLE' => GetMessage('ONECLICKBUY_PAYMENT_TITLE'),
				'TYPE' => 'selectbox',
				'DEFAULT' => '1',
				'THEME' => 'N',
			),
			'ONECLICKBUY_PROPERTIES' => array(
				'TITLE' => GetMessage('ONECLICKBUY_PROPERTIES_TITLE'),
				'TYPE' => 'multiselectbox',
				'LIST' => array(
					'FIO' => GetMessage('ONECLICKBUY_PROPERTIES_FIO'),
					'PHONE' => GetMessage('ONECLICKBUY_PROPERTIES_PHONE'),
					'EMAIL' => GetMessage('ONECLICKBUY_PROPERTIES_EMAIL'),
					'COMMENT' => GetMessage('ONECLICKBUY_PROPERTIES_COMMENT'),
				),
				'DEFAULT' => 'FIO,PHONE,EMAIL,COMMENT',
				'THEME' => 'N',
			),
			'ONECLICKBUY_REQUIRED_PROPERTIES' => array(
				'TITLE' => GetMessage('ONECLICKBUY_REQUIRED_PROPERTIES_TITLE'),
				'TYPE' => 'multiselectbox',
				'LIST' => array(
					'FIO' => GetMessage('ONECLICKBUY_PROPERTIES_FIO'),
					'PHONE' => GetMessage('ONECLICKBUY_PROPERTIES_PHONE'),
					'EMAIL' => GetMessage('ONECLICKBUY_PROPERTIES_EMAIL'),
					'COMMENT' => GetMessage('ONECLICKBUY_PROPERTIES_COMMENT'),
				),
				'DEFAULT' => 'FIO,PHONE',
				'THEME' => 'N',
			),
		),
	),
	'SECTION' => array(
		'TITLE' => GetMessage('SECTION_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'PAGE_CONTACTS' => array(
				'TITLE' => GetMessage('PAGE_CONTACTS'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'1' => array(
						'TITLE' => GetMessage('PAGE_CONTACT1'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/contact1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'2' => array(
						'TITLE' => GetMessage('PAGE_CONTACT2'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/contact2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'3' => array(
						'TITLE' => GetMessage('PAGE_CONTACT3'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/contact3.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'4' => array(
						'TITLE' => GetMessage('PAGE_CONTACT4'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/contact4.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'5' => array(
						'TITLE' => GetMessage('PAGE_CONTACT5'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/contact5.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'contacts/'
				),
			),
			'CONTACTS_EDIT_LINK_NOTE' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_EDIT_LINK_NOTE'),
				'TYPE' => 'note',
				'THEME' => 'N',
			),
			'CONTACTS_ADDRESS' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_ADDRESS_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-site-address.php',
				'THEME' => 'N',
			),
			'CONTACTS_PHONE' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_PHONE_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-site-phone.php',
				'THEME' => 'N',
			),
			'CONTACTS_REGIONAL_PHONE' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_REGIONAL_PHONE_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-site-phone-one.php',
				'THEME' => 'N',
			),
			'CONTACTS_EMAIL' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_EMAIL_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-site-email.php',
				'THEME' => 'N',
			),
			'CONTACTS_SCHEDULE12' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_SCHEDULE12_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-site-schedule.php',
				'THEME' => 'N',
			),
			'CONTACTS_DESCRIPTION12' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_DESCRIPTION12_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-about.php',
				'THEME' => 'N',
			),
			'CONTACTS_REGIONAL_DESCRIPTION34' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_REGIONAL_DESCRIPTION34_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-regions-title.php',
				'THEME' => 'N',
			),
			'CONTACTS_REGIONAL_DESCRIPTION5' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_REGIONAL_DESCRIPTION5_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-regions.php',
				'THEME' => 'N',
			),
			'CONTACTS_USE_FEEDBACK' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_USE_FEEDBACK_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'CONTACTS_USE_MAP' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_USE_MAP_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'N',
			),
			'CONTACTS_MAP' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_MAP_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/contacts-site-map.php',
				'THEME' => 'N',
			),
			'CONTACTS_MAP_NOTE' => array(
				'TITLE' => GetMessage('CONTACTS_OPTIONS_MAP_NOTE'),
				'TYPE' => 'note',
				'ALIGN' => 'center',
				'THEME' => 'N',
			),
			'BLOG_PAGE' => array(
				'TITLE' => GetMessage('BLOG_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_BLOCK'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/blog2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/blog1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_2',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'blog/'
				),
			),
			'PROJECTS_PAGE' => array(
				'TITLE' => GetMessage('PROJECTS_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_4' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/projects1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_BLOCK_SECTION'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/projects2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_BLOCK'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/projects2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_3' => array(
						'TITLE' => GetMessage('PAGE_BLOCK_YEAR'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/projects2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_2',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'projects/'
				),
			),
			'NEWS_PAGE' => array(
				'TITLE' => GetMessage('NEWS_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/news1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_TILE'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/news2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_3' => array(
						'TITLE' => GetMessage('PAGE_BLOCK'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/blog_news.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_2',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'company/news/'
				),
			),
			'STAFF_PAGE' => array(
				'TITLE' => GetMessage('STAFF_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_BLOCK'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_employees1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_employees2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_1',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'company/staff/'
				),
			),
			'PARTNERS_PAGE' => array(
				'TITLE' => GetMessage('PARTNERS_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_BLOCK'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_partners1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_partners2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_3' => array(
						'TITLE' => GetMessage('PAGE_LOGO'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_partners3.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_3',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'info/brands/'
				),
			),
			'PARTNERS_PAGE_DETAIL' => array(
				'TITLE' => GetMessage('PARTNER_PAGE_DETAIL_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'element_1' => array(
						'TITLE' => GetMessage('PAGE_GOOOS'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/linked1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'element_2' => array(
						'TITLE' => GetMessage('PAGE_SECTIONS'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/linked2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'element_3' => array(
						'TITLE' => GetMessage('PAGE_SECTIONS_GOODS'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/linked3.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'element_4' => array(
						'TITLE' => GetMessage('PAGE_SECTIONS_FILTER'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/linked4.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'element_1',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'info/brands/panasonic/'
				),
			),
			'VACANCY_PAGE' => array(
				'TITLE' => GetMessage('VACANCY_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_ACCORDION'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_vacancy1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_vacancy2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_1',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'company/vacancy/'
				),
			),
			'LICENSES_PAGE' => array(
				'TITLE' => GetMessage('LICENSES_PAGE_TITLE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'list_elements_1' => array(
						'TITLE' => GetMessage('PAGE_BLOCK'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_licenses1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'list_elements_2' => array(
						'TITLE' => GetMessage('PAGE_LIST'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/company_licenses2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => 'list_elements_2',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'URL' => 'company/licenses/'
				),
			),
		)
	),
	'FOOTER' => array(
		'TITLE' => GetMessage('FOOTER_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			/*'BGCOLOR_THEME_FOOTER_SIDE' => array(
				'TITLE' => GetMessage('BGCOLOR_THEME_FOOTER_SIDE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),*/
			'FOOTER_TYPE' => array(
				'TITLE' => GetMessage('FOOTER_TYPE'),
				'TYPE' => 'selectbox',
				'LIST' => array(
					'1' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_01.png',
						'TITLE' => '1',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'2' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_02.png',
						'TITLE' => '2',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'3' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_03.png',
						'TITLE' => '3',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'4' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_05.png',
						'TITLE' => '4',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'5' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_06.png',
						'TITLE' => '5',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'6' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_07.png',
						'TITLE' => '6',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'7' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/footer_08.png',
						'TITLE' => '7',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
					),
					'custom' => array(
						'TITLE' => 'Custom',
						'POSITION_BLOCK' => 'block',
						'HIDE' => 'Y'
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
				'PREVIEW' => array(
					'SCROLL_BLOCK' => '#footer'
				),
			),
		)
	),
	'ADV' => array(
		'TITLE' => GetMessage('ADV_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'ADV_TOP_HEADER' => array(
				'TITLE' => GetMessage('ADV_TOP_HEADER_TITLE'),
				'IMG' => '/bitrix/images/'.$solution.'/themes/banner_position1.png',
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
				'GROUP' => GetMessage('ADV_GROUP_TITLE'),
				'ROW_CLASS' => 'col-md-6',
				'POSITION_BLOCK' => 'block',
				'IS_ROW' => 'Y',
				'SMALL_TOGGLE' => 'Y',
			),
			'ADV_TOP_UNDERHEADER' => array(
				'TITLE' => GetMessage('ADV_TOP_UNDERHEADER_TITLE'),
				'IMG' => '/bitrix/images/'.$solution.'/themes/banner_position2.png',
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
				'GROUP' => GetMessage('ADV_GROUP_TITLE'),
				'ROW_CLASS' => 'col-md-6',
				'POSITION_BLOCK' => 'block',
				'IS_ROW' => 'Y',
				'SMALL_TOGGLE' => 'Y',
			),
			'ADV_SIDE' => array(
				'TITLE' => GetMessage('ADV_SIDE_TITLE'),
				'IMG' => '/bitrix/images/'.$solution.'/themes/banner_position5.png',
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
				'GROUP' => GetMessage('ADV_GROUP_TITLE'),
				'ROW_CLASS' => 'col-md-6',
				'POSITION_BLOCK' => 'block',
				'IS_ROW' => 'Y',
				'SMALL_TOGGLE' => 'Y',
			),
			'ADV_CONTENT_TOP' => array(
				'TITLE' => GetMessage('ADV_CONTENT_TOP_TITLE'),
				'IMG' => '/bitrix/images/'.$solution.'/themes/banner_position3.png',
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
				'GROUP' => GetMessage('ADV_GROUP_TITLE'),
				'ROW_CLASS' => 'col-md-6',
				'POSITION_BLOCK' => 'block',
				'IS_ROW' => 'Y',
				'SMALL_TOGGLE' => 'Y',
			),
			'ADV_CONTENT_BOTTOM' => array(
				'TITLE' => GetMessage('ADV_CONTENT_BOTTOM_TITLE'),
				'IMG' => '/bitrix/images/'.$solution.'/themes/banner_position4.png',
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
				'GROUP' => GetMessage('ADV_GROUP_TITLE'),
				'ROW_CLASS' => 'col-md-6',
				'POSITION_BLOCK' => 'block',
				'IS_ROW' => 'Y',
				'SMALL_TOGGLE' => 'Y',
			),
			'ADV_FOOTER' => array(
				'TITLE' => GetMessage('ADV_FOOTER_TITLE'),
				'IMG' => '/bitrix/images/'.$solution.'/themes/banner_position6.png',
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'Y',
				'GROUP' => GetMessage('ADV_GROUP_TITLE'),
				'ROW_CLASS' => 'col-md-6',
				'POSITION_BLOCK' => 'block',
				'IS_ROW' => 'Y',
				'SMALL_TOGGLE' => 'Y',
			)
		),
	),
	'MOBILE' => array(
		'TITLE' => GetMessage('MOBILE_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'HEADER_MOBILE_FIXED' => array(
				'TITLE' => GetMessage('HEADER_MOBILE_FIXED_TITLE'),
				'TYPE' => 'checkbox',
				'DEPENDENT_PARAMS' => array(
					'HEADER_MOBILE_SHOW' => array(
						'TITLE' => GetMessage('HEADER_MOBILE_SHOW_TITLE'),
						'HIDE_TITLE' => 'Y',
						'TYPE' => 'selectbox',
						'LIST' => array(
							'ALWAYS' => GetMessage('HEADER_MOBILE_SHOW_ALWAYS'),
							'SCROLL_TOP' => GetMessage('HEADER_MOBILE_SHOW_SCROLL_TOP'),
						),
						'DEFAULT' => 'ALWAYS',
						'THEME' => 'Y',
						'CONDITIONAL_VALUE' => 'Y',
					),
				),
				'DEFAULT' => 'N',
				'THEME' => 'Y',
			),
			'HEADER_MOBILE' => array(
				'TITLE' => GetMessage('HEADER_MOBILE'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'N',
				'LIST' => array(
					'1' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header_mobile_white.png',
						'TITLE' => GetMessage('HEADER_MOBILE_WHITE'),
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
						'TITLE_WIDTH' => '75px',
					),
					'2' => array(
						'IMG' => '/bitrix/images/'.$solution.'/themes/header_mobile_color.png',
						'TITLE' => GetMessage('HEADER_MOBILE_COLOR'),
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
						'TITLE_WIDTH' => '75px',
					),
					'custom' => array(
						'TITLE' => 'Custom',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
						'POSITION_TITLE' => 'left',
						'TITLE_WIDTH' => '75px',
						'HIDE' => 'Y'
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
			),
			'HEADER_MOBILE_MENU' => array(
				'TITLE' => GetMessage('HEADER_MOBILE_MENU'),
				'TYPE' => 'selectbox',
				// 'IS_ROW' => 'Y',
				'LIST' => array(
					'1' => array(
						'TITLE' => GetMessage('HEADER_MOBILE_MENU_FULL'),
					),
					'2' => array(
						'TITLE' => GetMessage('HEADER_MOBILE_MENU_TOP'),
					),
					'custom' => array(
						'TITLE' => 'Custom',
						'HIDE' => 'Y',
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
			),
			'HEADER_MOBILE_MENU_OPEN' => array(
				'TITLE' => GetMessage('HEADER_MOBILE_MENU_OPEN'),
				'TYPE' => 'selectbox',
				'IS_ROW' => 'Y',
				'LIST' => array(
					'1' => array(
						'TITLE' => GetMessage('HEADER_MOBILE_MENU_OPEN_LEFT'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/mobile_menu1.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
					'2' => array(
						'TITLE' => GetMessage('HEADER_MOBILE_MENU_OPEN_TOP'),
						'IMG' => '/bitrix/images/'.$solution.'/themes/mobile_menu2.png',
						'ROW_CLASS' => 'col-md-4',
						'POSITION_BLOCK' => 'block',
					),
				),
				'DEFAULT' => '1',
				'THEME' => 'Y',
			),
		)
	),
	'LK' => array(
		'TITLE' => GetMessage('LK_OPTIONS'),
		'THEME' => 'Y',
		'OPTIONS' => array(
			'PERSONAL_ONEFIO' => array(
				'TITLE' => GetMessage('PERSONAL_ONEFIO_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
				'ONE_ROW' => 'Y',
			),
			'LOGIN_EQUAL_EMAIL' => array(
				'TITLE' => GetMessage('LOGIN_EQUAL_EMAIL_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'Y',
				'THEME' => 'Y',
				'ONE_ROW' => 'Y',
			),
		)
	),
	'COUNTERS_GOALS' => array(
		'TITLE' => GetMessage('COUNTERS_GOALS_OPTIONS'),
		'THEME' => 'N',
		'OPTIONS' => array(
			'ALL_COUNTERS' => array(
				'TITLE' => GetMessage('ALL_COUNTERS_TITLE'),
				'TYPE' => 'includefile',
				'INCLUDEFILE' => '#SITE_DIR#include/invis-counter.php',
			),
			'YA_GOALS' => array(
				'TITLE' => GetMessage('YA_GOLAS_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'DEPENDENT_PARAMS' => array(
					'YA_COUNTER_ID' => array(
						'TITLE' => GetMessage('YA_COUNTER_ID_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => '',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'USE_FORMS_GOALS' => array(
						'TITLE' => GetMessage('USE_FORMS_GOALS_TITLE'),
						'TYPE' => 'selectbox',
						'LIST' => array(
							'NONE' => GetMessage('USE_FORMS_GOALS_NONE'),
							'COMMON' => GetMessage('USE_FORMS_GOALS_COMMON'),
							'SINGLE' => GetMessage('USE_FORMS_GOALS_SINGLE'),
						),
						'DEFAULT' => 'COMMON',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'USE_BASKET_GOALS' => array(
						'TITLE' => GetMessage('USE_SALE_GOALS_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'Y',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'USE_1CLICK_GOALS' => array(
						'TITLE' => GetMessage('USE_1CLICK_GOALS_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'Y',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'USE_FASTORDER_GOALS' => array(
						'TITLE' => GetMessage('USE_FASTORDER_GOALS_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'Y',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'USE_FULLORDER_GOALS' => array(
						'TITLE' => GetMessage('USE_FULLORDER_GOALS_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'Y',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'USE_DEBUG_GOALS' => array(
						'TITLE' => GetMessage('USE_DEBUG_GOALS_TITLE'),
						'TYPE' => 'checkbox',
						'DEFAULT' => 'N',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'GOALS_NOTE' => array(
						'NOTE' => GetMessage('GOALS_NOTE_TITLE'),
						'TYPE' => 'note',
						'THEME' => 'N',
						// 'CONDITIONAL_VALUE' => 'Y',
					),
				)
			),
			'YANDEX_ECOMERCE' => array(
				'TITLE' => GetMessage('YANDEX_ECOMERCE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
			),
			'GOOGLE_ECOMERCE' => array(
				'TITLE' => GetMessage('GOOGLE_ECOMERCE_TITLE'),
				'TYPE' => 'checkbox',
				'DEFAULT' => 'N',
				'THEME' => 'N',
				'DEPENDENT_PARAMS' => array(
					'BASKET_ADD_EVENT' => array(
						'TITLE' => GetMessage('BASKET_ADD_EVENT_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => 'addToCart',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'BASKET_REMOVE_EVENT' => array(
						'TITLE' => GetMessage('BASKET_REMOVE_EVENT_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => 'removeFromCart',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'CHECKOUT_ORDER_EVENT' => array(
						'TITLE' => GetMessage('CHECKOUT_ORDER_EVENT_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => 'checkout',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
					'PURCHASE_ORDER_EVENT' => array(
						'TITLE' => GetMessage('PURCHASE_ORDER_EVENT_TITLE'),
						'TYPE' => 'text',
						'DEFAULT' => 'gtm.dom',
						'THEME' => 'N',
						'CONDITIONAL_VALUE' => 'Y',
					),
				)
			),
		)
	),
);
?>