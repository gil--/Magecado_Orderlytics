<?php
class Magecado_Orderlytics_Model_System_Config_Source_OrderTotal
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'grand_total', 'label' => Mage::helper('adminhtml')->__('Grand Total (Tax + Shipping)')),
            array('value' => 'subtotal', 'label' => Mage::helper('adminhtml')->__('Sub total (No Tax or Shipping)')),
            array('value' => 'subtotal_tax', 'label' => Mage::helper('adminhtml')->__('Sub total (Tax)')),
            array('value' => 'Subtotal_ship', 'label' => Mage::helper('adminhtml')->__('Sub total (Shipping)')),
        );
    }
}
