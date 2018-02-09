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
<!--            </section>
    <section class="container" style="background-color: white; ">
    <div style="clear:both"></div>
    <h2>My Shopping Bag</h2>
    <div class="table-responsive">
    <table align="relative" border="0">
    <tr>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price Details</th>
    <th>Order Total</th>
    <th>Action</th>
    </tr>
    <?php
    /*
    if(!empty($_SESSION["cart"]))
    {
        $total = 0;
        foreach($_SESSION["cart"] as $keys => $values)
        {
            ?>
            <tr>
            <td><?php echo $values["name"]; ?></td>
            <td><?php echo $values["item_quantity"] ?></td>
            <td>$ <?php echo $values["product_price"]; ?></td>
            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">Delete</span></a></td>
            </tr>
            <?php 
            $total = $total + ($values["item_quantity"] * $values["product_price"]);
        }
        ?>
        <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td><a href="shipping.php"><b>CHECKOUT</b></td>
        </tr>
        <?php
    }
*/
    ?>
    </table>
    </div>
    </div>
</div>
</section>-->
 </body>

<?php
  include_once 'footer.php';
?>

</html>
