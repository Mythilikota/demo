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
		<script>
			function myFunction() {
			alert("Product has been added in your cart!");
		}
		</script>
	</head>
 <body class="cms-index-index cms-home-page">
					  <?php
				require_once 'header.php';
				?>				 
    </nav>
  </header>

  <!-- end header --> 
  <!-- Main Slider Area -->
   <div class="main-slider-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="jtv-slideshow">
            <div id='rev_slider_6_wrapper' class='rev_slider_wrapper' >
              <div id='rev_slider_6' class='rev_slider'>
                <ul>
				<?php
				$sql = "SELECT  * FROM addproducts WHERE type='bannerimage'";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slider-img1.jpg' class="black-text"><img src="uploads/<?php echo $row['image'];?>"  data-bgposition='left top' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="jtv-caption-inner jtv-left">
                      <div class='jtv-caption jtv-small-title' data-x='170'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'></div>
                      <div class='jtv-caption jtv-large-title' data-x='180'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'></div>
                      <div class='jtv-caption bnt-bg' data-x='140'  data-y='358'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="jtv-shop-btn">Laptop Collection</a></div>
                    </div>
                  </li>
					<?php } ?>
                 <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slider-img1.jpg' class="black-text"><img src="uploads/<?php echo $row['image'];?>"  data-bgposition='left top' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="jtv-caption-inner jtv-left">
                      <div class='jtv-caption jtv-small-title' data-x='70'  data-y='280'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'><?php echo $row['name'];?></div>
                      <div class='jtv-caption jtv-large-title' data-x='120'  data-y='320'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'><?php echo $row['description'];?></div>
                      <div class='jtv-caption bnt-bg' data-x='140'  data-y='358'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="jtv-shop-btn">Laptop Collection</a></div>
                    </div>
                  </li>
                  <li data-transition='fade' data-slotamount='7' data-masterspeed='1000' data-thumb='images/slider/slider-img3.jpg' class="black-text"><img src='images/slider/slider-img3.jpg'  data-bgposition='left top' data-bgrepeat='no-repeat' alt="banner"/>
                    <div class="jtv-caption-inner jtv-left">
                      <div class='jtv-caption jtv-small-title' data-x='70'  data-y='140'  data-endspeed='500'  data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2; white-space:nowrap;'>Hard Discount</div>
                      <div class='jtv-caption jtv-large-title' data-x='115'  data-y='175'  data-endspeed='500'  data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3; white-space:nowrap;'>up to 25% in the new collection</div>
                      <div class='jtv-caption bnt-bg' data-x='142'  data-y='210'  data-endspeed='500'  data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4; white-space:nowrap;'><a href='#' class="jtv-shop-btn">Shop Now >></a></div>
                    </div>
                  </li>
                </ul>
                <div class="tp-bannertimer"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- End Main Slider Area --> 
   
  <!-- main container -->
  <form  method="POST" enctype="multipart/formdata">
		<div class="home-tab">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12"> 
						<!-- Home Tabs  -->
							<div class="tab-info">
								<h3 class="new-product-title pull-left">Electronics</h3>
								<ul class="nav home-nav-tabs home-product-tabs">
								</ul>
						<!-- /.nav-tabs --> 
							</div>
							<div id="productTabContent" class="tab-content">
								<div class="tab-pane active in" id="all">
									<?php
										$sql = "SELECT  * FROM addproducts WHERE category_name='Electronics'";
										$result = $db->query($sql);
										// output data of each row
										while($row = $result->fetch_assoc()) {
										extract($row);
									?>
								<div class="product-item col-md-3 col-sm-6">
									<div class="item-inner">
										<div class="product-thumbnail">
											<div class="icon-sale-label sale-left">Sale</div>
												<div class="box-hover">
												</div>
												<a href="singlepage.php?id=<?php echo $row['id'];?>" class="product-item-photo"> <img class="product-image-photo" name="image" src="uploads/<?php echo $row['image'];?>" style="height:200px" alt=""></a>
											<div class="jtv-box-timer">
												<div class="countbox_1 jtv-timer-grid"></div>
											</div>
										</div>
							<div class="pro-box-info">
								<div class="item-info">
									<div class="info-inner">
										<div class="item-title">
											<h4> <a title="Product Title Here" name="proname" href="/shop/version3/folders/subcategory.php?category_name=<?php echo $row['subcategory'];?>"><?php echo $row['name'];?></a></h4>
										</div>
										<div class="item-content">
											<div class="rating" ><?php echo $row['rating']; ?> <i class="fa fa-star"></i>  </div>
											<div class="price-box">
												<p class="special-price" name="nprice"> <span class="price-label">Special Price</span> <span class="price"> <?php echo $row['price'];?> Rs</span> </p>
												<p class="old-price" name="oprice"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo $row['oldprice'];?> Rs</span> </p>
											</div>
										</div>
									</div>
								</div>
								<div class="box-hover">
									<div class="product-item-actions">
										<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
									</div>
										</div>
									</div>
								</div>
							</div>
								<?php } ?>  
								</div>
						</div> 
					</div> 
                </div>
            </div>
       </div>

