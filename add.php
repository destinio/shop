<?php include 'header.php';?>
	<div class="pageFull items">
		<div class="container">
			<div>
				<h3>please select the amount of packages you would like</h3>
			<table align="center">
			  <thead>
			    <tr>
			      <th>Package Name</th>
			      <th>amount</th>
			    </tr>
			  </thead>
			  <form action="cart.php" method="get">
			  <tbody>
			    <tr>
			      <td><? echo $plans['p1_meal'][1] ?></td>
			      <td>
			      	<select name="p1_meal">
						<option <?php if (isset($cart['p1_meal']) && $cart['p1_meal'] == 0) { echo 'selected="selected"'; } ?>>0</option>
						<option <?php if (isset($cart['p1_meal']) && $cart['p1_meal'] == 1) { echo 'selected="selected"'; } ?>>1</option>
						<option <?php if (isset($cart['p1_meal']) && $cart['p1_meal'] == 2) { echo 'selected="selected"'; } ?>>2</option>
						<option <?php if (isset($cart['p1_meal']) && $cart['p1_meal'] == 3) { echo 'selected="selected"'; } ?>>3</option>
						<option <?php if (isset($cart['p1_meal']) && $cart['p1_meal'] == 4) { echo 'selected="selected"'; } ?>>4</option>
			      	</select>
			      </td>
			    </tr>
			    <tr>
			      <td><? echo $plans['p2_meal'][1] ?></td>
			      <td>
			      	<select name="p2_meal">
			      	<option <?php if (isset($cart['p2_meal']) && $cart['p2_meal'] == 0) { echo 'selected="selected"'; } ?>>0</option>
			      	<option <?php if (isset($cart['p2_meal']) && $cart['p2_meal'] == 1) { echo 'selected="selected"'; } ?>>1</option>
			      	<option <?php if (isset($cart['p2_meal']) && $cart['p2_meal'] == 2) { echo 'selected="selected"'; } ?>>2</option>
			      	<option <?php if (isset($cart['p2_meal']) && $cart['p2_meal'] == 3) { echo 'selected="selected"'; } ?>>3</option>
			      	<option <?php if (isset($cart['p2_meal']) && $cart['p2_meal'] == 4) { echo 'selected="selected"'; } ?>>4</option>
			      	</select>
			      </td>
			    </tr>
			    <tr>
			      <td><? echo $plans['p3_meal'][1] ?></td>
			      <td>
			      	<select name="p3_meal">
			      		<option <?php if (isset($cart['p1_meal']) && $cart['p3_meal'] == 0) { echo 'selected="selected"'; } ?>>0</option>
						<option <?php if (isset($cart['p3_meal']) && $cart['p3_meal'] == 1) { echo 'selected="selected"'; } ?>>1</option>
						<option <?php if (isset($cart['p3_meal']) && $cart['p3_meal'] == 2) { echo 'selected="selected"'; } ?>>2</option>
						<option <?php if (isset($cart['p3_meal']) && $cart['p3_meal'] == 3) { echo 'selected="selected"'; } ?>>3</option>
						<option <?php if (isset($cart['p3_meal']) && $cart['p3_meal'] == 4) { echo 'selected="selected"'; } ?>>4</option>
			      	</select>
			      </td>
			    </tr>
			  </tbody>
			</table>
			<input type="submit" name="submit" value="submit">
		    </form>
		    </div>
		</div>
		</div>
<?php include 'js.php'; ?>
		<script>
			// SHOUTLET API
			Shoutlet.conversions.track({
			  pageType: 'add products'
			});
		</script>
<?php include 'footer.php';?>