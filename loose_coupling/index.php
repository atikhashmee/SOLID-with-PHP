<?php 

require 'PaymentMethods.php';
require 'Paypal.php';
require 'Stripe.php';



$paypal = new PaymentMethod(new Paypal());
$stripe = new PaymentMethod(new Stripe());


echo "<pre>";
var_dump($paypal->showCalculator());
var_dump($stripe->showCalculator());






?>