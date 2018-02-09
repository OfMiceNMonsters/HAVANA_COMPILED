<?php
	include_once 'headercontactus.php';
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
			<h2>Contact Us</h2>
			<form class="signup-form" action="includes/signup.inc.php" method="POST">
				<p>Contact us at our social media or you can drop us a message at <a href="https://www.gmail.com">HAVANA@gmail.com</a></p>
				<br>
			
					<p> <a href="https://twitter.com/havana_swap">
						<img src="https://upload.wikimedia.org/wikipedia/en/thumb/9/9f/Twitter_bird_logo_2012.svg/1259px-Twitter_bird_logo_2012.svg.png" style="float:left; width: 20%;margin-right: 13%"> </a> </p>
					<p> <a href="https://www.instagram.com/havanathrift/">
						<img src="https://upload.wikimedia.org/wikipedia/commons/3/30/The_Instagram_Logo.jpg" style="float:left;width: 20%; margin-right: 13%"> </a> </p>
					<p> <a href="https://www.facebook.com/havana.thrift.7">
						<img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Facebook_f_logo_2013.png" style="float:left;width: 20%; margin-right: 13%;"> </a> </p>
					
					<br>
					<br>
				<br>
				
		</div>
	</div>
</section>

<?php
	include_once 'footer.php';
?>

