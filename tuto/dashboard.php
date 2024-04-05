<?php
session_start();

if (isset($_SESSION['user'])) {
 $email = $_SESSION['email'];
 echo $email;
} else {
 header('location:loginform.php');
}


?>