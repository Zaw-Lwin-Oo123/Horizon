<?php
include('conf.php');
$result = $conn->query("SELECT image FROM users"); 


 if($result->num_rows > 0){  
     
        while($row = $result->fetch_assoc()){ 
            $image=$row['image'];
         } 
 
 }?>

<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Home page</title>
<!--

Template 2102 Constructive

http://www.tooplate.com/view/2102-constructive

-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" href="css/tooplate-style.css">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script>
		var renderPage = true;

	if(navigator.userAgent.indexOf('MSIE')!==-1
		|| navigator.appVersion.indexOf('Trident/') > 0){
   		/* Microsoft Internet Explorer detected in. */
   		alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
   		renderPage = false;
	}
	</script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body style="background-image: url('https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;font-family: 'Poppins', sans-serif;background-attachment:fixed; " >

	<!-- Page Content -->
	<div class="container-fluid tm-main">
		<div class="row tm-main-row">

			<!-- Sidebar -->
			<div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">
				<button id="tmMainNavToggle" class="menu-icon"> &#9776;</button>
				<!-- <div class="inner"> -->
					<nav id="tmMainNav" class="tm-main-nav ">
						<ul>
							<!-- profile image uploade -->
							<li>
								<div class="con">								
								<img onClick="triggerClick()" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($image); ?>" id="profileDisplay" alt="">
								<div class="overlay">
						  			<form action="upload.php" method="post" enctype="multipart/form-data">
							  			<label for="save">
							    			<i class="fa fa-briefcase"></i>
							    			<input type="file" name="image" id="save" onChange="displayImage(this)"style="display: none;">
							    		</label>
							    		<label class="save ml-3">
							    			<i class="fa fa-floppy-o" aria-hidden="true"></i>
							    			<input type="submit" name="submit" style="display: none;">
							    		</label>
							    	</form>
						  		</div>
						  		</div>
						  		<script>
						  			function triggerClick(e) {
									  document.querySelector('#save').click();
									}
									function displayImage(e) {
									  if (e.files[0]) {
									    var reader = new FileReader();
									    reader.onload = function(e){
									      document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
									    }
									    reader.readAsDataURL(e.files[0]);
									  }
									}
						  		</script>
								<?php
							      include('conf.php');
							      $sql="SELECT name FROM users";
							      $get =$conn->query($sql);

							      while($row = mysqli_fetch_assoc($get))
							        {
							            ?>
							            <h4 class="text-center mt-2">
							            <?php 
							            $name = $row['name'];
							            echo($name);
							            ?>
							             
							            </h4> <!-- Name -->
							             
							      <?php
							        }
							      ?>
							</li>
							<hr>
							<li>
						    <?php
						    	$sql1="SELECT email FROM users";
						    	$get1 =$conn->query($sql1);

						    	while($row1 = mysqli_fetch_assoc($get1))

						        {
						     ?>
						            <p class="text-center mt-2">
						            <i class="fa fa-envelope"></i>
						            <?php 
						            $email = $row1['email'];
						            echo($email);
						            ?>
						             
						            </p> <!-- Email -->
						    <?php
						        }
						     ?>
							</li>
							<hr>
							<li class="parent">
    							<p class="mt-2">
    								<a href="" data-toggle="modal" data-target="#categoryList"><i class="fa fa-list"></i>&nbsp;Categories
                					</a>
                				</p>
            				</li>
							<hr>
							<li>
								<p class="mt-2"><a href="home.php" ><i class="fa fa-home"></i>&nbsp;&nbsp;Home</a></p>
							</li>
							<hr>
							<li>
								<p class="mt-2"><a href="trash.php" ><i class="fa fa-trash-o"></i>&nbsp;&nbsp;Trash</a></p>
							</li>
							<hr>
							<li>
								<p class="mt-2"><a href=" " data-toggle="modal" data-target="#about"><i class="fa fa-info-circle"></i>&nbsp;&nbsp;About</a></p>
							</li>
							<hr>							
							<li class="parent">
    							<p class="mt-2">
    								<a data-toggle="collapse" href="#sub-item-2" ><i class="fa fa-cog"></i>&nbsp;
                   					Setting
                					</a>
                				</p>
                				<ul class="children collapse" id="sub-item-2">
	                    			<li>
	                    				<p><a class="" href="changeNamehtml.php">
	                        			Change Name
	                    				</a></p>
	                    			</li>
	                    			<li>
	                    				<p><a class="" href="changePasswordhtml.php">
	                       				Change Password
	                    				</a></p>
	                    			</li>
                				</ul>
            				</li>
							<hr>
							<li>
								<p class="mt-2"><a href="login.php" ><i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout</a></p>
							</li>
							<hr>
						</ul>
					</nav>
				<!-- </ineer> -->
			</div>
			<!-- /sidebar -->
			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">
				<div class="container-fluid">
					
        			<h1 class="display-3 text-center text-warning">Welcome!!</h1>
        			<div class="px-2 mt-3 bg-light">
    					<div class="row">
		        			<?php
		        				include('conf.php');
		       
		        				$totalincomeAmount="SELECT SUM(amount) FROM income";
		        				$getin =$conn->query($totalincomeAmount);
		        				while ($row = mysqli_fetch_assoc($getin)) {
		        						$resultin=$row['SUM(amount)'];
		        					?>
			        				<div class="col-4 text-success">
				        				<p> Income</p>
				        				<p><?php echo number_format($resultin);?> mmk</p>
				        			</div>
							<?php 
							}
		        				$totalexpenseAmount="SELECT SUM(amount) FROM expense";
		        				$getexp=$conn->query($totalexpenseAmount);
		        				while ($row = mysqli_fetch_assoc($getexp)) {
		        						$resultexp=$row['SUM(amount)'];
		        					?>
		        				<div class="col-4 text-danger text-center">
			        				<p> Expense</p>
			        				<p><?php echo number_format($resultexp);?> mmk</p>
			        			</div>
							<?php 
							}
							$result=$resultin-$resultexp;
							?>
	        				<div class="col-4 text-primary text-right">
		        				<p> Balance</p>
		        				<p><?php echo number_format($result); ?> mmk</p>
		        			</div>
						</div>
					</div>
						<div class="row mt-3">
            				<div class="col-md-4 col-sm-6">
              					<div class="box">
                					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSz4S1Aiv2nvTJkNfzWkavEuq3oBKeX3xY5wA&usqp=CAU">
                  						<div class="box-content">
                    						<i class="fa fa-plus-circle fa-5x"></i>
                    						<a href="income.php">
                      						<h3 class="title">Add income</h3></a>
                  						</div>
              					</div>
            				</div>
            				<div class="col-md-4 col-sm-6">
              					<div class="box">
                					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSNd2-2GBDczGjW1g9bHXfBN3F9A2WeCpZ2BA&usqp=CAU">
                  						<div class="box-content">
                    						<i class="fa fa-minus-circle fa-5x"></i>
                    						<a href="expense.php"><h3 class="title">Add expense</h3></a>
                  						</div>
              					</div>
            				</div>
            				<div class="col-md-4 col-sm-6">
              					<div class="box">
                					<img src="https://assets.entrepreneur.com/content/3x2/2000/20160126195025-bundle-money-bills-currency-excess-paper-rolled-wealth-buy.jpeg?width=1000">
                  						<div class="box-content">
                     						<i class="fa fa-recycle fa-5x"></i>
                    						<a href="transaction.php"><h3 class="title">Transaction</h3></a>
                  						</div>
              					</div>
            				</div>
          				</div>
				</div>
			</div>
			<!-- footer -->
			<footer class="footer-link">
				<p class="tm-copyright-text">&copy;2020 made by-Horizon</p>
			</footer>
		</div> <!-- row!! -->
	</div>
	    <div id="preload-01"></div>
		<div id="preload-02"></div>
		<div id="preload-03"></div>
		<div id="preload-04"></div>

		<script  src="js/jquery-3.2.1.min.js"></script>
		<script  src="js/jquery.magnific-popup.min.js"></script>
		<script  src="js/jquery.backstretch.min.js"></script>
		<script  src="slick/slick.min.js"></script>

		<script>

		var sidebarVisible = false;
		var currentPageID = "#tm-section-1";

		// Setup Carousel
		function setupCarousel() {

			// If current page isn't Carousel page, don't do anything.
			if($('#tm-section-2').css('display') == "none") {
			}
			else {	// If current page is Carousel page, set up the Carousel.

				var slider = $('.tm-img-slider');
				var windowWidth = $(window).width();

				if (slider.hasClass('slick-initialized')) {
					slider.slick('destroy');
				}

				if(windowWidth < 640) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 1,
	              		slidesToScroll: 1
	              	});
				}
				else if(windowWidth < 992) {
					slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 2,
	              		slidesToScroll: 1
	              	});
				}
				else {
					// Slick carousel
	              	slider.slick({
	              		dots: true,
	              		infinite: false,
	              		slidesToShow: 3,
	              		slidesToScroll: 2
	              	});
				}
      		}
  		}

  		// Setup Nav
  		function setupNav() {
		    	// Hide the nav on mobile
		    	$("#tmSideBar").removeClass("show");	    
  		}

  		// Setup Nav Toggle Button
  		function setupNavToggle() {

			$("#tmMainNavToggle").on("click", function(){
				$(".sidebar").toggleClass("show");
			});
  		}

  		// If there is enough room, stick the footer at the bottom of page content.
  		// If not, place it after the page content
  		function setupFooter() {
  			
  			var padding = 100;
  			var footerPadding = 40;
  			var mainContent = $("section"+currentPageID);
  			var mainContentHeight = mainContent.outerHeight(true);
  			var footer = $(".footer-link");
  			var footerHeight = footer.outerHeight(true);
  			var totalPageHeight = mainContentHeight + footerHeight + footerPadding + padding;
  			var windowHeight = $(window).height();		

  			if(totalPageHeight > windowHeight){
  				$(".tm-content").css("margin-bottom", footerHeight + footerPadding + "px");
  				footer.css("bottom", footerHeight + "px");  			
  			}
  			else {
  				$(".tm-content").css("margin-bottom", "0");
  				footer.css("bottom", "20px");  				
  			}  			
  		}

  		// Everything is loaded including images.
      	$(window).on("load", function(){

      		// Render the page on modern browser only.
      		if(renderPage) {
				// Remove loader
		      	$('body').addClass('loaded');

		      	// Page transition
		      	var allPages = $(".tm-section");

		      	// Handle click of "Continue", which changes to next page
		      	// The link contains data-nav-link attribute, which holds the nav item ID
		      	// Nav item ID is then used to access and trigger click on the corresponding nav item
		      	var linkToAnotherPage = $("a.tm-btn[data-nav-link]");
			    
			    if(linkToAnotherPage != null) {
			    	
			    	linkToAnotherPage.on("click", function(){
			    		var navItemToHighlight = linkToAnotherPage.data("navLink");
			    		$("a" + navItemToHighlight).click();
			    	});
			    }
		      	
		      	// Hide all pages
		      	allPages.hide();

		      	$("#tm-section-1").fadeIn();
		     	// Setup Carousel, Nav, and Nav Toggle
			    setupCarousel();
			    setupNav();
			    setupNavToggle();
			    setupFooter();

			    // Resize Carousel upon window resize
			    $(window).resize(function() {
			    	setupCarousel();
			    	setupFooter();
			    });
      		}	      	
		});

		</script>
