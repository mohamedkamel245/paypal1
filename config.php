<?php
require_once "vendor/autoload.php";
 
use Omnipay\Omnipay;
 
define('CLIENT_ID', 'AdVREG34Tf-GYdACpcdYipTIFxP7yHdvUKJEoIdxMN-1Ke6E8VTbTPthWRReQYNXU8ND-dJ8kZOzAB6V');
define('CLIENT_SECRET','EDLKg0crT1kDV45iuljdV3cxe216pCwonGeZbyXwGWvkbBXRC9RKYIdOmLRkFJq9RhI1vnKVO-2hL8r7');
 
define('PAYPAL_RETURN_URL', 'https://localhost//paypal/success.php');
define('PAYPAL_CANCEL_URL', 'https://localhost//paypal/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here
 
// Connect with the database 
$db = new mysqli('localhost', 'root', '', 'paypal'); 
 
if ($db->connect_errno) {
    die("Connect failed: ". $db->connect_error);
}
 
$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live