<div class="home-tab">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Home Tabs  -->
				<div class="tab-info">
					<h3 class="new-product-title pull-left">Laptops</h3>
					<ul class="nav home-nav-tabs home-product-tabs"></ul>
					<!-- /.nav-tabs -->
				</div>
				<div id="productTabContent" class="tab-content">
					<div class="tab-pane active in" id="all">
						<?php
								$sql = "SELECT  * FROM addproducts WHERE category_name='Laptops'";
								$result = $db->query($sql);
								// output data of each row
								while($row = $result->fetch_assoc()) {
								extract($row);
							?>
						<div class="product-item col-md-3 col-sm-6">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="icon-sale-label sale-left">Sale</div>
									<a href="singlepage.php?id=
										<?php echo $row['id'];?>" class="product-item-photo">
										<img class="product-image-photo" src="uploads/
											<?php echo $row['image'];?>" style="height:200px" alt="">
										</a>
										<div class="jtv-box-timer">
											<div class="countbox_1 jtv-timer-grid"></div>
										</div>
									</div>
									<div class="pro-box-info">
										<div class="item-info">
											<div class="info-inner">
												<div class="item-title">
													<h4>
														<a title="Product Title Here" href="/shop/version3/folders/subcategory.php?category_name=
															<?php echo $row['subcategory'];?>">
															<?php echo $row['name'];?>
														</a>
													</h4>
												</div>
												<div class="item-content">
													<div class="rating" ><?php echo $row['rating']; ?> <i class="fa fa-star"></i>  </div>
													<div class="price-box">
														<p class="special-price">
															<span class="price-label">Special Price</span>
															<span class="price">
																<?php echo $row['price'];?> Rs
															</span>
														</p>
														<p class="old-price">
															<span class="price-label">Regular Price:</span>
															<span class="price">
																<?php echo $row['oldprice'];?> Rs
															</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="box-hover">
											<div class="product-item-actions">
											<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="home-tab">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Home Tabs  -->
				<div class="tab-info">
					<h3 class="new-product-title pull-left">Appliances</h3>
					<ul class="nav home-nav-tabs home-product-tabs"></ul>
					<!-- /.nav-tabs -->
				</div>
				<div id="productTabContent" class="tab-content">
					<div class="tab-pane active in" id="all">
						<?php
								$sql = "SELECT  * FROM addproducts WHERE category_name='kitchenware'";
								$result = $db->query($sql);
								// output data of each row
								while($row = $result->fetch_assoc()) {
								extract($row);
							?>
						<div class="product-item col-md-3 col-sm-6">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="icon-sale-label sale-left">Sale</div>
									<a href="singlepage.php?id=
										<?php echo $row['id'];?>" class="product-item-photo">
										<img class="product-image-photo" src="uploads/
											<?php echo $row['image'];?>" style="height:200px" alt="">
										</a>
										<div class="jtv-box-timer">
											<div class="countbox_1 jtv-timer-grid"></div>
										</div>
									</div>
									<div class="pro-box-info">
										<div class="item-info">
											<div class="info-inner">
												<div class="item-title">
													<h4>
														<a title="Product Title Here" href="/shop/version3/folders/subcategory.php?category_name=
															<?php echo $row['subcategory'];?>">
															<?php echo $row['name'];?>
														</a>
													</h4>
												</div>
												<div class="item-content">
													<div class="rating" ><?php echo $row['rating']; ?> <i class="fa fa-star"></i>  </div>
													<div class="price-box">
														<p class="special-price">
															<span class="price-label">Special Price</span>
															<span class="price">
																<?php echo $row['price'];?> Rs
															</span>
														</p>
														<p class="old-price">
															<span class="price-label">Regular Price:</span>
															<span class="price">
																<?php echo $row['oldprice'];?> Rs
															</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="box-hover">
											<div class="product-item-actions">
											<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<div class="home-tab">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Home Tabs  -->
				<div class="tab-info">
					<h3 class="new-product-title pull-left">Home&Furniture </h3>
					<ul class="nav home-nav-tabs home-product-tabs"></ul>
					<!-- /.nav-tabs -->
				</div>
				<div id="productTabContent" class="tab-content">
					<div class="tab-pane active in" id="all">
						<?php
												$sql = "SELECT  * FROM addproducts WHERE category_name='homeDecorations'";
												$result = $db->query($sql);
												// output data of each row
												while($row = $result->fetch_assoc()) {
												extract($row);
											?>
						<div class="product-item col-md-3 col-sm-6">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="icon-sale-label sale-left">Sale</div>
									<a href="singlepage.php?id=
										<?php echo $row['id'];?>" class="product-item-photo">
										<img class="product-image-photo" src="uploads/
											<?php echo $row['image'];?>" style="height:200px" alt="">
										</a>
										<div class="jtv-box-timer">
											<div class="countbox_1 jtv-timer-grid"></div>
										</div>
									</div>
									<div class="pro-box-info">
										<div class="item-info">
											<div class="info-inner">
												<div class="item-title">
													<h4>
														<a title="Product Title Here" href="/shop/version3/folders/subcategory.php?category_name=
															<?php echo $row['subcategory'];?>">
															<?php echo $row['name'];?>
														</a>
													</h4>
												</div>
												<div class="item-content">
													<div class="rating" ><?php echo $row['rating']; ?> <i class="fa fa-star"></i>  </div>
													<div class="price-box">
														<p class="special-price">
															<span class="price-label">Special Price</span>
															<span class="price">
																<?php echo $row['price'];?> Rs
															</span>
														</p>
														<p class="old-price">
															<span class="price-label">Regular Price:</span>
															<span class="price">
																<?php echo $row['oldprice'];?> Rs
															</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="box-hover">
											<div class="product-item-actions">
												<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="home-tab">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Home Tabs  -->
				<div class="tab-info">
					<h3 class="new-product-title pull-left">MEN</h3>
					<ul class="nav home-nav-tabs home-product-tabs"></ul>
					<!-- /.nav-tabs -->
				</div>
				<div id="productTabContent" class="tab-content">
					<div class="tab-pane active in" id="all">
						<?php
					
					    $sql = "SELECT  * FROM addproducts WHERE category_name='Men'";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
						<div class="product-item col-md-3 col-sm-6">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="icon-sale-label sale-left">Sale</div>
									<a href="singlepage.php?id=
										<?php echo $row['id'];?>" class="product-item-photo">
										<img class="product-image-photo" src="uploads/
											<?php echo $row['image'];?>" style="height:200px" alt="">
										</a>
										<div class="jtv-box-timer">
											<div class="countbox_1 jtv-timer-grid"></div>
										</div>
									</div>
									<div class="pro-box-info">
										<div class="item-info">
											<div class="info-inner">
												<div class="item-title">
													<h4>
														<a title="Product Title Here" href="/shop/version3/folders/subcategory.php?category_name=
															<?php echo $row['subcategory'];?>">
															<?php echo $row['name'];?>
														</a>
													</h4>
												</div>
												<div class="item-content">
													<div class="rating" ><?php echo $row['rating']; ?> <i class="fa fa-star"></i>  </div>
													<div class="price-box">
														<p class="special-price">
															<span class="price-label">Special Price</span>
															<span class="price">
																<?php echo $row['price'];?> Rs
															</span>
														</p>
														<p class="old-price">
															<span class="price-label">Regular Price:</span>
															<span class="price">
																<?php echo $row['oldprice'];?> Rs
															</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="box-hover">
											<div class="product-item-actions">
												<div class="product-item-actions">
												<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="home-tab">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Home Tabs  -->
				<div class="tab-info">
					<h3 class="new-product-title pull-left">WOMEN</h3>
					<ul class="nav home-nav-tabs home-product-tabs"></ul>
					<!-- /.nav-tabs -->
				</div>
				<div id="productTabContent" class="tab-content">
					<div class="tab-pane active in" id="all">
						<?php
					
					    $sql = "SELECT  * FROM addproducts WHERE category_name='Women'";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
						<div class="product-item col-md-3 col-sm-6">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="icon-sale-label sale-left">Sale</div>
									<a href="singlepage.php?id=
										<?php echo $row['id'];?>" class="product-item-photo">
										<img class="product-image-photo" src="uploads/
											<?php echo $row['image'];?>" style="height:200px" alt="">
										</a>
										<div class="jtv-box-timer">
											<div class="countbox_1 jtv-timer-grid"></div>
										</div>
									</div>
									<div class="pro-box-info">
										<div class="item-info">
											<div class="info-inner">
												<div class="item-title">
													<h4>
														<a title="Product Title Here" href="/shop/version3/folders/subcategory.php?category_name=
															<?php echo $row['subcategory'];?>">
															<?php echo $row['name'];?>
														</a>
													</h4>
												</div>
												<div class="item-content">
													<div class="rating">
														<i class="fa fa-star" ></i>
														<i class="fa fa-star" ></i>
														<i class="fa fa-star-o" ></i>
														<i class="fa fa-star-o" ></i>
														<i class="fa fa-star-o" 
															<?php echo $row['rating'];?>>
														</i>
													</div>
													<div class="price-box">
														<p class="special-price">
															<span class="price-label">Special Price</span>
															<span class="price">
																<?php echo $row['price'];?> Rs
															</span>
														</p>
														<p class="old-price">
															<span class="price-label">Regular Price:</span>
															<span class="price">
																<?php echo $row['oldprice'];?> Rs
															</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="box-hover">
											<div class="product-item-actions">
												<div class="product-item-actions">
												<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
<div class="home-tab">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<!-- Home Tabs  -->
				<div class="tab-info">
					<h3 class="new-product-title pull-left">BABY & KIDS </h3>
					<ul class="nav home-nav-tabs home-product-tabs"></ul>
					<!-- /.nav-tabs -->
				</div>
				<div id="productTabContent" class="tab-content">
					<div class="tab-pane active in" id="all">
						<?php
					
					    $sql = "SELECT  * FROM addproducts WHERE category_name='BABY&KIDS '";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
						<div class="product-item col-md-3 col-sm-6">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="icon-sale-label sale-left">Sale</div>
									<a href="singlepage.php?id=
										<?php echo $row['id'];?>" class="product-item-photo">
										<img class="product-image-photo" src="uploads/
											<?php echo $row['image'];?>" style="height:200px" alt="">
										</a>
										<div class="jtv-box-timer">
											<div class="countbox_1 jtv-timer-grid"></div>
										</div>
									</div>
									<div class="pro-box-info">
										<div class="item-info">
											<div class="info-inner">
												<div class="item-title">
													<h4>
														<a title="Product Title Here" href="/shop/version3/folders/subcategory.php?category_name=
															<?php echo $row['subcategory'];?>">
															<?php echo $row['name'];?>
														</a>
													</h4>
												</div>
												<div class="item-content">
													<div class="rating">
														<i class="fa fa-star" ></i>
														<i class="fa fa-star" ></i>
														<i class="fa fa-star-o" ></i>
														<i class="fa fa-star-o" ></i>
														<i class="fa fa-star-o" 
															<?php echo $row['rating'];?>>
														</i>
													</div>
													<div class="price-box">
														<p class="special-price">
															<span class="price-label">Special Price</span>
															<span class="price">
																<?php echo $row['price'];?> Rs
															</span>
														</p>
														<p class="old-price">
															<span class="price-label">Regular Price:</span>
															<span class="price">
																<?php echo $row['oldprice'];?> Rs
															</span>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="box-hover">
											<div class="product-item-actions">
												<div class="product-item-actions">
												<div class="pro-actions">
											<a class="action add-to-cart btn btn-lg" onclick="myFunction()" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>">Add To Cart</a>
											<a class="action add-to-cart btn btn-lg"  href="cartaction2.php?action=addToCart&id=<?php echo $row["id"]; ?>">Buy Now</a>
											</div>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  </form>
  <!-- our clients Slider -->
  
  <div class="our-clients">
    <div class="container">
      <div class="slider-items-products">
        <div id="our-clients-slider" class="product-flexslider hidden-buttons">
          <div class="slider-items slider-width-col6"> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand1.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand2.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand3.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand4.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand5.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand6.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            <!-- Item -->
            <div class="item"> <a href="#"><img src="images/brand7.png" alt="Image" class="grayscale"></a> </div>
            <!-- End Item --> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Footer -->
<?php include 'footer.php'; ?>
  <!-- End Footer -->
 
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

<!-- countdown js --> 
<script type="text/javascript" src="js/countdown.js"></script> 

<!-- nivo slider js --> 
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script> 

<!-- revolution slider js --> 
<script type="text/javascript" src="js/revolution-slider.js"></script> 
<script type='text/javascript'>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_6').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
				startwidth: 870,
	            startheight: 450,			          
                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'off',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'off',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script>
</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/fancy/version3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 19 Aug 2017 08:09:45 GMT -->
</html>
