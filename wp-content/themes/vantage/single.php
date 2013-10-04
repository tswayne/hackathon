<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>


	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>