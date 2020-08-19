<!DOCTYPE html>
<!-- saved from url=(0050)http://team2.itvisionlab.com/cashflow1.5/index.php -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <!-- custom css -->
    <link rel="stylesheet" href="./cashHome_files/style.css">
    <link rel="stylesheet" href="./cashHome_files/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="./cashHome_files/all.css" rel="stylesheet">
    <link rel="stylesheet" href="./cashHome_files/homeCssFile.css">
    <script src="./cashHome_files/jquery.min.js.download"></script>
<link href="./cashHome_files/bootstrap.min(1).css" rel="stylesheet">
<script src="./cashHome_files/bootstrap.min.js.download"></script>
<link rel="stylesheet" href="./cashHome_files/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="./cashHome_files/app.js.download"></script>
<script type="text/javascript">
    function showServerErrorMessage() {
        $("#server-error").modal('show');
    }
</script>
<style>
  
.share{
    position: absolute;
    top:95%;
    left: 48%;
    transform: translate(-50%,-50%);
    margin: 0;
    padding: 0;
    display: flex;
    width: 200px;
    height: 40px;
}
.share::before{
    content:'\f1e0';
    font-family: fontAwesome;
    position: absolute;
    width: 100%;
    height: 100%;
    background: #31353D;
    border-radius: 30px;
    text-align: center;
    line-height: 50px;
    color: #fff;
    margin: 0 2px;
    font-size: 20px;
    transition: 0.5s;
    z-index: 1;
}
.share:hover:before{
    width: 40px;
}
.share .share-li{
    position: absolute;
    list-style-type:none;
    transition: 1s;
}
.share .share-li .share-a{
    display: block;
    width: 20px;
    height:20px;
    line-height:20px;
    text-align: center;
    
    color:#fff;
    margin: 0 2px;
    border-radius: 50%;
    font-size: 10px;
    transition: 1s;
}

.share:hover .share-li:nth-child(1) .share-a
{
    transform: translate(20px) rotate(360deg);
    transition: 1.8s;
}
.share:hover .share-li:nth-child(2) .share-a
{
    transform: translate(60px) rotate(360deg);
    transition: 1.6s;
}

.share:hover .share-li:nth-child(3) .share-a
{
    transform: translate(100px) rotate(360deg);
    transition: 1.2s;
}
.share:hover .share-li:nth-child(4) .share-a
{
    transform: translate(140px) rotate(360deg);
    transition: 1.4s;
}

</style>
</head>

