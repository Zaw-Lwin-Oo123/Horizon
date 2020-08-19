<?php  
 include('conf.php');
 $query = "SELECT * FROM deleteexpense";  
 $result = mysqli_query($conn, $query);

 $sql="SELECT * FROM deleteincome";
 $inresult=mysqli_query($conn,$sql);

 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Cash Flow System</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body style="background-image: url('https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;font-family: 'Poppins', sans-serif;background-attachment:fixed; " >
           <br /><br />  
           <div class="container" style="width:800px;background-color: white;">  
                <h3 align="center">Trash</h3>
                <hr>
			<div class="table-responsive">  
                     <br />
                     	  <!-- income table-->
                     	  <p>Deleted Income History</p>
                     	  <table class="table table-bordered" id="datatable">  
                               <tr>  
                                    <th width="10%">Category_id</th>  
                                    <th width="15%">Amount</th>  
                                    <th width="10%">Users_Id</th>  
                                    <th width="15%">Date</th>     
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($inresult))  
                               {  
                               ?>  
                               <tr>
                                    <td><?php echo $incat=$row["category_id"]; ?></td>   
                                    <td><?php echo $inamount=$row["amount"]; ?></td>  
                                    <td><?php echo $inusers=$row["users_id"]; ?></td>  
                                    <td><?php echo $indate=$row["date"]; ?></td>    
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table> 
                          <br>
                          <!-- Expense table -->
                          <p>Deleted Expense History</p>       
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="10%">Category_id</th>  
                                    <th width="15%">Price</th>  
                                    <th width="10%">Qty</th>  
                                    <th width="15%">Amount</th>  
                                    <th width="10%">Users_Id</th>  
                                    <th width="15%">Date</th>      
                               </tr>  
                               <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                               <tr>
                                    <td><?php echo $expcat=$row["category_id"]; ?></td>  
                                    <td><?php echo $expprice=$row["price"]; ?></td>  
                                    <td><?php echo $expqty=$row["qty"]; ?></td>  
                                    <td><?php echo $expamount=$row["amount"]; ?></td>  
                                    <td><?php echo $expusers=$row["users_id"]; ?></td>  
                                    <td><?php echo $expdate=$row["date"]; ?></td>    
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>    
                </div>  
           </div>  
      </body>  
 </html>