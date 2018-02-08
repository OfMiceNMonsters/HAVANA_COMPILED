<?php
	// include codes for navbar
	include_once 'afterlogin.php';
?>

<!--background classes-->
<section class="main-container">
	<div class="main-wrapper">
		<!--white main background-->
		<div id="example1">
			<!--start actual codes-->
			<!--top label-->
			<link rel="stylesheet" type="text/css" href="style.css">
			<table class="checkout">
				<tr>
				<!--1st table header-->
				<th>SHIPPING INFORMATION</th>
				</tr>
			</table>
				<!--after this form submits, go to prepared.inc.php-->
				<form class="checkout-form" action="includes/prepared.inc.php" method="POST">
					<!--input and label for name-->
					<label>Name:</label>
					<input type="text" name="name" placeholder="Nur Syarifah Shah" required>

					<br/>
					<br/>
					
					<!--input and label for address-->
					<label>Address:</label>
					<input type="text" name="address" placeholder="Blk 103A Edgefield Plains #12-192" required>
					
					<br/>
					<br/>

					<!--input and label for postcode-->
					<label>Postcode:</label>
					<input type="text" name="postcode" placeholder="823103" required>

					<br/>
					<br/>

					<!--input and label for mobile-->
					<label>Mobile Number:</label>
					<input type="text" name="mobile" placeholder="93781209" required>

					<br/><br/><br/>

					<!--2nd table header-->
					<table class="checkout">
						<tr>
						<th>DELIVERY OPTION</th>
						</tr>
					</table>

					<p> Standard Shipping [4-8 Days | FOC] </p>
					<p> Express Shipping [1-3 Days | $3.20] </p>

					<br/>
					<br/>
					
					<!--input and label for delivery-->
					<label>Shipping:</label>
					<input type="text" name="delivery" placeholder="Enter Standard or Express" required>

					<br/><br/><br/><br/>

					<!--3rd table header-->
					<table class="checkout">
						<tr>
						<th>PAYMENT DETAILS</th>
						</tr>
					</table>

					<!--input and label for card_no-->
					<label>Card Number:</label>
					<input type="text" name="card_no" placeholder="1234567890121314" required>

					<br/>
					<br/>

					<!--input and label for card_name-->
					<label>Name on Card:</label>
					<input type="text" name="card_name" placeholder="Nur Syarifah" required>

					<br/>
					<br/>

					<!--input and label for name expiry-->
					<label>Expiry Date:</label>
					<input type="text" name="expiry" placeholder="12-2022" required>
					<!--<label></label>
					<input type="text" name="year" placeholder="Enter Year (yy)" required>-->

					<br/>
					<br/>

					<!--input and label for ccv-->
					<label>CCV/CVV:</label>
					<input type="text" name="ccv" placeholder="123" required>

					<br/><br/><br/><br/><br/><br/><br/><br/><br/>

					<!--button to link to prepared.inc.php-->
					<button type="submit" name="submit">SUBMIT</button>
					
			</form>

		</div>
	</div> 
</section>


<?php
	include_once 'footer.php';
?>
