<?php
session_start();
if(!isset($_SESSION['user'])){
  header('location:loginform.php');
 }
$uid = $_SESSION['user'];
$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
 <nav class="menu">
  <h4 class="logo">LOGO</h4>
  <div class="link">
   <a href="dashboard.php">Home</a>
   <a href="#">About</a>
   <a href="product.php">Product</a>
   <a href="logout.php">Logout</a>
  </div>
 </nav>
 <main class="container">