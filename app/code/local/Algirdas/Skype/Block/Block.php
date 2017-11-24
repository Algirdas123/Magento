 <?php

 class Algirdas_Skype_Block_Block extends Mage_Core_Block_Template
 {
     public $name_id, $module_enabled, $user_description;
     public function init()
     {
         $this->name_id          = Mage::getStoreConfig('skype/skype_settings/skype_user_id',  Mage::app()->getStore());
         $this->user_description = Mage::getStoreConfig('skype/skype_settings/skype_user_description',Mage::app()->getStore());
         $this->module_enabled   = Mage::getStoreConfig('skype/skype_settings/skype_module_enable',  Mage::app()->getStore());


     }


 }
