<?php

include('conf.php');
$name=$_POST['newName'];

$sql="UPDATE users SET name='$name'";
mysqli_query($conn,$sql);
header('location:home.php');

?>