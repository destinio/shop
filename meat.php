<?php include 'header.php'; ?>

	<div class="pageFull things">
        <div class="container">
            <div class="row">
                <div class="one-third column">
                    <img src="images/turkey.png" alt="">
                </div>
                <div class="two-thirds column desc">
                    <h3>Meat</h3>
                    <p>
                    Get ready for hardwood-smoked turkey slices, creamy white cheddar gourmet cheese spread, crunchy honey wheat crackers, unsweetened applesauce, and fruit-flavored Jelly Jets gummy airplanes for dessert! 
                    </p>
                    <p>Includes:</p>
                    <ul>
                        <li>Honey Wheat Crackers</li>
                        <li>Jelly Jets</li>
                        <li>Unsweetened Applesauce</li>
                        <li>Smoked Turkey Sausage</li>
                        <li>White Cheddar Cheese Spread</li>
                    </ul>
                    
                    <div class="buttons">
                        <a class="button" href="add.php">add package to plan</a>
                    </div>
                </div>
              </div>
        </div>
    </div>
<?php include 'js.php'; ?>
	<script>
		// SHOUTLET API
       
            Shoutlet.conversions.track({
                pageType: 'Lading Page',
                custom: {
                customer_id: 1234,
                product_id: "A88374823674"
            }
        });

	</script>
<?php include 'footer.php';?>