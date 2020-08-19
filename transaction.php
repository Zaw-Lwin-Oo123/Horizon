<?php  
 include('conf.php');
 $query = "SELECT * FROM expense";  
 $result = mysqli_query($conn, $query);

 $sql="SELECT * FROM income";
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
                <h3 align="center">Transaction</h3>
                <hr>
                <!-- alert   -->
                <?php 

				          session_start();

				          if (isset($_SESSION['msg'])){

				          ?>
				          <div class="alert alert-danger" role="alert">

				          <?php echo $_SESSION['msg']; ?>
				  
				          </div>
				        <?php
				          session_destroy();
				        }

				        ?>
                
                <div class="table-responsive">  
                     <br />
                     	  <!-- income table-->
                     	  <p>Income</p>
                     	  <table class="table table-bordered" id="datatable">  
                               <tr>  
                                    <th width="10%">Category_id</th>  
                                    <th width="15%">Amount</th>  
                                    <th width="10%">Users_Id</th>  
                                    <th width="15%">Date</th>  
                                    <th width="20%">Action</th>    
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
                                    <td><input type="button" name="edit" value="Edit" inId="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_indata" />
                                    <a class="btn btn-danger btn-xs delete" href="transaction.php?delid=<?php echo $row['id'];?>" onclick="return confirm('Delete this record?')">Delete</a>   
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table> 
                          <br>
                          <!-- Expense table -->
                          <p>Expense</p>       
                          <table class="table table-bordered">  
                               <tr>  
                                    <th width="10%">Category_id</th>  
                                    <th width="15%">Price</th>  
                                    <th width="10%">Qty</th>  
                                    <th width="15%">Amount</th>  
                                    <th width="10%">Users_Id</th>  
                                    <th width="15%">Date</th>  
                                    <th width="20%">Action</th>    
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
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" />
                                    <a class="btn btn-danger btn-xs delete" href="transaction.php?delid=<?php echo $row['id'];?>" onclick="return confirm('Delete this record?')">Delete</a>
                               </tr>  
                               <?php  
                               }  
                               ?>  
                          </table>    
                </div>  
           </div>  
      </body>  
 </html>
 <!-- Expense info   -->
 <div id="editInfo" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Edit Expense</h4>  
                </div>  
                <div class="modal-body">  
                	 <!-- FORM -->
                     <form method="post" id="updateExpenseInfo">  
                          <label>Category_id</label>  
                          <input type="text" name="catId" id="catId" class="form-control" />  
                          <br />  
                          <label>Price</label>  
                          <input type="text" name="priceId" id="priceId" class="form-control" />  
                          <br />  
                          <label>Qty</label>  
                          <input type="text" name="qtyId" id="qtyId" class="form-control" />  
                          <br />  
                          <label>Amount</label>  
                          <input type="text" name="amountId" id="amountId" class="form-control" /><br />  
                          <label>Users_id</label>  
                          <input type="text" name="usersId" id="usersId" class="form-control" />  
                          <br />
                          <label>Date</label>  
                          <input type="text" name="dateId" id="dateId" class="form-control" />  
                          <br />    
                          <input type="hidden" name="expense_id" id="expense_id" />  
                          <input type="submit" name="expenseUpdate" id="expenseUpdate" value="Update" class="btn btn-success" /> 
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
 <!-- Income info -->
 <div id="editincomeInfo" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h4 class="modal-title">Edit Income</h4>  
                </div>  
                <div class="modal-body">  
                	 <!-- FORM -->
                     <form method="post" id="updateIncomeInfo">  
                          <label>Category_id</label>  
                          <input type="text" name="incatId" id="incatId" class="form-control" />  
                          <br />  
                          <label>Amount</label>  
                          <input type="text" name="inamountId" id="inamountId" class="form-control" /><br />  
                          <label>Users_id</label>  
                          <input type="text" name="inusersId" id="inusersId" class="form-control" />  
                          <br />
                          <label>Date</label>  
                          <input type="text" name="indateId" id="indateId" class="form-control" />  
                          <br />    
                          <input type="hidden" name="income_id" id="income_id" />  
                          <input type="submit" name="incomeUpdate" id="incomeUpdate" value="Update" class="btn btn-success" /> 
                     </form>  
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>    
 <script>  
 // Expense Edit
 $(document).ready(function(){  
      $(document).on('click', '.edit_data', function(){  
           var expense_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{expense_id:expense_id},  
                dataType:"json",  
                success:function(data){  
                     $('#catId').val(data.category_id);  
                     $('#priceId').val(data.price);  
                     $('#qtyId').val(data.qty);  
                     $('#amountId').val(data.amount);  
                     $('#usersId').val(data.users_id);  
                     $('#dateId').val(data.date);  
                     $('#expense_id').val(data.id);  
                     $('#expenseUpdate').val("Update");  
                     $('#editInfo').modal('show');  
                }  
           });  
      });
      $('#updateExpenseInfo').on("submit", function(event){
        event.preventDefault();  
          $.ajax({  
          url:"updateInfo.php",  
          method:"POST",  
          data:$('#updateExpenseInfo').serialize(),  
          // beforeSend:function(){  //call button id
          // $('#expenseUpdate').val("Updating");  
          // },  
          success:function(data){  
            window.location='transaction.php';  
        }  
        });    
      });  
 });
 // Income edit
 $(document).ready(function(){  
      $(document).on('click', '.edit_indata', function(){  
           var income_id = $(this).attr("inId");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{income_id:income_id},  
                dataType:"json",  
                success:function(data){  
                     $('#incatId').val(data.category_id);    
                     $('#inamountId').val(data.amount);  
                     $('#inusersId').val(data.users_id);  
                     $('#indateId').val(data.date);  
                     $('#income_id').val(data.id);  
                     // $('#update').val("Update");  
                     $('#editincomeInfo').modal('show');  
                }  
           });  
      });
      $('#updateIncomeInfo').on("submit", function(event){
        event.preventDefault();  
          $.ajax({  
          url:"updateInfo.php",  
          method:"POST",  
          data:$('#updateIncomeInfo').serialize(),
          success:function(data){  
            window.location='transaction.php';  
        }  
        });    
      });    
 });   
// Delete alert       
$('a.delete').on('click', function() {
if(choice === true) {
  return true;
}
return false;
});
                                        
</script>
 <!-- delete data  -->
 <?php 
  	if(isset($_GET['delid'])){
  		$rowid=$_GET['delid'];
  		$sqlid="DELETE FROM expense WHERE id=$rowid";
  		$getid =$conn->query($sqlid);

      $sqlid="DELETE FROM income WHERE id=$rowid";
      $getid =$conn->query($sqlid);

      $sqlExp="INSERT INTO deleteexpense (`category_id`,`price`,`qty`,`amount`,`users_id`,`date`) VALUES ('$expcat','$expprice','$expqty','$expamount','$expusers','$expdate')";
      $getExp =$conn->query($sqlExp);

      $sqlIn="INSERT INTO deleteincome (`category_id`,`amount`,`users_id`,`date`) VALUES ('$incat','$inamount','$inusers','$indate')";
      $getIn =$conn->query($sqlIn);

  		if($getid && $getExp && $getIn){
  			echo "<script> window.location='transaction.php'</script>";
  		}
  	}
  ?>
