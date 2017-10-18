<?php

class Magnifico_Site extends \CModule
{
    public $MODULE_ID = 'magnifico.site';

    public $MODULE_VERSION = '1.0.0';

    public $MODULE_VERSION_DATE = '2017-10-18 11:43:00';

    public $MODULE_NAME = 'Current site';

    public $MODULE_DESCRIPTION = 'Custom classes and functions for this site';

    public $PARTNER_NAME = 'Magnifico';

    public $PARTNER_URI = 'https://magnifico.pro';

    public function doInstall()
    {
        \Bitrix\Main\ModuleManager::registerModule('magnifico.site');
    }

    public function doUninstall()
    {
        \Bitrix\Main\ModuleManager::unRegisterModule('magnifico.site');
    }
}
