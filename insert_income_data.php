<?php

 include('conf.php');
 
 $category=$_POST['category'];

 $date=$_POST['date'];
 
 $amount=$_POST['amount'];

 $result ="SELECT id FROM users";
 $get =$conn->query($result);
 while ($row = mysqli_fetch_assoc($get)) {
    $userid= $row['id'];
}

$result ="SELECT id FROM category WHERE catname='$category'";
 $get =$conn->query($result);
 while ($row = mysqli_fetch_assoc($get)) {
    $catid= $row['id'];
}

$sql="INSERT INTO income (`category_id`,`amount`,`users_id`,`date`) VALUES ($catid,'$amount',$userid,'$date')";
mysqli_query($conn,$sql);
header('location:home.php');
session_start();
$_SESSION['message']="Add success!!"

?>