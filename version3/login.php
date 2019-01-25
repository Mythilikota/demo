  
<?php
session_start();
if(isset($_SESSION['usr_id'])!="") {
header("Location:checkout.php");
}
include_once 'admin/config.php';
//check if form is submitted
if (isset($_POST['login'])) {

$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$result = mysqli_query($db, "SELECT * FROM users WHERE `email` = '" . $email. "' and `password` = '" . ($password) . "' and  `status` = '".approved."' ");
if ($row = mysqli_fetch_array($result)) {
$_SESSION['usr_id'] = $row['id'];
$_SESSION['email'] = $row['email'];
$_SESSION['username'] = $row['username'];
$_SESSION['phone'] = $row['phone'];
$_SESSION['city'] = $row['city'];
$_SESSION['street'] = $row['street'];
$_SESSION['zipcode'] = $row['zipcode'];

header("Location:checkout.php");
} else {
$errormsg = "Incorrect Email or Password!!!";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:06:58 GMT -->
  <head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fancy premium HTML &amp; CSS3 template
    </title>
    <meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
    <meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>
    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <!-- CSS Style -->
    <link rel="stylesheet" href="style.css">
    <style>
      .table{
        width: 65%;
        float: left;
        margin-left:30px;
      }
      .shipAddr{
        width: 30%;
        float: left;
        margin-left: 30px;
      }
      .footBtn{
        width: 70%;
        float: left;
      }
      .orderBtn {
        float: right;
      }
      .btn-warning {
        margin-left:35px;
      }
      #navbar1 a:hover {
        background: #f4decb;
      }
      #navbar1 ul li a{
        color:white;
      }
      .mail{
        color:white;
      }
      .heading{
        margin-left:-60px;
      }
    </style>
  </head>
  <body class="cms-index-index cms-home-page">
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an 
<strong>outdated</strong> browser. Please 
<a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->
    <div id="page">
      <!-- Header -->
      <header id="header">
        <div class="header-container">
          <div class="header-top">
            <div class="container">
              <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs">
                  <span class="phone hidden-xs">
                    <i class="fa fa-phone fa-lg">
                    </i>
                    <span class="hidden-sm">Any question? Call Us 
                    </span> +123.456.789
                  </span>
                </div>
                <!-- top links -->
                <div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12">
                  <!-- Default Welcome Message -->
                  <div class="welcome-msg hidden-xs">Welcome to msg! 
                  </div>
                  <ul class="links">
                    <li>
                      <a href="checkout.php">Checkout
                      </a>
                    </li>
                    <li>
                      <a href="useritems.php">Wishlist
                      </a>
                    </li>
                  
                  </ul>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <!-- Header Logo -->
              <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
                <div class="logo">
                  <a title="e-commerce" href="/shop/version3/indexk.php">
                    <img alt="e-commerce" src="images/logo.png">
                  </a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-5 col-md-6 col-md-5 top-search">
                <!-- Search -->
                <div id="search">
                  <form>
                    <div class="input-group">
                      <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                        <option>All Categories
                        </option>
                        <option>women
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Accessories 
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Dresses
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Top
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Handbags 
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Shoes 
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Clothing 
                        </option>
                        <option>Men
                        </option>
                        <option>Fancynics
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Mobiles 
                        </option>
                        <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio 
                        </option>
                      </select>
                      <input type="text" class="form-control" placeholder="Search" name="search">
                      <button class="btn-search" type="button">
                        <i class="fa fa-search">
                        </i>
                      </button>
                    </div>
                  </form>
                </div>
                <!-- End Search -->
              </div>
              <br>
              <div class="collapse navbar-collapse" id="navbar1">
                <ul class="nav navbar-nav navbar-right">
                  <?php if (isset($_SESSION['usr_id'])) { ?>
                  <li>
                    <p class="navbar-text">Signed in as 
                      <?php echo $_SESSION['usr_name']; ?>
                    </p>
                  </li>
                  <li>
                    <a href="logout.php">Log Out
                    </a>
                  </li>
                  <?php } else { ?>
                  <li>
                    <a href="login.php">Login
                    </a>
                  </li>
                  <li>
                    <a href="verification.php">Sign Up
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
		
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row">
          <center>
          </center>
          <div class="col-md-4 col-md-offset-4 well">
            <h1>Login
            </h1>
            <br>
            <br>
            <form role="form" action="
                    <?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
              <fieldset>
                <legend>Login
                </legend>
                <div class="form-group">
                  <label for="name">Email
                  </label>
                  <input type="text" name="email" placeholder="Your Email" required class="form-control" />
                </div>
                <div class="form-group">
                  <label for="name">Password
                  </label>
                  <input type="password" name="password" placeholder="Your Password" required class="form-control" id="myInput"/><span toggle="#password-field"  onclick="myFunction()" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-primary" />
                </div>
              </fieldset>
            </form>
            <span class="text-danger">
              <?php if (isset($errormsg)) { echo $errormsg; } ?>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-md-offset-4 text-center">	
            New User? 
            <a href="verification.php">Sign Up Here
            </a>
			 <a href="forgot.php">Change Password</a>
          </div>
        </div>
      </div>
      <script src="js/jquery-1.10.2.js">
      </script>
      <script src="js/bootstrap.min.js">
      </script>
      <script>
function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

      </body>
    </html>
