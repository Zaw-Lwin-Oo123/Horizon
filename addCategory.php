<?php
 
 include('conf.php');
 $typeName=$_POST['type'];
 $catName=$_POST['name'];

 // add category
 $result ="SELECT id FROM type WHERE `name` = '$typeName'";
 $gettype =$conn->query($result);
 while ($row = mysqli_fetch_assoc($gettype)) {
    $id= $row['id'];
}

$checkCat="SELECT catname,type_id FROM category";
$getCat=$conn->query($checkCat);
while($row=mysqli_fetch_assoc($getCat)){
	$name=$row['catname'];
	$typeId=$row['type_id'];
}

if($catName==$name && $id=$typeId){
	header('location:home.php');
}else{
$sql="INSERT INTO category (`catname`,`type_id`) VALUES ('$catName',$id)";
mysqli_query($conn,$sql);
header('location:home.php');
}
?>