<!-- delete category modal -->
<div class="modal" tabindex="1" role="dialog" id="categoryList">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Category List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          	<a class="btn btn-primary" href="" data-toggle="modal" data-target="#addCategoryName">
			Add New Category
			</a>
	        <br>
	        <br>
            <table class="table table-bordered "> 
            	<thead>
            		<tr>
            			<!-- <th>ID</th> -->
            			<th>Category Name</th>
            			<th>Type</th>
            			<th>Action</th>
            		</tr>
            	</thead>
            <?php
            	include('conf.php');
            	$sql="SELECT category.id, category.catname, type.name FROM category JOIN type ON category.type_id=type.id ";
            	$get =$conn->query($sql);
				 while ($row = mysqli_fetch_assoc($get)) {?>
				   
				   <tr>
				   	<td><?php echo $row['catname'];?></td>
				   	<td><?php echo $row['name'];?></td>
				   	<td>
				   		<a class="btn btn-danger delete" href="home.php?delid=<?php echo $row['id'];?>" onclick="return confirm('Delete this record?')">Delete</a>
				   	</td>
				   </tr>
				   <script>
				   		$('a.delete').on('click', function() {
					    if(choice === true) {
					        return true;
					    }
					    return false;
						});
				   </script>
			<?php 
				}
			?>
			</table>
          </div>
        </div>
      </div>
  </div>
  <!-- delete category -->
  <!-- add category modal-->
