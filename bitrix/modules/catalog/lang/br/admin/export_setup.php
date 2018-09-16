<?
$MESS["CES_ERROR_NO_FILE"] = "O arquivo de exportação não está configurado.";
$MESS["CES_ERROR_NO_ACTION"] = "A ação não foi configurada.";
$MESS["CES_ERROR_FILE_NOT_EXIST"] = "O arquivo de exportação não foi encontrado:";
$MESS["CES_ERROR_NOT_AGENT"] = "Este perfil não pode ser utilizado por agentes porque já é utilizado por padrão e um arquivo de configurações está definido como exportador atual. ";
$MESS["CES_ERROR_ADD_PROFILE"] = "Erro ao adicionar perfil";
$MESS["CES_ERROR_NOT_CRON"] = "Este perfil não pode ser utilizado com cron porque já é utilizado por padrão e um arquivo de configurações está definido como exportador atual. ";
$MESS["CES_ERROR_ADD2CRON"] = "Erro ao instalar o arquivo de configuração com cron:";
$MESS["CES_ERROR_UNKNOWN"] = "erro desconhecido.";
$MESS["CES_ERROR_NO_PROFILE1"] = "Perfil #";
$MESS["CES_ERROR_NO_PROFILE2"] = "não foi encontrado.";
$MESS["CES_ERROR_SAVE_PROFILE"] = "Erro ao salvar o arquivo de exportação.";
$MESS["CES_ERROR_NO_SETUP_FILE"] = "O arquivo de instalação de exportação não foi encontrado.";
$MESS["TITLE_EXPORT_PAGE"] = "Instalação de exportação";
$MESS["CES_ERRORS"] = "Erro ao executar a operação:";
$MESS["CES_SUCCESS"] = "A operação foi concluída com sucesso.";
$MESS["CES_EXPORT_FILE"] = "Arquivo de dados exportado:";
$MESS["CES_EXPORTER"] = "Exportador";
$MESS["CES_ACTIONS"] = "Ações";
$MESS["CES_PROFILE"] = "Perfil";
$MESS["CES_IN_MENU"] = "No menu";
$MESS["CES_IN_AGENT"] = "Nos agentes";
$MESS["CES_IN_CRON"] = "No cron";
$MESS["CES_USED"] = "ltima execução";
$MESS["CES_ADD_PROFILE_DESCR"] = "Adicionar novo perfil de exportação";
$MESS["CES_ADD_PROFILE"] = "Adicionar perfil";
$MESS["CES_DEFAULT"] = "Padrão";
$MESS["CES_NO"] = "Não";
$MESS["CES_YES"] = "Sim";
$MESS["CES_RUN_INTERVAL"] = "Período entre lançamentos (horas):";
$MESS["CES_SET"] = "Instalar";
$MESS["CES_DELETE"] = "Deletar";
$MESS["CES_CLOSE"] = "Fechar";
$MESS["CES_OR"] = "ou";
$MESS["CES_RUN_TIME"] = "Hora de lançamento:";
$MESS["CES_PHP_PATH"] = "Caminho para php:";
$MESS["CES_AUTO_CRON"] = "Ajustar automaticamente:";
$MESS["CES_AUTO_CRON_DEL"] = "Deletar automaticamente:";
$MESS["CES_RUN_EXPORT_DESCR"] = "Iniciar exportação de dados";
$MESS["CES_RUN_EXPORT"] = "Exportar";
$MESS["CES_TO_LEFT_MENU_DESCR"] = "Adicionar link para o menu no menu esquerdo";
$MESS["CES_TO_LEFT_MENU_DESCR_DEL"] = "Deletar link para o menu no menu esquerdo";
$MESS["CES_TO_LEFT_MENU"] = "Adicionar ao menu";
$MESS["CES_TO_LEFT_MENU_DEL"] = "Deletar do menu";
$MESS["CES_TO_AGENT_DESCR"] = "Criar agente para lançamento automático";
$MESS["CES_TO_AGENT_DESCR_DEL"] = "Deletar agente para lançamento automático";
$MESS["CES_TO_AGENT"] = "Criar agente";
$MESS["CES_TO_AGENT_DEL"] = "Deletar agente";
$MESS["CES_TO_CRON_DESCR"] = "Utilizar cron para lançamento automático";
$MESS["CES_TO_CRON_DESCR_DEL"] = "Remover do cron";
$MESS["CES_TO_CRON"] = "Utilizar cron";
$MESS["CES_TO_CRON_DEL"] = "Parar o cron";
$MESS["CES_SHOW_VARS_LIST_DESCR"] = "Exibir lista de variáveis para este arquivo de exportação";
$MESS["CES_SHOW_VARS_LIST"] = "Lista de variáveis";
$MESS["CES_DELETE_PROFILE_DESCR"] = "Deletar este perfil";
$MESS["CES_DELETE_PROFILE_CONF"] = "Você tem certeza que deseja deletar este perfil?";
$MESS["CES_DELETE_PROFILE"] = "Deletar perfil";
$MESS["CES_NOTES1"] = "Os agentes são funções PHP que são executadas periodicamente em um dado intervalo. Sempre que uma página é requisitada, o sistema checa automaticamente os agentes que necessitam ser executados e os executa. Não é recomendado designar trabalhos de exportação grandes ou longos aos agentes. Você deve utilizar a ferramenta cron para estas propostas. ";
$MESS["CES_NOTES2"] = "A ferramenta cron está disponível somente em servidores baseados em UNIX.";
$MESS["CES_NOTES3"] = "A ferramenta cron trabalha no modo background e executa as tarefas designadas no tempo especificado. Você deve especificar o arquivo de configuração para adicionar uma operação de exportação à lista de tarefas";
$MESS["CES_NOTES4"] = "do cron. Este arquivo contém instruções para as operações de exportação. Assim que você tiver modificado os ajustes das tarefas do cron, você deve instalar o arquivo de configuração novamente. ";
$MESS["CES_NOTES5"] = "Para ajustar o arquivo de configuração, você deve se conectar ao seu site via SSH ou SSH2 ou qualquer outro protocolo similar que o seu provedor suportar para operações remotas. Na linha de comando, execute o camando";
$MESS["CES_NOTES6"] = "Para visualizar a lista de tarefas atualmente instaladas, execute o comando";
$MESS["CES_NOTES7"] = "Para remover todas as tarefas designadas ao cron, execute o comando";
$MESS["CES_NOTES8"] = "Lista atual de tarefas do cron:";
$MESS["CES_NOTES10"] = "Atenção! Esta ação também removerá quaisquer tarefas que não estejam no arquivo de configuração. ";
$MESS["CES_NOTES11"] = "O arquivo que inicia o script de exportação para execução das tarefas do cron é";
$MESS["CES_NOTES12"] = "Por favor, assegure-se que este arquivo contenha os caminhos corretos para o PHP e para a raiz do site";
$MESS["export_setup_cat"] = "Os Scripts exportados estão localizados na pasta:";
$MESS["export_setup_script"] = "O script exportado";
$MESS["export_setup_name"] = "Nome";
$MESS["export_setup_file"] = "Arquivo";
$MESS["export_setup_begin"] = "Iniciar exportação de dados";
$MESS["CES_EDIT_PROFILE"] = "Editar";
$MESS["CES_EDIT_PROPFILE_DESCR"] = "Editar arquivo";
$MESS["CES_EDIT_PROFILE_ERR_ID_ABSENT"] = "A ID do perfil não está especificada.";
$MESS["CES_EDIT_PROFILE_ERR_DEFAULT"] = "O perfil padrão não pode ser modificado.";
$MESS["CES_EDIT_PROFILE_ERR_ID_BAD"] = "Falha na ID do perfil";
$MESS["CES_ERROR_PROFILE_UPDATE"] = "Erro ao atualizar o perfil.";
$MESS["CES_COPY_PROFILE"] = "Copiar";
$MESS["CES_COPY_PROPFILE_DESCR"] = "Copiar Perfil";
$MESS["CES_COPY_PROFILE_ERR_DEFAULT"] = "O perfil padrão não pode ser copiado,";
$MESS["CES_ERROR_COPY_PROFILE"] = "Erro ao copiar o perfil.";
$MESS["CES_NEED_EDIT"] = "o perfil precisa ser configurado";
$MESS["CES_ERROR_BAD_FILENAME"] = "O nome do arquivo importado contém caracteres inválidos. ";
$MESS["CES_ERROR_BAD_FILENAME2"] = "O nome do arquivo de script exportado contém caracteres inválidos. ";
$MESS["CES_ERROR_BAD_EXPORT_FILENAME"] = "O nome do arquivo exportado contém caracteres inválidos. ";
$MESS["CES_CREATED_BY"] = "Criado por";
$MESS["CES_DATE_CREATE"] = "Criado em";
$MESS["CES_MODIFIED_BY"] = "Modificado por";
$MESS["CES_TIMESTAMP_X"] = "Modificado em";
$MESS["CES_DEFAULT_PROFILE"] = "sistema";
?>