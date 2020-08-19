<?php

include('conf.php');

// check password
$logemail=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users";
$result = $conn->query($sql);
while ($row = mysqli_fetch_assoc($result)) {
	$email=$row['email'];
    $pass= $row['password'];
}

$str=pack("H*",$pass);

 if ($str==$password && $logemail==$email) {
        header('location:home.php');
	  } else {
	  	header('location:login.php');
	    session_start();

	    $_SESSION['msg']="Incorrect password!";

	  }
// check password

?>