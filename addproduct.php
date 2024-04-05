<?php
include('./authHeader.php');
include('./db.config.php');
$uid = $_SESSION['user'];
?>

<section class="form">
 <form method="post">
  <input type="text" placeholder="Enter product name" name="name">
  <input type="text" placeholder="Enter product details" name="detail">
  <input type="text" placeholder="Enter product price" name="price">
  <?php

if(isset($_POST['add'])){
 $name = $_POST['name'];
 $desc = $_POST['detail'];
 $price = $_POST['price'];
 $sql = "INSERT INTO `product` ( `name`, `price`, `details`, `userId`) VALUES ('$name', '$price', '$desc', '$uid')";
 $query = mysqli_query($con,$sql);
 if($query){
  echo 'success';
 }
}

?>
  <button type="submit" name="add">ADD NEW</button>
 </form>
</section>

