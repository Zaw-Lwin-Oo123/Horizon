<?php 
// Include the database configuration file  
require_once 'conf.php'; 
Include('conf.php');
$sql="SELECT id FROM users";
$result=$conn->query($sql);
while ($row = $result->fetch_assoc()) {
		$id=$row['id'];
}

 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $insert ="UPDATE users SET `image`='$imgContent' WHERE`id`='$id'";
            mysqli_query($conn,$insert); 
             
        }
    }
}
header('location:home.php'); 
?>