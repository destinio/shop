<?php include 'header.php';?>
<div class="pageFull product">
	<div class="container">
		<h3>Meal Packs</h3>
		<div class="row meals">

		        <div class="one-third column value">
		          <a href="veggie"><h2 class="value-multiplier"><? echo $plans['p1_meal'][1] ?></h2></a>
		          <div class="prod prod1"></div>

		        </div>
		        <div class="one-third column value">
		         <a href="meat.php"><h2 class="value-multiplier"><? echo $plans['p2_meal'][1] ?></h2></a>
		          <div class="prod prod2"></div>

		        </div>
		        <div class="one-third column value">
		          <a href="doubleMeat.php"><h2 class="value-multiplier"><? echo $plans['p3_meal'][1] ?></h2></a>
		          <div class="prod prod3"></div>

		        </div>
		        <div class="buttons">
		        	<a class="button" href="add.php">add packages to plan</a>
		        </div>

	</div>
</div>
</div>
<?php include 'js.php'; ?>
<script>
	
	// SHOUTLET API
    Shoutlet.conversions.track({
      cid: 2877,
      pageType: 'index page'
    });


</script>
<?php include 'footer.php';?>