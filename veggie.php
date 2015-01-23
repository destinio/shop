<?php include 'header.php'; ?>

	<div class="pageFull things">
		<div class="container">
			<div class="row">
                <div class="one-third column">
                    <img src="images/hummus.png" alt="">
                </div>
                <div class="two-thirds column desc">
                    <h3>The Veggie</h3>
                    <p>
                    A delicious, nutritionally balanced ready-to-eat meal in a handy box. Just grab a drink, spread out your meal, and let your taste buds come out and play. No refrigeration, preparation, or wicker basket required! 
                    </p>
                    <p>
                    Get ready for creamy hummus, crunchy multi-seed crackers, sweet + spicy fruit & nut mix, energy-packed edamame seed blend, and a chewy chocolate rice crisp bar for dessert!
                    </p>
                    <p>
                    Your Veggie meal features Wild Garden Hummus Dip (1.76 oz), Crunchmaster Multi-Seed Crackers (0.5 oz), Sweet Perry Orchards Baja Blend Fruit & Nut Mix (0.75 oz), Sweet Perry Orchards Power Play Tasty Seed Blend (0.75 oz), and Professor Zim Zam’s Extraordinary Chocomallocrispie Rice Crisp Bar (0.49 oz).
                    </p>
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