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
<body style="background-image: url('https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;font-family: 'Poppins', sans-serif;background-attachment:fixed; " >
	<h1 class="display-4 text-center text-light pt-3">Cash Flow System</h1>

<form action="check_password.php" method="POST" class="mt-3">
	<div class="formb">
		<div class="container text-light rgba-gradient">
			<h2 class="display-5 text-center">Login</h2>
			<br>
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
			<label>Email</label>
			<br>
			<input type="email" class="form-control" name="email" placeholder="Enter your email" required>
			<br>

			<label>Password</label>
			<br>
			<input type="password" class="form-control" name="password" placeholder="Enter your password" required>
			<br>
			<a href="forgot_password.php" class="text-light">Forgot password!</a>
			<br>
			<br>
			<button type="submit" class="btn btn-primary">Login</button>
			<div class="form-group text-center">
				<a href="register.php" class="text-light">Create Account</a>
			</div>
		</div>
	</div>
</form>
</body>
</html>