
<?php

/**
 * 
 */
class PackageCustomer extends AppModel {

    var $name = "PackageCustomer";
    var $belongsTo = array('User', 'Psetting');
    //var $belongsTo = array('Psetting');

}

?>