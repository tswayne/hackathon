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
 $make = "asdf";
?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
	<script type="text/javascript">
		$.getJSON( "http://apis.getauto.com/price_getter/listings?partnerCode=GA&zip=23510&makeId=59", function( data ) {
		  $.each( data, function( key, val ) {
			alert(key + " " + val);
		  });
		  });
	</script>
	<?php
	/*
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
			echo $cardMth;
			$card = $cu->cards->create(array("card" => array("number" => $cardNumber, 
										"exp_month" => "$cardMth",
										"exp_year" => $cardYr)));
			
			$card = $card['id'];
			echo $cardNumber;
			$ins = "insert into dealer values($dealerId, '$cardNumber', '$card')";
			$db->query($ins);
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
		$res = $db->query($qry);
		*/
		
	?>
	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>