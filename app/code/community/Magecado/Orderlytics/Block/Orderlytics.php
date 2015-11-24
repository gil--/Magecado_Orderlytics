<?php
class Magecado_Orderlytics_Block_Orderlytics extends Mage_Core_Block_Template
{
    const CONFIG_PREFIX = 'sales/orderlytics/';
    public function getConfig($value)
    {
        return Mage::getStoreConfig(self::CONFIG_PREFIX . $value);
    }
}
