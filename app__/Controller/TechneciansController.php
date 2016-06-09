<?php

/**
 * 
 */
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');

App::uses('AppController', 'Controller');

class TechneciansController extends AppController {

    var $layout = 'admin';
    // public $components = array('Auth');
    public $components = array(
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email', //Default is 'username' in the userModel
                        'password' => 'password'  //Default is 'password' in the userModel
                    ),
                    'userModel' => 'User',
                )
            ),
            'loginAction' => array(
                'controller' => 'users',
                'action' => 'login'
            ),
            'loginRedirect' => array('controller' => 'users', 'action' => 'dashboard'),
            'logoutRedirect' => array('controller' => '/', 'action' => 'index'),
            'authError' => "You can't acces that page",
            'authorize' => 'Controller'
        )
    );

    public function isAuthorized($user = null) {
        $sidebar = $user['Role']['name'];
        $this->set(compact('sidebar'));

        return true;
    }


    function registered($id = null) {
        $this->loadModel('PackageCustomer');
        $sql = "SELECT pc.id, u.name, user_id, psetting_id, vp.name,charge_amount, CONCAT( first_name,  '', middle_name,  '', last_name ) AS name,
                street, city, state, afs, cell, home, pc.email, payment_type, bank_name, card_check_no, exp_date
                FROM package_customers pc
                INNER JOIN users u ON u.id = pc.user_id
                INNER JOIN vbpackage AS vp ON vp.id = pc.psetting_id
                WHERE user_id = $id
          ";

        $packages = $this->PackageCustomer->query($sql);
//        pr($packages);
//        exit;
        $this->set(compact('packages'));
    }

}

?>