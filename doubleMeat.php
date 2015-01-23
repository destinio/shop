<?php include 'header.php'; ?>

	<div class="pageFull things">
        <div class="container">
            <div class="row">
                <div class="one-third column">
                    <img src="images/pepp.png" alt="">
                </div>
                <div class="two-thirds column desc">
                    <h3>Double Meat</h3>
                    <p>A delicious, nutritionally balanced ready-to-eat meal in a handy box. Just grab a drink, spread out your meal, and let your taste buds come out and play. No refrigeration, preparation, or wicker basket required! </p>

                    <p>Get ready for zesty turkey pepperoni slices, creamy Asiago gourmet cheese spread, crunchy multi-grain crackers, sweet + spicy fruit & nut mix, and a long-lasting fleur de sel caramel lollipop for dessert! </p>

                    <p>Your Double Meat meal features Bridgford Turkey Pepperoni (0.8 oz), Copper Cowbell Asiago Gourmet Cheese Spread (0.75 oz), Crunchmaster Multi-Seed Crackers (0.5 oz), Sweet Perry Orchards Baja Blend Fruit & Nut Mix (0.75 oz), and a Professor Zim Zam's Extraordinary Sweets Zeppelin Sea Salt Caramel Lollipop (0.46 oz).</p>
                    
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