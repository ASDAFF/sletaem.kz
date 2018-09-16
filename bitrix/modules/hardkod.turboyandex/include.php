<?
// Подключение основного класса выгрузки
// В будущих релизах тут будут еще классы базы и админки
\Bitrix\Main\Loader::registerAutoLoadClasses('hardkod.turboyandex', array(
	'\Hardkod\TurboYandex\RssExport' 	=>	'lib/export.php',
));
