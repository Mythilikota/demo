<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Brand</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <?php
						require_once 'admin/config.php';

				$sql = "SELECT  * FROM maincategory";
				$result = $db->query($sql);
			

    while($row = mysqli_fetch_array($result)){
                              $cr = $row['categoryname'];
							  			
			?>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#"><?php echo $cr; ?></a></li>
      
     
    </ul>
	<?php  } ?>
    <div class="col-sm-3 col-md-3">
        <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Cerca" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
	  						<?php
					
					    $sql = "SELECT  * FROM subcategory where maincategory='kitchenware'  LIMIT 0,8";
					
					$result = $db->query($sql);
					
					// output data of each row
					while($row = $result->fetch_assoc()) {
					extract($row);
						?>
           
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><?php echo $row['subcategory'];?></a></li>
		<?php }?>
        </ul>
			
      </li>
    </ul>	
		
  </div><!-- /.navbar-collapse -->
</nav>

</body>
</html>