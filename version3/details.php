<?php
include 'admin/config.php';
include 'Cart.php';
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
      #navbar1 a:hover {
        background: #f4decb;
      }
      #navbar1 ul li a{
        color:white;
      }
      .mail{
        color:white;
      }
    </style>
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
                      <a href="checkout.html">Checkout
                      </a>
                    </li>
                    <li>
                      <a href="wishlist.html">Wishlist
                      </a>
                    </li>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row"> 
              <!-- Header Logo -->
              <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
                <div class="logo">
                  <a title="e-commerce" href="indexk.php">
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
                    <p class="navbar-text mail">Hello!!.. &nbsp;   
                      <?php echo $_SESSION['email']; ?>
                    </p>
                  </li>
                  <li>
                    <a href="logout.php">Log Out
                    </a>
                  </li>
                  <?php } else { ?>
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <br>
		
        <center>
          <h3 style="color:#af1a1a">Welcome User
          </h3>
        </center>
        <hr>
        <?php 
		if(isset($_SESSION['email'])){
$sql =("SELECT * FROM `users` where `email` = '".$_SESSION['email']."' ");
$result = $db->query($sql);
// output data of each row
while($row = $result->fetch_assoc()) {
extract($row);
?>
        <div class="container"  style="margin-left:500px">
          <h2>Your Address:
          </h2>
          </br>
        <div class="panel panel-default col-md-4">
          <br>
          <p class="panel-heading">
            <b><?php echo $row['email']; ?></b>
          </p>
          <p class="panel-heading">
            <b>Name:
            </b>&nbsp; 
            <?php echo $row['username']; ?>
          </p>
          <p class="panel-heading">
            <b>City:
            </b> &nbsp;
            <?php echo $row['city']; ?>
          </p>
          <p class="panel-heading">
            <b>Street:
            </b> &nbsp; 
            <?php echo $row['street']; ?>
          </p>
          <p class="panel-heading">
            <b>Zipcode:
            </b>&nbsp; 
            <?php echo $row['zipcode']; ?>
          </p>
          <p class="panel-heading">
            <b>MobileNumber:
            </b> &nbsp;
            <?php echo $row['phone']; ?>
          </p>
        </div> 
        </div>
      <?php } ?>
     <?php } ?>
    </div>
    <br>	
  </body>
</html>
