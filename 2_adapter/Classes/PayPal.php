<?php

	namespace MyApp;

	class PayPal {
		
		public function __construct() {
		
		}

		public function sendPayment($amount) {
			echo "Paying via PayPal " . $amount;
		}
	}





?>
