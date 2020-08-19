<?php  
 //fetch.php  
 include('conf.php');
 if(isset($_POST["expense_id"]))  
 {  
      $query = "SELECT * FROM expense WHERE id = '".$_POST["expense_id"]."'";  
      $result = mysqli_query($conn, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }
 if(isset($_POST["income_id"]))  
 {  
      $query1 = "SELECT * FROM income WHERE id = '".$_POST["income_id"]."'";  
      $result1 = mysqli_query($conn, $query1);  
      $row1 = mysqli_fetch_array($result1);  
      echo json_encode($row1);  
 }  
 ?>