<?php
	include_once 'signupheadercap.php';
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
			<h5 class="settings-header">Change Password</h5>
			<form class="signup-form" action="includes/changepassword.inc.php" method="POST">
				<input type="text" name="uid" placeholder="Username" required >
				<input type="email" name="email" placeholder="E-mail" required>
				<input type="password" name="pwd" id="newpassword" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must be at least 8 characters long with one uppercase character and one number. Please try again." required>
				<input type="password" name="pwd" id="retypepassword" placeholder="Retype Password" required> 
<!--Script to check password -->
				<script type="text/javascript">
	var password = document.getElementById("newpassword")
  , retypepassword = document.getElementById("retypepassword");

function validatePassword(){
  if(password.value != retypepassword.value) {
    retypepassword.setCustomValidity("Passwords Don't Match");
  } else {
    retypepassword.setCustomValidity('');
  }
}

password.onchange = validatePassword;
retypepassword.onkeyup = validatePassword;
</script>
				<br>
				<br>
				<div class="g-recaptcha" data-sitekey="6Le6ukAUAAAAAAeE9qQcAmLoM3Cw5r-1fMCPzkcr" required></div>
				<br>
				<button type="submit" name="submit">Sign Up</button>
			</form>
		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>