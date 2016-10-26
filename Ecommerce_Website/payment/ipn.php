<?php
include("../connection.php");
// PayPal settings
//session_start();
$paypal_email = 'ayush-facilitator@dualcube.com';
$return_url = 'http://localhost/ecommerce/payment/success.php';
$cancel_url = 'http://localhost/ecommerce/payment/cancel.php';
$notify_url = 'http://localhost/ecommerce/payment/ipn.php';

$item_name = $_SESSION["name"];
$item_amount = $_SESSION["cost"];

// Include Functions
include("functions.php");

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
    $querystring = '';
 
    // Firstly Append paypal account to querystring
    $querystring .= "?business=".urlencode($paypal_email)";
 
    // Append amount&amp;amp;amp;amp;amp;amp; currency (£) to quersytring so it cannot be edited in html
 
    //The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
    $querystring .= "item_name=".urlencode($item_name)";
    $querystring .= "amount=".urlencode($item_amount)";
 
    //loop for posted values and append to querystring
    foreach($_POST as $key =&amp;amp;amp;amp;amp;gt; $value) {
        $value = urlencode(stripslashes($value));
        $querystring .= "$key=$value&amp;amp;amp;amp;amp;amp;";
    }
 
    // Append paypal return addresses
    $querystring .= "return=".urlencode(stripslashes($return_url));
    $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url));
    $querystring .= "notify_url=".urlencode($notify_url);
 
    // Append querystring with custom field
    //$querystring .= USERID;
 
    // Redirect to paypal IPN
    header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
    exit();
} else {
   echo "Payment Successful";
}
?>