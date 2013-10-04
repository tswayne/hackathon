
<!--banner on top of the page-->
<div class="home-banner"></div><!--end home banner-->

<!--content goes here-->
<div class="home-content">
	<!--wrapper-->
	<div class="wrapper">

		<article class="post">
			<h1><?php the_title(); ?></h1>

			<p>
				<?php echo substr(get_the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'vantage' ) ), 0, 276); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'vantage' ), 'after' => '</div>' ) ); ?>
			</p><!-- .entry-content -->
				<a href="<?php the_permalink(); ?>" class="read-more"><i class="icon-caret-right"></i> Read More</a>

		</article>
	</div><!--end wrapper-->


</div><!--end content-->