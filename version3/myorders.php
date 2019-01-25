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
	#navbar1 a:hover {		
		background: #f4decb;
	}
	#navbar1 ul li a{
		color:white;
	}
	.mail{
		color:white;
	}
	table#acrylic {
            border-collapse: separate;
            background: #fff;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
            margin: 50px auto;
            -moz-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }
        
        #acrylic thead {
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
        }
        
        #acrylic thead th {
            font-family: 'Roboto';
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            text-shadow: 1px 1px 0px rgba(0, 0, 0, 0.5);
            text-align: left;
            padding: 20px;
            background-size: 100%;
            background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #646f7f), color-stop(100%, #4a5564));
            background-image: -moz-linear-gradient(#646f7f, #4a5564);
            background-image: -webkit-linear-gradient(#646f7f, #4a5564);
            background-image: linear-gradient(#646f7f, #4a5564);
            border-top: 1px solid #858d99;
        }
        
        #acrylic thead th:first-child {
            -moz-border-top-right-radius: 5px;
            -webkit-border-top-left-radius: 5px;
            border-top-left-radius: 5px;
        }
        
        #acrylic thead th:last-child {
            -moz-border-top-right-radius: 5px;
            -webkit-border-top-right-radius: 5px;
            border-top-right-radius: 5px;
        }
        
        #acrylic tbody tr td {
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
            color: #5f6062;
            font-size: 13px;
            padding: 20px 20px 20px 20px;
            border-bottom: 1px solid #e0e0e0;
        }
        
        #acrylic tbody tr:nth-child(2n) {
            background: #f0f3f5;
        }
        
        #acrylic tbody tr:last-child td {
            border-bottom: none;
        }
        
        #acrylic tbody tr:last-child td:first-child {
            -moz-border-bottom-right-radius: 5px;
            -webkit-border-bottom-left-radius: 5px;
            border-bottom-left-radius: 5px;
        }
        
        #acrylic tbody tr:last-child td:last-child {
            -moz-border-bottom-right-radius: 5px;
            -webkit-border-bottom-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }
        
        #acrylic tbody:hover > tr td {
            filter: progid: DXImageTransform.Microsoft.Alpha(Opacity=50);
            opacity: 0.5;
        }
        
        #acrylic tbody:hover > tr:hover td {
            text-shadow: none;
            color: #2d2d2d;
            filter: progid: DXImageTransform.Microsoft.Alpha(enabled=false);
            opacity: 1;
            transition: 0.2s all;
        }
	   //table tr td {
		   border-top: 1px solid black;
		   border-left: 1px solid black;
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
               
              </ul>
            
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row"> 
          <!-- Header Logo -->
          <div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
            <div class="logo"><a title="e-commerce" href="indexk.php"><img alt="e-commerce" src="images/logo.png"></a> </div>
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
				<li><p class="navbar-text mail">Hello!!.. &nbsp;  <?php echo $_SESSION['email']; ?></p></li>
				<li><a href="logout.php">Log Out</a></li>
				<?php } else { ?>
				
				<?php } ?>
			</ul>
		</div>
        </div>
      </div>
    </div>
	<br>
	
	
           
<div class="container">
	 <div class="wrapper">
        <table id="acrylic">
            <thead>
                <tr >
                <th>ProductID</th>
				<th>ProductName</th>
				<th>username</th>
				<th>image</th>
				<th>phone</th>
				<th>city</th>
				<th>street</th>
				<th>total_price</th>
				<th>status</th>
                </tr>
            </thead>
<center><h3 style="color:#af1a1a">YOUR ORDERED ITEMS</h3></center><hr>

            
<?php 
if(isset($_SESSION['email'])){
 $sql =("SELECT * FROM `order_items` where `email` = '".$_SESSION['email']."' ");
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);

?>
 <tbody>
 
 
                <tr>
					<td><?php echo $row['id']; ?></td>
					<td ><?php echo $row['name']; ?></td>
					<td ><?php echo $row['username']; ?></td>
					<td ><img src="uploads/<?php echo $row['image']; ?>" class="img-rounded" width="50px" height="60px" /></td>
					<td ><?php echo $row['phone']; ?></td>
					<td ><?php echo $row['street']; ?></td>
					<td ><?php echo $row['city']; ?></td>
					<td><?php echo $row['price']; ?></td>
					<td ><?php echo $row['status']; ?></td>
                </tr>
                
            </tbody>
					<?php } ?>
					<?php } ?>
        </table>
    </div>

			 
			
			 
			 

	</div>
</div>	

</body>
			 
</html>
      
 