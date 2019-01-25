
<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();

define('PROJECT_NAME', 'User Registration with Email Verification with PHP and Mysql- www.thesoftwareguy.in');

define('DB_DRIVER', 'mysql');
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'products');

// must end with a slash
define('SITE_URL', 'http://localhost/email-verification/');

$dboptions = array(
    PDO::ATTR_PERSISTENT => FALSE,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try {
  $DB = new PDO(DB_DRIVER . ':host=' . DB_SERVER . ';dbname=' . DB_DATABASE, DB_SERVER_USERNAME, DB_SERVER_PASSWORD, $dboptions);
} catch (Exception $ex) {
  echo $ex->getMessage();
  die;
}

?>
<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */


if (isset($_GET["id"])) {
  $id = intval(base64_decode($_GET["id"]));
 
  $sql = "SELECT * from users where id = :id";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":id", $id);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if (count($result) > 0) {

      if ($result[0]["status"] == "approved") {
        $msg = "Your account has already been activated.";
        $msgType = "info";
      } else {
        $sql = "UPDATE `users` SET  `status` =  'approved' WHERE `id` = :id";
        $stmt = $DB->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $msg = "Your account has been activated.";
        $msgType = "success";
		
      }
    } else {
      $msg = "No account found";
      $msgType = "warning";
    }
  } catch (Exception $ex) {
    echo $ex->getMessage();
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
 <style>
    
    .table{width: 65%;float: left;margin-left:30px;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 70%;float: left;}
    .orderBtn {float: right;}
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

              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row"> 
          <!-- Header Logo -->
          <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
            <div class="logo"><a title="e-commerce" href="/shop/version3/indexk.php"><img alt="e-commerce" src="images/logo.png"></a> </div>
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
          </div><br>
		<div class="collapse navbar-collapse" id="navbar1">
	
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="verification.php">Sign Up</a></li>

				<?php } ?>
			</ul>
		</div>
        </div>
      </div>
    </div>
    </div>
	<br>
<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<div class="container">
  <div class="row" style="text-align:center">
    <div class="col-lg-12">
      <h2>Thank you for registering with us. Please login</h2>
    </div>
	 <div class="col-lg-12" style="text-align:center">
		<a href="login.php" class="btn btn-primary">Login</a>
    </div>
  </div>
</div>

<script type="text/javascript">
  function validateForm() {

    var your_name = $.trim($("#username").val());
    var your_email = $.trim($("#email").val());
    var password = $.trim($("#password").val());
    var pass2 = $.trim($("#pass2").val());
    var phone = $.trim($("#phone").val());
    var city = $.trim($("#city").val());
    var street = $.trim($("#street").val());
    var zipcode = $.trim($("#zipcode").val());


    // validate name
    if (your_name == "") {
      alert("Enter your name.");
      $("#username").focus();
      return false;
    } else if (your_name.length < 3) {
      alert("Name must be atleast 3 character.");
      $("#username").focus();
      return false;
    }

    // validate email
    if (!isValidEmail(your_email)) {
      alert("Enter valid email.");
      $("#email").focus();
      return false;
    }

    // validate subject
    if (password == "") {
      alert("Enter password");
      $("#password").focus();
      return false;
    } else if (password.length < 6) {
      alert("Password must be atleast 6 character.");
      $("#password").focus();
      return false;
    }

    if (password != pass2) {
      alert("Password does not matched.");
      $("#pass2").focus();
      return false;
    }
    if (phone == "") {
      alert("Enter your phone.");
      $("#phone").focus();
      return false;
    } else if (phone.length < 3) {
      alert("Name must be atleast 3 character.");
      $("#phone").focus();
      return false;
    }
     if (city == "") {
      alert("Enter your city.");
      $("#city").focus();
      return false;
    } else if (city.length < 3) {
      alert("Name must be atleast 3 character.");
      $("#city").focus();
      return false;
    }
	if (street == "") {
      alert("Enter your city.");
      $("#street").focus();
      return false;
    } else if (street.length < 3) {
      alert("Name must be atleast 3 character.");
      $("#street").focus();
	  
	  	if (zipcode == "") {
      alert("Enter your zipcode.");
      $("#zipcode").focus();
      return false;
    } else if (zipcode.length < 3) {
      alert("zipcode must be atleast 3 character.");
      $("#zipcode").focus();
      return false;
    }
    return true;
  }

  function isValidEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
  }


</script>

<?php
include './footer.php';
?>