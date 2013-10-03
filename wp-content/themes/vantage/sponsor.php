<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 * 
 * Template Name: Sponsor
 */
get_header(); ?>

<div class="page-sponsor">
	<h1>Become a Sponsor</h1>
	<form class="sponsor-form row">
		<fieldset name="car-makes">
			<legend>Makes</legend>
			<label for="make-lexus" class="checkbox">
		      <input type="radio" name="car-make" /> Lexus
		    </label>
		    <label for="make-bmw" class="checkbox">
		      <input type="radio" name="car-make" /> BMW
		    </label>
		    <label for="make-audi" class="checkbox">
		      <input type="radio" name="car-make" /> Audi
		    </label>
		</fieldset>
		
		<label for="dealer-id">Dealership ID</label>
			<input type="text" name="dealer-id" />
		
		<fieldset name="card-info">
			<legend>Credit Card Information</legend>
			<label for="card-number">Credit Card Number</label>
		      	<input type="number" name="card-number" />
		    <label for="card-exp">Expiration Month/Year</label>
		    	<select name="card-exp-mth" class="input-mini">
		    		<option value="01">01</option>
		    		<option value="02">02</option>
		    		<option value="03">03</option>
		    		<option value="04">04</option>
		    		<option value="05">05</option>
		    		<option value="06">06</option>
		    		<option value="07">07</option>
		    		<option value="08">08</option>
		    		<option value="09">09</option>
		    		<option value="10">10</option>
		    		<option value="11">11</option>
		    		<option value="12">12</option>
		    	</select>
		    	<select name="card-exp-mth" class="input-mini">
		    		<option value="2013">13</option>
		    		<option value="2014">14</option>
		    		<option value="2015">15</option>
		    		<option value="2016">16</option>
		    	</select>
		</fieldset>
		
		<button href="" class="">Pay <i class="icon-chevron-right"></i></button>
	</form>

</div>

<?php get_footer(); ?>