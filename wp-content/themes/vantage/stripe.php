<?php
/*
	Template Name: Stripe
*/
require("php_res.php");
get_header(); 

/*
Stripe_Customer::create(array(
  "description" => "Customer for test@example.com",
  "id" => "cus_id"
));
$cu = Stripe_Customer::retrieve("cus_1");
$card = $cu->cards->create(array("card" => array("number" => "4242424242424242", 
										"exp_month" => "09",
										"exp_year" => "15")));
echo $card['id'];									
$charge = Stripe_Charge::create(array(
		  "amount" => 400,
		  "currency" => "usd",
		  "customer" => "cus_1",
		  "card" => "card_102geM2QZDFwv5L9I73qXoEl",
		  "description" => "Charge for test@example.com")
		);		
		echo $charge['id'];	
		http://localhost/wordpress/?page_id=5&dealer-id=2&card-number=4242424242424242&card-exp-mth=09&card-exp-yr=2013
	*/
 $dealerId = $_REQUEST['dealer-id'];//sql encode
 $cardNumber = $_REQUEST['card-number'];//sql encode
 $cardMth = $_REQUEST['card-exp-mth'];
 $cardYr = $_REQUEST['card-exp-yr'];
 $make = $_REQUEST['car-make'];
 $make = $_REQUEST['car-make'];
 $dealerWeb = $_REQUEST['dealer-website'];
 $dealerImg = $_REQUEST['dealer-image'];
 if($dealerId == "")
 {
	header("location: ?page_id=11");//redirect to sponsor
 }
?>


	
	<p class="stripe-confirm">Thank you for your sponsorship! Feel free to check out our <a href="hello-world/">latest post</a>.</p>
	<?php
	
		try{
			$cu = Stripe_Customer::retrieve("2");
		} catch (Exception $e)
		{
		$cu = Stripe_Customer::create(array(
		  "description" => "Customer for prototype",
		  "id" => $dealerId
		));	
		$cu;
		}
	
		$qry = "select * from dealer where dealerId = $dealerId and ccNum = '$cardNumber'";
		$res = $db->query($qry);
		$row = $res->fetch_array();
		if(sizeof($row) == 0)
		{
			$card = $cu->cards->create(array("card" => array("number" => $cardNumber, 
										"exp_month" => $cardMth,
										"exp_year" => $cardYr)));
			
			$card = $card['id'];
			$ins = "insert into dealer values($dealerId, '$cardNumber', '$card', '$dealerWeb', '$dealerImg')";
			$db->query($ins) or die(mysql_error);
		}
		else
		{
			
			$card =  $row['ccKey'];			
		}

		$charge = Stripe_Charge::create(array(
		  "amount" => 500,
		  "currency" => "usd",
		  "customer" => $cu['id'],
		  "card" => $card,
		  "description" => "Charge for blog")
		);
		$charge = $charge['id'];		
		$qry = "insert into transaction(ccId, chargeKey, make) values('$card', '$charge', '$make')";
		$db->query($qry) or die(mysql_error());
		
		
	?>

<?php get_footer(); ?>