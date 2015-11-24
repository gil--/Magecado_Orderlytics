<?php
class Magecado_Orderlytics_Model_System_Config_Source_ProductId
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'product_id', 'label' => Mage::helper('adminhtml')->__('Product ID')),
            array('value' => 'product_sku', 'label' => Mage::helper('adminhtml')->__('Product SKU')),
        );
    }
}
