<?
$MESS["MAIN_ADMIN_GROUP_NAME"] = "Administrateurs";
$MESS["MAIN_ADMIN_GROUP_DESC"] = "Accès total.";
$MESS["MAIN_EVERYONE_GROUP_NAME"] = "Tous les utilisateurs (avec des utilisateurs non-autorisés)";
$MESS["MAIN_EVERYONE_GROUP_DESC"] = "Tous les utilisateurs (avec des utilisateurs non-autorisés).";
$MESS["MAIN_VOTE_RATING_GROUP_NAME"] = "Utilisateurs ayant le droit de voter pour le rating";
$MESS["MAIN_VOTE_RATING_GROUP_DESC"] = "Dans ce groupe les utilisateurs sont ajoutés automatiquement.";
$MESS["MAIN_VOTE_AUTHORITY_GROUP_NAME"] = "Utilisateurs ayant le droit de voter pour l'autorité";
$MESS["MAIN_VOTE_AUTHORITY_GROUP_DESC"] = "Dans ce groupe les utilisateurs sont ajoutés automatiquement.";
$MESS["MAIN_RULE_ADD_GROUP_AUTHORITY_NAME"] = "Ajout dans le groupe des utilisateurs nantis du droit de voter pour l'autorité";
$MESS["MAIN_RULE_ADD_GROUP_RATING_NAME"] = "Ajout du groupe des utilisateurs ayant le droit de voter pour le classement";
$MESS["MAIN_RULE_REM_GROUP_AUTHORITY_NAME"] = "Suppression du groupe les utilisateurs n'ayant pas le droit de voter pour l'autorité";
$MESS["MAIN_RULE_REM_GROUP_RATING_NAME"] = "Suppression du groupe des utilisateurs qui n'ont pas le droit de voter pour le classement";
$MESS["MAIN_RATING_NAME"] = "Classement";
$MESS["MAIN_RATING_AUTHORITY_NAME"] = "Autorité";
$MESS["MAIN_RATING_TEXT_LIKE_Y"] = "Cela plaît à";
$MESS["MAIN_RATING_TEXT_LIKE_N"] = "Déplaît";
$MESS["MAIN_RATING_TEXT_LIKE_D"] = "Cela plaît à";
$MESS["MAIN_DEFAULT_SITE_NAME"] = "Site par défaut";
$MESS["MAIN_DEFAULT_LANGUAGE_NAME"] = "French";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_DATE"] = "DD/MM/YYYY";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_DATETIME"] = "DD/MM/YYYY HH:MI:SS";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_NAME"] = "#NAME# #LAST_NAME#";
$MESS["MAIN_DEFAULT_LANGUAGE_FORMAT_CHARSET"] = "iso-8859-1";
$MESS["MAIN_DEFAULT_SITE_FORMAT_DATE"] = "DD/MM/YYYY";
$MESS["MAIN_DEFAULT_SITE_FORMAT_DATETIME"] = "DD/MM/YYYY HH:MI:SS";
$MESS["MAIN_DEFAULT_SITE_FORMAT_NAME"] = "#NAME# #LAST_NAME#";
$MESS["MAIN_DEFAULT_SITE_FORMAT_CHARSET"] = "iso-8859-1";
$MESS["MAIN_MODULE_NAME"] = "Module principal";
$MESS["MAIN_MODULE_DESC"] = "Le noyau du produit";
$MESS["MAIN_INSTALL_DB_ERROR"] = "Vous ne pouvez pas vous connecter à la base de données. S'il vous plaît vérifier les paramètres.";
$MESS["MAIN_NEW_USER_TYPE_NAME"] = "Nouvel utilisateur a été enregistrée";
$MESS["MAIN_NEW_USER_TYPE_DESC"] = "#USER_ID# - ID utilisateur
#LOGIN# - Login
#EMAIL# - E-mail
#NAME# - Prénom
#LAST_NAME# - Nom
#USER_IP# - IP de l'utilisateur
#USER_HOST# - Hébergeur de l'utilisateur";
$MESS["MAIN_USER_INFO_TYPE_NAME"] = "Information sur l'utilisateur";
$MESS["MAIN_USER_INFO_TYPE_DESC"] = "#USER_ID# - ID utilisateur
#STATUS# - Statut de l'identifiant
#MESSAGE# - Message à l'utilisateur
#LOGIN# - Identifiant
#URL_LOGIN# -Identifiant chiffré pour utilisation en URL
#CHECKWORD# - Ligne de commande pour le changement du mot de passe
#NAME# - Prénom
#LAST_NAME# - Nom
#EMAIL# - Adresse email de l'utilisateur";
$MESS["MAIN_NEW_USER_CONFIRM_TYPE_NAME"] = "Validation d'enregistrement d'un nouvel utilisateur";
$MESS["MAIN_NEW_USER_CONFIRM_TYPE_DESC"] = "#USER_ID# - ID utilisateur
#LOGIN# - Identifiant
#EMAIL# - E-mail
#NAME# - Prénom
#LAST_NAME# - Nom
#USER_IP# - IP de l'utilisateur
#USER_HOST# - Hébergeur de l'utilisateur
#CONFIRM_CODE# - Code de confirmation";
$MESS["MAIN_USER_INVITE_TYPE_NAME"] = "Invitation du nouveau utilisateur au site";
$MESS["MAIN_USER_INVITE_TYPE_DESC"] = "#ID# - ID dutilisateur
#LOGIN# - Nom de l'utilisateur
#URL_LOGIN# - Identifiant codé pour son utilisation dans URL
#EMAIL# - Adresse email
#NAME# - Prénom
#LAST_NAME# - Nom
#PASSWORD# - Mot de passe d'utilisateur
#CHECKWORD# - Lien pour changer le mot de passe
#XML_ID# - ID utilisateur pour la connexion aux sources extérieures";
$MESS["MAIN_NEW_USER_EVENT_NAME"] = "#SITE_NAME#: Un nouvel utilisateur s'est connecté au site";
$MESS["MAIN_NEW_USER_EVENT_DESC"] = "Message venu du site #SITE_NAME#
------------------------------------------

