<?
global $MESS;

$MESS["SPCP_DTITLE"] = "PayBox";
$MESS["SPCP_DDESCR"] = "Универсальная система приема платежей на сайте. Система электронных платежей для интернет магазинов
	<a href=\"http://www.paybox.ru/\" target=\"_blank\">PayBox</a>.";

$MESS["SHOP_MERCHANT_ID"] = "Идентификатор магазина в PayBox ( Merchant ID )";
$MESS["SHOP_MERCHANT_ID_DESCR"] = "используется для идентификации магазига при совершении платежей.";
$MESS["SHOP_SECRET_KEY"] = "Кодовое слово (Secret Key) ";
$MESS["SHOP_SECRET_KEY_DESCR"] = "Используется для подтверждения идентификации магазина при совершении платежей.";
$MESS["SHOP_TESTING_MODE"] = "Тестовый режим ";
$MESS["SHOP_SECRET_KEY_DESCR"] = "В случае если вы находитесь в боевом режиме, но вам нужно провести тестовый транзакции, ставите Y и все транзакции будут создаваться по тестовым платежным системам.";

$MESS["ORDER_ID"] = "Номер заказа";
$MESS["ORDER_LIVETIME"] = "Время жизни счета";
$MESS["ORDER_LIVETIME_DESCR"] = "Измеряется в секундах, если вы указали пустую строку, время жизни по умолчанию 1 сутки.";

$MESS["SHOULD_PAY"] = "Сумма заказа";
$MESS["SHOULD_PAY_DESCR"] = "Сумма к оплате.";

$MESS["SITE_URL"] = "Site URL";
$MESS["SITE_URL_DESCR"] = "";

$MESS["CHECK_URL"] = "Check URL";
$MESS["CHECK_URL_DESCR"] = "Адрес скрипта, отвечающего на запросы check.";
$MESS["RESULT_URL"] = "Result URL";
$MESS["RESULT_URL_DESCR"] = "Адрес скрипта, отвечающего на запросы result.";
$MESS["REFUND_URL"] = "Refund URL";
$MESS["REFUND_URL_DESCR"] = "Адрес скрипта, отвечающего на запросы refund.";

$MESS["REQUEST_METHOD"] = "Метод запроса на Check URL и Result URL";
$MESS["REQUEST_METHOD_DESCR"] = "Вазможные варианты: (POST и GET).";

$MESS["SUCCESS_URL"] = "Success URL";
$MESS["SUCCESS_URL_DESCR"] = "Адрес на который возрвращать клиента при удачном проведение транзакции.";
$MESS["SUCCESS_URL_METHOD"] = "Метод запроса на Success URL";
$MESS["SUCCESS_URL_METHOD_DESCR"] = "Вазможные варианты: (POST, GET, AUTOPOST и AUTOGET).";
$MESS["FAILURE_URL"] = "Failure URL";
$MESS["FAILURE_URL_DESCR"] = "Адрес на который возрвращать клиента при не удачном проведение транзакции.";
$MESS["FAILURE_URL_METHOD"] = "Метод запроса на Failure URL";
$MESS["FAILURE_URL_METHOD_DESCR"] = "Вазможные варианты: (POST, GET, AUTOPOST и AUTOGET).";
$MESS["STATUS_FAILED"] = "Статус после отказа";
$MESS["STATUS_FAILED_DESCR"] = "Статус после отказа платежа.";
$MESS["STATUS_REVOKED"] = "Статус после отмены";
$MESS["STATUS_REVOKED_DESCR"] = "Статус после отмены платежа (возврата).";

$MESS["ORDER_DATE"] = "Дата создания заказа";
$MESS["ORDER_DATE_DESCR"] = "";

$MESS["NEW_EMAIL"] = "Неправильно введён e-mail";
$MESS["USE_NEW"] = "Использовать новый ";
$MESS["USE_NEW_EMAIL"] = "e-mail";

$MESS["PS_NAME"] = "Название ПС";
$MESS["PS_NAME_DESCR"] = "Название платежной системы (pg_payment_system).";
?>