// check eamil
<?php
include('conf.php');
 $email=$_POST['email'];

 $sql="SELECT * FROM users WHERE `email`='$email'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
 	    
 	    while($row = $result->fetch_assoc()) {
	      
         header('location:verify_code.php');
	       
 	   }
 	   } else {
	  	header('location:forgot_password.php');
	    session_start();

 	    $_SESSION['msg']="Not found your email account!";

	  }
?>
// check email