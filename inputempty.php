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
			<p style="font-size:20px;" align="center">Empty input present. Please try again.</p>
			<!-- <a class="error-button" href="index.php"></a>-->
			
				<form class="signup-form" action="includes/signupemail.inc.php" method="POST">
				<input type="text" name="firstname" placeholder="First Name" required pattern="^([a-zA-Z]+$)" title="Please input only characters from A-Z.">
				<input type="text" name="lastname" placeholder="Last Name" required pattern="^([a-zA-Z]+$)" title="Please input only characters from A-Z.">
				<input type="email" name="email" placeholder="E-mail" required>
				<input type="text" name="username" placeholder="Username" required >
				<input type="password" name="pwd" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password must be at least 8 characters long with one uppercase character and one number. Please try again." required>
				<input type="password" name="repwd" id="retypepassword" placeholder="Retype Password" required> 
				
				<script type="text/javascript">
	var password = document.getElementById("password")
  , retypepassword = document.getElementById("retypepassword");

function validatePassword(){
  if(password.value != retypepassword.value) {
    retypepassword.setCustomValidity("Passwords Mismatch");
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
			</form>;
			<br>
			<form align="center" onreset="myFunction()">
		</div>
		</div>
	</div>
</section>



<?php
	include_once 'footer.php';
?>