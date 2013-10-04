<?php
/**
 * The template for displaying the home page panel. Requires SiteOrigin page builder plugin.
 *
 * @package vantage
 * @since vantage 1.0
 * @see http://siteorigin.com/page-builder/
 * @license GPL 2.0
 */

get_header(); ?>    

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'singlehome' ); ?>

			<?php endwhile; // end of the loop. ?>


<?php  get_footer(); ?>