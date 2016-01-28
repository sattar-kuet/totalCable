<?php
/**
 * 
 */
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');

App::uses('AppController', 'Controller');
require_once(APP . 'Vendor' . DS . 'class.upload.php');

class FrontendsController extends AppController {

    var $layout = 'public-without-slider';
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
                'controller' => '/',
                'action' => 'login'
            ),
            'loginRedirect' => array('controller' => '/', 'action' => 'profile'),
            'logoutRedirect' => array('controller' => '/', 'action' => 'index'),
            'authError' => "You can't acces that page",
            'authorize' => 'Controller'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        //  $this->Auth->allow('*');
        $this->Auth->allow(array('index', 'fileUpload', 'service_order_form_new', 'techregistration', 'shipping_and_returns', 'packagesignup', 'customerSignup', 'troubleshoot', 'tariffplan', 'whytotalcable', 'contactus', 'newses', 'reseller', 'shipping', 'package', 'terms_and_conditions', 'refer', 'channels', 'registration', 'musical_night', 'seat_booking', 'area_channels', 'hazaro_konthe_sonar_bangla'));

        // database name must be thum_img,small_img
        $this->img_config = array(
            'ch_signature' => array(
                'image_ratio_crop' => true,
                'image_resize' => true,
                'image_x' => 421,
                'image_y' => 295
            ),
            'c_signature' => array(
                'image_ratio_crop' => true,
                'image_resize' => true,
                'image_x' => 421,
                'image_y' => 295
            ),
            //for attachment upload 
            'file' => array(

            ),
            //for id card upload 
            'id_card' => array(
                
            ),
            'parent_dir' => 'card_holder_signature',
            'target_path' => array(
                'ch_signature' => WWW_ROOT . 'card_holder_signature' . DS,
                'c_signature' => WWW_ROOT . 'customer_signature' . DS,
                'file' => WWW_ROOT . 'Customer_attachment' . DS,
                'id_card' => WWW_ROOT . 'Customer_id_card' . DS
            )
        );
        if ($this->Auth->loggedIn()) {
            $isloggedin = true;
        } else {
            $isloggedin = false;
        }
        $admin_logout = false;
        $admin_title = "My Profile";
        $this->set(compact('isloggedin', 'admin_title', 'admin_logout'));


        // create the folder if it does not exist
        if (!is_dir($this->img_config['parent_dir'])) {
            mkdir($this->img_config['parent_dir']);
        }
        foreach ($this->img_config['target_path'] as $img_dir) {
            if (!is_dir($img_dir)) {
                mkdir($img_dir);
            }
        }
    }

    public function isAuthorized($user = null) {
        $isloggedin = true;
        $this->set(compact('isloggedin'));
        return true;
    }

    function index() {
        $this->layout = 'public-with-slider';
    }

    function troubleshoot() {
        
    }

    function musical_night() {
        
    }

    function area_channels() {
        
    }

    function seat_booking() {
        $this->loadModel('Seat');
        $this->loadModel('Customer');
        if ($this->request->is('post')) {
            $customer = $this->Customer->save($this->request->data['Seat']);
            // pr($this->request->data['Seat']['name']); exit;

            $cid = $customer['Customer']['id'];
            $n = '##' . $this->request->data['Seat']['selected'];
            $n = str_replace('##,', '', $n);
            $seats = explode(',', $n);
            $booked_seats = '';
            foreach ($seats as $id) {
                $idseat = explode('>', $id);
                $this->Seat->id = $idseat[0];
                $this->Seat->saveField("status", "ordered");
                $this->Seat->saveField("real", $idseat[1]);
                $booked_seats.=$idseat[1] . ',';
                $this->Seat->saveField("customer_id", $cid);
            }
            $booked_seats = $booked_seats . '##';
            $booked_seats = str_replace(',##', '', $booked_seats);
            $from_email = $this->request->data['Seat']['email'];

            $subject = "Seat booking";
            $cus_name = $this->request->data['Seat']['name'];
            $phone_num = $this->request->data['Seat']['phone'];
            $cus_address = $this->request->data['Seat']['address'];
            $email_custom = "totalcableusa musical night";
            $currenttime = date("Ymd h:i:sa");

            $confirmation = $currenttime . $booked_seats;

            $to = array('info@totalcableusa.com', 'saadman.totaltvs@gmail.com', 'lemonpstu09@gmail.com', 'sattar.kuet@gmail.com', 'mamun.totaltvs@gmail.com', 'suman.totaltvs@gmail.com', 'rehab.totaltvs@gmail.com');
            // if (in_array($from, $to)) {
            $from = "info@totalcableusa.com";
            //}

            $description = "seat description";
            $mail_content = __('Name:', 'beopen') . $cus_name . PHP_EOL .
                    __('Email:', 'beopen') . $from_email . PHP_EOL .
                    __('Phone Number:', 'beopen') . $phone_num . PHP_EOL .
                    __('Confirmation Code:', 'beopen') . $confirmation . PHP_EOL;
            //sendEmail($from,$name,$to,$subject,$body)
            sendEmail($from, $cus_name, $to, $subject, $mail_content);

            $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>You bocked ' . count($seats) . ' Seats succeesfully </strong>
            </div>';
            $this->Session->setFlash($msg);
        }


        $status = $this->Seat->find('list', array('fields' => array('id', 'status')));
        $this->set(compact('status'));
//       pr($status); exit;
        $seats = range(1, 24);
        $seats20 = range(1, 20);
        $seats118 = range(101, 118);
        $seats15 = range(7, 12);
        $seats9 = range(1, 6);
        $seats16 = range(1, 16);
        $seats101 = range(101, 116);

        $even = array_filter($seats, function($v) {
            return $v % 2 == 0;
        });
        $even15 = array_filter($seats15, function($v) {
            return $v % 2 == 0;
        });
        $even9 = array_filter($seats9, function($v) {
            return $v % 2 == 0;
        });

        $odd = array_filter($seats, function($v) {
            return $v % 2 == 1;
        });
        $odd15 = array_filter($seats15, function($v) {
            return $v % 2 == 1;
        });
        $even16 = array_filter($seats16, function($v) {
            return $v % 2 == 0;
        });

        $odd16 = array_filter($seats16, function($v) {
            return $v % 2 == 1;
        });
        $odd9 = array_filter($seats9, function($v) {
            return $v % 2 == 1;
        });
        $even20 = array_filter($seats20, function($v) {
            return $v % 2 == 0;
        });

        $odd20 = array_filter($seats20, function($v) {
            return $v % 2 == 1;
        });

        $this->set(compact('seats16', 'even15', 'even20', 'odd20', 'seats118', 'even9', 'odd9', 'odd15', 'even16', 'odd16', 'seats', 'even', 'odd', 'seats101'));
    }