<body>
<div class="page-wrapper chiller-theme toggled">
  <a id="show-sidebar" class="btn btn-sm btn-dark" href="http://team2.itvisionlab.com/cashflow1.5/index.php#">
    <i class="fas fa-bars"></i>
  </a>
  <nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">
      <div class="sidebar-brand">
        <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-center"> By Team-2</a>
        <div id="close-sidebar">
          <i class="fas fa-times"></i>
        </div>
      </div>
      <div class="sidebar-header">
        <div class="user-pic ">
        <form actiion="profileAction.php" method="post" enctype="multipart/form-data">
            <div class="form-group text-center">
              
              <label for="profileImage">
                           <!-- <img src="img/profile.jfif"  id="profileDisplay" class="img_logo" /> -->
              </label>
              <div class="user-info">
          <span class="user-name"> <span class="user-role">Name :
                    </span>
         
        </span></div>
                 <input type="file" name="file_ap" onchange="displayImage(this)" accept="image/*" id="profileImage" style="display:none;"><br> 
                <input type="submit" name="submit" value="Edit Profile" class="upload btn btn-dark btn-sm mt-3">
            </div>
          </form>
        </div>
        
      </div>
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="">
            <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-decoration-none"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
            
          </li>
          <li>
            <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-decoration-none"><i class="fa fa-moon" aria-hidden="true"></i> Dark Mode</a>
            
          </li>
          <li>
            <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-decoration-none"><i class="fa fa-question" aria-hidden="true"></i> Help ?</a>
            
          </li>
          <li>
            <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-decoration-none"><i class="fa fa-envelope" aria-hidden="true"></i> Contact</a>
            
          </li>
          <li>
            <a href="http://team2.itvisionlab.com/cashflow1.5/logout.php" class="text-decoration-none"><i class="fa fa-sign-out" aria-hidden="true"></i>
 Log Out</a>
            
          </li>
          <!--<li >-->
            <!-- <a href="#" class="text-decoration-none"> <i class="fa fa-share-alt" aria-hidden="true"></i> Share</a> -->
          <!--  <ul class="share">-->
          <!--     <li class="share-li"><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost%3A8080/new_nav_added_cashflow/index.php" class="share-a" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>-->
          <!--     <li class="share-li"><a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//www.facebook.com/sharer/sharer.php?u=http%253A//localhost%253A8080/new_nav_added_cashflow/index.php&title=linkin&summary=&source=" class="share-a" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>-->
          <!--     <li class="share-li"><a href="#" class="share-a" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>-->
          <!--     <li class="share-li"><a href="https://twitter.com/intent/tweet?text=http%3A//localhost%3A8080/new_nav_added_cashflow/index.php" class="share-a" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>-->
               
          <!-- </ul>-->
          <!--</li>-->
    </ul></div>
    <!-- sidebar-content  -->
    <!--  -->
  </div></nav>
  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <h2 class="">CashFlow <i class="fa fa-money"></i>
      <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-decoration-none btn btn-primary ml-2 btn-sm float-right " data-toggle="modal" data-target="#signin"><i class="fa fa-address-book" aria-hidden="true"></i> Sign In</a>
      <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="text-decoration-none btn btn-danger btn-sm float-right" data-toggle="modal" data-target="#signup"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a>
      </h2>
      <!-- sign up modal -->
      <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">Registration</h5>
        <button type="button" class="close " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
      <form class=" " action="http://team2.itvisionlab.com/cashflow1.5/registerAction.php" method="POST" autocomplete="on">
        <!-- <h5 class="text-center mt-4">CashFlow <i class="fa fa-money"></i></h5>-->
        <!-- <p class="text-success text-lg text-center mt-4">Sign Up</p> 
         -->
                    <div class="form-group">
                      <label for="Name">Name </label>
                      <input type="text" class="form-control" name="name" id="Name" aria-describedby="NameHelp" required="">
                    </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required="">
                      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                      <label for="input-pwd">Password</label>
                       <input type="password" name="pwd" id="input-pwd" class="form-control validate" required="">
                       <span toggle="#input-pwd" onclick="myFunction()" class="fa fa-fw fa-eye field-icon"></span>
                      </div>
                      <div class="form-group">
                       <label for="input-conf">Confirm Password</label>
                       <input type="password" name="cpass" id="input-conf" class="form-control validate" required="">
                      <span toggle="#input-conf" onclick="myFunction1()" class="fa fa-fw fa-eye field-ic"></span>
                     </div>
                    <div class="form-group registrationFormAlert" style="color:green;" id="CheckPasswordMatch"></div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" onclick="check()" id="exampleCheck1" required="">
                        <label class="form-check-label" for="exampleCheck1">I agree to the terms and Conditions <a href="http://team2.itvisionlab.com/cashflow1.5/termCondition.php" class="text-danger">Terms and conditions</a></label>
                      </div>
                    <button type="submit" class="btn btn-danger btn-block">Register</button>
                     <p class="text-center my-3">Or use one of your Profile</p>
                     <div class="row ml-sm-5 ">
                         <div class="col-md-5 col-sm-5 col-xs-5 ">
                           <button type="submit" class="btn btn-info btn-block"> Facebook</button>
                         </div>
                         <div class="col-md-5 col-sm-5 col-xs-5 ">
                            <button type="submit" class="btn btn-danger btn-block"> Google</button>
                         </div>
                     </div>
                  </form>

      </div>
      
    </div>
  </div>
