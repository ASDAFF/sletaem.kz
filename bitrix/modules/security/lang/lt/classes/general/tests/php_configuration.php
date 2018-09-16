<?
$MESS["SECURITY_SITE_CHECKER_PhpConfigurationTest_NAME"] = "PHP nustatymų patikrinimas";
$MESS["SECURITY_SITE_CHECKER_PHP_ENTROPY"] = "Nėra nustatyta papildomos entropijos šaltinio sesijos ID";
$MESS["SECURITY_SITE_CHECKER_PHP_ENTROPY_RECOMMENDATION"] = "Pridėti šią eilutę į PHP nustatymus: <br>session.entropy_file = /dev/urandom<br>session.entropy_length = 128";
$MESS["SECURITY_SITE_CHECKER_PHP_INCLUDE"] = "URL aplankai yra įjungti";
$MESS["SECURITY_SITE_CHECKER_PHP_INCLUDE_DETAIL"] = "Ši parinktis yra visiškai nerekomenduojama.";
$MESS["SECURITY_SITE_CHECKER_PHP_INCLUDE_RECOMMENDATION"] = "Pridėti arba redaguoti šią eilutę PHP nustatymuose: <br>allow_url_include = Off";
$MESS["SECURITY_SITE_CHECKER_PHP_FOPEN"] = "Skaitymo prieiga URL aplankui yra įjungta";
$MESS["SECURITY_SITE_CHECKER_PHP_FOPEN_DETAIL"] = "Ši parinktis yra neprivaloma, bet ja galima pasinaudoti puolimo tikslais.";
$MESS["SECURITY_SITE_CHECKER_PHP_FOPEN_RECOMMENDATION"] = "Pridėti arba redaguoti šią eilutę PHP nustatymuose:<br>allow_url_fopen = Off";
$MESS["SECURITY_SITE_CHECKER_PHP_ASP"] = "ASP styliaus žymės yra įjungtos";
$MESS["SECURITY_SITE_CHECKER_PHP_ASP_DETAIL"] = "Tik keli kūrėjai žino, kad ši galimybė egzistuoja. Ši parinktis yra nereikalinga.";
$MESS["SECURITY_SITE_CHECKER_PHP_ASP_RECOMMENDATION"] = "Pridėti arba redaguoti šią eilutę PHP nustatymuuse:<br>asp_tags = Off";
$MESS["SECURITY_SITE_CHECKER_LOW_PHP_VERSION_ENTROPY"] = "php ersija yra pasenusi";
$MESS["SECURITY_SITE_CHECKER_LOW_PHP_VERSION_ENTROPY_DETAIL"] = "Dabartinė php versija nepalaiko entropijos papildomo šaltinio diegimo kuriant sesijos ID";
$MESS["SECURITY_SITE_CHECKER_LOW_PHP_VERSION_ENTROPY_RECOMMENDATION"] = "Atnaujinti PHP į versiją 5.3.3 arba naujesnę, geriausia į naujausią stabilią versiją";
$MESS["SECURITY_SITE_CHECKER_PHP_ENTROPY_DETAIL"] = "Papildomos entropijos trūkumas gali būti naudojamas atsitiktinėms numeriams prognozuoti.";
$MESS["SECURITY_SITE_CHECKER_PHP_HTTPONLY"] = "Slapukai yra prieinami iš \"JavaScript\"";
$MESS["SECURITY_SITE_CHECKER_PHP_HTTPONLY_DETAIL"] = "Padarius slapukus prieinama iš JavaScript, padidės sėkmingų XSS atakų smarkumas.";
$MESS["SECURITY_SITE_CHECKER_PHP_HTTPONLY_RECOMMENDATION"] = "Pridėti arba redaguoti šią eilutę PHP nustatymuose: <br>session.cookie_httponly = Įjungta";
$MESS["SECURITY_SITE_CHECKER_PHP_COOKIEONLY"] = "Sesijos ID išsaugomi kitose saugyklose, neskaitant slapukus";
$MESS["SECURITY_SITE_CHECKER_PHP_COOKIEONLY_DETAIL"] = "Išsaugojus sesijos ID kitose vietose, nei slapukus, gali įvykti sesijos vogimas.";
$MESS["SECURITY_SITE_CHECKER_PHP_COOKIEONLY_RECOMMENDATION"] = "Pridėti arba redaguoti šią eilutę PHP nustatymuose:<br>session.use_only_cookies = Įjungta";
$MESS["SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE"] = "Mbstring pašalina neleistinus simbolius";
$MESS["SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE_DETAIL"] = "Galimybė pašalinti neleistinus simbolius gali būti išnaudojama taip vadinamoms neleistinų baitų serijos atakoms.";
$MESS["SECURITY_SITE_CHECKER_PHP_MBSTRING_SUBSTITUTE_RECOMMENDATION"] = "PHP nustatymuose pakeiskite mbstring.substitute_character reikšmę  į \"nėra\".";
$MESS["SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED"] = "PHP kodo failų apdorojimas multibaitų koduotėje yra įjungtas.";
$MESS["SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED_DETAIL"] = "Šios parinkties įjungimas yra labai nepageidautinas, nes dinamiškai generuojami PHP skriptai kaip talpyklos failai gali būti apdoroti nenuspėjamai.";
$MESS["SECURITY_SITE_CHECKER_ZEND_MULTIBYTE_ENABLED_RECOMMENDATION"] = "PHP 5.4.0 arba naujasniam nurodykite zend.multibyte = išjungta faile php.ini.";
$MESS["SECURITY_SITE_CHECKER_DISPLAY_ERRORS"] = "Klaidos yra nustatytos spausdinti į išvestį.";
$MESS["SECURITY_SITE_CHECKER_DISPLAY_ERRORS_DETAIL"] = "Klaidų parodymas yra naudingas plėtoti ir taisyti, bet turi būti išjungtas laidos versijoje.";
$MESS["SECURITY_SITE_CHECKER_DISPLAY_ERRORS_RECOMMENDATION"] = "Pridėti arba redaguoti šią eilutę PHP nustatymuose: :<br>display_errors = išjungta";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER"] = "Nurodytas neteisingas _REQUEST masyvo formavimo eiliškumas";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER_DETAIL"] = "Masyve _REQUEST nėra būtinumo nurodinėti bet kokius kintamuosius, išskyrus masyvus _GET ir _POST. Kitokiu atveju tai gali sukompromituoti jūsų tinklapį ar sukelti kitas neprognuozuojamas pasėkmes";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER_RECOMMENDATION"] = "Nurodykite arba pakoreguokite eilutę PHP nustatymuose: <br>request_order = \"GP\"";
$MESS["SECURITY_SITE_CHECKER_PHP_REQUEST_ORDER_ADDITIONAL"] = "Dabartinė reikšmė: \"#CURRENT#\"<br>Rekomenduojama: \"#RECOMMENDED#\"";
$MESS["SECURITY_SITE_CHECKER_MAIL_ADD_HEADER"] = "Pašto pranešimuose perduodamas UID PHP proceso";
$MESS["SECURITY_SITE_CHECKER_MAIL_ADD_HEADER_DETAIL"] = "Kiekviename pašto pranešime naudojama \"X-PHP-Originating-Script\" antraštė, kurioje laikomi UID ir skripto pavadinimas, kuris išsiunčia pranešimą. Tai leidžia užpuolikui išsiaiškinti nuo kokio naudotojo veikia PHP.";
$MESS["SECURITY_SITE_CHECKER_MAIL_ADD_HEADER_RECOMMENDATION"] = "Pridėkite arba redaguokite eilutę PHP nustatymuose: <br>mail.add_x_header = Off";
?>