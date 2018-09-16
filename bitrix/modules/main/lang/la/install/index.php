<?
$MESS["MAIN_ADMIN_GROUP_NAME"] = "Administradores";
$MESS["MAIN_ADMIN_GROUP_DESC"] = "Acceso completo.";
$MESS["MAIN_EVERYONE_GROUP_NAME"] = "Todos los usuarios (con usuarios no autorizados)";
$MESS["MAIN_EVERYONE_GROUP_DESC"] = "Todos los usuarios (incluidos los usuarios no autorizados).";
$MESS["MAIN_VOTE_RATING_GROUP_NAME"] = "Los usuarios pueden votar para calificar";
$MESS["MAIN_VOTE_RATING_GROUP_DESC"] = "La membresía para este grupo de usuarios se administra automáticamente.";
$MESS["MAIN_VOTE_AUTHORITY_GROUP_NAME"] = "Los usuarios pueden votar por la autoridad";
$MESS["MAIN_VOTE_AUTHORITY_GROUP_DESC"] = "La membresía para este grupo de usuario se administra automáticamente.";
$MESS["MAIN_RULE_ADD_GROUP_AUTHORITY_NAME"] = "Inscribirse en usuarios de grupo con permiso para votar por autoridad";
$MESS["MAIN_RULE_ADD_GROUP_RATING_NAME"] = "Inscribirse en usuarios de grupo a los que se les permite votar por calificación";
$MESS["MAIN_RULE_REM_GROUP_AUTHORITY_NAME"] = "Quitar del grupo los usuarios no permitidos para votar por autorización";
$MESS["MAIN_RULE_REM_GROUP_RATING_NAME"] = "Quitar del grupo los usuarios no permitidos para votar por rating";
$MESS["MAIN_RATING_NAME"] = "Calificación";
$MESS["MAIN_RATING_AUTHORITY_NAME"] = "Autoridad";
$MESS["MAIN_RATING_TEXT_LIKE_Y"] = "Me gusta";
$MESS["MAIN_RATING_TEXT_LIKE_N"] = "Ya no me gusta";
$MESS["MAIN_RATING_TEXT_LIKE_D"] = "Me gusta";
$MESS["MAIN_DEFAULT_SITE_NAME"] = "Sitio predeterminado";
$MESS["MAIN_DEFAULT_LANGUAGE_NAME"] = "Spanish";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_DATE"] = "DD/MM/YYYY";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_DATETIME"] = "DD/MM/YYYY HH:MI:SS T";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_NAME"] = "#NAME# #LAST_NAME#";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_CHARSET"] = "iso-8859-1";
$MESS["MAIN_DEFAULT_SITE_FORMAT_DATE"] = "DD/MM/YYYY";
$MESS["MAIN_DEFAULT_SITE_FORMAT_DATETIME"] = "DD/MM/YYYY HH:MI:SS";
$MESS["MAIN_DEFAULT_SITE_FORMAT_NAME"] = "#NAME# #LAST_NAME#";
$MESS["MAIN_DEFAULT_SITE_FORMAT_CHARSET"] = "iso-8859-1";
$MESS["MAIN_MODULE_NAME"] = "Módulo principal";
$MESS["MAIN_MODULE_DESC"] = "El producto Kernel";
$MESS["MAIN_INSTALL_DB_ERROR"] = "No puede conectar a la base de datos. Por favor compruebe los parámetros.";
$MESS["MAIN_NEW_USER_TYPE_NAME"] = "Nuevo usuario se ha registrado";
$MESS["MAIN_NEW_USER_TYPE_DESC"] = "#USER_ID# - ID del Usuario
#LOGIN# - Login
#EMAIL# - EMail
#NAME# - Nombre
#LAST_NAME# - Apellido
#USER_IP# - IP del Usuario
#USER_HOST# - Host del usuario";
$MESS["MAIN_USER_INFO_TYPE_NAME"] = "Datos de la cuenta";
$MESS["MAIN_USER_INFO_TYPE_DESC"] = "#USER_ID# - ID del usuario
#STATUS# - Estado de la cuenta
#MESSAGE# - Mensaje para el usuario
#LOGIN# - Login
#URL_LOGIN# - Inicio de sesión codificado para su uso en la URL
#CHECKWORD# - Comprobar la cadena para cambiar la contraseña
#NAME# - Nombre
#LAST_NAME# - Apellido
#EMAIL# - E-Mail del usuario";
$MESS["MAIN_NEW_USER_CONFIRM_TYPE_NAME"] = "Nueva confirmación de registro del usuarios";
$MESS["MAIN_NEW_USER_CONFIRM_TYPE_DESC"] = "#USER_ID# - ID del usuario
#LOGIN# - Login
#EMAIL# - E-mail
#NAME# - Nombre
#LAST_NAME# - Apellido
#USER_IP# - IP del usuario
#USER_HOST# - host del usuario
#CONFIRM_CODE# - código de confirmación";
$MESS["MAIN_USER_INVITE_TYPE_NAME"] = "Invitación a un nuevo usuario del sitio";
$MESS["MAIN_USER_INVITE_TYPE_DESC"] = "#ID# - ID del usuario
#LOGIN# - Login
#URL_LOGIN# - Inicio de sesión codificado para su uso en la URL
#EMAIL# - EMail
#NAME# - Nombre
#LAST_NAME# - Apellido
#PASSWORD# - Contraseña del usuario
#CHECKWORD# - Cadena de verificación de contraseña
#XML_ID# - ID del usuario para enlazar con fuentes de datos externas";
$MESS["MAIN_NEW_USER_EVENT_NAME"] = "#SITE_NAME#: Nuevo usuario se ha registrado en el sitio";
$MESS["MAIN_NEW_USER_EVENT_DESC"] = "Mensaje informativo de #SITE_NAME#
---------------------------------------


