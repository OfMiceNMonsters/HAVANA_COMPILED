<?php
include "header.php";
$connect = mysqli_connect("localhost", "root", "", "havana");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>HAVANA</title>
</head>
<body>
<section class="container">

    <div class="content">

      <br>
      <br>
      <br> 

    <?php
	$query = "SELECT * FROM tbl_product ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
                <div class="column" style="background-color: white;">
                <div class ="row">
            <form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
            <img src="<?php echo $row["image"]; ?>" class="image" style="width:100%" class="img-responsive">
            <h5 class="text-info"><?php echo $row["name"]; ?></h5>
            <h5 class="text-danger">$ <?php echo $row["price"]; ?></h5>
            <input type="hidden" name="quantity" class="form-control" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Bag">
            </div>
            </form>
            </div>
            <?php
		}
	}
	?>
     <?php
      if (isset($_SESSION['user_id'])) {
        echo $token;
      }
    ?>
    </section>
    
 </body>

<?php
  include_once 'footer.php';
?>

</html>
