<?php

class Bizprofi_Seed extends \CModule
{
    public function __construct()
    {
        $this->MODULE_ID = 'bizprofi.seed';
        $this->MODULE_VERSION = '1.0.0';
        $this->MODULE_VERSION_DATE = '2018-09-01 12:00:00';
        $this->MODULE_NAME = 'Пример структуры модуля для 1С-Битрикс';
        $this->MODULE_DESCRIPTION = 'Просто файлы с пустыми директориями';
        $this->PARTNER_NAME = 'БизнесПрофи';
        $this->PARTNER_URI = 'https://bizprofi.ru';
    }

    public function doInstall()
    {
        \Bitrix\Main\ModuleManager::registerModule($this->MODULE_ID);
    }

    public function doUninstall()
    {
        \Bitrix\Main\ModuleManager::unRegisterModule($this->MODULE_ID);
    }
}