Un nuevo usuario se ha registrado en el sitio #SERVER_NAME#.

Datos del usuario:
ID del usuario: #USER_ID#

Nombre: #NAME#
Apellido: #LAST_NAME#
E-Mail del usuario: #EMAIL#

Login: #LOGIN#

Mensaje generado automáticamente.";
$MESS["MAIN_USER_INFO_EVENT_NAME"] = "#SITE_NAME#: Información de registro";
$MESS["MAIN_USER_INFO_EVENT_DESC"] = "Mensaje informativo de #SITE_NAME#
------------------------------------

#NAME# #LAST_NAME#,

#MESSAGE#


Su información de registro:

ID del usuario: #USER_ID#
Estado de la cuenta: #STATUS#
Conexión: #LOGIN#.

Para cambiar su contraseña, visite el siguiente enlace:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=en&USER_CHECKWORD=#CHECKWORD#&USER_LOGIN=#URL_LOGIN#

Mensaje generado automáticamente.";
$MESS["MAIN_USER_PASS_REQUEST_EVENT_DESC"] = "Mensaje informativo de #SITE_NAME#
---------------------------------------

#NAME# #LAST_NAME#,

#MESSAGE#

Para cambiar su contraseña por favor visite e siguiente enlace:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=en&USER_CHECKWORD=#CHECKWORD#

Su información de registro:

ID del usuario: #USER_ID#
Estado de la cuenta: #STATUS#
Conexión: #LOGIN#.

Mensaje generado automáticamente.";
$MESS["MAIN_USER_PASS_CHANGED_EVENT_DESC"] = "Mensaje informativo de #SITE_NAME#
---------------------------------------

#NAME# #LAST_NAME#,

#MESSAGE#

Para cambiar su contraseña por favor visite e siguiente enlace:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=en&USER_CHECKWORD=#CHECKWORD#

Su información de registro:

ID del usuario: #USER_ID#
Estado de la cuenta: #STATUS#
Conexión: #LOGIN#.

Mensaje generado automáticamente.";
$MESS["MAIN_NEW_USER_CONFIRM_EVENT_NAME"] = "#SITE_NAME#: Nueva confirmación de registro del usuarios";
$MESS["MAIN_NEW_USER_CONFIRM_EVENT_DESC"] = "Saludos de #SITE_NAME#!
------------------------------------------

Hola,

Ha recibido este mensaje por que usted (o alguien más) ha usado su e-mail para registrarse en #SERVER_NAME#.

Su código de confirmación de registro:#CONFIRM_CODE#

Utilice el siguiente enlace para verificar y activar su inscripción: http://#SERVER_NAME#/auth/index.php?confirm_registration=yes&confirm_user_id=#USER_ID#&confirm_code=#CONFIRM_CODE#

Como alternativa, abra el enlace en su navegador e introduzca el código de forma manual: http://#SERVER_NAME#/auth/index.php?confirm_registration=yes&confirm_user_id=#USER_ID#

Atención! Su cuenta no se activará hasta que se confirme el registro. 

