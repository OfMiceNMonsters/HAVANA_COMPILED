<style>

.body {
  width: 100%;
  margin: auto;
  background:#FAFAFA;
  background: url(https://i.pinimg.com/originals/46/bb/2a/46bb2a02d21ea8ef34d81ec03c344e5d.jpg) fixed;font-family: "Lato", sans-serif;
}


.container {
  width: 960px;
  margin: 0 auto;
}

.content {

  width:1000px;
  height:1300px;

}

/*white background*/
#example1 {
    position: relative;
    display:block;
    width: 1000px;
    height: 1000px;
    overflow: auto;
    background: #FFFFFF;
    float:left;

}


/*table config*/
#table {
    font-family: arial, sans-serif;
    width: 100%; 
    border-collapse: separate;
    margin-top: 1px;
    padding: 20px;
    border: 1px solid ;
    text-align: center;
}

.td {
    border: 1px solid #dddddd;
    padding: 50px;
    text-align: center;
}

.th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 50px;
}

}
/*contact or references grey area at bottom of page*/
.footer {
  position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: grey;
    color: white;
    font-size:15px;
    text-align: center;
}

</style>

<?php
  include_once 'header.php';
  $conn = mysqli_connect("localhost", "root", "", "havana");
?>

<?php
  if(isset($_GET['operation'])){
    if($_GET['operation']=="delete")
    {
      $query=$conn->prepare("delete from cart where prod_id=".$_GET['prod_id']);
      if($query->execute())
      {
        echo '<script>alert("Item deleted from cart")</script>';  
        $sql = "select * FROM cart;";
        $result = mysqli_query($conn, $sql);
        //check that they ARE results in the rows before spitting
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
          echo '<script>window.location="cart.php"</script>';

        }
        else{
          echo '<script>window.location="cartempty.php"</script>';                
        }

      }
    }
  }


/*if(!isset($_SESSION["userid"]))
{
  header("Location:../index.php");
}
else
{
  if(!isset($_SESSION["cart"]))
  {
    header("Location:../cart.php?session=invalid");
  }
  else
  {
    header("Location:../cart.php");
    exit();
  }
}*/

?>


<!DOCTYPE html>
<html>
<title>Havana </title>
<head>
		<link rel="stylesheet" type="text/css" href="cart.css">
</head>
<body>

		<!--white background-->
		<div class="container">
		<div class="content">
      <br>
		<div id="example1">
    <!--if cart is not empty then spit it out, else, redirect to cart is empty page-->
   
    <br>
    <br>
    <br>
        <a href="index.php">Back to catalogue</a>
    <p align="center"> <strong> <big>  SHOPPING CART </big> </strong> </p>

    <br>
    <div align="center">
    <img src ="http://images.all-free-download.com/images/graphicthumb/cute_hand_drawn_hang_the_clothes_vector_background_544465.jpg">
    <img src ="http://images.all-free-download.com/images/graphicthumb/cute_hand_drawn_hang_the_clothes_vector_background_544465.jpg">
    </div>
      <div align="center">
      <!-- the table configurations-->
  <section class="container" style="background-color: white; ">
    <div style="clear:both"></div>
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
        <td>      
          <form action="./shipping.php">

      <input type="submit" value="Checkout">

      </form></td>
        </tr>
        <?php
    }else{
      echo '<script>window.location="cartempty.php"</script>';
    }

    ?>
    </table>
    </div>
    </div>
</div>
</section>
      <!-- need to post the results to the checkout yo, talk to syar-->           
      <br>

      </div>
    <?php
        
        /*else{
          echo '<script>window.location="cartempty.php"</script>';                
        }*/

     ?>

		</div>
		</div>
		</div>

    <?php
      include_once 'footer.php';
    ?>
</body>

</html>
