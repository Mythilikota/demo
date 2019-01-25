<?php

	// LOGIN
	// ====
	include('session.php');

  

	if(isset($_POST['Btnsubmit']))
	{
		$categoryname = $_POST['categoryname'];
	
		 if(empty($categoryname)){
			$errMSG = "Please Enter categoryname.";
		}
		else
		// if no error occured, continue ....
		if(!isset($errMSG))
		{

			$sql = "INSERT INTO maincategory(categoryname) values('$categoryname')";

if ($db -> query($sql) === TRUE) {
    $successMSG ="New record created successfully";
	header("refresh:1;allproducts.php");


} else {
    $errMSG="Error: " . $sql . "<br>" . $db->error;
}

$db->close();

		}
	}
?>

<?php
	if(isset($errMSG)){
			?>
            <div class="alert alert-danger">
            	<span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	else if(isset($successMSG)){
		?>
        <div class="alert alert-success">
              <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
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
		  <p class="navbar-brand "> Welcome:&nbsp <?php echo $login_session; ?></p>
        </div>
       <form class="form-inline my-2 my-lg-0 " action="search.php" method="get">
			<input style="width:300px" class="form-control input-sm" id="skills" type="text" placeholder="Search" aria-label="Search" name="search">
			<button class="btn btn-outline-success my-2 my-sm-0"  type="submit">Search</button>
			<p><a href="logout.php"><b>Logout</b></a></p>
		</form>
        <!-- Collect the nav links, forms, and other content for toggling -->
       <!-- <div class=" navbar-collapse" id="navbar-collapse-1">
          <ul class="h">
            <p><a href="../loginapp/logout.php"><b>Logout</b></a></p>
          </ul>
         
        </div> */<!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	
   <div class="container">
    <div class="row">
      <div class="my">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
               		<li><a href="allproducts.php"></i>All Products</a></li>
					<li><a href="addcategory.php"></i>Add Category</a></li>
					<li><a href="addsubcategory.php"></i>Add SubCategory</a></li>
			      <li><a href="addproduct.php"></i>Add NewProduct</a></li>
               
            </ul>
        </div>
</div>
        <div class="col-md-10 well" style="padding:40px">
            <form method="post" enctype="multipart/form-data"  class="form-horizontal">
				<fieldset>
			<!-- Form Name -->
					<legend>Add New Category</legend>
						<div class="form-group">
							<label class="col-md-4 control-label" for="textinput"> NewCategory:</label>  
								<div class="col-md-4">
									<input id="textinput" name="categoryname" type="text" placeholder="categoryname" class="form-control input-md" required="">
    
								</div>
							</div>
							<div class="col-md-8">
								<input type="submit" name="Btnsubmit" value="submit" class="btn btn-primary pull-right">
					       </div>
																			                  
				</fieldset>                 
			</form>
        </div>
    </div>
</div>
 
 
</body>
</html>