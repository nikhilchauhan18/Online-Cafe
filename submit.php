<?php
require('config.php');
if(isset($_POST['stripeToken'])) {
\Stripe\Stripe::setVerifySslCerts(false);

$token=$_POST['stripeToken'];

$data=\Stripe\Charge::create(array(
       "amount"=>4500,
       "currency"=>"INR",
       "description"=>"D & R Cafe",
       "source"=>$token,
));  

echo "<pre>";
print_r($data);
}
?>