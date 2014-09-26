<?php
require_once('./lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_bdsVwl7ElpIXscLZcAGZNYFM",
  "publishable_key" => "pk_test_avdmXA2V9FdASuufKiJlPR7W"
);

Stripe::setApiKey($stripe['secret_key']);
?>