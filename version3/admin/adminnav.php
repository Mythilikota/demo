
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .col-md-3 {   
  background-image: url(../images/back.jpg);
  
  }
  </style>
</head>
<body>

<div class="container-fluid">
    <!-- Second navbar for categories -->
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
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Logout</a></li>
          </ul>
         
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
        <div class="col-md-3" >
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
              					<li><a href="allproducts.php"></i>All Products</a></li>
					<li><a href="addcategory.php"></i>Add Category</a></li>
					<li><a href="addsubcategory.php"></i>Add SubCategory</a></li>
                 <li><a href="addproduct.php"></i>Add NewProduct</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-calendar fa-fw"></i>Calender</a></li>
                <li><a href="http://www.jquery2dotnet.com"><i class="fa fa-book fa-fw"></i>Library</a></li>

            </ul>
			
        </div>
         
    </div>

</body>
</html>