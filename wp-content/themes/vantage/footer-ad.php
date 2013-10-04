
</div><!-- #page-wrapper -->

<?php wp_footer(); ?>
<?php 
require("php_res.php");
$qry = "select dealerSite, dealerImage from dealer ORDER BY dealerId DESC LIMIT 1";
		$res = $db->query($qry) or die(); 
		$row = $res->fetch_array();
?>
		
		
<footer>
	<a href="http://<?php echo $row['dealerSite']; ?>"><img height="40" width="320" src="<?php echo $row['dealerImage']; ?>" alt=""/></a>
</footer>

<script src="<?php echo get_site_url(); ?>/wp-content/themes/vantage/js/bootstrap.min.js"></script>

<script src="https://s3.amazonaws.com/dom-cms/dev-web/Scripts/libs/jquery/plugins/jquery.flexslider-min.js" type="text/javascript"></script>


<!--flexslider set up-->
<script>
	$(document).ready(function(e) {
        $('.flexslider').flexslider({
			
			//turn off control navigation
			directionNav: false,
			smoothHeight: true,
			animation: "fade",
			touch: true,
			keyboard: true,
			directionNav: true,
		});
    });
</script>

</body>
</html>