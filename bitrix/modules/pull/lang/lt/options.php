<?
$MESS["PULL_TAB_SETTINGS"] = "Nustatymai";
$MESS["PULL_TAB_TITLE_SETTINGS"] = "Modulio nustatymai";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER"] = "Message listener path (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_SECURE"] = "Message listener path (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER"] = "Path for reading messages in the mobile app (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER_SECURE"] = "Path for reading messages in the mobile app (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_WEBSOCKET"] = "WebSocket message listener path (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_WEBSOCKET_SECURE"] = "WebSocket message listener path (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_PUBLISH"] = "Message sender path";
$MESS["PULL_OPTIONS_PUSH"] = "Send PUSH notifications to mobile devices";
$MESS["PULL_OPTIONS_WEBSOCKET"] = "Enable WebSocket";
$MESS["PULL_OPTIONS_NGINX"] = "nginx-push-stream-module is installed";
$MESS["PULL_OPTIONS_NGINX_CONFIRM"] = "Attention: you have to install nginx-push-stream-module before using this option.";
$MESS["PULL_OPTIONS_WS_CONFIRM"] = "Attention: you have to ensure that nginx-push-stream-module is configured to support WebSocket before using this option.";
$MESS["PULL_OPTIONS_NGINX_DOC"] = "Read more on installing and using nginx-push-stream-module here:";
$MESS["PULL_OPTIONS_NGINX_DOC_LINK"] = "online help";
$MESS["PULL_OPTIONS_STATUS"] = "Modulio statusas";
$MESS["PULL_OPTIONS_STATUS_Y"] = "Aktivus";
$MESS["PULL_OPTIONS_STATUS_N"] = "Neaktyvus";
$MESS["PULL_OPTIONS_USE"] = "Use modules";
$MESS["PULL_OPTIONS_SITES"] = "Don't use the module on websites";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_DESC"] = "It is recommended to use a standard port for HTTP or HTTPS.<br>Use 8893 (HTTP) or 8894 (HTTPS) only for nginx-push-stream-module version 0.3.4.";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER_DESC"] = "Always use non-standard ports (e.g. 8893 for HTTP, or 8894 for HTTPS) for mobile applications because not all mobile devices support long pooling on a standard port.";
$MESS["PULL_OPTIONS_WEBSOCKET_DESC"] = "This configuration is for all modern browsers. Long pooling will be used for earlier versions.";
$MESS["PULL_OPTIONS_NGINX_VERSION"] = "Server software";
$MESS["PULL_OPTIONS_NGINX_VERSION_034"] = "Bitrix Virtual Appliance 4.2 - 4.3 (nginx-push-stream-module 0.3.4)";
$MESS["PULL_OPTIONS_NGINX_VERSION_040"] = "Bitrix Virtual Appliance 4.4 or higher (nginx-push-stream-module 0.4.0)";
$MESS["PULL_OPTIONS_NGINX_VERSION_034_DESC"] = "nginx-push-stream-module 0.4.0 is strongly recommended; install it whenever possible.<br> If using nginx-push-stream-module 0.3.4, WebSocket and command broadcasting will be unavailable.";
$MESS["PULL_OPTIONS_NGINX_BUFFER"] = "Maximum number of commands to send while connected to server";
$MESS["PULL_OPTIONS_NGINX_BUFFERS_DESC"] = "This option depends on the \"large_client_header_buffers\" nginx's parameter. The default value is calculated for <b>8k</b> buffers.";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_MODERN_DESC"] = "Atkreipkite dėmėsį, jog šiuolaikinės naršyklės gali prisijungti prie eilių serverio esančiam kitame serveryje ir su kitu domenu (CORS užklausos).";
$MESS["PULL_OPTIONS_HEAD_PUB"] = "Adreso nustatymas komandų siuntimui";
$MESS["PULL_OPTIONS_HEAD_SUB_MODERN"] = "Adreso nustatymai komandų skaitymui šiuolaikinėms naršyklėms";
$MESS["PULL_OPTIONS_HEAD_SUB"] = "Adreso nustatymai komandų skaitymui pasenusioms naršyklėms";
$MESS["PULL_OPTIONS_HEAD_SUB_MOB"] = "Adreso nustatymai komandų skaitymui mobilioms naršyklėms";
$MESS["PULL_OPTIONS_HEAD_SUB_WS"] = "Adreso nustatymai komandų skaitymui naršyklėms su Web Socket palaikymu";
$MESS["PULL_OPTIONS_HEAD_BLOCK"] = "Neleisti modulio darbą nustatytuose svetainėse";
$MESS["PULL_OPTIONS_GUEST"] = "Įjungti modulį neprisijungusiems naudotojams";
$MESS["PULL_OPTIONS_GUEST_DESC"] = "Duomenys apie naudotoją suteikia \"Web Analitika\" modulis";
?>