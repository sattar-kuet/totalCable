<?php

require_once(APP . 'Vendor' . DS . 'class.upload.php');

App::uses('AppController', 'Controller');

class CsvsController extends AppController {

    var $layout = 'admin';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register');
        $this->target_path = WWW_ROOT . 'CSV' . DS;
        // create the folder if it does not exist
        if (!is_dir($this->target_path)) {
            mkdir($this->target_path);
        }
    }

    public function isAuthorized($user = null) {
        return true;
    }

    function processFile($file) {

        // pr($file['file']); exit;
        $filename = null;

        if (
                !empty($file['file']['tmp_name']) && is_uploaded_file($file['file']['tmp_name'])
        ) {
            // Strip path information
            $filename = basename($file['file']['name']);
            move_uploaded_file(
                    $file['file']['tmp_name'], $this->target_path . $filename
            );
        }

// Set the file-name only to save in the database
        return $filename;
    }

    function uploadZipCode() {
        if ($this->request->is('post') || $this->request->is('put')) {
            $filename = $this->processFile($this->request->data['Nothing']);
            $filepath = $this->target_path . $filename;
            // $file = fopen($filepath,"r");
            $event_id = $this->request->data['Nothing']['event_id'];
            $this->loadModel('Customer');
            $alreadyExist = 0;
            $new = 0;
            $heading = true;
            $blank = 0;
            if (($handle = fopen($filepath, "r")) !== FALSE) {
                $msg = '';
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if ($heading) {
                        $heading = false;
                        continue;
                    }
                    $mobile = $data[4];
                    if (strlen($data[4]) == 10) {
                        $mobile = '0' . $data[4];
                    }
                    if (strlen($data[4]) > 11) {
                        $mobile = '#' . $data[4];
                        $mobile = str_replace('#88', '', $mobile);
                        $mobile = str_replace('#+88', '', $mobile);
                        $mobile = str_replace('#', '', $mobile);
                    }
                    $customer = array(
                        'name' => $data[1],
                        'email' => $data[2],
                        'institute' => $data[3],
                        'mobile' => $mobile,
                        'event_id' => $event_id
                    );
                    $this->Customer->create(false);
                    $this->Customer->set($customer);
                    if ($this->Customer->validates()) {
                        $this->Customer->save($customer);
                        $new++;
                    } else {
                        $email = trim($customer['email']);
                        if (empty($email)) {
                            $mobile = trim($mobile);
                            if (!empty($mobile)) {

                                unset($this->Customer->validate['email']);

                                $this->Customer->save($customer);

                                $this->Customer->validate = array(
                                    'email' => array(
                                        'rule' => 'isUnique',
                                        'required' => true,
                                        'message' => 'Email already exist',
                                        'on' => 'create'
                                    )
                                );
                                $new++;
                            } else {
                                $blank++;
                            }
                        } else {
                            $alreadyExist++;
                            $msg .= '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>' . $customer['email'] . '  is duplicate or exist </strong>
</div>';
                        }
                    }
                }
            }
            fclose($handle);
            $msg .= '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>' . $new . ' New customer added succeesfully </strong>
</div>';
            $msg .= '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>' . $alreadyExist . ' Customer already exist </strong>
</div>';

            $msg .= '<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>' . $blank . ' Blank rows exist </strong>
</div>';

            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());


            unlink($filepath);
        }

        $instruction = '<div class="alert alert-error">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong> INSTRUCTION :</strong>  Column sequence of excel file must be as: timestamp, name, email, institute, mobile. Please check it before upload. 
</div>';
        $this->loadModel('Event');
        $events = $this->Event->find('list', array('order' => array('Event.name' => 'ASC')));
        $this->set(compact('events', 'instruction'));
    }

    function exportCustomerMobile() {
        $this->loadModel('Customer');
        if ($this->request->is('post')) {
            $customers = $this->Customer->find('all', array(
                'conditions' => array(
                    'event_id' => $this->request->data['Customer']['event_id']
                )
                    )
            );
            $file = WWW_ROOT . 'CSV' . DS . 'customer_mobileNumber.txt';
            $handle = fopen($file, "w");
            $content = '';
            foreach ($customers as $customer) {
                $mobile = trim($customer['Customer']['mobile']);
                $alt_mobile = trim($customer['Customer']['alt_mobile']);
                if (!empty($mobile)) {
                    $content .= $customer['Customer']['mobile'] . PHP_EOL;
                }
                if (!empty($alt_mobile)) {
                    $content .= $customer['Customer']['alt_mobile'] . PHP_EOL;
                }
            }
            fwrite($handle, $content);
            fclose($handle);
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            readfile($file);
            $msg .= '<div class="alert alert-success">
             <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>' . count($customers) . ' Customers mobile number exported successful! </strong>
              </div>';

            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
        $this->loadModel('Event');
        $events = $this->Event->find('list', array('order' => array('Event.name' => 'ASC')));
        $this->set(compact('events'));
    }

}

?>
