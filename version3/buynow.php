<?php
// include database configuration file
include 'admin/config.php';

// initializ shopping cart class
include 'Cart.php';
$cart = new Cart;

// redirect to home if cart is empty
if($cart->total_items() >= 1){
    header("Location: indexk.php");
}

// set customer ID in session
$_SESSION['sessCustomerID'] = 1;



?>
		
<?php
	
 
$sql =("SELECT * FROM `users` WHERE `email` = '".$_SESSION['email']."' ");
$result = $db->query($sql);

if ($result->num_rows > 0) {
     // output data of each row

     while($row = $result->fetch_assoc()) {
		 extract($row);
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
          </div><br>
			<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<li><a href="useritems.php">My Orders</a></li>
				<li><p class="navbar-text mail">Signed as <?php echo $_SESSION['email']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				
				<?php } ?>
			</ul>
		</div>
        </div>
      </div>
    </div>
    </div><br><br>
      <div class="page-content page-order"><div class="page-title"><br>
            <h2 style="margin-left:30px">Order Preview</h2>
          </div>
            
            
            <div class="order-detail-content">
              <div class="table-responsive">
                <table class="table table-bordered cart_summary">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
			<th>Image</th>
			<th>Category</th>
            <th>Quantity</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            //get cart items from session
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
				
				
        ?>
        <tr>
            <td><?php echo $item["name"]; ?></td>
            <td><?php echo ''.$item["price"].' Rs'; ?></td>
			<td class="cart_product"><img src="uploads/<?php echo $item['image']; ?>" class="img-rounded" width="75px" height="100px" /></td>
			 <td><?php echo $item["category_name"]; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo ''.$item["subtotal"].' Rs'; ?></td>
        </tr>
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No items in your cart......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total: <?php echo ''.$cart->total().' Rs'; ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <div class="shipAddr">
        <h4>Shipping Details</h4>
        <p><?php echo $row['username']; ?></p>
        <p><?php echo $row['email']; ?></p>
        <p><?php echo $row['phone']; ?></p>
        <p><?php echo $row['street']; ?></p>
		<p><?php echo $row['city']; ?></p>
		<p><?php echo $row['zipcode']; ?></p>
		<a href="addressedit.php?id=<?php echo $row["id"]; ?> "><b><h4>You can edit shipping Details</h4></b></a>
		<?php $id++; } ?>
    </div>
	

	 <?php

 }
	 else {
     echo "0 results";
}


$db->close();
?>


<form method="post" action="cartAction.php?action=placeOrder">
<div class="container">
   <div class="row">
	<div class="col-md-12">
	<h3 class="heading">Payment Mode</h3>
		<input name="radio" type="radio" value="Cash On Delivery" required> &nbsp <b>Cash On Delivery</b><br>
		<input name="radio" type="radio" value="Debit" required> &nbsp <b>Debit </b>
	</div>
	</div>
	</div>
<br>
</header>
    <div class="footBtn">
        <a href="indexk.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Shopping</a>
        <input type="submit" name="placeorder" value="PlaceOrder" class="btn btn-success orderBtn" class="glyphicon glyphicon-menu-right">	
</form>
    </div>
	 </div>
	  </div>
	     
</div>
 <script type="text/javascript">  
        $(function(){
         $('.radio').on('change',function(){
            $('#form').submit();
            });
        });
    </script>
<?php include 'footer.php'; ?>
</body>
</html>