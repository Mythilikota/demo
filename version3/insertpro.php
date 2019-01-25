  
<?php

  // Just line const in c++ / c, this is used to create
  // constats in php. Here four constants are defined.
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'products');

  // Conncting to the mysql DB_DATABASE, mysqli_connect is
  // an alias new based constructor.
  // mysqli_connect( serverUrl, username, password, database ).
  $db = mysqli_connect(
    DB_SERVER, DB_USERNAME,
    DB_PASSWORD, DB_DATABASE);


	if(isset($_POST['addcart']))
	{
		$name = $_GET['name'];
		$category_name = $_GET['category_name'];
		$price = $_GET['price'];
		$image	 = $_GET['image'];

		$imgFile = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

		if(empty($name)){
			$errMSG = "Please Enter name.";
		}
		
		else if(empty($category_name)){
			$errMSG = "Please Enter Your category_name .";
		}

		else if(empty($price)){
			$errMSG = "Please Enter Your price .";
		}
		else if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
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
			$sql = "INSERT INTO cart(name,category_name,price,image) values("$item['name']","$item['category_name']","$item['price']","$item['image']")";

if ($db->query($sql) === TRUE) {
    $successMSG ="New record created successfully";

	header("refresh:1;allproducts.php");

} 
 else {
    $errMSG="Error: " . $sql . "<br>" . $db->error;
	}
	
$db->close();

		}
	}
?>

