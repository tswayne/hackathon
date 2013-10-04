
</div><!-- #page-wrapper -->

<?php wp_footer(); ?>
<?php 
/*
require("php_res.php");
$qry = "select dealerSite, dealerImage from dealer";
		$res = $db->query($qry) or die(); 
		$row = $res->fetch_array();
*/
		?>
		
<!--
<footer>
	<a href="http://<?php echo $row['dealerSite']; ?>"><img height="40" width="320" src="<?php echo $row['dealerImage']; ?>" alt=""/></a>
</footer>
-->

<script src="<?php echo get_site_url(); ?>/wp-content/themes/vantage/js/bootstrap.min.js"></script>

</body>
</html>