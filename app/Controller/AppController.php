<?php App::uses('CakeEmail', 'Network/Email');
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'authenticate' => array(
                'Form' => array(
                    'fields' => array(
                        'username' => 'email', //Default is 'username' in the userModel
                        'password' => 'password'  //Default is 'password' in the userModel
                    ),
                    'passwordHasher' => array(
                        'className' => 'Simple',
                        'hashType' => 'sha256'
                    )
                )
            ),
        )
    );

    public function beforeFilter() {
        $admin = $this->Auth->user();
        $admin_loggedIn = false;
        $admin_title = "Admin";
        $admin_sidebar = null;
        if (count($admin) > 0) {
            $admin_loggedIn = true;
            if ($admin['Role']['name'] == 'sadmin') {
                $isSadmin = true;
            } else {
                $isSadmin = false;
            }
            $admin_sidebar = $admin['Role']['name'];
        }
        $this->loadTechnecian();
        $this->set(compact('admin_sidebar', 'admin_title', 'admin_loggedIn', 'isSadmin'));
    }

    function pr($input = null) {
        echo '<pre>';
        print_r($input);
        echo '</pre>';
    }

    function generateError($input = null) {
        
        if (is_array($input)) {
            $output = '<ul>';
            foreach ($input as $single) {
                foreach ($single as $value) {
                    $output.='<li>' . $value . '</li>';
                }
            }
            $output.='</ul>';
        } else {
            $output = $input;
        }
        $output = '<div class="alert alert-danger text-center" >
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			' . $output . '<strong> Change these things and try again. </strong> </div>';
        return $output;
    }

    function sendEmail($from, $name, $to, $subject, $body) {
        $Email = new CakeEmail();
        $Email->config('custom')
                ->from(array($from => $name))
                ->to($to)
                ->subject($subject);
        $cus_name = "lemon";
        $email_custom = "dasdas";
        $product_name = "asd";
        $description = "dasdasd";
        $comment = "asdsad";

        $mail_content = __('Name:', $name) . PHP_EOL . $name . PHP_EOL . PHP_EOL .
                __('Email:', $from) . PHP_EOL . $name . $body;

        if ($Email->send($mail_content)) {
            $this->Session->setFlash('Simple email sent');
        } else {
            $this->Session->setFlash('Simple email not sent');
        }
    }

    function loadTechnecian() {
        $this->loadModel('User');
        $sql = "SELECT r.id, u.*, r.name
            FROM users u
            INNER JOIN roles r ON u.role_id = r.id
            WHERE r.name =  'technician'
          ";
        $technician = $this->User->query($sql);
//        pr($technician);
//        exit;
        $this->set(compact('technician'));
    }

}
