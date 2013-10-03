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
get_header(); ?>

<!--vehicle listing-->
<div class="page-listing">
	<!--wrapper-->
    <div class="wrapper">
    	
        <!--vehicle image goes here-->
    	<div class="veh-img">
        	<a href="http://www.flickr.com/photos/motoringexposure/4355216594/" title="Five Axis Lexus GS (7) by motoringexposure, on Flickr"><img src="http://farm3.staticflickr.com/2794/4355216594_2e08be64ee.jpg" width="500" height="332" alt="Five Axis Lexus GS (7)"></a>
        </div><!--end vehicle image-->
        
        <!--vehicle information-->
        	<div class="veh-info">
            
            	<article>
                	
               <span class="veh-title">2014 Lexus GS 350 </span>   
               <span class="add-info"><strong>Price: </strong> $55,0000</span>   
               <span class="add-info"><strong>Mileage:</strong> 10</span> 
               <span class="add-info"><strong>Condition:</strong>New</span>
               <span class="add-info"><strong>Color:</strong>White</span>
               <span class="add-info"><strong>Description:</strong>This is an example of a cool description</span>
               
               <div class="dealer-info vcard">
	               	<span class="org">Narwhal Lexus Norfolk</span>
	                <div class="adr">
	                	<span class="street-address">150 Granby St</span><br />
	                	<span class="locality">Norfolk</span>, <span class="region">VA</span> <span class="postal-code">23510</span><br/ >
	                <span class="tel">757-000-1111</span><br />
	                <span class="url">http://www.dealership.com</span>
               </div>
                       
                    
                </article>
                
                
            </div> <!--end vehicle information-->
       
    	
    </div>
</div><!--end listing of vehicle-->

<?php get_footer(); ?>