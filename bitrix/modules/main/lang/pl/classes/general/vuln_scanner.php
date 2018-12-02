<?
$MESS["VULNSCAN_SIMILAR"] = "Podobny";
$MESS["VULNSCAN_REQUIRE"] = "Wymagane warunki";
$MESS["VULNSCAN_FILE"] = "Plik";
$MESS["VULNSCAN_XSS_NAME"] = "Skrypty Cross-Site";
$MESS["VULNSCAN_XSS_HELP_SAFE"] = "Użyj <b>htmlspecialcharsbx</b>. Wartość atrybutu tagu zawsze w podwójnym cudzysłowie. Force protocol specifier (http) in href and src attribute values when required.";
$MESS["VULNSCAN_HEADER_NAME"] = "Dzielenie odpowiedzi HTTP";
$MESS["VULNSCAN_HEADER_HELP_SAFE"] = "Zaleca sie filtrowanie znaków nowej linii przed dodaniem tekstu do nagłówka.";
$MESS["VULNSCAN_DATABASE_NAME"] = "SQL Injection";
$MESS["VULNSCAN_DATABASE_HELP_SAFE"] = "Używaj odpowiednich typów zmiennych dla danych numerycznych (int, float, itd.). Używaj mysql_escape_string, \$DB->ForSQL() oraz innych metod do operacji na stringach. Kontroluj długość zmiennych.";
$MESS["VULNSCAN_INCLUDE_NAME"] = "Zawarcie Pliku";
$MESS["VULNSCAN_INCLUDE_HELP_SAFE"] = "Normalizuj ścieżki przed ich użyciem.";
$MESS["VULNSCAN_EXEC_NAME"] = "Wykonanie dowolnego polecenia";
$MESS["VULNSCAN_EXEC_HELP_SAFE"] = "Sprawdź czy wartości zmiennych są ważne i w dopuszczalnym zakresie. Na przykład, możesz odrzucić znaki narodowowe i interpunkcyjne. Dopuszczalny zakres jest zdefiniowany  przez wymagania projektu. Użyj escapeshellcmd i escapeshellarg, aby być na bezpiecznej stronie.";
$MESS["VULNSCAN_CODE_NAME"] = "Wykonanie dowolnego kodu";
$MESS["VULNSCAN_CODE_HELP_SAFE"] = "Wprowadzenie filtra użytkownika z wykorzystaniem  <b>EscapePHPString</b>.";
$MESS["VULNSCAN_POP_NAME"] = "Szeregowanie danych";
$MESS["VULNSCAN_OTHER_NAME"] = "Potencjalna zmiana logiki systemu";
$MESS["VULNSCAN_OTHER_HELP"] = "Brak opisu.";
$MESS["VULNSCAN_UNKNOWN"] = "Potencjalna podatkość";
$MESS["VULNSCAN_UNKNOWN_HELP"] = "Brak opisu.";
$MESS["VULNSCAN_HELP_INPUT"] = "Źródło";
$MESS["VULNSCAN_HELP_FUNCTION"] = "Funkcja/Metoda";
$MESS["VULNSCAN_HELP_VULNTYPE"] = "Rodzaj podatności";
$MESS["VULNSCAN_HELP_SAFE"] = "Bądź bezpieczny!";
$MESS["VULNSCAN_FIULECHECKED"] = "Pliki zaznaczone:";
$MESS["VULNSCAN_VULNCOUNTS"] = "Znalezione potencjalne problemy:";
$MESS["VULNSCAN_DYNAMIC_FUNCTION"] = "Dynamiczna funkcja połączenia!";
$MESS["VULNSCAN_EXTRACT"] = "Wcześniej zainicjowane różnicowanie może zostać nadpisane!";
$MESS["VULNSCAN_TOKENIZER_NOT_INSTALLED"] = "Znakowanie PHP jest wyłączone. Proszę je włączyć, aby dokończyć test.";
?>