<?php include 'header.php';?>
	<div class="pageFull items">
		<div class="container">
			<h3>please provide credit card and delevery methods</h3>
			<table align="center">
			  <thead>
			    <tr>
			      <th>Package Name</th>
			      <th>qty</th>
			      <th>amount</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td><? echo $plans['p1_meal'][1] ?></td>
			      <td><? echo $cart['p1_meal'] ?></td>
			      <td><? echo $cart['p1_meal'] * $plans['p1_meal'][0] ?></td>
			    </tr>
			    <tr>
			      <td><? echo $plans['p2_meal'][1] ?></td>
			      <td><? echo $cart['p2_meal'] ?></td>
			      <td><? echo $cart['p2_meal'] * $plans['p2_meal'][0] ?></td>
			    </tr>
			    <tr>
			      <td><? echo $plans['p3_meal'][1] ?></td>
			      <td><? echo $cart['p3_meal'] ?></td>
			      <td><? echo $cart['p3_meal'] * $plans['p3_meal'][0] ?></td>
			    </tr>
			  </tbody>
			</table>
			<h1 class="checkout-title">
			Total: <span class="checkout-price"><? echo $_SESSION['total']; ?></span>
			</h1>


				<form action="final.php" method="post">
				<div class="row">
					<div class="one-third column">
						<div class="card-wrapper"></div>
					</div>
					<div class="two-thirds column">
						<div class="form-container active">
							<i class="fa fa-cc-visa fa-2x"></i>
							<i class="fa fa-cc-mastercard fa-2x"></i>
							<i class="fa fa-cc-amex fa-2x"></i>
							<p><input placeholder="Card number" type="text" name="number"></p>
							<p><input placeholder="Full name" type="text" name="name"></p>
							<p>
							<input placeholder="MM/YY" type="text" name="expiry">
							<input placeholder="CVC" type="text" name="cvc" size="4" maxlength="4">
							</p>
						
						</div>
					</div>
				</div>
				<div class="row address">
				    <div class="one-half column first">
				    		<span>billing</span><br />
				    	    <input type="text" placeholder="first name" name="first_name" />
				    	    <input type="text" placeholder="last name" name="last_name" />
				    	    <input type="text" placeholder="street address" name="billing_address_1" />
				    	    <input type="text" placeholder="apt #" name="billing_address_2" />
				    	    <input type="text" placeholder="city" name="billing_city" />
				    	    <input type="text" placeholder="state" name="billing_state" />
				    	    <input type="text" placeholder="zip" name="billing_zip" />

				    </div>
				    <div class="one-half column second">
							<span>shipping</span><br />
				    	    <label><input type="checkbox" id="same_as_billing" /> Same as billing</label>
				    	    <input type="text"	placeholder="first name" name="shipping_first_name" />
				    	    <input type="text"	placeholder="last name" name="shipping_last_name" />
				    	    <input type="text"	placeholder="street address" name="shipping_address_1" />
				    	    <input type="text"	placeholder="apt #" name="shipping_address_2" />
				    	    <input type="text"	placeholder="city" name="shipping_city" />
				    	    <input type="text"	placeholder="state" name="shipping_state" />
				    	    <input type="text"	placeholder="zip" name="shipping_zip" />

				    </div>
				</div>
				<input type="submit" name="finalize" value="finalize">
			</form>
		</div>
</div>
<?php include 'js.php'; ?>
<script>
	// SHOUTLET API
    Shoutlet.conversions.track({
      cid: 2877,
      pageType: 'Checkout page'
    });

</script>
<!-- https://github.com/jessepollak/card -->
<script src="js/card.js"></script>
<<script>
	new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
</script>
<script src="js/jquery.card.js"></script>
<?php include 'footer.php';?>