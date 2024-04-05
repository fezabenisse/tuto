<?php


$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'tuto';

$con = mysqli_connect($hostname, $username, $password, $database);

if(!$con){
 echo 'fail to connect';
}


?>