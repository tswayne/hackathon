
<!--banner on top of the page-->
<div class="home-banner"></div><!--end home banner-->

<!--content goes here-->
<div class="home-content">
	<!--wrapper-->
	<div class="wrapper">
		<article class="post">
			<h1>Lexus Partners <br />with Tony Hawk Foundation <br />to Create a Fan Based Decal</h1>
			<p>Lexus and the Tony Hawk Foundation will be asking their fans and supporters to be part of a fan based decal that will be featured on the Lexus IS F CCS-R race car competing in Pikes Peak International Hill Climb...</p>
			<a href="hello-world/" class="read-more"><i class="icon-caret-right"></i> Read More</a>
		</article>

		<article class="post">
			<h1><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'vantage' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

			<p>
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'vantage' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'vantage' ), 'after' => '</div>' ) ); ?>
			</p><!-- .entry-content -->
				<a href="<?php the_permalink(); ?>" class="read-more"><i class="icon-caret-right"></i> Read More</a>

		</article>
	</div><!--end wrapper-->


</div><!--end content-->