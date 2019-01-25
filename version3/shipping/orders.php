<?php
include('session.php');
?>
<html lang="en">
<head>
  <title>
  </title>
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
		  <p class="navbar-brand "> Welcome:&nbsp <?php echo $login_session; ?></p>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
		 <li> </li>
		  
            <li><a href="../loginapp/logout.php">Logout</a></li>
			
          </ul>
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	                 
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
									<a href="orders.php">Orders</a>
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
				<div class="col-lg-8">
            <table class="table table-stripped table-bordered">
      <thead style="background-color:#337ab7; color:white">
        <tr>
          <th>ProName</th>
		  <th>Price</th>
          <th>Username</th>
		  <th>Email</th>
          <th>Phone</th>
          <th>City</th>
		  <th>Street</th>
		  <th>Zipcode</th>
          <th>Image</th>
		  <th>FDate</th>
		   <th>TDate</th>
          <th>EditStatus</th>
		  
        </tr>
      </thead>

<?php

// find out how many rows are in the table 
$sql = "SELECT COUNT(*) FROM order_items ";
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


$sql = "SELECT * FROM `order_items`   LIMIT $offset, $rowsperpage ";
$result =  $db->query($sql);


// while there are rows to be fetched...
while ($list = mysqli_fetch_assoc($result)) {
	?>
	<tr>
          <td class=""><?php echo $list["name"]; ?></td>
          <td><?php echo $list["price"]; ?></td>
		  <td><?php echo $list["username"]; ?></td>
		  <td><?php echo $list["email"]; ?></td>
			<td ><?php echo $list["phone"]; ?></td>
			<td><?php echo $list["city"]; ?></td>
		   <td><?php echo $list["street"]; ?></td>
		   <td><?php echo $list["zipcode"]; ?></td>
		   <td><img src="../uploads/<?php echo $list['image']; ?>" class="img-rounded" width="50px" height="50px" /></td>
		   <td><?php echo $list["created"]; ?></td>
		 
		   <td><?php echo $list["modified"]; ?></td>
            <td><a href="editstatus.php?id=<?php echo $list['id'];?>"><?php echo $list['status'];?></a></td>
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
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><<</a> ";
   // get previous page num
   $prevpage = $currentpage - 1;
   // show < link to go back to 1 page
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'><</a> ";
} // end if 

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $totalpages)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
         echo " [<b>$x</b>] ";
      // if not current page...
      } else {
         // make it a link
         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x</a> ";
      } // end else
   } // end if 
} // end for
                 
// if not on last page, show forward and last page links        
if ($currentpage != $totalpages) {
   // get next page
   $nextpage = $currentpage + 1;
    // echo forward link for next page 
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>></a> ";
   // echo forward link for lastpage
   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>></a> ";
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

