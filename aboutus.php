<?php
	include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<title>HAVANA</title>
<section class="main-container">
	<div class="main-wrapper">
		<div class="content">
			<br>
			<br>
			<br>
					<div id="example1">
						<h2> About Us </h2>
						<br>
						<center><p> We are an organization that aims to use the funds collected from selling donated/second-hand clothes to donate to different charity organizations locally. </p></center>
						<br>
						<br>
						<h2>Partnerships</h2>
						<div class="row">
				<div class="column" style="background-color: white;">
					<div class="container2">
  					<p><a href="https://www.redcross.sg/get-involved/red-cross-youth.html"><img src="http://file2.answcdn.com/answ-cld/image/upload/w_760,c_fill,g_faces:center,fl_lossy,q_60/v1401306932/zlul9ver7o2m3flevcgg.jpg" alt="Avatar" class="image" style="width:100%"></a></p>
  					<div class="middle">
    			<div class="text">Red Cross Youth</a></div>
  				</div>
				</div>
				<br>

				</div>
				<div class="column" style="background-color: white;">
					<div class="container2">
  					<p><a href="https://www.childrensociety.org.sg/"><img src="http://www.screed.com.sg/wp-content/uploads/2016/12/Childrens-Society.jpg" alt="Avatar" class="image" style="width:100%"></a></p>
  					<div class="middle">
    			<div class="text">Children's Society</a></div>
  				</div>
				</div>
				<br>
			</div>
</div>
			</div>
		<?php
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>
</div>
</section>

<?php
	include_once 'footer.php';
?>