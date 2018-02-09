<?php

$conn=mysqli_connect("localhost","root","","havana");

function strip_tag($string) { 

	// strip html & php tags
	$string = strip_tags($string);
	//replacing all punctionation with spaces here  in $string.
	return preg_replace('/[[:punct:]]/', ' ', $string);

} 

//insert
if(isset($_POST["insert"]))
{
	if($_POST["insert"]=="yes")
	{
		/*$name=$_POST["name"];
		$image=$_POST["image"];
		$price=$_POST["price"];

		$query=$conn->prepare("insert into tbl_product(name, image, price) values('$name','$image', '$price');");
		if($query->execute())
		{
			echo "<center>Record Inserted!</center><br>";
		} */
		$name=strip_tag($_POST["name"]);
		$image=strip_tag($_POST["image"]);
		$price=strip_tag($_POST["price"]);
		$size=strip_tag($_POST["size"]);


	if (empty($name) || empty($image) || empty($price) || empty($size)) 
	{
		header("Location: ../crudindex.php?input=empty");
		exit();
	} else

	{
		//Check if input characters are valid
		if (!preg_match("/^[A-Z\'.-]{2,50}$/i", $name)) 
		{
			header("Location: ../crudindex.php?insert=invalid");
			exit();
		} else
		{

			$sql = "SELECT * FROM tbl_product WHERE name='$name'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 0) 
			{
					header("Location: ../crudindex.php?insert=nametaken");
					exit();
			} else 

				{
					$sql = "SELECT * FROM tbl_product WHERE image='$image'";
					$result = mysqli_query($conn, $sql);
					$resultCheck = mysqli_num_rows($result);

					if ($resultCheck > 0) 
					{
						header("Location: ../crudindex.php?insert=repeatedimage");
						exit();

					} else 

						{
							//Insert the item into the database
							$query = $conn-> prepare("insert into tbl_product (name, image, price, size) values ('$name', '$image', '$price', '$size');");

								if($query->execute())
								{
									echo "<center>Successful!</center><br>";
								}

						}
					
				}

	}

	}
} else {
	header("Location: ../crudindex.php");
	exit();
}
}


?>
<html>
<title>HAVANA ADMIN</title>
<body>

<!--<body style="background-image:url(https://1.bp.blogspot.com/-6O5imzhlGO4/WnRN-L93POI/AAAAAAAADVw/YHZMSO2j00cv2I5pPDxQqN6Ez2nny3u7gCLcBGAs/s1600/original%2B%25282%2529-horz-vert.jpg)"> -->	
<br>
<br>
<br>
<section class="container" style="background-color: white;">

	<br>
<h1><center><a href="crudindex.php">ADMIN</a></center></h1>
<br>
<form method="post" action="crudindex.php">
<table align="center" border="0">
<tr>
<td>Name:</td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Image URL:</td>
<td><input type="text" name="image" /></td>
</tr>
<tr>
<td>Price:</td>
<td><input type="text" name="price" /></td>
</tr>
<tr>
<td>Size:</td>
<td><input type="text" name="size" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="right">
<input type="hidden" name="insert" value="yes" />
<input type="submit" value="Insert Into Database"/>
</td>
</tr>
</table>
</form>
<br>
</section>
<br>
<br>
<section class="container" style="background-color: white;">
	<br>
	<br>
<?php
$query=$conn->prepare("select * from tbl_product");
$query->execute();
$query->bind_result($id, $name,$image, $price, $size);
echo "<table align='center' border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>PHOTO URL</th>";
echo "<th>SIZE</th>";
echo "<th>PRICE</th>";
echo "<th colspan='2'>ACTION</th>";
echo "</tr>";
while($query->fetch())
{
	echo "<tr>";
	echo "<td>".$id."</td>";
	echo "<td>".$name."</td>";
	echo "<td align='center'>"."<img src=$image style='width:10%'>"."</td>"; 
	//echo "<td>".$image."</td>";
	echo "<td>$".$price."</td>";
	echo "<td>".$size."</td>";
	echo "<td><a href='crudUPDATE.php?operation=edit&id=".$id."&name=".$name."&image=".$image."&price=".$price."&size=".$size."'>Edit</a></td>";
	echo "<td><a href='deleteadmin.php?operation=delete&id=".$id."'>Delete</a></td>";
	echo "</tr>";	
	
}
echo "</table>";
?>

<br>
<br>
<div align="center">
		
	<a href="index.php"><big>Go to HAVANA Oo NANA</big></a>
	<br>
	<br>.

</div>
</section>
</body>
</html>
