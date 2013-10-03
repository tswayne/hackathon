<?php
	$db = mysqli_connect("localhost", "hack", "hthon", "wordpress") or die("Error: " . mysqli_error($db));
	require_once('stripe/lib/Stripe.php');
	Stripe::setApiKey("sk_test_T3k85Rl4Wbsp92NHtHTOub80 ");
?>