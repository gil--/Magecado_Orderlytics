<?php
class Magecado_Orderlytics_Model_System_Config_Source_OrderTotal
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'Grand Total', 'label' => Mage::helper('adminhtml')->__('Grand Total (Tax + Shipping)')),
            array('value' => 'Subtotal-tax', 'label' => Mage::helper('adminhtml')->__('Sub total (Tax)')),
            array('value' => 'Subtotal-ship', 'label' => Mage::helper('adminhtml')->__('Sub total (Shipping)')),
        );
    }
}
