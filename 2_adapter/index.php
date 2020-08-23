<?php

	use MyApp\PayPal;
	use MyApp\PayPalAdapter;
	use MyApp\PaymentInterface;
	use MyApp\Visa;
	use MyApp\VisaAdapter;

	require_once("vendor/autoload.php");

	// $paypal = new PayPal();
	// $paypal->sendPayment(10003);

	// $paypal = new PayPalAdapter();
	// $paypal->pay(1200);
	
	$visa = new VisaAdapter();
	$visa->pay(12345);


?>
