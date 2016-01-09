
<?php


/**
 * 
 */
class TariffCountry extends AppModel {
    var $name = "TariffCountry";
       public $validate = array(
        'name' => array(
            'rule' => 'isUnique',
            'required' => true,
            'message' => 'This country already exist you can modify it'
        )
    );
    
}

?>
