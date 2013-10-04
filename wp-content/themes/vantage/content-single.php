<?php
/**
 * Displays 
 * 
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?>
<script type="text/javascript">
	var cat = "	<?php foreach(get_the_category() as $cat)
	  {
		$category =  $cat->cat_name;
	  }
	  echo $category;
	  ?>";
	  cat = cat.trim();
	  var url = "<?php echo get_site_url();?>";
	  var i = 0;
	  $.getJSON( "http://apis.getauto.com/price_getter/listings?partnerCode=GA&zip=23510", function( data ) {
		  $.each( data, function( key, val ) {
			// alert(cat.length + " " + val.details.LISTING_ID + " " + val.details.MAKE_NAME );
			
			 if(val.details.MAKE_NAME == cat)
			 {
				i++;
				$("#list" + i).attr("href", url + "/listing?listing="+val.details.LISTING_ID).html(val.details.YEAR + " " + val.details.MAKE_NAME + " " + val.details.MODEL_NAME).show()
								
			 }			
			 if(i == 3)
			 {
				return false;
			 }
		  });
		  });
  </script>
<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

	<div class="entry-main">

		<?php do_action('vantage_entry_main_top') ?>

		<header class="entry-header">

			<?php if( has_post_thumbnail() ): ?>
				<div class="entry-thumbnail"><?php the_post_thumbnail( is_active_sidebar('sidebar-1') ? 'post-thumbnail' : 'vantage-thumbnail-no-sidebar' ) ?></div>
			<?php endif; ?>

			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'vantage' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

			<?php if ( get_post_type() == 'post' ) : ?>
				<div class="entry-meta">
					<?php vantage_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>

		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'vantage' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'vantage' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->

		<?php if(vantage_get_post_categories()) : ?>
			<div class="entry-categories">
				<?php echo vantage_get_post_categories() ?>
			</div>
		<?php endif; ?>

		<?php do_action('vantage_entry_main_bottom') ?>

	</div>
	<a href="" id="list1" style="display:none"></a>
	<a href="" id="list2" style="display:none"></a>
	<a href="" id="list3" style="display:none"></a>
	
</article><!-- #post-<?php the_ID(); ?> -->
