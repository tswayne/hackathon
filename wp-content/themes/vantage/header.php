<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
 $db = mysqli_connect("localhost", "hack", "hthon", "wordpress") or die("Error: " . mysqli_error($db));
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600|Roboto+Slab:100|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' />
	
	<link href="../wp-content/themes/vantage/bootstrap.min.css" rel="stylesheet" />
	
	<?php wp_head(); ?>
	<script src="http://code.jquery.com/jquery-2.0.3.js"></script>
	<link href="../wp-content/themes/vantage/css/main.css" rel="stylesheet" />
	<link href="../wp-content/themes/vantage/css/sponsor.css" rel="stylesheet" />
	<link href="../wp-content/themes/vantage/css/listing.css" rel="stylesheet" />
		
</head>

<body <?php body_class(); ?>>

<?php do_action('vantage_before_page_wrapper') ?>

<div id="page-wrapper" class="container">

	<?php do_action( 'vantage_before_masthead' ); ?>

	<?php get_template_part( 'parts/masthead', apply_filters( 'vantage_masthead_type', '' ) ); ?>

	<?php do_action( 'vantage_after_masthead' ); ?>

	<?php vantage_render_slider() ?>


	<div id="main" class="site-main">
		<div class="full-container">
			<?php do_action( 'vantage_main_top' ); ?>