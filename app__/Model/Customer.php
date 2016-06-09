<?php

class Customer extends AppModel {

    var $name = "customer";
    var $belongsTo = array('User');

}

?>