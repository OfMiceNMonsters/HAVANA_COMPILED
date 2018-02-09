
<?php

$conn=mysqli_connect("localhost","root","","havana");

function strip_tag($string) { 

	// strip html & php tags
	$string = strip_tags($string);
	//replacing all punctionation with spaces here  in $string.
	return preg_replace('/[[:punct:]]/', ' ', $string);

} 

if(isset($_POST["update"])){
	if($_POST["update"]=="yes") 
	{

	$name=strip_tag($_POST["name"]);
	$price=strip_tag($_POST["price"]);
	$image=strip_tag($_POST["image"]);
	$size=strip_tag($_POST["size"]);
	
	$query=$conn->prepare("update tbl_product set name='$name' , image='$image' , price='$price' , size='$size' where id=".$_POST['id']);
	if($query->execute())
	{
	
		echo "<center>Item Updated! Going back to main page</center><br>";
		echo '<script>window.location="crudINDEX.php"</script>';
	}
	}
}
?>