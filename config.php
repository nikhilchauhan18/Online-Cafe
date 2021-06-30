<?php
require('stripe-php-master/init.php');
$publishableKey="pk_test_51Isn0tSIe0rqz11qcvZ8nNWuzLsCKbbRo8zbkpvoz28boZAyjRod4M1JU3RkLn93wXoeDxyXHZUl9dwvZoFw9pkX00R0YLFLtN";
$secretKey="sk_test_51Isn0tSIe0rqz11qTZ6MHAL658PMNRx5BJrg2JE4RMjpzmAMpjuIUpEIyYjq7F4qlJiCMFGs0Ddg8HPsN9uuJYC700VNcGjnhB";

\Stripe\Stripe::setApiKey($secretKey);
?>