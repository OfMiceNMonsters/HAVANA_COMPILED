<?php
	include_once 'includes/signupsuccessful.inc.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<!--add a class to form to add the style for sign up-->
		<!--action tells form which file to load once clicked on submit button-->
		<!--then create method in which u want to pass on data to the file-->
		<!--GET method is see all the info passed in the url-->
		<!--use POST method cause dont want to show password // dont want to pass info in a visible way-->
		<div id="example1">
			<!--just to show that you're at main page-->
			<h4 class="successful-header">Password Change Successful!</h4>
			<a class="successful-button" a href="index.php">Return to Homepage</a>
			
			<?php

alert("An Email has been sent to your email confirm your password change!");

function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
?>
		</div>
		</div>
</section>

<?php
	include_once 'footer.php';
?>