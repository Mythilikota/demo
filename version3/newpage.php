<?php
session_start();
$servername = "localhost";
$username = "root";
$password= "";
$db = "products";
$con = mysqli_connect("$servername","$username","$password","$db");
if(!$con) {
	echo "connection failed :" .mysqli_connect_error();
} 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
                          
<?php
$sql = "SELECT * FROM users WHERE email = '".$_SESSION['email']."' ";
$result = $con->query($sql);
     while($row = $result->fetch_assoc()) {
		 extract($row);

if(isset($_POST['update'])){
	$password2 = $_POST['password2'];
if ($password2 != $_POST['password'])
 {
     echo("Oops! Password did not match! Try again. ");
 }
$sql1 = "UPDATE `users` SET password = '$password2' WHERE email = '".$_SESSION['email']."'";
if(mysqli_query($con,$sql1)){
	echo '<h3 style="text-align:center">Updated</h3>';
}
else {
	echo 'failed';
}
}
}
?>
<div class="container" ><br>
	<div class="col-md-3">
			</div>
	<div class="col-md-4" style="border:1px solid gray;border-radius: 15px">
		<h2><b>Change Your Password</b></h2><hr>
		<form method="POST" enctype="multipart/formdata"><br>
			<div class="form-group">
				 <label><?php echo $_SESSION['email']; ?></label>
			</div>
	 		<div class="form-group">
 				<input type="password" name="password" value="<?php echo $row['password']; ?>" class="form-control" placeholder="New Password" required>
			</div>
			 <div class="form-group">
              	<input type="password" name="password2" value="<?php echo $row['password2'];?>"class="form-control"  placeholder="Re-type Password" required>
  			</div>
  			 <div class="form-group">
		      	<input type="submit" name="update" value="Update" class="btn btn-success btn-sm">
		  	</div>
		  </form>
	</div>
</div>
		</body>
		</html>