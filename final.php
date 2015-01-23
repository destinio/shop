<?php include 'header.php';

$_SESSION['cart'] = array();
$_SESSION['total'] = 0;

?>
	<div class="pageFull items">
		<div class="container">
			<h2>Thank You</h2>
			<h4>your order will be shipping soon</h4>
		</div>
	</div>

	<script>
		// SHOUTLET API
    Shoutlet.conversions.track({
      pageType: 'Order Confirmation'
    });

	</script>
<?php include 'footer.php';?>