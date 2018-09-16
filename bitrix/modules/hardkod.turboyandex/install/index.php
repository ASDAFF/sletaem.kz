<?

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\ModuleManager;

Loc::loadMessages(__FILE__);

class hardkod_turboyandex extends CModule
{
    var $MODULE_ID = 'hardkod.turboyandex';
    var $MODULE_NAME;
     
    public function __construct()
    {
        $arModuleVersion = array();
        
        include __DIR__ . '/version.php';

        if (is_array($arModuleVersion) && array_key_exists('VERSION', $arModuleVersion))
        {
            $this->MODULE_VERSION = $arModuleVersion['VERSION'];
            $this->MODULE_VERSION_DATE = $arModuleVersion['VERSION_DATE'];
        }
        
        $this->MODULE_ID = 'hardkod.turboyandex';
        $this->MODULE_NAME = Loc::getMessage('HARDKOD_TURBOYANDEX_MODULE_NAME');
        $this->MODULE_DESCRIPTION = Loc::getMessage('HARDKOD_TURBOYANDEX_MODULE_DESCRIPTION');
        $this->MODULE_GROUP_RIGHTS = 'N';
        $this->PARTNER_NAME = Loc::getMessage('HARDKOD_TURBOYANDEX_MODULE_PARTNER_NAME');
        $this->PARTNER_URI = Loc::getMessage('HARDKOD_TURBOYANDEX_MODULE_PARTNER_URL');
    }

    public function DoInstall()
    {
        ModuleManager::registerModule($this->MODULE_ID);
        $this->InstallFiles();
    }

    public function DoUninstall()
    {
        $this->UnInstallFiles();
        ModuleManager::unRegisterModule($this->MODULE_ID);
    }
    function InstallFiles($arParams = array())
	{
		if($_ENV["COMPUTERNAME"]!='BX')
		{
            CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/hardkod.turboyandex/install/css", $_SERVER["DOCUMENT_ROOT"]."/bitrix/css/hardkod.turboyandex", true, true);
			CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/hardkod.turboyandex/install/js", $_SERVER["DOCUMENT_ROOT"]."/bitrix/js/hardkod.turboyandex", true, true);
        }
    }
    function UnInstallFiles($arParams = array())
	{
		if($_ENV["COMPUTERNAME"]!='BX')
		{
            DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"]."/bitrix/css/hardkod.turboyandex/", true, true);
			DeleteDirFilesEx($_SERVER["DOCUMENT_ROOT"]."/bitrix/js/hardkod.turboyandex/", true, true);
        }
    }
}