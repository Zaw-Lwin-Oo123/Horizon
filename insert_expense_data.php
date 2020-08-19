<?php

 include('conf.php');
 session_start();

 $date=$_POST['date'];
 $category=$_POST['category'];
 $price=$_POST['price'];
 $qty=$_POST['qty'];
 $amount=$_POST['amount'];

$totalincomeAmount="SELECT SUM(amount) FROM income";
$getin =$conn->query($totalincomeAmount);
while ($row = mysqli_fetch_assoc($getin)) {
		$resultin=$row['SUM(amount)'];
}

if($amount>$resultin){
	header('location:expense.php');
	$_SESSION['error']="Your expense amount is too much income amount";
}else{

$result ="SELECT id FROM category WHERE `catname` = '$category'";
 $get =$conn->query($result);
 while ($row = mysqli_fetch_assoc($get)) {
    $catid= $row['id'];
}

$result ="SELECT id FROM users";
 $get =$conn->query($result);
 while ($row = mysqli_fetch_assoc($get)) {
    $userid= $row['id'];
}

$sql="INSERT INTO expense (`category_id`,`price`,`qty`,`amount`,`users_id`,`date`) VALUES ($catid,'$price','$qty','$amount',$userid,'$date')";
mysqli_query($conn,$sql);
header('location:home.php');
$_SESSION['message']="Add success!!";
}
?>