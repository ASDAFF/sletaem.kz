<?
$MESS["PERFMON_DB_SERVER_TITLE"] = "Monitor wydajności: Serwer DB";
$MESS["PERFMON_STATUS_TITLE"] = "Statystyki serwera";
$MESS["PERFMON_WAITS_TITLE"] = "Statystyki serwera Waits";
$MESS["PERFMON_PARAMETERS_TITLE"] = "Parametry serwera";
$MESS["PERFMON_STATS_TITLE"] = "Statystyki objektów bazy danych";
$MESS["PERFMON_KPI_NAME"] = "Nazwa";
$MESS["PERFMON_KPI_VALUE"] = "Wartość";
$MESS["PERFMON_KPI_RECOMENDATION"] = "Zalecenie";
$MESS["PERFMON_KPI_NAME_VERSION"] = "Wersja";
$MESS["PERFMON_KPI_REC_VERSION_OLD"] = "Twoja wersja MySQL jest przestarzała i wymaga aktualizacji tak szybko jak to możliwe.";
$MESS["PERFMON_KPI_REC_VERSION_OK"] = "To narzędzie diagnostyczne popiera istniejącą wersję MySQL.";
$MESS["PERFMON_KPI_REC_VERSION_NEW"] = "To narzędzie diagnostyczne nie obsługuje istniejącej wersji MySQL. Wyniki mogą być błędne.";
$MESS["PERFMON_KPI_NAME_UPTIME"] = "Czas";
$MESS["PERFMON_KPI_VAL_UPTIME"] = "#DAYS#d #HOURS#g #MINUTES#m #SECONDS#s";
$MESS["PERFMON_KPI_REC_UPTIME_OK"] = "Czas pracy serwera MySQL.";
$MESS["PERFMON_KPI_REC_UPTIME_TOO_SHORT"] = "Serwer MySQL jest uruchomiony mniej niż 24 godziny. Można uzyskać niedokładne zalecenia.";
$MESS["PERFMON_KPI_NAME_QUERIES"] = "Razem zapytań serwera";
$MESS["PERFMON_KPI_REC_NO_QUERIES"] = "Serwer nie może rozpoznać, jeśli nie zwraca procesu.";
$MESS["PERFMON_KPI_NAME_GBUFFERS"] = "Globalne buferowania";
$MESS["PERFMON_KPI_REC_GBUFFERS"] = "Rozmiar globalnych buferowań (#VALUE#).";
$MESS["PERFMON_KPI_NAME_CBUFFERS"] = "Połączenie buforów";
$MESS["PERFMON_KPI_REC_CBUFFERS"] = "Jeden rozmiar połączenia bufora (#VALUE#).";
$MESS["PERFMON_KPI_NAME_CONNECTIONS"] = "Połączenia";
$MESS["PERFMON_KPI_REC_CONNECTIONS"] = "Max. połączenia (#VALUE#).";
$MESS["PERFMON_KPI_NAME_MEMORY"] = "Pamięć";
$MESS["PERFMON_KPI_REC_MEMORY"] = "Maksymalne użycie pamięci (Globalne buferowania + Połączenie buferowania * Połączenia). <br> Upewnij się, że wartość taj jest nie większa niż 85 do 90 procent całkowitej fizycznej pamięci serwera (umożliwiając inne procesy).";
$MESS["PERFMON_KPI_NAME_MYISAM_IND"] = "MyISAM indexes";
$MESS["PERFMON_KPI_REC_MYISAM_IND"] = "Rozmiar MyISAM indexes";
$MESS["PERFMON_KPI_REC_MYISAM_NOIND"] = "Brak MyISAM indexes.";
$MESS["PERFMON_KPI_REC_MYISAM4_IND"] = "Nie może oszacować wielkość indeksu MySQL do wersji 5.";
$MESS["PERFMON_KPI_NAME_KEY_MISS"] = "Indeks MyISAM cache (błędny)";
$MESS["PERFMON_KPI_REC_KEY_MISS"] = "Wartość > 5%, wzrost #PARAM_NAME# (aktualny #PARAM_VALUE#)";
$MESS["PERFMON_KPI_NAME_QCACHE_SIZE"] = "Zapytanie cache (rozmiar)";
$MESS["PERFMON_KPI_REC_QCACHE_ZERO_SIZE"] = "Włącz żądanie buforowania (ustaw #PARAM_NAME# na #PARAM_VALUE_LOW# lub więcej, ale nie wyższej niż #PARAM_VALUE_HIGH#).";
$MESS["PERFMON_KPI_REC_QCACHE_TOOLARGE_SIZE"] = "Rozmiar zapytania cache (#PARAM_NAME#) jest ponad #PARAM_VALUE_HIGH#. To może zmniejszyć wydajność.";
$MESS["PERFMON_KPI_REC_QCACHE_OK_SIZE"] = "Rozmiar zapytania cache (#PARAM_NAME#).";
$MESS["PERFMON_KPI_NAME_QCACHE"] = "Qcache_inserts/Qcache_hits";
$MESS["PERFMON_KPI_REC_QCACHE_NO"] = "Zapytanie cache jest obecnie używane ze względu na brak zapytań SELECT.";
$MESS["PERFMON_KPI_REC_QCACHE"] = "Zaproponuj zwiększenie <span class=perfmon_code\">query_cache_size</span> parametru gdy > 1% (teraz jego wartość jest: #VALUE#)\"";
$MESS["PERFMON_KPI_NAME_QCACHE_PRUNES"] = "Zapytanie cache (prunes)";
$MESS["PERFMON_KPI_REC_QCACHE_PRUNES"] = "Liczba skróconych żądań (#STAT_NAME#). Jeżeli wartość ta szybko rośnie, zwiększ #PARAM_NAME# (aktualnie #PARAM_VALUE#), ale do nie więcej niż #PARAM_VALUE_HIGH#.";
$MESS["PERFMON_KPI_NAME_SORTS"] = "Sortowanie";
$MESS["PERFMON_KPI_REC_SORTS"] = "Razem sorowania (#STAT_NAME#).";
$MESS["PERFMON_KPI_NAME_SORTS_DISK"] = "Sorowania (dysk)";
$MESS["PERFMON_KPI_REC_SORTS_DISK"] = "Kurs operacji sortowania wymaga tworzenia tabel tymczasowych na dysku (#STAT_NAME#).Jeżeli wskaźnik ten przekracza #GOOD_VALUE#, wzrost #PARAM1_NAME# (aktualny #PARAM1_VALUE#) i #PARAM2_NAME# (aktualny #PARAM2_VALUE#).";
$MESS["PERFMON_KPI_NAME_JOINS"] = "Select_range_check + Select_full_join";
$MESS["PERFMON_KPI_REC_JOINS"] = "Liczba tabeli przystąpi do operacji wymagających indeksów. (#STAT_NAME#). Duże wskazówki mogą wymagać zwiększenia #PARAM_NAME# (aktualny #PARAM_VALUE#) lub dołącz do tabeli lub dodać indeksy.";
$MESS["PERFMON_KPI_NAME_TMP_DISK"] = "Created_tmp_disk_tables";
$MESS["PERFMON_KPI_REC_TMP_DISK_1"] = "Kurs tabel tymczasowych wymaga tymczasowego miejsca na dysku (#STAT_NAME#). Stawka wynosi ponad #STAT_VALUE# który wymaga, aby zwiększyć wartość #PARAM1_NAME# (aktualny #PARAM1_VALUE#) i #PARAM2_NAME# (aktualny #PARAM2_VALUE#). Zapewnienia, obie wartości są takie same. Ponadto może być konieczne zmniejszenie SELECT DISTINCT zapytania bez LIMIT.";
$MESS["PERFMON_KPI_REC_TMP_DISK_3"] = "Kurs tabel tymczasowych wymaga tymczasowego miejsca na dysku (#STAT_NAME#) jest stosunkowo niski (pod #STAT_VALUE#).";
$MESS["PERFMON_KPI_NAME_THREAD_CACHE"] = "Pasmo cache";
$MESS["PERFMON_KPI_REC_THREAD_NO_CACHE"] = "Wątek cache (#PARAM_NAME#) jest wyłączony. Ustaw ten parametr #PARAM_VALUE# jako wartość początkowa na początek.";
$MESS["PERFMON_KPI_REC_THREAD_CACHE"] = "Wydajności cache wątku (#STAT_NAME#). Jeżeli wartość ta jest mniejsza niż #GOOD_VALUE#, może być konieczne zwiększenie #PARAM_NAME# (aktualnie #PARAM_VALUE#).";
$MESS["PERFMON_KPI_NAME_TABLE_CACHE"] = "Otwórz tabelę cache";
$MESS["PERFMON_KPI_NAME_OPEN_FILES"] = "Otwórz plik";
$MESS["PERFMON_KPI_REC_OPEN_FILES"] = "Kurs otwarcia plików (#STAT_NAME#). Jeżeli wartość ta przekracza #GOOD_VALUE#, wzrost wartości #PARAM_NAME# (aktualnie #PARAM_VALUE#).";
$MESS["PERFMON_KPI_NAME_LOCKS"] = "Zablokuj";
$MESS["PERFMON_KPI_REC_LOCKS"] = "Kurs skutecznie blokuje uzyskane unenqueued (#STAT_NAME#). Jeżeli wartość ta jest mniejsza niż #GOOD_VALUE#, może być konieczne w celu optymalizacji zapytań lub użytkowania InnoDB.";
$MESS["PERFMON_KPI_NAME_INSERTS"] = "Równoległych wkładek";
$MESS["PERFMON_KPI_REC_INSERTS"] = "Równoległych inserts są wyłączone. Można je włączyć, ustawiając #PARAM_NAME# do #REC_VALUE#.";
$MESS["PERFMON_KPI_NAME_CONN_ABORTS"] = "Przerywa połączenie";
$MESS["PERFMON_KPI_REC_CONN_ABORTS"] = "Kurs nieprawidłowo zamkniętych połączeń. Jeżeli wartość ta przekracza 5%, musisz bugfix wniosku.";
$MESS["PERFMON_KPI_NAME_INNODB_BUFFER"] = "InnoDB buffer";
$MESS["PERFMON_KPI_REC_INNODB_BUFFER"] = "InnoDB buffer skuteczność (#STAT_NAME#).Jeżeli wartość ta jest mniejsza niż #GOOD_VALUE#, rozważyć zwiększenie #PARAM_NAME# (aktualnie #PARAM_VALUE#).";
$MESS["PERFMON_KPI_REC_INNODB_FLUSH_LOG"] = "Wartość #PARAM_NAME# powinno być #GOOD_VALUE#.";
$MESS["PERFMON_KPI_REC_INNODB_FLUSH_METHOD"] = "Wartość #PARAM_NAME# powinno być #GOOD_VALUE#.";
$MESS["PERFMON_KPI_REC_TX_ISOLATION"] = "Wartość #PARAM_NAME# musi być #GOOD_VALUE#.";
$MESS["PERFMON_KPI_EMPTY"] = "pusty";
$MESS["PERFMON_KPI_NO"] = "Nie";
$MESS["PERFMON_KPI_NAME_INNODB_LOG_WAITS"] = "Log buffera Waits";
$MESS["PERFMON_KPI_NAME_BINLOG"] = "Binlog_cache_disk_use";
$MESS["PERFMON_WAIT_EVENT"] = "Serwer czeka wydarzeń";
$MESS["PERFMON_WAIT_PCT"] = "Procent całkowitego czasu";
$MESS["PERFMON_WAIT_AVERAGE_WAIT_MS"] = "Średni czas wydarzenia (ms)";
$MESS["PERFMON_PARAMETER_NAME"] = "Parametr";
$MESS["PERFMON_PARAMETER_VALUE"] = "Aktualna wartość";
$MESS["PERFMON_REC_PARAMETER_VALUE"] = "Zalecana wartość";
$MESS["PERFMON_KPI_ORA_REC_ENQ__TX___ROW_LOCK_CONTENTION"] = "Sesja śledzenia wymagana. Są to nabył wyłączne gdy transakcja rozpoczyna swoją pierwszą zmianę i orzekł, dopóki transakcja nie COMMIT lub ROLLBACK.";
$MESS["PERFMON_KPI_ORA_REC_LATCH__CACHE_BUFFERS_CHAINS"] = "Powtarzający się dostęp do bloku (lub małej liczby bloków), znany jako gorący blok.";
$MESS["PERFMON_KPI_ORA_REC_ENQ__TX___INDEX_CONTENTION"] = "Sesja śledzenia wymagana. Są to nabył wyłączne gdy transakcja rozpoczyna swoją pierwszą zmianę i orzekł, dopóki transakcja nie COMMIT lub ROLLBACK.";
$MESS["PERFMON_KPI_ORA_REC_LOG_FILE_SWITCH_COMPLETION"] = "Odnosi się do I/O prędkości. Czekam na przełącznik log, aby zakończyć.";
$MESS["PERFMON_KPI_ORA_REC_SQL_NET_MORE_DATA_FROM_CLIENT"] = "Dotyczy klient-serwer wiadomości prędkości. Serwer jest wykonanie innego wysłać do klienta. Poprzedniej operacji był również wysłać do klienta.";
$MESS["PERFMON_KPI_ORA_REC_BUFFER_BUSY_WAITS"] = "Mogą być spowodowane niskim I/O. Poczekaj, aż bufor będzie dostępny. To wydarzenie się dzieje, ponieważ bufor jest zarówno do odczytania w buforze pamięci podręcznej przez inne sesji (sesja i czeka na zakończenie, że dalsze) lub bufor jest bufor cache, ale w sposób niezgodny (to jest inny sesji zmiany bufora).";
$MESS["PERFMON_KPI_ORA_REC_READ_BY_OTHER_SESSION"] = "Mogą być spowodowane niskim I/O. To zdarzenie ma miejsce, gdy wnioski sesji bufora, który jest obecnie czytać w buforze pamięci podręcznej przez inne sesji. Przed dopuszczeniem 10.1, czeka na to wydarzenie, zostały zebrane z innych powodów do oczekiwania na bufory w ramach 'bufor zajęty czekać' przypadku";
$MESS["PERFMON_KPI_ORA_REC_EVENTS_IN_WAITCLASS_OTHER"] = "Bitrix / Oracle support problem.";
$MESS["PERFMON_KPI_ORA_REC_ROW_CACHE_LOCK"] = "Może być spowodowany niską I/O prędkoścą. Sesja próbuje słownika danych blokady.";
$MESS["PERFMON_KPI_ORA_REC_DB_FILE_PARALLEL_READ"] = "Mogą być spowodowane niskim I/O. Dzieje się tak w trakcie odbudowy. Może się również zdarzyć w buforze prefetching, jak optymalizacji (zamiast wykonywać wiele pojedynczy blok odsłon). bloków danych, które muszą zostać zmienione w ramach odzyskiwania czytać równolegle z bazy danych.";
$MESS["PERFMON_KPI_ORA_REC_SESSION_CACHED_CURSORS"] = "Empiryczna wartość stosowania Bitrix";
$MESS["PERFMON_KPI_ORA_REC_CURSOR_SHARING_FORCE"] = "Typowe dla HTTP/PHP aplikacji w/o za pomocą zmiennych bind";
$MESS["PERFMON_KPI_ORA_REC_PARALLEL_MAX_SERVERS"] = "Empiryczna wartość stosowania Bitrix.";
$MESS["PERFMON_KPI_ORA_REC_OPEN_CURSORS"] = "Empiryczna wartość stosowania Bitrix.";
$MESS["PERFMON_KPI_ORA_REC_OPTIMIZER_MODE"] = "Empiryczna wartość stosowania Bitrix.";
$MESS["PERFMON_USER_NAME"] = "Nazwa schematu";
$MESS["PERFMON_MIN_LAST_ANALYZED"] = "Czas najstarszej analizy schematu";
$MESS["PERFMON_MAX_LAST_ANALYZED"] = "Czas najnowszej analizy schematu";
$MESS["PERFMON_KPI_ORA_REC_STATS_NEW"] = "Statystyk dotyczących obiektów #USER_NAME# jest aktualny.";
$MESS["PERFMON_KPI_REC_SYNC_BINLOG"] = "Preferowana wartość #PARAM_NAME# to #GOOD_VALUE_1# lub nie mniej niż #GOOD_VALUE_2#.";
?>