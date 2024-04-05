<?php
include('./authHeader.php');
include('./db.config.php');
$uid = $_SESSION['user'];
$pid = $_GET['pid'];

  $sql = "SELECT * FROM `product` WHERE pid = '$pid' ";
  $query = mysqli_query($con,$sql);
  $product = mysqli_fetch_array($query);
?>

<section class="form">
 <form method="post">
  <input type="text" value="<?=$product[1]?>" name="name">
  <input type="text" value="<?=$product[3]?>" name="detail">
  <input type="text"value="<?=$product[2]?>" name="price">
  <?php

if(isset($_POST['add'])){
 $name = $_POST['name'];
 $desc = $_POST['detail'];
 $price = $_POST['price'];

 $sql = "UPDATE `product` SET `name` = '$name', `price` = '$price', `details` = '$desc' WHERE `product`.`pid` = '$pid'";
 $query = mysqli_query($con,$sql);
 if($query){
  header('location:product.php');
 }
}

?>
  <button type="submit" name="add">UPDATE</button>
 </form>
</section>
