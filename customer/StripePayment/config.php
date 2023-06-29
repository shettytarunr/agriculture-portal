<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

$stripeDetails = array(
		"secretKey" => "sk_test_51MfC4XSJtmtfKM55k5E5miobq6Q0EWHArKpC0de2kN73FC9vjw2xkvuDEOgzrHrSKHKEYFYMyQjRiHGUZM3odI8900KVnaLite",  //Your Stripe Secret key
		"publishableKey" => "pk_test_51MfC4XSJtmtfKM55JG1GHOsTJxBmgbw0loH149V7wmno7xplI925eylJZkp7mQsjPVKFiLV290EJvoukl0pKdEXz00LWMm8ucq"  //Your Stripe Publishable key
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);

	
?>
