<?php
session_start();
include('db.config.php');

if (isset($_POST['register'])) {
 $email = $_POST['email'];
 $password = $_POST['pass'];
  $sql = "SELECT * FROM `user` where email = '$email' AND pass = '$password' ";
  $user = mysqli_query($con,$sql);

  if (mysqli_num_rows($user) === 1) {
   $row = mysqli_fetch_array($user);
   $_SESSION['user'] = $row[0];
   $_SESSION['email'] = $row[2];
   header('location:dashboard.php');
  } else {
   echo 'user does not exist';
  }
  
  
  echo 'success';
 
}




?>