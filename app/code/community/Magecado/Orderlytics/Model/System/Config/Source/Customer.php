<?php
class Magecado_Orderlytics_Model_System_Config_Source_Customer
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'id', 'label' => Mage::helper('adminhtml')->__('Customer ID')),
            array('value' => 'first_name', 'label' => Mage::helper('adminhtml')->__('Customer First Name')),
            array('value' => 'last_name', 'label' => Mage::helper('adminhtml')->__('Customer Last Name')),
            array('value' => 'email', 'label' => Mage::helper('adminhtml')->__('Customer Email')),
            array('value' => 'country', 'label' => Mage::helper('adminhtml')->__('Customer Country')),
        );
    }
}
