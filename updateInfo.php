<?php
//update.php  
include('conf.php');
 // expense data
 $catId =  $_POST["catId"];  
 $priceId = $_POST["priceId"];  
 $qtyId= $_POST["qtyId"];  
 $amountId=$_POST["amountId"];
 $usersId= $_POST["usersId"];
 $dateId= $_POST["dateId"];

 // income data
 $incatId=$_POST["incatId"];
 $inamountId=$_POST["inamountId"];
 $inusersId= $_POST["inusersId"];
 $indateId= $_POST["indateId"];

 // update expense table
 if($_POST["expense_id"] != ''){
 	$query="UPDATE expense SET category_id='$catId',price='$priceId',qty='$qtyId',amount='$amountId',users_id='$usersId',date='$dateId' WHERE id='".$_POST["expense_id"]."'";
 	mysqli_query($conn,$query);
 }

 // update income table
 if($_POST["income_id"] != ''){
 	$inquery="UPDATE income SET category_id='$incatId',amount='$inamountId',users_id='$inusersId',date='$indateId' WHERE id='".$_POST["income_id"]."'";
 	mysqli_query($conn,$inquery);
 }
?>