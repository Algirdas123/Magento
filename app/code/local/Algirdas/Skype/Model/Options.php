 <?php

  class Algirdas_Skype_Model_Options{
      public function toOptionArray() {
          return array(
              array('value'=>true,  'label'=>'Yes'),
              array('value'=>false, 'label'=>'No' ),
          );
      }
  }


