

<?php

include('session.php');
?>
<html lang="en">
	<head>
		<title></title>
		<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
					<link rel="stylesheet" href="../style.css">
						<style>
 
  *{padding:0px; margin:0px;}
  .my {
	  margin-left:-50px;
  }

.page a{
	  font-size:20px;
	  padding:0px 7px;
	  margin:0px 5px;
	  border:1px solid #000;
	 
  }
   
  p a { 
   margin-left:650px; 
   margin-bottom:-20px;
  }
 #skills {
	 margin-bottom:-40px;
	 margin-left:120px;
 } 
 .btn {
	 margin-bottom:-40px;
 }
 
  </style>
					</head>
					<body>
						<nav class="navbar navbar-default">
							<div class="container">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand" href="#">Online Shopping</a>
									<p class="navbar-brand "> Welcome:&nbsp 
										<?php echo $login_session; ?>
									</p>
								</div>
								<form class="form-inline my-2 my-lg-0 " action="search.php" method="get">
									<input style="width:300px" class="form-control input-md" id="skills" type="text" placeholder="Search"  name="search">
										<button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
										<p>
											<a href="logout.php">
												<b>Logout</b>
											</a>
										</p>
									</form>
									<!-- Collect the nav links, forms, and other content for toggling -->
									<!-- <div class=" navbar-collapse" id="navbar-collapse-1"><ul class="h"><p><a href="../loginapp/logout.php"><b>Logout</b></a></p></ul></div> */
									<!-- /.navbar-collapse -->
								</div>
								<!-- /.container -->
							</nav>
							<!-- /.navbar -->
							<div class="container">
								<div class="row">
									<div class="my">
										<div class="col-md-2">
											<ul class="nav nav-pills nav-stacked">
												<li class="active">
													<a href="#">
														<i class="fa fa-home fa-fw"></i>Home
													</a>
												</li>
												<li>
													<a href="allproducts.php">
													</i>All Products
												</a>
											</li>
											<li>
												<a href="addcategory.php">
												</i>Add Category
											</a>
										</li>
										<li>
											<a href="addsubcategory.php">
											</i>Add SubCategory
										</a>
									</li>
									<li>
										<a href="addproduct.php">
										</i>Add NewProduct
									</a>
								</li>
								<li>
									<a href="orders.php">Orders</a>
								</li>
								<li>
									<a href="users.php">Users</a>
								</li>
								<li>
									<!--<a href="http://www.jquery2dotnet.com">
										<i class="fa fa-calendar fa-fw"></i>Calender
									</a> !-->
								</li>
							</ul>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-10">
								<table class="table table-stripped table-bordered">
									<thead style="background-color:#337ab7; color:white">
										<tr>
											<th>Name</th>
											<th>Category</th>
											<th>Subcategory</th>
											<th>oldprice</th>
											<th>Price</th>
											<th>Rating</th>
											<th>Brand</th>
											<th>Type</th>
											<th>Image</th>
											<th>Add Image</th>
											<th>Products</th>
											<th>Image</th>
											<th>Delete</th>
										</tr>
									</thead>
									<?php

// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM addproducts";
$result =$db->query($sql); 
$r = mysqli_fetch_row($result);
$numrows = $r[0];

// number of rows to show per page
$rowsperpage = 10;
// find out total pages
$totalpages = ceil($numrows / $rowsperpage);

// get the current page or set a default
if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
   // cast var as int
   $currentpage = (int) $_GET['currentpage'];
} else {
   // default page num
   $currentpage = 1;
} // end if

// if current page is greater than total pages...
if ($currentpage > $totalpages) {
   // set current page to last page
   $currentpage = $totalpages;
} // end if
// if current page is less than first page...
if ($currentpage < 1) {
   // set current page to first page
   $currentpage = 1;
} // end if

// the offset of the list, based on current page 
$offset = ($currentpage - 1) * $rowsperpage;

// get the info from the db 
$sql = "SELECT * FROM addproducts LIMIT $offset, $rowsperpage";
$result =  $db->query($sql);

// while there are rows to be fetched...
while ($list = mysqli_fetch_assoc($result)) {
	extract($list);
	?>
									<tr>
										<td class="">
											<?php echo $list["name"]; ?>
										</td>
										<td>
											<?php echo $list["category_name"]; ?>
										</td>
										<td>
											<?php echo $list["subcategory"]; ?>
										</td>
										<td>
											<?php echo $list["oldprice"]; ?>
										</td>
										<td>
											<?php echo $list["price"]; ?>
										</td>
										<td>
											<?php echo $list["rating"]; ?>
										</td>
										<td>
											<?php echo $list["brandname"]; ?>
										</td>
										<td>
											<?php echo $list["type"]; ?>
										</td>
										<td>
											<img src="../uploads/
												<?php echo $list['image']; ?>" class="img-rounded" width="50px" height="50px" />
											</td>
											<td>
												<a  href="../admin/addimage.php?id=
													<?php echo $list["id"]; ?>">AddImage 
												</a>
											</td>
											<td>
												<a class="btn btn-primary" href="../admin/editproducts.php?id=
													<?php echo $list["id"]; ?>">
													<span class="glypicon glyphicon glyphicon-pencil"></span>
												</a>
											</td>
											<td>
												<a class="btn btn-primary" name="submit" href="../admin/editimage.php?id=
													<?php echo $list["id"]; ?>">
													<span class="glypicon glyphicon glyphicon-pencil"></span>
												</a>
											</td>
											<td>
												<a class="btn btn-danger" href="../admin/deleteproducts.php?id=
													<?php echo $list["id"]; ?>">
													<span class="glyphicon glyphicon-trash"></span>
												</a>
											</td>
										</tr>
										<?php 
}
?>
									</table>
									<div class="page">
										<?php 
// end while

/******  build the pagination links ******/
// range of num links to show
$range = 3;

// if not on page 1, don't show back links
if ($currentpage > 1) {
   // show << link to go back to page 1
   echo " 
										<a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<
										</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " 
										<a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><
										</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " [
										<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
            echo " 
										<a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>
											<b>$x</b>
										</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " 
										<a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
   // echo forward link for lastpage
   echo " 
										<a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
} // end if
/****** end build pagination links ******/
?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</body>
		</html>