</div>
      <!-- /sign up modal -->
      <!-- sign in modal -->
      <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
         <form action="http://team2.itvisionlab.com/cashflow1.5/loginAction.php" method="POST" autocomplete="off">
                   <div class="form-group">
                    <label for="name">Name</label>
                      <input type="text" name="name" id="name" class="form-control" required="">
                    </div>
                    <div class="form-group">
                      <label for="login-pwd">Password</label>
                       <input type="password" name="pwd" id="login-pwd" class="form-control validate" required="">
                       <span toggle="#login-pwd" onclick="myFunction2()" class="fa fa-fw fa-eye login_eye"></span>
                      </div>
                   
                    <button type="submit" class="btn btn-danger btn-block mb-3">Continue</button>
                     <a href="http://team2.itvisionlab.com/cashflow1.5/index.php#" class="p-3"> Forget password ?</a><a href="http://team2.itvisionlab.com/cashflow1.5/index.php"> Hint </a>
                  </form>
      </div>
      
    </div>
  </div>
</div>
      <!-- /sign in modal -->
      <hr> 
      <hr>
      
              <div class="row">
        <div class="col-xs-2 col-sm-6 col-md-6 col-lg-4 cashflow">
          <a href="http://team2.itvisionlab.com/cashflow1.5/index.php" class="text-decoration-none " data-toggle="modal" data-target="#incomeModal">
            <div class="card rounded-0 p-0 shadow-sm">
                <img src="./cashHome_files/in.png" class="card-img-top rounded-0" alt="income">
                <div class="card-body text-center">
                  <h6 class="card-title inc">Income</h6>
                  <!-- <a href="https://github.com/azouaoui-med/angular-pro-sidebar" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/angular-pro-sidebar/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a> -->
                </div>
              </div>
          </a>
        </div>
        <div class="col-xs-2 col-sm-6 col-md-6 col-lg-4 cashflow">
          <a href="http://team2.itvisionlab.com/cashflow1.5/index.php" class="text-decoration-none " data-toggle="modal" data-target="#expense">
            <div class="card rounded-0 p-0 shadow-sm">
            <img src="./cashHome_files/ex.png" class="card-img-top rounded-0" alt="expense">
                <div class="card-body text-center">
                  <h6 class="card-title expen">Expense</h6>
                  <!-- <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                  <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a> -->
                </div>
              </div>
          </a>
        </div>
        <div class="col-xs-2 col-sm-12 col-md-12 col-lg-4 sm cashflow">
        <a href="http://team2.itvisionlab.com/cashflow1.5/displayTrans.php" class="text-decoration-none ">
                <div class="card rounded-0 p-0 shadow-sm">
                    <img src="./cashHome_files/trans.png" class="card-img-top rounded-0" alt="Transaction">
                    <div class="card-body text-center">
                      <h6 class="card-title tranc">Transaction</h6>
                      <!-- <a href="https://github.com/azouaoui-med/lightning-admin-angular" target="_blank" class="btn btn-primary btn-sm">Github</a>
                      <a href="https://azouaoui-med.github.io/lightning-admin-angular/demo/" target="_blank" class="btn btn-success btn-sm">Preview</a> -->
                    </div>
                  </div>
            </a>
          </div>
      </div>
      
      <hr>
