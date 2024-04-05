<?php
include('db.config.php');

if (isset($_POST['register'])) {
 $name = $_POST['uname'];
 $email = $_POST['email'];
 $password = $_POST['pass'];
 $confirm = $_POST['conf'];

 if($password === $confirm){
  $sql = "INSERT INTO `user` ( `name`, `email`, `pass`) VALUES ('$name', '$email', '$password')";
  $user = mysqli_query($con,$sql);
  echo 'success';
 } else{
  echo 'match';
 }
}





?>