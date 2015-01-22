<?php include 'header.php';

$total = 0;

foreach ($plans as $plan_name => $plan_data) {
	if (isset($_REQUEST[$plan_name])) {
		$qty = preg_replace('/\D+/', '', $_REQUEST[$plan_name]);
		if ($qty > 0) {
			$cart[$plan_name] = $qty;
			$total            = $plan_data[0] * $qty;
		}
		else { $cart[$plan_name] = 0; }
	}
}

$_SESSION['cart'] = $cart;

?>
	<div class="pageFull">
		<div class="container">
			<form action="">
			<table class="u-full-width">
			  <thead>
			    <tr>
			      <th>Package Name</th>
			      <th>qty</th>
			      <th>amount</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td>Classic</td>
			      <td><? echo $cart['p1_meal'] ?></td>
			      <td><? echo $cart['p1_meal'] * $plans['p1_meal'][0] ?></td>
			    </tr>
			    <tr>
			      <td>Savory</td>
			      <td><? echo $cart['p2_meal'] ?></td>
			      <td><? echo $cart['p2_meal'] * $plans['p2_meal'][0] ?></td>
			    </tr>
			    <tr>
			      <td>Tapas</td>
			      <td><? echo $cart['p3_meal'] ?></td>
			      <td><? echo $cart['p3_meal'] * $plans['p3_meal'][0] ?></td>
			    </tr>
			  </tbody>
			</table>
			<a class="button" href="add.php">edit cart</a>
			<input type="submit" name="checkout" value="Checkout">
			</form>
		</div>
		</div>
<?php include 'footer.php';?>