<?
$MESS["PULL_OPTIONS_STATUS_Y"] = "Actif(ve)";
$MESS["PULL_OPTIONS_NGINX_VERSION_034"] = "Machine virtuelle 4.2 - 4.3 (nginx-push-stream-module 0.3.4)";
$MESS["PULL_OPTIONS_NGINX_VERSION_040"] = "Machine virtuelle 4.4 et plus (nginx-push-stream-module 0.4.0)";
$MESS["PULL_OPTIONS_WEBSOCKET"] = "Activer le support WebSocket";
$MESS["PULL_OPTIONS_WS_CONFIRM"] = "Attention: avant d'activer cette option, vous devez vous assurer que le 'Serveur de files d'attente' (nginx-push-stream-module) est configuré pour supporter WebSocket";
$MESS["PULL_OPTIONS_NGINX_CONFIRM"] = "Attention: avant d'activer cette option, vous devrez installer la 'File d'attente du serveur' (nginx-push-stream-module)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER_DESC"] = "Utilisez toujours les ports non standards (par exemple 8893 pour HTTP et 8894 pour HTTPS) pour les applications mobiles, parce que certains modèles de téléphones portables ne soutiennent pas Long pooling avec le port standard.";
$MESS["PULL_OPTIONS_NGINX_BUFFERS_DESC"] = "Ce réglage dépend de la configuration 'large_client_header_buffers' du serveur 'nginx', le paramètre est calculé pour la valeur <b>8k</b>";
$MESS["PULL_OPTIONS_NGINX_DOC_LINK"] = "aide en ligne";
$MESS["PULL_OPTIONS_USE"] = "Modules utilisés";
$MESS["PULL_OPTIONS_NGINX_BUFFER"] = "Nombre maximal d'ordres envoyées sur une seule connexion au serveur";
$MESS["PULL_OPTIONS_NGINX_VERSION_034_DESC"] = "module nginx-push-flux-module 0.4.0 est recommandé pour l'installation obligatoire.<br> Lorsque vous utilisez le module nginx-push-stream-module 0.3.4, le WebSocket et la diffusion en masse des ordres seront indisponibles.";
$MESS["PULL_OPTIONS_NGINX_VERSION"] = "Logiciel de serveur";
$MESS["PULL_OPTIONS_NGINX"] = "nginx-push-stream-module est installé";
$MESS["PULL_OPTIONS_WEBSOCKET_DESC"] = "Réglage des paramètres d'accès pour tous les navigateurs modernes, pour les versions plus anciennes la technologie Long pooling sera utilisé.";
$MESS["PULL_TAB_TITLE_SETTINGS"] = "Paramétrage du module";
$MESS["PULL_TAB_SETTINGS"] = "Paramètres";
$MESS["PULL_OPTIONS_STATUS_N"] = "Démissionné";
$MESS["PULL_OPTIONS_SITES"] = "Ne pas utiliser le module sur les sites";
$MESS["PULL_OPTIONS_PUSH"] = "Envoyer les avis PUSH aux portables";
$MESS["PULL_OPTIONS_NGINX_DOC"] = "En savoir plus sur l'installation et l'utilisation de nginx-push-flux-module ici:";
$MESS["PULL_OPTIONS_PATH_TO_PUBLISH"] = "Chemin pour la publication des instructions";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER"] = "Chemin pour la lecture des commandes (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_SECURE"] = "Chemin pour la lecture des ordres (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER"] = "Chemin vers la lecture des commandes à l'application mobile (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_MOBILE_LISTENER_SECURE"] = "Le chemin d'accès des commandes sur l'application mobile (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_WEBSOCKET"] = "Chemin d'accès pour la lecture des commandes à travers le WebSocket (HTTP)";
$MESS["PULL_OPTIONS_PATH_TO_WEBSOCKET_SECURE"] = "Chemin pour la lecture des instructions via WebSocket (HTTPS)";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_DESC"] = "Il est recommandé d'utiliser un port standard pour HTTP ou HTTPS.<br>Utiliser 8893 (HTTP) ou 8894 (HTTPS) uniquement pour la version nginx-push-flux-module 0.3.4.";
$MESS["PULL_OPTIONS_STATUS"] = "Etat du module";
$MESS["PULL_OPTIONS_HEAD_BLOCK"] = "Exclure les sites";
$MESS["PULL_OPTIONS_HEAD_PUB"] = "Commande envoi URL";
$MESS["PULL_OPTIONS_HEAD_SUB_WS"] = "URL de commande de lecture pour le Web Socket activé navigateurs";
$MESS["PULL_OPTIONS_HEAD_SUB_MOB"] = "URL de lecture de commande pour les navigateurs mobiles";
$MESS["PULL_OPTIONS_HEAD_SUB_MODERN"] = "URL de lecture de commande pour les navigateurs modernes";
$MESS["PULL_OPTIONS_HEAD_SUB"] = "URL de lecture de commande pour les navigateurs obsolètes";
$MESS["PULL_OPTIONS_PATH_TO_LISTENER_MODERN_DESC"] = "Notez que les navigateurs modernes peuvent se connecter à un serveur de poussoir de la télécommande, même sur un domaine différent (des demandes CORS).";
$MESS["PULL_OPTIONS_GUEST"] = "Activer le module pour les utilisateurs anonymes";
$MESS["PULL_OPTIONS_GUEST_DESC"] = "Informations utilisateur fournies par le module Web Analytics";
$MESS["PULL_OPTIONS_SIGNATURE_KEY"] = "Code de signature pour interaction avec le serveur";
$MESS["PULL_OPTIONS_NGINX_2"] = "<b>\"Push server\"</b> est installé et actif sur le serveur";
$MESS["PULL_OPTIONS_NGINX_VERSION_710"] = "Bitrix Virtual Appliance 7.1 ou version ultérieure (Bitrix Push server)";
$MESS["PULL_BATCH_MAX_COUNT_MESSAGES"] = "Nombre maximum de notifications push à envoyer simultanément";
?>