<form action="addCategory.php" method="POST">
  <div class="modal" tabindex="1" role="dialog" id="addCategoryName">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Add Category List</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label>Category</label>
            <br>
            <select name="type" class="form-control" id="category">
            	<option selected hidden disabled>Choose Category Type</option>
            	<?php
	            include('conf.php');
	      
	            $sql = "SELECT * FROM type";
	            $get =$conn->query($sql);

	            while($row = mysqli_fetch_assoc($get))
	              {
	            ?>
	                <option value = "<?php
	                $name = $row['name'];
	                echo($name)?>" >
	                <?php echo( $name) ?>
	                </option>
	                <?php
	              }
	            ?>
            </select> 
            <br>
            <input type="text" class="form-control" name="name" placeholder="Enter your category name" maxlength="20" required>
            <br>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
  </div>
</form>
<!-- /add category -->
  <?php 
  	if(isset($_GET['delid'])){
  		$rowid=$_GET['delid'];
  		$sqlid="DELETE FROM category WHERE id=$rowid";
  		$getid =$conn->query($sqlid);
  		if($getid){
  			echo "<script> window.location='home.php'</script>";
  		}
  	}
  ?>
 <!-- about modal -->
 <div class="modal" tabindex="1" role="dialog" id="about">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title">About</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
		   <h6>Introduction</h6>
		   <p>This project system attempts to manage our income and daily expenses in a more efficient and manageable way. Sometimes we can’t remember where our money goes. And we can’t handle our cash flow.</p>
		   <p>For this problem, we need a solution that users can manage their incomes and expenses.And we decided to find an easier way to get rid of this problem. So, our project is free for the user with as much as possible the burden of manual calculation and to keep the track of the expenditure. Instead of keeping a diary or a log of income and expense, this project enables the user to not just keep the control on the expenses but also to generate and save reports.</p>
		   <p>With the help of this project, the user can manage their expenses. Users can insert transactions as well as can generate and save their reports.
		   The representation of the project is the main part of the system as it appeals to the user more and easy to understand.</p>
		   <p>In this project system, we use Bootstrap CDN links, PHP, HTML, CSS, MySQL and Database. This system will show our user's Daily and Monthly expense. In Database, we had created six Database tables which are 'register','add-income', 'income category','transaction', 'add-expense' and 'expense category' tables. We use 'Poppins' for font-family and letter-spacing.</p>
		   <h6>Register Page</h6>
		   <p>Users have to input their name, email and password.</p>
		   <h6>Login Page</h6>
		   <p>This page has Login Form for users. If user doesn't have account, user need to register first in order to login. So users can input data to their database. If users forgot their password, users can click 'Forgot Password?' link to create new password.</p>
		   <h6>User Home Page</h6>
		   <p>The home page will show image links</p>
		   <ol>
		   	<li>Add-income</li>
		   	<li>Add-Expense</li>
		   	<li>Transaction</li>
		   	<li>Profile</li>
		    </ol>
		    <p>In Add-Income,users can set the amount on this page.</p>
		    <p>In Add-Expense, users can input their daily expense.</p>
		    <p>As transaction, this page </p>
		    <p>If users want to see their expense results, users can click on transaction link.</p>
		    <h6>Profile</h6>
		    <p>In profile, it has profile image, user name, user email, account setting and log out.If users want to change account name or change password, the user must click on account setting.</p>
		    <h6>Database 'user' Table</h6>
		    <p>This table includes id,profile image, name, email and password.</p>
		    <h6>Database 'add_income' Table</h6>
		    <p>This table includes id, date, category amount and price.</p>
		    <h6>Database 'income-category' Table</h6>
		    <p>This table includes category_id and name.</p>
		    <h6>Database 'add_expense' Table</h6>
		    <p>This table includes id, date, category, qty and price.</p>
		    <h6>Database 'expense-category' Table</h6>
		    <p>This table includes category_id and name.</p>
		 </div>
		</div>
	</div>
</div>
</body>
</html>
