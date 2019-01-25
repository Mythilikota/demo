<?php
$servername = "localhost";
$username = "root";
$password= "";
$db = "products";
$con = mysqli_connect("$servername","$username","$password","$db");
if(!$con) {
	echo "connection failed :" .mysqli_connect_error();
} 
session_start();
if(isset($_POST['submit'])){
$sql = ("SELECT email FROM `users` where email = '".$_POST['email']."'  ");
$res=mysqli_query($con,$sql);

            if (mysqli_num_rows($res) > 0) {
            // output data of each row
            $row = mysqli_fetch_assoc($res);
            $_SESSION['email'] = $row['email'];
            if($_POST['email']== $row['email'])
            {
                header('location:newpage.php');
            }
        }else { //here you need to add else condition
            echo '<h4 style="text-align:center">Sorry, Your emails doesnot exists in our record</h4>';
        }
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
		<form method="POST" enctype="multipart/formdata"><br><br>
			<div class="col-md-3">
			</div>
			<div class="col-md-5">
				<h2><b>Enter Your Mail ID to change your password</b></h2><hr>
				<div class="form-group">
					<input type="email" name="email" class="form-control" required="">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Submit" class="btn btn-success">
				</div>
			</div>
		</form>
	</body>
</html>