Sur le site #SERVER_NAME# un nouvel utilisateur a été inscrit avec succès.

Données d'utilisateur:
ID d'utilisateur: #USER_ID#

Prénom: #NAME#
Nom: #LAST_NAME#
E-mail: #EMAIL#

Login: #LOGIN#

La lettre est générée automatiquement.";
$MESS["MAIN_USER_INFO_EVENT_NAME"] = "#SITE_NAME#:  Infos d'enregistrement ";
$MESS["MAIN_USER_INFO_EVENT_DESC"] = "Message d'information du site #SITE_NAME#
------------------------------------------
#NAME# #LAST_NAME#,

#MESSAGE#

Votre information d'inscription:

ID de l'utilisateur: #USER_ID#
Statut du profil: #STATUS#
Login: #LOGIN#

Pour changer le mot de passe, cliquez sur ce lien:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=fr&USER_CHECKWORD=#CHECKWORD#&USER_LOGIN=#URL_LOGIN#

Ce message a été généré automatiquement.";
$MESS["MAIN_USER_PASS_REQUEST_EVENT_DESC"] = "Message d'information du site #SITE_NAME#
------------------------------------------
#NAME# #LAST_NAME#,

#MESSAGE#

Pour changer le mot de passe veuillez suivre le lien suivant:
http://#SERVER_NAME#/auth/index.php?change_password=yes&lang=fr&USER_CHECKWORD=#CHECKWORD#&USER_LOGIN=#URL_LOGIN#

Votre information d'enregistrement:

ID de l'utilisateur: #USER_ID#
Statut du profil: #STATUS#
Login: #LOGIN#

Ce message a été généré automatiquement.";
$MESS["MAIN_USER_PASS_CHANGED_EVENT_DESC"] = "Message d'information du site #SITE_NAME#
------------------------------------------
#NAME# #LAST_NAME#,

#MESSAGE#

Vos informations d'enregistrement:

ID de l'utilisateur: #USER_ID#
Statut du profile: #STATUS#
Login: #LOGIN#

Ce message a été généré automatiquement.";
$MESS["MAIN_NEW_USER_CONFIRM_EVENT_NAME"] = "#SITE_NAME#: Confirmation de l'enregistrement du nouvel utilisateur";
$MESS["MAIN_NEW_USER_CONFIRM_EVENT_DESC"] = "Message d'information du site #SITE_NAME#
------------------------------------------

Bonjour,

Vous avez reçu ce message parce que votre adresse a été utilisée pour enregistrer un nouvel utilisateur sur le serveur #SERVER_NAME#.

Votre code de confirmation de l'enregistrement: #CONFIRM_CODE#

Pour confirmer l'enregistrement, veuillez suivre ce lien:
http://#SERVER_NAME#/auth/index.php?confirm_registration=yes&confirm_user_id=#USER_ID#&confirm_code=#CONFIRM_CODE#

Vous pouvez aussi entrez le code de confirmation de l'enregistrement sur la page:
http://#SERVER_NAME#/auth/index.php?confirm_registration=yes&confirm_user_id=#USER_ID#

Attention ! Votre profil ne sera pas actif jusqu'à ce que vous confirmiez votre enregistrement.

---------------------------------------------------------------------

Message généré automatiquement.";
$MESS["MAIN_USER_INVITE_EVENT_NAME"] = "#SITE_NAME#: Invitation sur le site";
$MESS["MAIN_USER_INVITE_EVENT_DESC"] = "Message d'information du site #SITE_NAME#
------------------------------------------
Cher, #NAME# #LAST_NAME#!

