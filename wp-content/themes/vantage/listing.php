<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 * 
 * Template Name: Listing
 */
$listId = $_REQUEST['listing'];
get_header(); ?>
<script type="text/javascript">
	$(function()
	{
		var list = "<?php echo $listId; ?>";
		var i = 0;
		$.getJSON( "http://apis.getauto.com/price_getter/listing_details?partnerCode=ga&listingIds=" + list, function( data ) {
			$.each( data, function( key, val ) {
				var vTitle = val.details.YEAR + " " + val.details.MAKE_NAME + " " + val.details.MODEL_NAME;
				var vPrice = "$" +  val.details.PRICE;
				var vMile = val.details.MILEAGE;
				var vCond = val.details.NEW_USED;
				var vCol = val.details.EXTERIOR_COLOR;
				var vDes = val.details.DESCRIPTION;
				var dName = val.dealer.BUSINESS_NAME;
				var dAdd = val.dealer.ADDRESS;
				var dCity = val.dealer.CITY;
				var dState= val.dealer.STATE_CODE;
				var dZip = val.dealer.ZIP_CODE;
				var dTel = val.dealer.PHONE_NUMBER;
				var vImg = val.details.IMAGE_PATHS[1];

				$("#veh-title").html(vTitle);
				$("#veh-price").html(vPrice);
				$("#veh-mile").html(vMile);
				$("#veh-cond").html(vCond);
				$("#veh-col").html(vCol);
				$("#veh-des").html(vDes);
				$("#dealer-name").html(dName);
				$("#dealer-add").html(dAdd);
				$("#dealer-city").html(dCity);
				$("#dealer-tel").html(dTel);
				$("#veh-img").attr("src", vImg);
				$("#dealer-state").html(dState);
				$("#dealer-zip").html(dZip);



			});
		});
	});
</script>
<!--vehicle listing-->
<div class="page-listing">
	<!--wrapper-->
    <div class="wrapper">
    	
        <!--vehicle image goes here-->
    	<div class="veh-img">
        	<img id="veh-img" src="" width="500" height="332" alt="Five Axis Lexus GS (7)">
        </div><!--end vehicle image-->
        
        <!--vehicle information-->
        	<div class="veh-info">
            
            	<article>
                	
               <span id="veh-title" class="veh-title">2014 Lexus GS 350 </span>
               <span class="add-info"><strong>Price: </strong><span id="veh-price">$55,0000</span></span>
               <span class="add-info"><strong>Mileage:</strong><span id="veh-mile">10</span></span>
               <span class="add-info"><strong>Condition:</strong><span id="veh-cond">New</span></span>
               <span class="add-info"><strong>Color:</strong><span id="veh-col">White</span></span>
               <span class="add-info"><strong>Description:</strong><span id="veh-des">This is an example of a cool description</span></span>
               
               <div class="dealer-info vcard">
	               	<span id="dealer-name" class="org">Narwhal Lexus Norfolk</span>
	                <div class="adr">
	                	<span id="dealer-add" class="street-address">150 Granby St</span><br />
	                	<span id="dealer-city" class="locality">Norfolk</span>, <span id="dealer-state" class="region">VA</span> <span id="dealer-zip" class="postal-code">23510</span><br/ >
	                <span id="dealer-tel" class="tel">757-000-1111</span><br />
               </div>
                       
                    
                </article>
                
                
            </div> <!--end vehicle information-->
       
    	
    </div>
</div><!--end listing of vehicle-->

<?php get_footer(); ?>