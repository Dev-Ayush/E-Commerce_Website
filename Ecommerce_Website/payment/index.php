<?php

include("../connection.php");
$name= $_SESSION['name'];
$_SESSION['bill_name'] = $_POST['bill_name'];
$_SESSION['bill_address'] = $_POST['bill_address'];
$_SESSION['bill_phone'] = $_POST['bill_phone'];
$_SESSION['ship_name'] = $_POST['ship_name'];
$_SESSION['ship_address'] = $_POST['ship_address'];
$_SESSION['ship_phone'] = $_POST['ship_phone'];




$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; // Test Paypal API URL
$paypal_id='ayush-facilitator@dualcube.com'; // Business email ID
?>
<div align="center">
<h4>Welcome  <?php echo $_SESSION['bill_name'];?></h4>


<div class="product">            
    
    <div class="name">
      "Please Confirm Amount & click Buy Now"
    </div>
    <div class="price">
       <?php echo $_SESSION['cost'];?>
    </div>




    <div class="btn">
    <form action="<?php echo $paypal_url; ?>" method="post" name="frmPayPal1">
    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">
    <input type="hidden" name="cmd" value="_xclick">
    
    <input type="hidden" name="item_number" value="1">
    <input type="hidden" name="credits" value="510">
    <input type="hidden" name="userid" value="1">
    <input type="hidden" name="amount" value="<?php echo $_SESSION['cost'];?>">
    <input type="hidden" name="cpp_header_image" value="http://www.phpgang.com/wp-content/uploads/gang.jpg">
    <input type="hidden" name="no_shipping" value="1">
    <input type="hidden" name="currency_code" value="USD">
    <input type="hidden" name="handling" value="0">
    <input type="hidden" name="return" value="http://localhost/ecommerce/payment/success.php">
    <input type="hidden" name="cancel_return" value="http://localhost/ecommerce/payment/cancel.php">
    <input type="hidden" name="notify_url" value="http://localhost/ecommerce/payment/ipn.php">

    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
    </form> 

    </div>
</div>
</div>