L'administrateur du site vous a ajouté au nombre d'utilisateurs enregistrés.

Nous vous invitons à notre site Web.

Vos informations de connexion:

ID de l'utilisateur: #ID#
Login: #LOGIN#

Nous vous recommandons de changer le mot de passe sélectionné automatiquement.

Pour changer le mot de passe cliquez:
http://#SERVER_NAME#/auth.php?change_password=yes&USER_LOGIN=#URL_LOGIN#&USER_CHECKWORD=#CHECKWORD#";
$MESS["MF_EVENT_NAME"] = "Envoi de messages via le formulaire de commentaires";
$MESS["MF_EVENT_DESCRIPTION"] = "#AUTHOR# - Auteur du message
#AUTHOR_EMAIL# - Adresse email de l'auteur
#TEXT# - Texte du message
#EMAIL_FROM# - Adresse email de l'expéditeur
#EMAIL_TO# - Adresse email du destinataire";
$MESS["MF_EVENT_SUBJECT"] = "#SITE_NAME#: Message du formulaire de contact";
$MESS["MF_EVENT_MESSAGE"] = "Message d'information du site #SITE_NAME#
------------------------------------------

Un message vous a été envoyé par le formulaire de rétroaction

Auteur: #AUTHOR#
Adresse emailde l'auteur: #AUTHOR_EMAIL#

Texte du message:
#TEXT#

Ce message a été généré automatiquement.";
$MESS["MAIN_USER_PASS_REQUEST_TYPE_NAME"] = "Demande de changement du mot de passe";
$MESS["MAIN_USER_PASS_CHANGED_TYPE_NAME"] = "Confirmation du changement de mot de passe";
$MESS["MAIN_USER_PASS_REQUEST_EVENT_NAME"] = "#SITE_NAME#: Demande de changement du mot de passe";
$MESS["MAIN_USER_PASS_CHANGED_EVENT_NAME"] = "#SITE_NAME#: Confirmation du changement du mot de passe";
$MESS["MAIN_DESKTOP_CREATEDBY_KEY"] = "Créé par";
$MESS["MAIN_DESKTOP_CREATEDBY_VALUE"] = "Bitrix, Inc. ";
$MESS["MAIN_DESKTOP_URL_KEY"] = "Adresse du site";
$MESS["MAIN_DESKTOP_URL_VALUE"] = "<a href=\"http://www.bitrixsoft.com\">www.bitrixsoft.com</a>";
$MESS["MAIN_DESKTOP_PRODUCTION_KEY"] = "Le site a été mis en service";
$MESS["MAIN_DESKTOP_PRODUCTION_VALUE"] = "12.12.2011";
$MESS["MAIN_DESKTOP_RESPONSIBLE_KEY"] = "Administrateur";
$MESS["MAIN_DESKTOP_RESPONSIBLE_VALUE"] = "John Doe";
$MESS["MAIN_DESKTOP_EMAIL_KEY"] = "Courrier électronique";
$MESS["MAIN_DESKTOP_EMAIL_VALUE"] = "<a href='mailto:info@bitrixsoft.com'> info@bitrixsoft.com</a>";
$MESS["MAIN_DESKTOP_INFO_TITLE"] = "Propos de site";
$MESS["MAIN_DESKTOP_RSS_TITLE"] = "Actualités Bitrix";
$MESS["MAIN_RULE_AUTO_AUTHORITY_VOTE_NAME"] = "Vote automatique pour l'autorité d'utilisateur";
$MESS["MAIN_SMILE_DEF_SET_NAME"] = "Ensemble de base";
$MESS["MAIN_MAIL_CONFIRM_EVENT_TYPE_NAME"] = "Confirmez l'adresse e-mail de l'expéditeur";
$MESS["MAIN_MAIL_CONFIRM_EVENT_TYPE_DESC"] = "#EMAIL_TO# - Adresse e-mail à confirmer
#CONFIRM_CODE# - Code de confirmation";
$MESS["MAIN_MAIL_CONFIRM_EVENT_NAME"] = "Confirmer l'adresse e-mail";
$MESS["MAIN_MAIL_CONFIRM_EVENT_DESC"] = "<span style=\"font-size:16px;line-height:20px;\">
Saisissez ce code de vérification dans votre Bitrix24 pour confirmer votre adresse e-mail.<br>

<span style=\"font-size:24px;line-height:70px;\"><b>#CONFIRM_CODE#</b></span><br>

<span style=\"color:#808080;\">
Pourquoi dois-je vérifier mon adresse e-mail ?<br><br>
<span style=\"font-size:14px;\">Nous avons besoin que vous confirmiez votre adresse e-mail pour éviter les usurpations d'identité et nous assurer que vous possédiez l'adresse d'où sont envoyés les e-mails.</span>
</span>";
?>