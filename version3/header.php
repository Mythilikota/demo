

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
								<i class="fa fa-phone fa-lg"></i>
								<span class="hidden-sm">Any question? Call Us </span> +123.456.789
							</span>
						</div>
						<!-- top links -->
						<div class="headerlinkmenu col-md-7 col-sm-7 col-xs-12">
							<!-- Default Welcome Message -->
							<div class="welcome-msg hidden-xs">Welcome to msg! </div>
							<ul class="links">
								<li>
									<a href="checkout.php">Checkout</a>
								</li>
								<li>
									<a href="useritems.php">Wishlist</a>
								</li>
							</ul>
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-2 col-sm-3 col-xs-12 top-cart">
				<!-- Begin shopping cart trigger  -->
				<div id="shopping-cart-trigger">
					<a href="viewCart.php" class="cart-icon" title="Shopping Cart">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						
					</a>
				</div>
				<a href="login.php" class="top-my-account">
					<i class="icon-user icons"></i>
				</a>
				<a href="useritems.php" class="top-compare">
					<i class="fa fa-unlock-alt" aria-hidden="true"></i>
				</a>
				<!-- End shopping cart trigger -->
			</div>
			<div class="container">
				<div class="row">
					<!-- Header Logo -->
					<div class="col-xs-12 col-lg-5 col-md-3 col-sm-3">
						<div class="logo">
							<a title="e-commerce" href="/shop/version3/indexk.php">
								<img alt="e-commerce" src="/shop/version3/images/logo.png">
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-6 col-md-5 top-search">
							<!-- Search -->
							<div id="search">
								<form method="get" action="/shop/version3/search/search.php">
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
											<button class="btn-search" name="submit" type="submit">
												<i class="fa fa-search"></i>
											</button>
										</div>
									</form>
								</div>
								<!-- End Search -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav>
				<!-- Start Menu Area -->
				<div class="menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="main-menu">
									<div class="mm-toggle-wrap hidden-lg hidden-md hidden-sm">
										<div class="mm-toggle">
											<i class="fa fa-align-justify"></i>
											<span class="mm-label">Menu</span>
										</div>
									</div>
									<ul class="hidden-xs">
										<li class="active custom-menu">
											<a href="/shop/version3/indexk.php">Home</a>
										</li>
										<li class="megamenu">
											<a href="/shop/version3/electronics.php">Electronics</a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
							include 'admin/config.php';
					    $sql = "SELECT  * FROM subcategory where maincategory='Electronics' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>
																				<li class="megamenu">
											<a href="/shop/version3/laptops.php">Laptops </a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='Laptops' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="megamenu">
											<a href="/shop/version3/kitchenware.php">APPLIANCES</a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='kitchenware' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="megamenu">
											<a href="/shop/version3/homeDecorations.php">HOME&FURNITURE </a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='homeDecorations' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="megamenu">
											<a href="/shop/version3/men.php">MEN </a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='MEN' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="megamenu">
											<a href="/shop/version3/women.php">WOMEN </a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='WOMEN' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>
										<li class="megamenu">
											<a href="/shop/version3/baby.php">BABY&KIDS </a>
											<div class="mega-menu">
												<div class="menu-block menu-block-center">
													<div class="menu-block-1">
														<ul>
															<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='BABY&KIDS' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
															<li>
																<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
																	<?php echo $row['subcategory'];?>">
																	<?php echo $row['subcategory'];?>
																	<span class="menu-item-tag menu-item-tag-hot">hot</span>
																</a>
															</li>
															<?php } ?>
														</ul>
													</div>
												</div>
											</div>
										</li>

									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
			</nav>
			<div id="jtv-mobile-menu" class="jtv-mobile-menu">
				<ul>
					<li class="">
						<a href="/shop/version3/indexk.php">Home</a>
						<ul class="sub-menu">
							<li class="active custom-menu">
								<a href="/shop/version3/indexk.php">Home</a>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="/shop/version3/electronics.php">Electronics</a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='electronics' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
										<li class="">
						<a href="/shop/version3/laptops.php">Laptops</a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='Laptops' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="">
						<a href="/shop/version3/kitchenware.php">APPLIANCES</a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='kitchenware' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="">
						<a href="/shop/version3/homeDecorations.php">Home& Furniture </a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='homeDecorations' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="">
						<a href="/shop/version3/men.php">Men </a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='MEN' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="">
						<a href="/shop/version3/women.php">Women</a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='WOMEN' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
					<li class="">
						<a href="/shop/version3/baby.php">BABY&KIDS </a>
						<ul>
							<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='BABY&KIDS' LIMIT 0,8 ";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
							<li>
								<a class="mega-title" href="/shop/version3/folders/subcategory.php?category_name=
									<?php echo $row['subcategory'];?>">
									<?php echo $row['subcategory'];?>
									<span class="menu-item-tag menu-item-tag-hot"></span>
								</a>
							</li>
							<?php } ?>
						</ul>
					</li>
				</ul>
			</div>
	