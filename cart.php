<?php include 'header.php';
if (isset($_SESSION['total'])) { $total = $_SESSION['total']; }
else                           { $total = 0; }
if(isset($_REQUEST['submit'])) {
	$total = 0;
}
foreach ($plans as $plan_name => $plan_data) {
	if (isset($_REQUEST[$plan_name])) {
		$qty = preg_replace('/\D+/', '', $_REQUEST[$plan_name]);
		if ($qty > 0) {
			$cart[$plan_name] = $qty;
			$total            += $plan_data[0] * $qty;
		}
		else { $cart[$plan_name] = 0; }
		$_SESSION['total'] = $total;
	}
}

$_SESSION['cart'] = $cart;

?>
	<div class="pageFull items">
		<div class="container">
			<h3>please confirm your selections</h3>
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
			<h1>Total: <span class="checkout-price"><? echo $_SESSION['total']; ?></span></h1>
			<form action="checkout.php" method="get">
			<a class="button" href="add.php">edit cart</a>
			<input type="submit" name="checkout" value="Checkout">
			</form>
		</div>
		</div>
<?php include 'js.php'; ?>
		<script>
			// SHOUTLET API
    Shoutlet.conversions.track({
      cid: 2877,
      pageType: 'Cart page'
    });
		</script>
<?php include 'footer.php';?>