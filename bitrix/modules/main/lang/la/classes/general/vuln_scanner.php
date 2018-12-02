<?
$MESS["VULNSCAN_SIMILAR"] = "Similares";
$MESS["VULNSCAN_REQUIRE"] = "Condiciones requeridas";
$MESS["VULNSCAN_FILE"] = "Archivo";
$MESS["VULNSCAN_XSS_NAME"] = "Cruzar Secuencias de comandos";
$MESS["VULNSCAN_XSS_HELP"] = "Un atacante puede ejecutar malintencionado o arbitraria HTML/JS el código en el contexto del explorador de la víctima. Es recomendable filtrar las variables antes del de salida a HTML/JS.<br>Leer más: <a href=\"https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)\">https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)</a>";
$MESS["VULNSCAN_XSS_HELP_SAFE"] = "Use <b>htmlspecialcharsbx</b>. Los valores de las etiquetas siempre en doble comilla. Obligatorio especificar el protocolo (http) en los valores de los atributos href y src cuando sea requerido.";
$MESS["VULNSCAN_HEADER_NAME"] = "División de respuesta HTTP";
$MESS["VULNSCAN_HEADER_HELP"] = "Un atacante puede utilizar el encabezado de la respuesta HTTP de inyección para realizar la redirección o insertar un código malicioso HTML/JS. SSe recomienda filtrar los saltos antes de la salida para el encabezado de respuesta.. Actual PHP anteriores a 5.4. Leer más:<a href=\"http://www.infosecwriters.com/text_resources/pdf/HTTP_Response.pdf\">http://www.infosecwriters.com/text_resources/pdf/HTTP_Response.pdf</a>";
$MESS["VULNSCAN_HEADER_HELP_SAFE"] = "Nuevas líneas se recomienda para ser filtrados antes de agregar texto al encabezado.";
$MESS["VULNSCAN_DATABASE_NAME"] = "Inyección de SQL";
$MESS["VULNSCAN_DATABASE_HELP"] = "Un atacante puede inyectar comandos SQL en la consulta, que es extremadamente peligroso. Se recomienda filtrar los datos del usuario antes de ser enviado al servidor. Leer más: <a href=\"https://www.owasp.org/index.php/SQL_Injection\">https://www.owasp.org/index.php/SQL_Injection</a>";
$MESS["VULNSCAN_DATABASE_HELP_SAFE"] = "Utilice conversiones explícitas de tipos para datos numéricos (int, float etc.). Use mysql_escape_string, \$DB->ForSQL() y rutinas similares para datos cadena. Control de longitud de datos.";
$MESS["VULNSCAN_INCLUDE_NAME"] = "Inclusión de archivo";
$MESS["VULNSCAN_INCLUDE_HELP"] = "Un atacante puede montar sistemas de ficheros locales y / o remotas, o leer archivos de página web. Se recomienda dar formato canónico a la ruta de los datos del usuario antes de usarlos. Leer más:<a href=\"https://rdot.org/forum/showthread.php?t=343\">https://rdot.org/forum/showthread.php?t=343</a>";
$MESS["VULNSCAN_INCLUDE_HELP_SAFE"] = "Normalizar trazados antes de usarlos.";
$MESS["VULNSCAN_EXEC_NAME"] = "Ejecución de comandos arbitrarios";
$MESS["VULNSCAN_EXEC_HELP"] = "Un atacante puede inyectar y ejecutar un código arbitrario o comandos. Es extremadamente peligroso. Leer más: <a href=\"https://www.owasp.org/index.php/Code_Injection\">https://www.owasp.org/index.php/Code_Injection</a>";
$MESS["VULNSCAN_EXEC_HELP_SAFE"] = "Compruebe que los valores de las variables sean válidas y en el rango permitido. Por ejemplo, es posible que desee rechazar caracteres nacionales y signos puntuacion. El rango permitido es definido por los requerimientos del proyecto. Use escapeshellcmd y escapeshellarg para estar en el lado seguro.";
$MESS["VULNSCAN_CODE_NAME"] = "Ejecución de código arbitrario";
$MESS["VULNSCAN_CODE_HELP"] = "Un atacante puede inyectar y ejecutar código PHP arbitrario. Leer más: <a href=\"http://cwe.mitre.org/data/definitions/78.html\">http://cwe.mitre.org/data/definitions/78.html</a>";
$MESS["VULNSCAN_CODE_HELP_SAFE"] = "Filtro de entrada de usuario <b>EscapePHPString</b>. ";
$MESS["VULNSCAN_POP_NAME"] = "Serialización de datos";
$MESS["VULNSCAN_POP_HELP"] = "Deserialización de datos de usuario puede convertirse en una grave vulnerabilidad. Leer más: <a href=\"https://rdot.org/forum/showthread.php?t=950\">https://rdot.org/forum/showthread.php?t=950</a>";
$MESS["VULNSCAN_OTHER_NAME"] = "Posible cambio de la lógica del sistema";
$MESS["VULNSCAN_OTHER_HELP"] = "No hay ninguna descripción.";
$MESS["VULNSCAN_UNKNOWN"] = "Vulnerabilidad potencial";
$MESS["VULNSCAN_UNKNOWN_HELP"] = "No hay ninguna descripción.";
$MESS["VULNSCAN_HELP_INPUT"] = "Fuente";
$MESS["VULNSCAN_HELP_FUNCTION"] = "Función/método";
$MESS["VULNSCAN_HELP_VULNTYPE"] = "Tipo de vulnerabilidad";
$MESS["VULNSCAN_HELP_SAFE"] = "No se arriesgue!";
$MESS["VULNSCAN_FIULECHECKED"] = "Archivos comprobados:";
$MESS["VULNSCAN_VULNCOUNTS"] = "Problemas potenciales que se encuentran:";
$MESS["VULNSCAN_DYNAMIC_FUNCTION"] = "Llamada a la función dinámica!";
$MESS["VULNSCAN_EXTRACT"] = "Anteriormente las variables inicializadas se pueden sobrescribir!";
$MESS["VULNSCAN_TOKENIZER_NOT_INSTALLED"] = "Tokenizer PHP no está activado. Por favor habilítelo para completar la prueba.";
?>