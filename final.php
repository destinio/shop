<?php include 'header.php';

$_SESSION['cart'] = array();
$_SESSION['total'] = 0;

?>
	<div class="pageFull">
		<div class="container">
			
		</div>
	</div>

	<script>
		// SHOUTLET API
    Shoutlet.conversions.track({
      pageType: 'Order Confirmation'
    });

	</script>
<?php include 'footer.php';?>