
<?php

$conn=mysqli_connect("localhost","root","","havana");

if(isset($_GET['operation'])){
	if($_GET['operation']=="delete")
	{
		$query=$conn->prepare("delete from tbl_product where id=".$_GET['id']);
		if($query->execute())
		{
			echo "<center>Database item Deleted!</center><br>";
			echo '<script>window.location="crudINDEX.php"</script>';
		}
	}
}
?>
