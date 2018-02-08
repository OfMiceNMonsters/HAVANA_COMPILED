<!DOCTYPE html>
<html>
<head>
	<title>HAVANA</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><b><a href="index.php">HAVANA</a></b></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					} else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail" required>
							<input type="password" name="pwd" placeholder="password" required>
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}
				?>

					<a href="aboutus.php">About Us</a>
					<a href="contactus.php">Contact Us</a>
					<a href="cart.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cart</a>
					<a href="faq.php">FAQ</a>
	

			</div>
		</div>
	</nav>
</header>