<!-- modal for income /expense/ transaction -->

  <!-- Modal for income -->
  <div class="modal fade" id="incomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-success ">
          <h5 class="modal-title text-center" id="exampleModalLabel"><i class="fa fa-plus-circle fa-1x" aria-hidden="true"></i> &nbsp; Income</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="http://team2.itvisionlab.com/cashflow1.5/income_action.php" method="POST">
            
             <div class="form-group">
                <label for="income_category">Categories</label>
                <div class="row p-0 ">
                 <div class="col-md-7 col-sm-7 col-xs-7  ">           
                  <select class="form-control" name="category" required="">
                   <option selected="" disabled="">Choose you income type ...</option>
                  <option value="Salary">Salary</option><option value="Printer">Printer</option><option value="Online Shopping">Online Shopping</option><option value="mobile sale">mobile sale</option><option value="Launch">Launch</option><option value="Fairy Lotion Sale">Fairy Lotion Sale</option>                </select>
                         </div>
                    
                         <div class="col-md-5 col-sm-5 col-xs-5 pl-0 ">
                           <a href="http://team2.itvisionlab.com/cashflow1.5/addIncomeCategory.php" class="btn btn-md btn-danger btn-inline add_new_cate"> Add New Category</a>
                         </div>
                     </div>
              </div>
         
              <div class="form-group ">
              <label for="income">Income/Amount ( MMK )</label>
              <input type="number" name="income_amt" class="form-control" placeholder="Enter Amount In MMK" id="income" required="">
            </div>
            <div class="form-group">
                <label for="date" class="">Date :</label>
                <input type="date" name="date" class="form-control" id="date" value="2020-08-14" required="">
              </div>
              <div class="form-group">
                <label for="note">Your Note :</label>
                <textarea class="form-control" name="note" id="note" rows="3"></textarea>
              </div>
               <input type="submit" class="btn btn-primary btn-block" value="Add income">
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Modal for expense -->
  <div class="modal fade" id="expense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-danger ">
          <h5 class="modal-title text-center" id="exampleModalLabel"><i class="fa fa-minus-circle fa-1x" aria-hidden="true"></i> &nbsp;Expense</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="http://team2.itvisionlab.com/cashflow1.5/expense_action.php" method="POST">
            
             <div class="form-group">
                <label for="expense_category">Categories</label>
                <div class="row p-0 ">
                 <div class="col-md-7 col-sm-7 col-xs-7  ">           
                  <select class="form-control" name="category" required="">
                   <option selected="" disabled="">Choose you expense type ...</option>
                  <option value="Food">Food</option><option value="Coffee">Coffee</option><option value="Laptop sale">Laptop sale</option><option value="Taxi">Taxi</option>                </select>
                         </div>
                    
                         <div class="col-md-5 col-sm-5 col-xs-5 pl-0 ">
                           <a href="http://team2.itvisionlab.com/cashflow1.5/addExpenseCategory.php" class="btn btn-md btn-danger btn-inline add_new_cate"> Add New Category</a>
                         </div>
                     </div>
              </div>
         
              <div class="form-group ">
              <label for="expense">expense/Amount ( MMK )</label>
              <input type="number" name="expense_amt" class="form-control" placeholder="Enter Amount In MMK" id="expense" required="">
            </div>
            <div class="form-group">
                <label for="date" class="">Date : </label>
                <input type="date" name="date" class="form-control" id="date" value="2020-08-14" required="">
              </div>
              <div class="form-group">
                <label for="note">Your Note :</label>
                <textarea class="form-control" name="note" id="note" rows="3"></textarea>
              </div>
               <input type="submit" name="addExpense" class="btn btn-primary btn-block" value="Add Expense">
          </form>
        </div>
        
      </div>
    </div>
  </div>
  
   <!-- / modal for income /expense/ transaction-->
      <footer class="text-center">
        <div class="mb-2">
          <small>
            © 2020 made by - <a target="_blank" rel="noopener noreferrer" href="http://team2.itvisionlab.com/cashflow1.5/index.php#">
              Team-2
            </a>
          </small>
         
        </div>
      </footer>    </div>
  </main>
  <!-- page-content" -->
</div>
<!-- page-wrapper -->
    <script src="./cashHome_files/jquery.min.js(1).download"></script>
    <script src="./cashHome_files/popper.min.js.download" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./cashHome_files/bootstrap.min.js(1).download" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
    
// confirm password
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function checkPasswordMatch() {
        var password = $("#input-pwd").val();
        var confirmPassword = $("#input-conf").val();
        if (password != confirmPassword)
            $("#CheckPasswordMatch").html("Passwords does not match!");
        else
            $("#CheckPasswordMatch").html("Passwords match.");
    }
    $(document).ready(function () {
       $("#input-conf").keyup(checkPasswordMatch);
    });
    // for show and hide icon
    function myFunction() {
  var x = document.getElementById("input-pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction1() {
  var x = document.getElementById("input-conf");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction2() {
  var x = document.getElementById("login-pwd");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

    </script>



</body></html>