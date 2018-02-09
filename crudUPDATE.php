<?php

$conn=mysqli_connect("localhost","root","","havana");

?>

<html>
<body>
<body style="background-image:url(https://1.bp.blogspot.com/-6O5imzhlGO4/WnRN-L93POI/AAAAAAAADVw/YHZMSO2j00cv2I5pPDxQqN6Ez2nny3u7gCLcBGAs/s1600/original%2B%25282%2529-horz-vert.jpg)">	
	<br>
	<br>
<section class="container" style="background-color: white;">
<br>
<br>
<h1><center>EDIT ADMIN PAGE</center></h1>
<br>
<form method="post" action="editadmin.php">
<table align="center" border="0">
<tr>
<td>Name:</td>
<td><input type="text" name="name" value="<?php echo $_GET['name']; ?>" /></td>
</tr>
<tr>
<td>Image URL:</td>
<td><input type="text" name="image" value="<?php echo $_GET['image']; ?>"/></td>
</tr>
<tr>
<td>Price:</td>
<td><input type="text" name="price" value="<?php echo $_GET['price']; ?>"/></td>
</tr>
<tr>
<td>Size:</td>
<td><input type="text" name="size" value="<?php echo $_GET['size']; ?>"/></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="right">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" />
<input type="hidden" name="update" value="yes" />
<input type="submit" value="update Record"/>
<br>
<br>
<br>
</td>
</tr>
</table>
</form>
</section>
</body>
<html>
