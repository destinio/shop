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
			      <td>$<? echo $cart['p1_meal'] * $plans['p1_meal'][0] ?></td>
			    </tr>
			    <tr>
			      <td><? echo $plans['p2_meal'][1] ?></td>
			      <td><? echo $cart['p2_meal'] ?></td>
			      <td>$<? echo $cart['p2_meal'] * $plans['p2_meal'][0] ?></td>
			    </tr>
			    <tr>
			      <td><? echo $plans['p3_meal'][1] ?></td>
			      <td><? echo $cart['p3_meal'] ?></td>
			      <td>$<? echo $cart['p3_meal'] * $plans['p3_meal'][0] ?></td>
			    </tr>
			  </tbody>
			</table>
			<h1 class="checkout-title">
			Total: $<span class="checkout-price"><? echo $_SESSION['total']; ?></span>
			</h1>


				<form action="final.php" method="post">
				<div class="row">
					<div class="one-third column">
						<div class="card-wrapper"></div>
					</div>
					<div class="two-thirds column">
						<div class="form-container active">
							<input placeholder="card number" type="text" name="number" size="40"><br />
							<input placeholder="full name" type="text" name="name" size="40"><br />
							<input placeholder="MM/YY" type="text" name="expiry" size="31">
							<input placeholder="CVC" type="text" name="cvc" size="4" maxlength="4">
						</div>
					</div>
				</div>
				<div class="row address">
				    <div class="one-half column first">
				    		<span>billing</span><br />
				    		<br />
				    	    <input type="text" placeholder="first name" name="first_name" size="15" />
				    	    <input type="text" placeholder="last name" name="last_name" size="15" />
				    	    <input type="text" placeholder="street address" name="billing_address_1"  size="35" /><br />
				    	    <input type="text" placeholder="city" name="billing_city" size="17" />
				    	    <select name="billing_state" size="1">
				    	      <option value="AK">AK</option>
				    	      <option value="AL">AL</option>
				    	      <option value="AR">AR</option>
				    	      <option value="AZ">AZ</option>
				    	      <option value="CA">CA</option>
				    	      <option value="CO">CO</option>
				    	      <option value="CT">CT</option>
				    	      <option value="DC">DC</option>
				    	      <option value="DE">DE</option>
				    	      <option value="FL">FL</option>
				    	      <option value="GA">GA</option>
				    	      <option value="HI">HI</option>
				    	      <option value="IA">IA</option>
				    	      <option value="ID">ID</option>
				    	      <option value="IL">IL</option>
				    	      <option value="IN">IN</option>
				    	      <option value="KS">KS</option>
				    	      <option value="KY">KY</option>
				    	      <option value="LA">LA</option>
				    	      <option value="MA">MA</option>
				    	      <option value="MD">MD</option>
				    	      <option value="ME">ME</option>
				    	      <option value="MI">MI</option>
				    	      <option value="MN">MN</option>
				    	      <option value="MO">MO</option>
				    	      <option value="MS">MS</option>
				    	      <option value="MT">MT</option>
				    	      <option value="NC">NC</option>
				    	      <option value="ND">ND</option>
				    	      <option value="NE">NE</option>
				    	      <option value="NH">NH</option>
				    	      <option value="NJ">NJ</option>
				    	      <option value="NM">NM</option>
				    	      <option value="NV">NV</option>
				    	      <option value="NY">NY</option>
				    	      <option value="OH">OH</option>
				    	      <option value="OK">OK</option>
				    	      <option value="OR">OR</option>
				    	      <option value="PA">PA</option>
				    	      <option value="RI">RI</option>
				    	      <option value="SC">SC</option>
				    	      <option value="SD">SD</option>
				    	      <option value="TN">TN</option>
				    	      <option value="TX">TX</option>
				    	      <option value="UT">UT</option>
				    	      <option value="VA">VA</option>
				    	      <option value="VT">VT</option>
				    	      <option value="WA">WA</option>
				    	      <option value="WI">WI</option>
				    	      <option value="WV">WV</option>
				    	      <option value="WY">WY</option>
				    	    </select>
				    	    <input type="text" placeholder="zip" name="billing_zip" size="6" maxlength="5" />

				    </div>
				    <div class="one-half column second">
							<span>shipping</span><br />
				    	    <label><input type="checkbox" id="same_as_billing" /> Same as billing</label>
				    	    <input type="text"	placeholder="first name" name="shipping_first_name" size="15" />
				    	    <input type="text"	placeholder="last name" name="shipping_last_name" size="15" /><br />
				    	    <input type="text"	placeholder="street address" name="shipping_address_1" size="35" /><br />
				    	    <input type="text"	placeholder="city" name="shipping_city" size="17" />
				    	    <select name="shipping_state" size="1">
				    	      <option value="AK">AK</option>
				    	      <option value="AL">AL</option>
				    	      <option value="AR">AR</option>
				    	      <option value="AZ">AZ</option>
				    	      <option value="CA">CA</option>
				    	      <option value="CO">CO</option>
				    	      <option value="CT">CT</option>
				    	      <option value="DC">DC</option>
				    	      <option value="DE">DE</option>
				    	      <option value="FL">FL</option>
				    	      <option value="GA">GA</option>
				    	      <option value="HI">HI</option>
				    	      <option value="IA">IA</option>
				    	      <option value="ID">ID</option>
				    	      <option value="IL">IL</option>
				    	      <option value="IN">IN</option>
				    	      <option value="KS">KS</option>
				    	      <option value="KY">KY</option>
				    	      <option value="LA">LA</option>
				    	      <option value="MA">MA</option>
				    	      <option value="MD">MD</option>
				    	      <option value="ME">ME</option>
				    	      <option value="MI">MI</option>
				    	      <option value="MN">MN</option>
				    	      <option value="MO">MO</option>
				    	      <option value="MS">MS</option>
				    	      <option value="MT">MT</option>
				    	      <option value="NC">NC</option>
				    	      <option value="ND">ND</option>
				    	      <option value="NE">NE</option>
				    	      <option value="NH">NH</option>
				    	      <option value="NJ">NJ</option>
				    	      <option value="NM">NM</option>
				    	      <option value="NV">NV</option>
				    	      <option value="NY">NY</option>
				    	      <option value="OH">OH</option>
				    	      <option value="OK">OK</option>
				    	      <option value="OR">OR</option>
				    	      <option value="PA">PA</option>
				    	      <option value="RI">RI</option>
				    	      <option value="SC">SC</option>
				    	      <option value="SD">SD</option>
				    	      <option value="TN">TN</option>
				    	      <option value="TX">TX</option>
				    	      <option value="UT">UT</option>
				    	      <option value="VA">VA</option>
				    	      <option value="VT">VT</option>
				    	      <option value="WA">WA</option>
				    	      <option value="WI">WI</option>
				    	      <option value="WV">WV</option>
				    	      <option value="WY">WY</option>
				    	    </select>
				    	    <input type="text"	placeholder="zip" name="shipping_zip" size="6" maxlength="5" />

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