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
				<th>THANK YOU FOR SHOPPING WITH US!</th>
				</tr>
			</table>

			<br/><br/>

			<form class="summary-form" method="POST">
					<label>Feedback / Suggestions:</label>
					<br/><br/>
					<!--make a text area-->
					<textarea rows="4" cols="50" name="comment" form="usrform">Please leave a feedback for us..</textarea>

					<br/><br/><br/><br/>

					<!--if don't want enter feedback, just go catalogue-->
					<button type="submit" name="submit"><a href= "index.php">Browse Catalogue</a></button>
					
					<!--submit button for feedback, auto go to catalogue-->
					<button type="submit" name="submit"><a href= "index.php">Submit</a></button>
					
			</form>
			
		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
