<?php

include('./db.config.php');

$pid = $_GET['pid'];

$sql = "DELETE FROM `product` WHERE `product`.`pid` = '$pid' ";
$query = mysqli_query($con,$sql);

if ($query) {
 header('location:product.php');
}

?>