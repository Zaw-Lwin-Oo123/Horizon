<?php 
include('conf.php');

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$hex_str=bin2hex($password);

$sql="INSERT INTO users (`name`,`email`,`password`,`image`) VALUES ('$name','$email','$hex_str','')";
mysqli_query($conn,$sql);
header('location:login.php');
?>