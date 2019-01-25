<?php
  include('session.php');

 
	if(isset($_POST['btnsubmit']))
	{
		$name = $_POST['name'];
		$category_name = $_POST['category_name'];
		$subcategory = $_POST['subcategory'];
		$oldprice = $_POST['oldprice'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$rating = $_POST['rating'];
		$brandname = $_POST['brandname'];
		$type= $_POST['type'];
		

		$imgFile = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];



		if(empty($name)){
			$errMSG = "Please Enter name.";
		}
		else if(empty($category_name)){
			$errMSG = "Please Enter Your category_name .";
	   }
	   else if(empty($subcategory)){
			$errMSG = "Please Enter Your subcategory .";
	   }
		else if(empty($oldprice)){
			$errMSG = "Please Enter Your oldprice .";
		}

		else if(empty($price)){
			$errMSG = "Please Enter Your price .";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else if(empty($description)){
			$errMSG = "Please Enter Your description .";
		}

		else if(empty($rating)){
			$errMSG = "Please Enter Your rating .";
		}
		else if(empty($brandname)){
			$errMSG = "Please Enter brandname.";
		}
				else if(empty($type)){
			$errMSG = "Please Enter type.";
		}
		else
		{
			$upload_dir = '../uploads/'; // upload directory

			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension

			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions

			// rename uploading image
			$image = rand(1000,1000000).".".$imgExt;

			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions)){
				// Check file size '5MB'
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$image);
				}
				else{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			}
		}


		// if no error occured, continue ....
		if(!isset($errMSG))
		{

			$sql = "INSERT INTO addproducts(name,category_name,subcategory,oldprice,price,description,image,rating,brandname,type) 
			values('$name','$category_name','$subcategory','$oldprice','$price','$description',
			'$image','$rating','$brandname','$type')";


if ($db->query($sql) === TRUE) {
    $successMSG ="New record created successfully";

				  echo'<script> window.location="allproducts.php"; </script> ';

} else {
    $errMSG="Error: " . $sql . "<br>" . $db->error;
}

$db->close();

		}
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
	      
			<input style="width:300px" class="form-control input-md" id="skills" type="text" placeholder="Search"  name="search">
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

	<div class="col-md-10 well">
		 <form method="post" enctype="multipart/form-data" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend><center>ADD PRODUCTS</center></legend>

			<!-- Text input-->
			<div class="form-group">
				 <label class="col-md-4 control-label" for="declineType">ProductName</label>
				<div class="col-md-4">
					<input id="requestid" name="name" placeholder="Name Of the product" class="form-control input-md" required="" type="text">
				</div>
			</div>
			<!-- Select Basic -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="declineType">MainCategory</label>
					<div class="col-md-4">
						<select id="issuetype" name="category_name" class="form-control">
							<?php
								$sql = "SELECT  * FROM maincategory";
								$result = $db->query($sql);
								// output data of each row
								while($row = $result->fetch_assoc()) {
								extract($row);
							?>
							<option value="<?php echo $row['categoryname'];?>"><?php echo $row['categoryname'];?></option>
						<?php $id++; } ?>
						</select>
					</div>
			</div>
<!-- Text input-->					
		<div class="form-group">
			<label class="col-md-4 control-label" for="declineType">SubCategory</label>
				<div class="col-md-4">
					<select id="issuetype" name="subcategory" class="form-control">
						<?php
							$sql = "SELECT  * FROM subcategory";
							$result = $db->query($sql);
							// output data of each row
							while($row = $result->fetch_assoc()) {
							extract($row);
						?>
						<option value="<?php echo $row['subcategory'];?>"><?php echo $row['subcategory'];?></option>
					<?php $id++; } ?>
					</select>
				</div>
		</div>
<!-- Textarea -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="dis">Description</label>
					<div class="col-md-4">                     
						<textarea class="form-control" id="dis" placeholder="Description" name=		"description">
						</textarea>
					</div>
			</div>
<!-- Text input-->		
			<div class="form-group">
				<label class="col-md-4 control-label" for="date">OldPrice</label>  
					<div class="col-md-4">
						<input id="oldprice" name="oldprice" placeholder="OldPrice" class="form-control input-md" type="text">
    
					</div>
			</div>
 <!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="date">Price</label>  
					<div class="col-md-4">
						<input id="price" name="price" placeholder="Price" class="form-control input-md" type="text">
    
					</div>
			</div>
<!-- Text input-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="ln">Image</label>
					<div class="col-md-4">
						<input type="file" name="image" id="Photo" class="form-control input-md" required="" />

					</div>
			</div>
	<!-- Text input-->		
					<div class="form-group">
						<label class="col-md-4 control-label" for="where">Type</label>
							<div class="col-md-4">
								<select id="where" name="type" class="form-control">
									<option value="bannerimage">Banner Image</option>
									<option value="normalimage">Normal Image</option>
								</select>
							</div>
					</div>
<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="date">Rating</label>  
						<div class="col-md-4">
							<input id="Rating" name="rating" placeholder="Rating" class="form-control input-md" type="text">
    
						</div>
				</div>
				<div class="form-group">
					<label class="col-md-4 control-label" for="date">BrandName</label>  
						<div class="col-md-4">
							<input id="brandname" name="brandname" placeholder="Brandname" class="form-control input-md" type="text">
    
						</div>
				</div>
<!-- Button -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="submit"></label><center>
					<div class="col-md-4">
						<input type="submit" name="btnsubmit" value="submit" class="btn btn-primary "/>
					</div></center>
			</div>

</fieldset>
</form>
	</div>
	</div>
</div>
</html>