---------------------------------------------------------------------

Mensaje generado automáticamente.";
$MESS["MAIN_USER_INVITE_EVENT_NAME"] = "#SITE_NAME#: Invitación al sitio";
$MESS["MAIN_USER_INVITE_EVENT_DESC"] = "Mensaje informativo desde el sitio #SITE_NAME#
------------------------------------------
Hola #NAME# #LAST_NAME#!

El administrador le ha agregado a usuarios registrados del sitio.

Le invitamos a visitar nuestro sitio.

Su información de registro:

ID del usuario: #ID#
Login: #LOGIN#

Nosotros le recomendamos cambiar la contraseña generada automáticamente.

Para cambiar la contraseña siga por favor el siguiente link:
http://#SERVER_NAME#/auth.php?change_password=yes&USER_LOGIN=#URL_LOGIN#&USER_CHECKWORD=#CHECKWORD#";
$MESS["MF_EVENT_NAME"] = "Envío de un mensaje mediante un formulario de comentarios";
$MESS["MF_EVENT_DESCRIPTION"] = "#AUTHOR# - Autor del mensaje
#AUTHOR_EMAIL# - Dirección de correo electrónico del autor
#TEXT# - Mensaje de texto
#EMAIL_FROM# - Dirección electrónica del remitente
#EMAIL_TO# - Dirección electrónica del destinatario";
$MESS["MF_EVENT_SUBJECT"] = "#SITE_NAME#: Un mensaje del formulario de comentarios";
$MESS["MF_EVENT_MESSAGE"] = "Notificación de #SITE_NAME#
------------------------------------------

Un mensaje ha sido enviado a usted desde el formulario de comentarios.

enviado por: #AUTHOR#
e-mail del remitente: #AUTHOR_EMAIL#

texto del mensaje:
#TEXT#

Esta notificación ha sido generada automáticamente.";
$MESS["MAIN_USER_PASS_REQUEST_TYPE_NAME"] = "Solicitud de Cambio de Contraseña";
$MESS["MAIN_USER_PASS_CHANGED_TYPE_NAME"] = "Confirmación de Cambio de Contraseña";
$MESS["MAIN_USER_PASS_REQUEST_EVENT_NAME"] = "#SITE_NAME#: Solicitud de Cambio de Contraseña";
$MESS["MAIN_USER_PASS_CHANGED_EVENT_NAME"] = "#SITE_NAME#: Confirmación de Cambio de Contraseña";
$MESS["MAIN_DESKTOP_CREATEDBY_KEY"] = "Creado por";
$MESS["MAIN_DESKTOP_CREATEDBY_VALUE"] = "Bitrix, Inc. ";
$MESS["MAIN_DESKTOP_URL_KEY"] = "URL del Sitio Web";
$MESS["MAIN_DESKTOP_URL_VALUE"] = "<a href=\"http://www.bitrixsoft.com\">www.bitrixsoft.com</a>";
$MESS["MAIN_DESKTOP_PRODUCTION_KEY"] = "Publicado el";
$MESS["MAIN_DESKTOP_PRODUCTION_VALUE"] = "12.12.2011";
$MESS["MAIN_DESKTOP_RESPONSIBLE_KEY"] = "Administrador";
$MESS["MAIN_DESKTOP_RESPONSIBLE_VALUE"] = "John Doe";
$MESS["MAIN_DESKTOP_EMAIL_KEY"] = "E-mail";
$MESS["MAIN_DESKTOP_EMAIL_VALUE"] = "<a href=\"mailto:info@bitrixsoft.com\">info@bitrixsoft.com</a>";
$MESS["MAIN_DESKTOP_INFO_TITLE"] = "Info del Sitio Web";
$MESS["MAIN_DESKTOP_RSS_TITLE"] = "Noticias de Bitrix";
$MESS["MAIN_RULE_AUTO_AUTHORITY_VOTE_NAME"] = "Votación automática para la autorización del usuario";
$MESS["MAIN_SMILE_DEF_SET_NAME"] = "Ajuste predeterminado";
$MESS["MAIN_MAIL_CONFIRM_EVENT_TYPE_NAME"] = "Confirmar la dirección de correo electrónico del remitente";
$MESS["MAIN_MAIL_CONFIRM_EVENT_TYPE_DESC"] = "#EMAIL_TO# - Dirección de correo electrónico por confirmar
#CONFIRM_CODE# - Código de confirmación";
?>