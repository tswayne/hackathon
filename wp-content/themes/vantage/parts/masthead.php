<?php $postid = get_the_ID(); ?>

<!--logo-->
<div id="logo">
		<p>auto mobile</p>
</div><!--end logo-->


<header class="masthead row-fluid" role="banner">
	<nav class="head-nav dropdown">
	  <a id="main-nav" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-align-justify"></i></a>
	  <ul class="dropdown-menu" role="menu" aria-labelledby="main-nav">
	  		<li><a href="/">Home</a></li>
	  		<!-- <li><a href="">Blog</a></li> -->
	  		<li><a href="sponsor/">Become a Sponsor</a></li>
	  </ul>
	</nav>
	
	<div class="head-misc<?php if( $postid != '2' ) : ?> btn-sponsor<?php endif; ?>">
	<?php if( $postid != '2' ) : ?>
		<a href="sponsor/">Become a Sponsor</a>
	<?php endif; ?>
	</div>
</header><!-- #masthead -->

