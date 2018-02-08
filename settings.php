<?php
	include_once 'includes/settings.inc.php';
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
			<h5 class="settings-header">Settings</h5>
			<br>
						<table align="center">
						  <tr>
						    <td><a class="Password-button" href="http://www.google.com">Forgot Your Password</a></td>
						  </tr>
						  
						  <tr>
						  <td><a class="Password-button" href="http://www.youtube.com">Change your password</a></td>
						  </tr>
						  
						  <tr>
						  <td><a class="Password-button" href="http://www.yahoo.com">Delete your account </td>
						  </tr>

						   <tr>
						  <td><a class="Password-button" href="http://www.outlook.com">Change Email Address</td>
						  </tr>
						  
						</table>	

		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>