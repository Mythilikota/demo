<?php
    ini_set("display_errors", true);

   include("../admin/config.php");

   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from the form.
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id, role FROM adminlogin WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
         // username details.
         $_SESSION['login_user'] = $myusername;
         // save id for getting user details once again.
         $_SESSION['id'] = $row['id'];
         $_SESSION['role'] = $row['role'];
       if ($_SESSION['role'] == 0) {
     header("location:../shipping/orders.php");
   } else if ($_SESSION['role'] == 1) {
     header("location:../products/allproducts.php");
   } else if ($_SESSION['role'] == 2) {
     header("location:../admin/allproducts.php");
   } else {
     echo "person not a user!";
   }
         // redirect someplace.
         
          } else {
      $error = "Your Login Name or Password is invalid";
    }
   }
?>
<html>
	<head>
      <title>Login Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style type = "text/css">
			body{
			background: url(http://mymaplist.com/img/parallax/back.png);
			background-color: #444;
			background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
              }
			.vertical-offset-100{
			padding-top:100px;
			}
		</style>
	</head>
<body bgcolor = "#FFFFFF">
    <div class="container">
		<div class="row vertical-offset-100">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Please sign in</h3>
					</div>
					<div class="panel-body">
						<form accept-charset="UTF-8" role="form" method="post">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="username" name="username" type="text">
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" type="password" value="">
								</div>
									<input  type="submit"  value="submit" name="submit" class="btn btn-success btn-block">
<div
              style="font-size:11px; color:#cc0000; margin-top:10px">
                <?php if ( isset($error) ) echo $error; ?>
              </div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
