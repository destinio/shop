<?php include 'header.php'; ?>

	<div class="pageFull">
		<div class="container">
			
		</div>
	</div>
<?php include 'js.php'; ?>
	<script>
		// SHOUTLET API
       
            Shoutlet.conversions.track({
                cid: 2877,
                pageType: 'Lading Page',
                custom: {
                customer_id: 1234,
                product_id: "A88374823674"
            }
        });

	</script>
<?php include 'footer.php';?>