<?php

error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
ob_start();
session_start();
if(isset($_SESSION['usr_id'])) {
	header("Location: indexk.php");
}
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

if (isset($_POST["sub"])) {
  require_once "phpmailer/class.phpmailer.php";

   $username = trim($_POST["username"]);
  $password = trim($_POST["password"]);
  $email = trim($_POST["email"]);
  $phone = trim($_POST["phone"]);
  $city = trim($_POST["city"]);
  $street = trim($_POST["street"]);
  $zipcode = trim($_POST["zipcode"]);
  $sql = "SELECT COUNT(*) AS count from users where email = :email_id";
  try {
    $stmt = $DB->prepare($sql);
    $stmt->bindValue(":email_id", $email);
    $stmt->execute();
    $result = $stmt->fetchAll();

    if ($result[0]["count"] > 0) {
      $msg = "Email already exist";
      $msgType = "warning";
    } else {
       $sql = "INSERT INTO `users` (`username`, `password`, `email`,`phone`,`city`,`street`,`zipcode`) VALUES " . "(:username, :password, :email,:phone, :city, :street,:zipcode)";
      $stmt = $DB->prepare($sql);
      $stmt->bindValue(":username", $username);
      $stmt->bindValue(":password", $password);
      $stmt->bindValue(":email", $email);
	  $stmt->bindValue(":phone", $phone);
      $stmt->bindValue(":city", $city);
      $stmt->bindValue(":street", $street);
      $stmt->bindValue(":zipcode", $zipcode);
      $stmt->execute();
      $result = $stmt->rowCount();


      if ($result > 0) {
       
        $lastID = $DB->lastInsertId();
$message = '<html><head>
           <title>Email Verification</title>
           </head>
           <body>';
$message .= '<h1>Hi ' . $name . '!</h1>';
$message .= '<p><a href="'."localhost/shop/version3".'/activate.php?id=' . base64_encode($lastID) . '">CLICK TO ACTIVATE YOUR ACCOUNT</a>';
$message .= "</body></html>";
        

        // php mailer code starts
$mail = new PHPMailer(true);
$mail->IsSMTP();
$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = '465';
$mail->AddAddress($email);
$mail->Username ="webteach02@gmail.com";
$mail->Password ="rupi7382426840";
$mail->SetFrom('webteach02@gmail.com','upix');
$mail->AddAddress($email);
$mail->Subject = $subject;
$mail->Body = $message;
$mail->AltBody = $message;

        try {
          $mail->send();
          $msg = "An email has been sent for verification.";
          $msgType = "success";
        } catch (Exception $ex) {
          $msg = $ex->getMessage();
          $msgType = "warning";
        }
      } else {
        $msg = "Failed to create User";
        $msgType = "warning";
      }
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
          </div>
		  <br>
        <div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><p class="navbar-text mail">Signed in as <?php echo $_SESSION['email']; ?></p></li>
				<li class="mega-menu"><a href="logout.php">Log Out</a></li>
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
<?php if ($msg <> "") { ?>
  <div class="alert alert-dismissable alert-<?php echo $msgType; ?>">
    <button data-dismiss="alert" class="close" type="button">x</button>
    <p><?php echo $msg; ?></p>
  </div>
<?php } ?>
<br>
<br/>
<h2 style="margin-left:380px">Get Register Here to get continue</h2><br>
<div class="container">
  <div class="row">
  <div class="col-md-2">
  </div>
  <div class="col-md-6 well">
      <div class="well contact-form-container">
        <form class="form-horizontal contactform" action="" method="post" name="f" onsubmit="return validateForm();">
          <fieldset>
		   <div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-12 control-label" for="uname">Name:
						<input type="text" placeholder="Your Name"  id="username" required class="form-control" name="username">
					</label>
				</div>

				<div class="form-group">
					<label class="col-lg-12 control-label" for="uemail">Email:
						<input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required>
					</label>
				</div>

				<div class="form-group">
					<label class="col-lg-12 control-label" for="pass1">Password:
						<input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
					</label>
				</div>

				<div class="form-group">
					<label class="col-lg-12 control-label" for="pass1">Confirm Password:
						<input type="password" placeholder="Confirm Password" id="pass2" class="form-control" name="pass2" required>
					</label>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="form-group">
					<label class="col-lg-12 control-label" for="pass1">Phone:
						<input type="text" placeholder="phone" id="phone" class="form-control" name="phone" required>
					</label>
				</div>
			
				<div class="form-group">
					<label class="col-lg-12 control-label" for="pass1">City:
						<input type="text" placeholder="city" id="city" class="form-control" name="city" required>
					</label>
				</div>
				
				<div class="form-group">
					<label class="col-lg-12 control-label" for="pass1">street:
						<input type="text" placeholder="street" id="street" class="form-control" name="street" required>
					</label>
				</div>
			
				<div class="form-group">
					<label class="col-lg-12 control-label" for="pass1">Zipcode:
						<input type="text" placeholder="zipcode" id="zipcode" class="form-control" name="zipcode" required>
					</label>
				</div>
			</div>
		</div>
            <div style="height: 10px;clear: both"></div>

            <div class="form-group">
              <div class="col-lg-10">
                <button class="btn btn-primary" type="submit" name="sub">Submit</button> 
              </div>
            </div>
          </fieldset>
        </form>
		
      </div>
    </div>
  </div>
</div>
<div class="row">
		<div class="col-md-4 col-md-offset-4">	
		Already Registered? <a href="login.php">Login Here</a>
		</div>
</div>

<br>
<?php
include './footer.php';
?>