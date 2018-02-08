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
			<p style="font-size:20px;" align="center">Wrong Password. Please try again.</p>
			<br>
			<!-- <a class="error-button" href="index.php"></a>-->
			<?php
						echo'<form action="includes/login.inc.php" method="POST" align="center"	>
							<input align="center" type="text" name="uid" placeholder="Username/E-mail" required>
							<input align="center" type="password" name="pwd" placeholder="Password" required>
							<button type="submit" name="submit" align="center">Login</button>
						</form>';
			?>
			<br>
			<form align="center" onreset="myFunction()">
				<button type="reset" name="submit" align="center">Forget Username/Password</button>
</form>
		</div>
		</div>
	</div>
</section>

<!-- Script to allow alerting. -->
<script>
function myFunction() {
    alert("A link was sent to your email to reset your Username/Password.");
}
</script>

<?php
	include_once 'footer.php';
?>