<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	header("Location: index.php");
}

include_once 'admin/config.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$city = mysqli_real_escape_string($db, $_POST['city']);
	$street = mysqli_real_escape_string($db, $_POST['street']);
	$zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
	
	//name can contain only alpha characters and space
	if (!preg_match("/^[a-zA-Z ]+$/",$username)) {
		$error = true;
		$username_error = "Name must contain only alphabets and space";
	}
	if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
		$error = true;
		$email_error = "Please Enter Valid Email ID";
	}
	if(strlen($password) < 6) {
		$error = true;
		$password_error = "Password must be minimum of 6 characters";
	}
	if($password != $cpassword) {
		$error = true;
		$cpassword_error = "Password and Confirm Password doesn't match";
	}
	if (!$error) {
		if(mysqli_query($db, "INSERT INTO users(username,email,password,phone,city,street,zipcode) VALUES('" . $username . "', '" . $email . "', '" . md5($password) . "','". $phone ."','". $city ."','". $street ."','". $zipcode ."')")) {
			$successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
		} else {
			$errormsg = "Error in registering...Please try again later!";
		}
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
<title>Fancy premium HTML &amp; CSS3 template</title>
<meta name="description" content="best template, template free, responsive theme, fashion store, responsive theme, responsive html theme, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template">
<meta name="keywords" content="bootstrap, ecommerce, fashion, layout, responsive, responsive template, responsive template download, responsive theme, retail, shop, shopping, store, Premium website templates, web templates, Multi-Purpose Responsive HTML5 Template"/>

<!-- Mobile specific metas  -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Favicon  -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.png">

<!-- CSS Style -->
<link rel="stylesheet" href="style.css">

</head>

<body class="cms-index-index cms-home-page">

<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

<div id="page"> 
  
  <!-- Header -->
  <header id="header">
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-6 hidden-xs"> <span class="phone hidden-xs"><i class="fa fa-phone fa-lg"></i> <span class="hidden-sm">Any question? Call Us </span> +123.456.789</span> </div>
            <!-- top links -->
            <div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12"> 
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs">Welcome to msg! </div>
              <ul class="links">
                <li><a href="checkout.html">Checkout</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="register_page.html">Sign Up</a></li>
                <li><a href="account_page.html">Log In</a></li>
              </ul>
              <div class="language-currency-wrapper pull-right">
                <div class="inner-cl">
                  <div class="block block-language form-language">
                    <div class="lg-cur"> <span> <span class="lg-fr">English</span> <i class="fa fa-angle-down"></i> </span> </div>
                    <ul>
                      <li> <a href="#"><span>German</span> </a> </li>
                      <li> <a href="#"><span>Brazil</span> </a> </li>
                      <li> <a href="#"><span>Chile</span> </a> </li>
                      <li> <a href="#"><span>Spain</span> </a> </li>
                    </ul>
                  </div>
                  <div class="block block-currency">
                    <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                    <ul>
                      <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                      <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                      <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row"> 
          <!-- Header Logo -->
          <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
            <div class="logo"><a title="e-commerce" href="index.html"><img alt="e-commerce" src="images/logo.png"></a> </div>
          </div>
          <div class="col-xs-12 col-sm-5 col-md-6 col-md-5 top-search"> 
            <!-- Search -->
            <div id="search">
              <form>
                <div class="input-group">
                  <select class="cate-dropdown hidden-xs hidden-sm" name="category_id">
                    <option>All Categories</option>
                    <option>women</option>
                    <option>&nbsp;&nbsp;&nbsp;Accessories </option>
                    <option>&nbsp;&nbsp;&nbsp;Dresses</option>
                    <option>&nbsp;&nbsp;&nbsp;Top</option>
                    <option>&nbsp;&nbsp;&nbsp;Handbags </option>
                    <option>&nbsp;&nbsp;&nbsp;Shoes </option>
                    <option>&nbsp;&nbsp;&nbsp;Clothing </option>
                    <option>Men</option>
                    <option>Fancynics</option>
                    <option>&nbsp;&nbsp;&nbsp;Mobiles </option>
                    <option>&nbsp;&nbsp;&nbsp;Music &amp; Audio </option>
                  </select>
                  <input type="text" class="form-control" placeholder="Search" name="search">
                  <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
            
            <!-- End Search --> 
          </div>
		  <br>
        <div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['email']; ?></p></li>
				<li class="mega-menu"><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<li><a href="useritems.php">My Orders</a></li>
				
				<?php } ?>
			</ul>
		</div>
        </div>
      </div>
    </div>
    </div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
			<h1>Register To get continue</h1><br><br>
                	<form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                           <label for="name">Name</label>
						<input type="text" name="username" placeholder="Enter Full Name" required value="<?php if($error) echo $username; ?>" class="form-control" />
						<span class="text-danger"><?php if (isset($username_error)) echo $username_error; ?></span>
                        </div>
                        <div class="form-group">
							<label for="name">Email</label>
							<input type="text" name="email" placeholder="Email" required value="<?php if($error) echo $email; ?>" class="form-control" />
							<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                        </div>
						<div class="form-group">
							<label for="name">Password</label>
						<input type="password" name="password" placeholder="Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                        </div>
						<div class="form-group">
							<label for="name">Confirm Password</label>
						<input type="password" name="cpassword" placeholder="Confirm Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                        </div>
						<div class="form-group">
						<label for="name">PhoneNumber</label>
						<input type="Phone" name="phone" placeholder="Confirm Password" required class="form-control" />
						<span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
					</div>
					
					<div class="form-group">
						<label for="name">City</label>
						<input type="Phone" name="city" placeholder="City" required class="form-control" />
						<span class="text-danger"><?php if (isset($city_error)) echo $city_error; ?></span>
					</div>
		
                    </div>
                    <div class="col-md-6">
					<div class="form-group">
						<label for="name">Street</label>
						<input type="Phone" name="street" placeholder="Street " required class="form-control" />
						<span class="text-danger"><?php if (isset($city_error)) echo $city_error; ?></span>
					</div>
					<div class="form-group">
						<label for="name">Zipcode</label>
						<input type="Phone" name="zipcode" placeholder="Zipcode" required class="form-control" />
						<span class="text-danger"><?php if (isset($city_error)) echo $city_error; ?></span>
					</div>

                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
					<div class="form-group">
						<input type="submit" name="signup" value="Sign Up" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			<span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
			<span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">	
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
           
        </div>
    </div>
</div>


<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>



