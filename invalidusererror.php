<?php
	include_once 'includes/errorpage.inc.php';
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
			<h3 class="error-header">Error!</h3>
			<p style="font-size:20px;" align="center">User does not exist. Please try again. <a class="error-button" href="index.php">Return to Homepage</a></p>
		</div>
		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>