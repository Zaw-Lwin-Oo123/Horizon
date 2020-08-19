<!DOCTYPE html>
<html>
<head>
	<title>Cash Flow System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/bggradient.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">


</head>
<body style="background-image: url('https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;font-family: 'Poppins', sans-serif; background-attachment: fixed;" >
<form action="changePassword.php" method="POST" class="mb-3">
	<div class="formb">
		<div class="container text-light rgba-gradient">
			<h2 class="display-5 text-center">Change Password</h2>
			<br>
			<?php 

			  session_start();

			  if (isset($_SESSION['error'])){

			 ?>
			 <div class="alert alert-danger" role="alert">
  
			  <?php echo $_SESSION['error']; ?>
			  
			</div>
			<?php
			 session_destroy();
			}

			?>

			<label>Current Password</label>
			<br>
			<input type="password" class="form-control" name="currentPassword" placeholder="Enter your current password" required>
			<br>
			<label>New Password</label>
			<br>
			<input type="password" class="form-control" name="newPassword"
			pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$" title="Strong  Password" 
			placeholder="Enter your new password" id="password" data-toggle="password" required>
			<br>
			<label>Confirm Password</label>
			<br>
			<input type="password" class="form-control" name="confPassword"
			pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$" title="Strong  Password" 
			placeholder="Enter your confirm password" id="password" data-toggle="password" required>
			<br>
			<button type="submit" class="btn btn-primary">Save Changes</button>
		</div>
	</div>
</form>
</body>
</html>