//************** old tariffplan function, just rename it as 'tariffplan' to reuse.*********************************
    function tariffplan_old() {
        $this->layout = 'public-package';
        $this->loadModel('Package');
        $this->loadModel('Psetting');
        if ($this->request->is('post')) {

//            http://production.shippingapis.com/ShippingAPI.dll?API= CityStateLookup&XML=<CityStateLookupRequest USERID="138TOTAL1122"><ZipCode ID="0">
//<Zip5>90210</Zip5>
//</ZipCode></CityStateLookupRequest>
            //90210

            $params = '<CityStateLookupRequest USERID="138TOTAL1122"><ZipCode ID="0"><Zip5>' . $this->request->data['Usps']['zipcode'] . '</Zip5></ZipCode></CityStateLookupRequest>';
            $HttpSocket = new HttpSocket();
            $results = $HttpSocket->post('http://production.shippingapis.com/ShippingAPI.dll', array('API' => 'CityStateLookup',
                'XML' => $params
                    )
            );
            $xml = new SimpleXMLElement($results);
            $state = (string) $xml->ZipCode->State;
            $this->loadModel('TariffCountry');


            $countries = $this->TariffCountry->find('list');
            if (in_array($state, $countries)) {
                $sql = "SELECT psettings.*  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'Full package'
                ";
                $packageName = 'Full package';
                $packages = $this->Package->query($sql);
                // $packages = $this->Package->find('all');
            } else {
                $sql = "SELECT psettings.*,packages.name  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'NABC special package'
                ";
                $packages = $this->Package->query($sql);
                $packageName = 'NABC special package';
            }
            $this->set(compact('packages', 'packageName'));
        } else {
            $sql = "SELECT psettings.*,packages.name  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'NABC special package'
                ";
            $packages = $this->Package->query($sql);
            $packageName = 'NABC special package';
            $this->set(compact('packages', 'packageName'));
        }
    }

    function whytotalcable() {
        
    }

    function view_package() {
        $this->layout = 'admin';

        $this->loadModel('User');
        $this->loadModel('Psetting');
        $this->loadModel('TariffCountry');
        $this->loadModel('Package');


        $userid = $this->Auth->user('id');
        $psetting_id = $this->User->find('first', array(
            'limit' => 1,
            'conditions' => array(
                'User.id' => $userid
            )
        ));
        $psetting_id = $psetting_id['User']['psetting_id'];

        $package_id = $this->Psetting->find('first', array(
            'limit' => 1,
            'conditions' => array(
                'Psetting.id' => $psetting_id
            )
        ));
        $package_id = $package_id['Psetting']['package_id'];
        if ($package_id) {
            $options['conditions'] = array(
                'Package.id' => $package_id
            );
            $options['joins'] = array(
                array('table' => 'psettings',
                    'alias' => 'psettings',
                    'type' => 'LEFT',
                    'conditions' => array(
                        'psettings.package_id = Package.id',
                    // 'Package.id' = 5
                    )
                )
            );
            $options['fields'] = array('psettings.*', 'Package.name');
            $packages = $this->Package->find('all', $options);
        } else {
            $msg = '<div class="alert alert-success">
               <button type="button" class="close" data-dismiss="alert">&times;</button>
               <strong>No package selected</strong>
               </div>';
            $this->Session->setFlash($msg);
        }










        $packageName = "package Manager";

        if ($this->request->is('post')) {
            $this->User->id = $userid;
            $this->User->saveField("psetting_id", $this->request->data['User']['psetting_id']);
            $this->redirect('view_package');
        }

        $this->set(compact('packages', 'packageName', 'psetting_id'));
    }

    function contactus() {
        $this->loadModel('Contactus');
        $this->loadModel('Setting');
        $emails = $this->Setting->find('first', array(
            'conditions' => array('field' => 'email')
        ));
        // $this->layout = "news";
        if ($this->request->is('post')) {
            // send mail :
            $from = $this->request->data['Contactus']['email'];
            $subject = "Complain";
            $cus_name = $this->request->data['Contactus']['name'];
            $email_custom = $this->request->data['Contactus']['email'];
            $to = array('info@totalcableusa.com', 'sattar.kuet@gmail.com', 'farukmscse@gmail.com');
            $phone_num = $this->request->data['Contactus']['phone_number'];
            $description = $this->request->data['Contactus']['message'];
            $mail_content = __('Name:', 'beopen') . $cus_name . PHP_EOL .
                    __('Email:', 'beopen') . $email_custom . PHP_EOL .
                    __('Phone Number:', 'beopen') . $phone_num . PHP_EOL .
                    __('Message:', 'beopen') . $description . PHP_EOL;
            //sendEmail($from,$name,$to,$subject,$body)
            sendEmail($from, $cus_name, $to, $subject, $mail_content);
            // End send mail
            $this->Contactus->save($this->request->data['Contactus']);
            $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>Succeesfully send your message</strong>
   </div>';
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
    }

    function newses() {
        
    }

    function reseller() {
        $this->loadModel('Reseller');
        $this->loadModel('Setting');
        $emails = $this->Setting->find('first', array(
            'conditions' => array('field' => 'email')
        ));
        if ($this->request->is('post')) {
            $from = $this->request->data['Reseller']['email'];
            $subject = "Reseller order";
            $cus_name = $this->request->data['Reseller']['name'];
            $email_custom = $this->request->data['Reseller']['email'];
            $to = array($emails['Setting']['value']);
            $phone_num = $this->request->data['Reseller']['phone_no'];
            $description = $this->request->data['Reseller']['message'];
            $mail_content = __('Name:', 'beopen') . $cus_name . PHP_EOL .
                    __('Email:', 'beopen') . $email_custom . PHP_EOL .
                    __('Phone Number:', 'beopen') . $phone_num . PHP_EOL .
                    __('Message:', 'beopen') . $description . PHP_EOL;
            //sendEmail($from,$name,$to,$subject,$body)
            sendEmail($from, $cus_name, $to, $subject, $mail_content);
            // End send mail
            $this->Reseller->save($this->request->data['Reseller']);
            $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>Message Succeesfully send</strong>
   </div>';
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
    }

    function shipping() {
        
    }

    function package() {
        $this->layout = 'public-package';
    }

    function terms_and_conditions() {
        $this->layout = 'public-package';
    }

    function channels() {
        
    }

    function shipping_and_returns() {
        $this->layout = 'public-package';
    }

    function refer() {
        
    }

    function processImg($img, $type) {
//         pr($img); 
//         echo $type;
//         exit;
        $upload = new Upload($img[$type]);
        $upload->file_new_name_body = time();
        foreach ($this->img_config[$type] as $key => $value) {
            $upload->$key = $value;
        }
        $upload->process($this->img_config['target_path'][$type]);
        if (!$upload->processed) {
            $msg = $this->generateError($upload->error);
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
        $return['file_dst_name'] = $upload->file_dst_name;
        return $return;
    }

    function packagesignup($package_id = null) {
        $this->loadModel('PackageCustomer');
        $this->loadModel('Country');
        //$this->loadModel('Role');
        //  $role = $this->Role->findByName('customer');
        $this->layout = 'public-without-slider';



        //siggup form package
        $this->loadModel('Package');
        $this->loadModel('Psetting');

        $sql = "SELECT psettings.*  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'Full package'
                ";
        $packages_full = $this->Package->query($sql);
        $this->set(compact('packages_full'));

        $sql = "SELECT psettings.*,packages.name  FROM packages
                LEFT JOIN psettings ON packages.id=psettings.package_id               
                 WHERE packages.name = 'NABC special package'
                ";
        $packages_special = $this->Package->query($sql);
        $this->set(compact('packages_special'));

        //end signup form for package

        if ($this->request->is('post')) {
            $this->PackageCustomer->set($this->request->data);
            $msg = '';
//pr($this->request->data); exit;
            if ($this->PackageCustomer->validates()) {

                $result = array();
                if (!empty($this->request->data['PackageCustomer']['ch_signature']['name'])) {
                    $result = $this->processImg($this->request->data['PackageCustomer'], 'ch_signature');
                    $this->request->data['PackageCustomer']['ch_signature'] = (string) $result['file_dst_name'];
                } else {
                    $this->request->data['PackageCustomer']['ch_signature'] = '';
                }

                if ($this->Auth->loggedIn()) {
                    //$this->request->data['User']['psetting_id']='';
                    $admin = $this->Auth->user();

                    // todo count();
                    $this->request->data['PackageCustomer']['user_id'] = $admin['id'];
                } else {
                    $value = $this->request->params['pass'][0];
                    $this->request->data['PackageCustomer']['psetting_id'] = $value;
                    $this->request->data['PackageCustomer']['filled-by'] = '0';
                }


                $dateObj = $this->request->data['PackageCustomer']['exp_date'];
                $this->request->data['PackageCustomer']['exp_date'] = $dateObj['year'] . '-' . $dateObj['month'] . '-' . $dateObj['day'];
//                pr($this->request->data);
//                exit;
                $this->PackageCustomer->save($this->request->data['PackageCustomer']);

                $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> Your sign up process completed succeesfully </strong>
            </div>';
            } else {
                $msg = $this->generateError($this->PackageCustomer->validationErrors);
            }
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
    }

    function login() {

        $this->loadModel('User');
        $this->layout = 'public-without-slider';
        // if already logged in check this step
        if ($this->Auth->loggedIn()) {
            $admin = $this->Auth->user();
            $role = $admin['Role']['name'];
            if ($role == "technician") {
                return $this->redirect('/packagesignup');
            }
            return $this->redirect($this->referer()); //(array('action' => 'deshboard'));
        }

        // after submit login form check this step
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                if ($this->Auth->user('status') == 'active') {
                    $admin = $this->Auth->user();
                    $role = $admin['Role']['name'];
                    if ($role == "technician") {
                        return $this->redirect('/packagesignup');
                    }
                    return $this->redirect('/profile');
                } else {
                    // user is not activated
                    // log the user out
                    $msg = '<div class="alert alert-error">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>You are blocked, Contact with Adminstrator</strong>
                        </div>';
                    $this->Session->setFlash($msg);
                    return $this->redirect($this->Auth->logout());
                }
            } else {
                $msg = '<div class="alert alert-error">
                           <button type="button" class="close" data-dismiss="alert">×</button>
                           <strong>Incorrect email/password combination. Try Again</strong>
                        </div>';
                $this->Session->setFlash($msg);
            }
        }
    }

    function profile() {
        $this->layout = 'admin';
    }

    function welcome() {
        $this->layout = 'public-without-slider';
    }

    public function logout() {
        // $this->Session->setFlash('you have successfully logged out');
        $this->Auth->logout();
        return $this->redirect(array('controller' => '/', 'action' => 'index'));
    }

    public function hazaro_konthe_sonar_bangla() {
        
    }

    function customerSignup() {
        $this->loadModel('Customer');
        if ($this->request->is('post')) {
            $this->Customer->set($this->request->data);
            if ($this->Customer->validates()) {

                // send mail :
                $from = 'info@totalcableusa.com';
                $subject = "Customer Signup";
                //$to = array('sakibbd@ymail.com', 'sales@totaltvs.org', 'totaltvs.nihad@gmail.com', 'totaltvs.raisul@gmail.com', 'saleh.totaltvs@gmail.com'); 
                $to = array('sakibbd@ymail.com',
                    'farukmscse@gmail.com',
                    'hrahman@totalcableusa.com',
                    'totaltvs.nihad@gmail.com',
                    'totaltvs.raisul@gmail.com',
                    'saleh.totaltvs@gmail.com',
                    'sattar.kuet@gmail.com',
                    'mamun.totaltvs@gmail.com',
                    'suman.totaltvs@gmail.com',
                    'sarwar.totaltvs@gmail.com',
                    'saadman.totaltvs@gmail.com',
                    'rehab.totaltvs@gmail.com');

                $cus_name = $this->request->data['Customer']['name'];
                $address = $this->request->data['Customer']['address'];
                $state = $this->request->data['Customer']['state'];
                $phone = $this->request->data['Customer']['home_business'];
                $cell = $this->request->data['Customer']['cell'];
                $isp = $this->request->data['Customer']['internet_provider'];
                $speed = $this->request->data['Customer']['internet_speed'];
                $info_source = $this->request->data['Customer']['information_source'];

                $refer_name = $this->request->data['Customer']['reference_name'];
                $refer_no = $this->request->data['Customer']['reference_no'];

                $sale_status = $this->request->data['Customer']['sale_status'];
                $note = $this->request->data['Customer']['note'];


                $mail_content = __('Name:                      ', 'beopen') . $cus_name . PHP_EOL .
                        __('Address:                   ', 'beopen') . $address . PHP_EOL .
                        __('State and Zip:             ', 'beopen') . $state . PHP_EOL .
                        __('Home/Business phone no:    ', 'beopen') . $phone . PHP_EOL .
                        __('Cell no:                   ', 'beopen') . $cell . PHP_EOL .
                        __('Internet Speed:            ', 'beopen') . $speed . PHP_EOL .
                        __('How did you hear about us: ', 'beopen') . $info_source . PHP_EOL;
                if (!empty($refer_name)):
                    $mail_content .= __('Reference Name:            ', 'beopen') . $refer_name . PHP_EOL .
                            __('Reference Phone:           ', 'beopen') . $refer_no . PHP_EOL;
                endif;

                $mail_content .= __('Sale status:               ', 'beopen') . $sale_status . PHP_EOL .
                        __('Note:                      ', 'beopen') . $note . PHP_EOL;

                sendEmail($from, $cus_name, $to, $subject, $mail_content);
                // End send mail 

                $this->Customer->save($this->data);
                $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong> You have successfully signed up.</br>
Our support will contact you shortly.</br>
Thank you, </br>

Total Cable USA. </strong>
   </div>';
            } else {
                $msg = $this->generateError($this->Customer->validationErrors);
            }
            $this->Session->setFlash($msg);
//            return $this->redirect($this->refer());
            return $this->redirect(array('controller' => '/', 'action' => 'customerSignup'));
        }
    }

    function techregistration() {
        $this->loadModel('User');
        $this->loadModel('Role');
        $role = $this->Role->findByName('technician');
        if ($this->request->is('post')) {
            $this->request->data['User']['role_id'] = $role['Role']['id'];
            $this->User->set($this->request->data);
            if ($this->User->validates()) {
                //$this->request->data['User']['password'] = md5($this->request->data['User']['password']);
                $this->User->save($this->data);
                $msg = '<div class="alert alert-success">
   <button type="button" class="close" data-dismiss="alert">&times;</button>
   <strong>Your registration Completed succeesfully </strong>
   </div>';
            } else {
                $msg = $this->generateError($this->User->validationErrors);
            }
            $this->Session->setFlash($msg);
            // return $this->redirect('create');
        }
    }

    function fileUpload() {
        $this->loadModel('Attachment');
        if ($this->request->is('post')) {
            $this->Attachment->set($this->request->data);
            if ($this->Attachment->validates()) {
                if (!empty($this->request->data['Attachment']['file']['name'])) {
                    $result = $this->processImg($this->request->data['Attachment'], 'file');
                    $this->request->data['Attachment']['file'] = (string) $result['file_dst_name'];
                } else {
                    $this->request->data['Attachment']['file'] = '';
                }

                // send mail :
                $from = 'info@totalcableusa.com';
                $subject = "Attachment from customer";
                $to = array('sakibbd@ymail.com',
                    'farukmscse@gmail.com',
                    'hrahman@totalcableusa.com',
                    'totaltvs.nihad@gmail.com',
                    'totaltvs.raisul@gmail.com',
                    'saleh.totaltvs@gmail.com',
                    'sattar.kuet@gmail.com',
                    'mamun.totaltvs@gmail.com',
                    'suman.totaltvs@gmail.com',
                    'sarwar.totaltvs@gmail.com',
                    'saadman.totaltvs@gmail.com',
                    'rehab.totaltvs@gmail.com');

                $cus_name = $this->request->data['Attachment']['name'];
                $address = $this->request->data['Attachment']['address'];
                $cell = $this->request->data['Attachment']['cell'];

                $file = $this->request->data['Attachment']['file'];

                $mail_content = __('Name:                      ', 'beopen') . $cus_name . PHP_EOL .
                        __('Address:                   ', 'beopen') . $address . PHP_EOL .
                        __('Cell no:                   ', 'beopen') . $cell . PHP_EOL .
                        __('Attached file:              ', 'beopen') . $file . PHP_EOL;

                $attachment = array(
                    'file' => ROOT . DS . 'app' . DS . 'webroot' . DS . 'Customer_attachment' . DS . $file,
                    'mimetype' => 'image/png',
                    'contentId' => 'utilityBill'
                );
                sendEmail($from, $cus_name, $to, $subject, $mail_content, $attachment);
                // End send mail

                $this->Attachment->save($this->request->data['Attachment']);
                $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> Your attachmet is succeesfully submitted.</strong>
            </div>';
            } else {
                $msg = $this->generateError($this->Attachment->validationErrors);
            }
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
    }

    function tariffplan() {
        
    }

    function service_order_form_new($package_id = null) {
        $this->loadModel('PackageCustomer');
        $this->loadModel('CustomPackage');
        $this->loadModel('Country');
        //$this->loadModel('Role');
        //  $role = $this->Role->findByName('customer');
        $this->layout = 'public-without-slider';

        if ($this->request->is('post')) {
            $this->PackageCustomer->set($this->request->data);
            $this->CustomPackage->set($this->request->data);
            $msg = '';
//pr($this->request->data); exit;
            if ($this->PackageCustomer->validates()) {

                $result = array();
                if (!empty($this->request->data['PackageCustomer']['ch_signature']['name'])) {
                    $result = $this->processImg($this->request->data['PackageCustomer'], 'ch_signature');
                    $this->request->data['PackageCustomer']['ch_signature'] = (string) $result['file_dst_name'];
                } else {
                    $this->request->data['PackageCustomer']['ch_signature'] = '';
                }
                
                //ID Card Upload
                if (!empty($this->request->data['PackageCustomer']['id_card']['name'])) {
                    $result = $this->processImg($this->request->data['PackageCustomer'], 'id_card');
                    $this->request->data['PackageCustomer']['id_card'] = (string) $result['file_dst_name'];
                } else {
                    $this->request->data['PackageCustomer']['id_card'] = '';
                }

                if ($this->Auth->loggedIn()) {
                    //$this->request->data['User']['psetting_id']='';
                    $admin = $this->Auth->user();

                    // todo count();
                    $this->request->data['PackageCustomer']['user_id'] = $admin['id'];
                } else {
                    // $value = $this->request->params['pass'][0];
                    // $this->request->data['PackageCustomer']['psetting_id'] = $value;
                    $this->request->data['PackageCustomer']['filled-by'] = '0';
                }


                $dateObj = $this->request->data['PackageCustomer']['exp_date'];
                $this->request->data['PackageCustomer']['exp_date'] = $dateObj['year'] . '-' . $dateObj['month'] . '-' . $dateObj['day'];
                // pr($this->request->data);
                //exit;
                $data4CustomPackage['CustomPackage']['duration'] = $this->request->data['PackageCustomer']['duration'];
                $data4CustomPackage['CustomPackage']['charge'] = $this->request->data['PackageCustomer']['charge'];
                
                if(!empty($this->request->data['PackageCustomer']['charge'])){
                  $cp = $this->CustomPackage->save($data4CustomPackage); 
                  unset($cp['CustomPackage']['PackageCustomer']);                
                  $this->request->data['PackageCustomer']['custom_package_id'] = $cp['CustomPackage']['id'];
                  //pr($cp);exit;
                }
                
                $this->PackageCustomer->save($this->request->data['PackageCustomer']);

                $msg = '<div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong> Your sign up process completed succeesfully </strong>
            </div>';
            } else {
                $msg = $this->generateError($this->PackageCustomer->validationErrors);
            }
            $this->Session->setFlash($msg);
            return $this->redirect($this->referer());
        }
    }

}
?>