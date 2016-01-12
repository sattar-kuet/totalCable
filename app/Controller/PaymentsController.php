<?php

require_once(APP . 'Vendor' . DS . 'authorize' . DS . 'autoload.php');

//App::uses('AnetAPI', 'net\authorize\api\contract\v1');
//App::uses('AnetController', 'net\authorize\api\controller');

use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

define("AUTHORIZENET_LOG_FILE", APP . 'Vendor' . DS . 'authorize' . DS . 'phplog');

class PaymentsController extends AppController {

    var $layout = 'admin';

    // public $components = array('Auth');
    public function isAuthorized($user = null) {
        $sidebar = $user['Role']['name'];
        $this->set(compact('sidebar'));
        return true;
    }

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('process');
    }

    public function process() {
        $this->layout = 'ajax';
        $this->loadModel('PaidCustomer');
        $sql = "SELECT name, transactionkey ,card_no, exp_date FROM paid_customers ";
        $cardinfo = $this->PaidCustomer->query($sql);
        // Common setup for API credentials
        $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();
        $merchantAuthentication->setName("95x9PuD6b2"); // login id
        $merchantAuthentication->setTransactionKey("547z56Vcbs3Nz9R9");
        $refId = 'ref' . time();

        // Create the payment data for a credit card
        $creditCard = new AnetAPI\CreditCardType();
        $creditCard->setCardNumber("4117 7339 4314 7221");
        $creditCard->setExpirationDate("2019-7");
        $paymentOne = new AnetAPI\PaymentType();
        $paymentOne->setCreditCard($creditCard);

        // Order info
        $order = new AnetAPI\OrderType();
        $order->setInvoiceNumber("101");
        $order->setDescription("Golf Shirts");

        // Line Item Info
        $lineitem = new AnetAPI\LineItemType();
        $lineitem->setItemId("Shirts");
        $lineitem->setName("item1");
        $lineitem->setDescription("golf shirt");
        $lineitem->setQuantity("1");
        $lineitem->setUnitPrice(1.00);
        $lineitem->setTaxable(false);

        // Tax info 
//        $tax = new AnetAPI\ExtendedAmountType();
//        $tax->setName("level 2 tax name");
//        $tax->setAmount(4.50);
//        $tax->setDescription("level 2 tax");

        // Customer info 
//        $customer = new AnetAPI\CustomerDataType();
//        $customer->setId("15");
//        $customer->setEmail("foo@example.com");

        // PO Number
        $ponumber = "15";
        //Ship To Info
        $shipto = new AnetAPI\NameAndAddressType();
        //$shipto->setFirstName("Bayles");
       // $shipto->setLastName("China");
       // $shipto->setCompany("Thyme for Tea");
      //  $shipto->setAddress("12 Main Street");
       // $shipto->setCity("Pecan Springs");
      //  $shipto->setState("TX");
        $shipto->setZip("11554");
      //  $shipto->setCountry("USA");

        // Bill To
//        $billto = new AnetAPI\CustomerAddressType();
//        $billto->setFirstName("Ellen");
//        $billto->setLastName("Johnson");
//        $billto->setCompany("Souveniropolis");
//        $billto->setAddress("14 Main Street");
//        $billto->setCity("Pecan Springs");
//        $billto->setState("TX");
//        $billto->setZip("44628");
//        $billto->setCountry("USA");

        //create a transaction
        $transactionRequestType = new AnetAPI\TransactionRequestType();
        $transactionRequestType->setTransactionType("authCaptureTransaction");
        $transactionRequestType->setAmount(1.00);
//        $transactionRequestType->setPayment($paymentOne);
//        $transactionRequestType->setOrder($order);
//        $transactionRequestType->addToLineItems($lineitem);
//        $transactionRequestType->setTax($tax);
//        $transactionRequestType->setPoNumber($ponumber);
//        $transactionRequestType->setCustomer($customer);
//        $transactionRequestType->setBillTo($billto);
//        $transactionRequestType->setShipTo($shipto);

        $request = new AnetAPI\CreateTransactionRequest();
        $request->setMerchantAuthentication($merchantAuthentication);
        $request->setRefId($refId);
        $request->setTransactionRequest($transactionRequestType);
        $controller = new AnetController\CreateTransactionController($request);
        $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);
        
        pr($response); exit;
        
        $msg = '';
        if ($response != null) {
            $tresponse = $response->getTransactionResponse();

            if (($tresponse != null) && ($tresponse->getResponseCode() == "1")) {
                $msg = "Transaction Successful ! : " . "<br/>";
                $msg .= "Charge Credit Card AUTH CODE : " . $tresponse->getAuthCode() . "<br/>";
                $msg .= "Charge Credit Card TRANS ID  : " . $tresponse->getTransId() . "<br/>";
            } else {
                $msg = "Charge Credit Card ERROR :  Invalid response\n";
            }
        } else {
            $msg = "Charge Credit card Null response returned";
        }

        $this->set(compact('msg'));
    }

}

?>