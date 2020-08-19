<?php
include('conf.php');

$currentPassword=$_POST['currentPassword'];

$newPassword=$_POST['newPassword'];
$confPassword=$_POST['confPassword'];

$hex_str=bin2hex($newPassword);
$hex_str1=bin2hex($confPassword);

$pass="SELECT * FROM users";
$result = $conn->query($pass);
while ($row = mysqli_fetch_assoc($result)) {
    $password= $row['password'];
}

$str=pack("H*",$password);
echo $str;

session_start();

if ($str!=$currentPassword){

	header('location:changePasswordhtml.php');
    $_SESSION['error']="Your current Password not found!!";

}else if($hex_str1==$hex_str){

	$updateQuery ="UPDATE users SET password='$hex_str'";
	mysqli_query($conn,$updateQuery);
	header('location:home.php');

}else{

	header('location:changePasswordhtml.php');
    $_SESSION['error']="Your new and confirm password not equal!!";
}


?>
