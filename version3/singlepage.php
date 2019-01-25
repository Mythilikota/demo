<?php
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
							<!-- CSS Style -->
	    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
		<link rel="stylesheet" href="style.css">
	</head>
 <body class="cms-index-index cms-home-page">
 <?php
	require_once 'header.php';	
?>	
   </nav>
  </header>
  <?php		
$cart = new Cart;   
$id= $_REQUEST['id'];
$sql = "SELECT * from addproducts where id='".$id."' "; 
$result =  $db->query($sql);
$row = mysqli_fetch_assoc($result);
?>
  <div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main">
          <div class="product-view-area">
            <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
              <div class="icon-sale-label sale-left">Sale</div>
              <div class="large-image"> <a href="uploads/<?php echo $row['image'];?>" class="cloud-zoom" id="zoom1" rel="useWrapper: false, adjustY:0, adjustX:20"> <img class="zoom-img" src="uploads/<?php echo $row['image'];?>" alt="products"> </a> </div>
            <div class="slider-items-products col-md-12">
              <div id="thumbnail-slider" class="product-flexslider hidden-buttons product-thumbnail">
                <div class="slider-items slider-width-col3">
                  <div class="thumbnail-items"><a href='uploads/<?php echo $row['image'];?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'uploads/<?php echo $row['image'];?>' "><img src="uploads/<?php echo $row['image'];?>" alt = "Thumbnail 2"/></a></div>
                  <div class="thumbnail-items"><a href='uploads/<?php echo $row['image2'];?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'uploads/<?php echo $row['image2'];?>' "><img src="uploads/<?php echo $row['image2'];?>" alt = "Thumbnail 1"/></a></div>
                  <div class="thumbnail-items"><a href='uploads/<?php echo $row['image3'];?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'uploads/<?php echo $row['image3'];?>' "><img src="uploads/<?php echo $row['image3'];?>" alt = "Thumbnail 1"/></a></div>
                  <div class="thumbnail-items"><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '' "><img src="" alt = ""/></a></div>
                  <div class="thumbnail-items"><a href='' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '' "><img src="" alt = ""/></a></div>
                </div>
              </div>
            </div>
              
              
              <!-- end: more-images --> 
              
            </div>
            <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
              <div class="product-name">
                <h2><?php echo $row['name'];?></h2>
				
              </div>
			   <div class="product-name">
                <h3><?php echo $row['brandname'];?></h3>
				
              </div><br>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?php echo $row['price'];?> Rs</span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $row['oldprice'];?> Rs</span> </p>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"> <?php echo $row['rating'];?></i></div>
             

              </div>
              <div class="short-description">
                <h4>Quick Overview</h4>
                <p><?php echo $row['description'];?>
               
              </div>
              
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    
                   
                  </div>
				  <div class="col-md-6">
                            <a class="btn btn-success" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add to cart</a>
                        </div>

                </form>
              </div>
              
            </div>
          </div>
        </div>
      
            </div>
          </div>
        </div>
         
   <br><br>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="related-product-area">
          <div class="title_block">
            <h3 class="products_title">Related Products</h3>
          </div>
          <div class="related-products-pro">
            <div class="slider-items-products">
              <div id="related-product-slider" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4">
				<?php
                             $subcat= $row['subcategory'];

                             $sql1 = "SELECT * FROM addproducts WHERE subcategory='$subcat' ORDER BY rand() LIMIT 0,8 ";

                             $res = mysqli_query($db,$sql1);

                             while($rows = mysqli_fetch_array($res)){

                             

              ?>
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left">Sale</div>

                        <a href="singlepage.php?id=<?php echo $rows['id']; ?>" class="product-item-photo"> <img class="product-image-photo" src="uploads/<?php echo $rows['image'];?>" height="200px" alt=""></a> </div>
                      <div class="pro-box-info">
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <h4><a title="Ipsums Dolors Untra" href=""><?php echo $rows['name']?> </a></h4> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i><?php echo $rows['rating']?>   </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo $rows['price']?></span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
				 <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Related Product Slider End -->  
	
  <!-- Main Container End --> 
  <!-- JS --> 

<!-- jquery js --> 
<script type="text/javascript" src="js/jquery.min.js"></script> 

<!-- bootstrap js --> 
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<!-- Mean Menu js --> 
<script type="text/javascript" src="js/jquery.meanMenu.min.html"></script> 

<!-- owl.carousel.min js --> 
<script type="text/javascript" src="js/owl.carousel.min.js"></script> 

<!-- bxslider js --> 
<script type="text/javascript" src="js/jquery.bxslider.js"></script> 

<!--jquery-ui.min js --> 
<script type="text/javascript" src="js/jquery-ui.js"></script> 

<!-- wow JS --> 
<script type="text/javascript" src="js/wow.min.js"></script> 

<!-- flexslider js --> 
<script type="text/javascript" src="js/jquery.flexslider.js"></script> 

<!-- mobile Menu JS --> 
<script type="text/javascript" src="js/jtv-mobile-Menu.js"></script> 
<!-- main js --> 
<script type="text/javascript" src="js/main.js"></script> 

<!-- nivo slider js --> 
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 

<!--cloud-zoom js --> 
<script type="text/javascript" src="js/cloud-zoom.js"></script>
</body>

      <?php
include './footer.php';
?>
</html>