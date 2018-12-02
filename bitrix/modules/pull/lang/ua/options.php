<?
$MESS["PULL_TAB_SETTINGS"] = "Налаштування";
$MESS["PULL_TAB_TITLE_SETTINGS"] = "Параметри підсистеми";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER"] = "Шлях для читання команд (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_SECURE"] = "Шлях для читання команд (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER"] = "Шлях для читання команд у мобільному застосунку (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER_SECURE"] = "Шлях для читання команд у мобільному застосунку (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_WEBSOCKET"] = "Шлях для читання команд через WebSocket (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_WEBSOCKET_SECURE"] = "Шлях для читання команд через WebSocket (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_PUBLISH"] = "Шлях для публікації команд";
$MESS["PULL_OPTIONS_PUSH"] = "Відправляти PUSH сповіщення на мобільні телефони";
$MESS["PULL_OPTIONS_WEBSOCKET"] = "Увімкнути підтримку WebSocket";
$MESS["PULL_OPTIONS_NGINX"] = "На сервері встановлений модуль <b> nginx-push-stream-module </b>";
$MESS["PULL_OPTIONS_NGINX_CONFIRM"] = "Увага: перед увімкненням цієї опції вам необхідно встановити на сервері модуль nginx-push-stream-module";
$MESS["PULL_OPTIONS_WS_CONFIRM"] = "Увага: перед увімкненням цієї опції вам необхідно переконатися що сервер черг (nginx-push-stream-module) налаштований на підтримку WebSocket";
$MESS["PULL_OPTIONS_NGINX_DOC"] = "Прочитати  докладно про встановлення та налаштування модуля <b> nginx-push-stream-module < b> ви можете в";
$MESS["PULL_OPTIONS_NGINX_DOC_LINK"] = "документації";
$MESS["PULL_OPTIONS_STATUS"] = "Стан модуля";
$MESS["PULL_OPTIONS_STATUS_Y"] = "Активний";
$MESS["PULL_OPTIONS_STATUS_N"] = "Не активний";
$MESS["PULL_OPTIONS_USE"] = "Використовують модулі";
$MESS["PULL_OPTIONS_SITES"] = "Не використовувати модуль на сайтах";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_DESC"] = "Рекомендується використовувати стандартний порт для HTTP або HTTPS. <br> Використовуйте 8893 (HTTP) і 8894 (HTTPS) тільки для версії модуля nginx-push-stream-module 0.3.4";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER_DESC"] = "Завжди використовуйте нестандартні порти (наприклад 8893 для HTTP і 8894 для HTTPS) для мобільних застосунків, тому що не всі мобільні телефони підтримують Long pooling на стандартному порту.";
$MESS["PULL_OPTIONS_WEBSOCKET_DESC"] = "Налаштування доступу для всіх сучасних браузерів, для більш ранніх версій буде використана технологія Long pooling.";
$MESS["PULL_OPTIONS_NGINX_VERSION"] = "На сервер встановлена";
$MESS["PULL_OPTIONS_NGINX_VERSION_034"] = "Віртуальна машина 4.2 - 4.3 (nginx-push-stream-module 0.3.4)";
$MESS["PULL_OPTIONS_NGINX_VERSION_040"] = "Віртуальна машина 4.4 і вище (nginx-push-stream-module 0.4.0)";
$MESS["PULL_OPTIONS_NGINX_VERSION_034_DESC"] = "Модуль nginx-push-stream-module 0.4.0 рекомендований до обов'язкової установці. <br> При використанні модуля nginx-push-stream-module 0.3.4 не буде відкрита робота WebSocket і масова розсилка команд.";
$MESS["PULL_OPTIONS_NGINX_BUFFER"] = "Максимальне в відправлених команд за одне підключення до сервера";
$MESS["PULL_OPTIONS_NGINX_BUFFERS_DESC"] = "Дана настройка залежить від налаштування \"large_client_header_buffers\" сервера \"nginx\", параметр розрахований для значення <b>8k</b>";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_MODERN_DESC"] = "Зверніть увагу, що сучасні браузери можуть підключатися до сервера черг розташованих на іншому сервері та з іншим доменом (робота з CORS запитами).";
$MESS["PULL_OPTIONS_HEAD_PUB"] = "Налаштування адреси для публікації команд";
$MESS["PULL_OPTIONS_HEAD_SUB_MODERN"] = "Налаштування адреси читання команд для сучасних версій браузерів";
$MESS["PULL_OPTIONS_HEAD_SUB"] = "Налаштування адреси читання команд для старих версій браузерів";
$MESS["PULL_OPTIONS_HEAD_SUB_MOB"] = "Налаштування адреси читання команд для мобільних браузерів";
$MESS["PULL_OPTIONS_HEAD_SUB_WS"] = "Налаштування адреси читання команд для браузерів з підтримкою Web Socket";
$MESS["PULL_OPTIONS_HEAD_BLOCK"] = "Блокування роботи з модулем на певних сайтах";
$MESS["PULL_OPTIONS_GUEST"] = "Увімкнути модуль для не авторизованих користувачів";
$MESS["PULL_OPTIONS_GUEST_DESC"] = "Дані про користувача надає модуль \"Веб-аналітика\"";
$MESS["PULL_OPTIONS_SIGNATURE_KEY"] = "Код-підпис для взаємодії з сервером";
$MESS["PULL_OPTIONS_NGINX_2"] = "На сервері встановлено і активовано <b>\"Push server\"</b>";
$MESS["PULL_OPTIONS_NGINX_VERSION_710"] = "Віртуальна машина 7.1 і вище (Bitrix Push server)";
$MESS["PULL_BATCH_MAX_COUNT_MESSAGES"] = "Максимальна кількість push-сповіщень в пакеті при відправці";
?>