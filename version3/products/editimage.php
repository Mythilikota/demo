	<?php
		require_once 'config.php';

$id= $_REQUEST['id'];
$sql = "SELECT * from addproducts where id='".$id."' "; 
$result =  $db->query($sql);
$list = mysqli_fetch_assoc($result);

if(isset($_POST['submit']))
	{
$id=$_REQUEST['id'];

$image2= $_REQUEST['image1'];

 if(isset($_FILES['Image'])){
      $errors= array();
      $file_name = $_FILES['Image']['name'];
      $file_size = $_FILES['Image']['size'];
      $file_tmp = $_FILES['Image']['tmp_name'];
      $file_type = $_FILES['Image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['Image']['name'])));
      $expensions= array("jpeg","jpg","png");
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp, "../uploads/".$file_name);
       
		  $sql = "UPDATE addproducts set image='".$file_name."' where id='".$id."' ";
    if (mysqli_query($db, $sql)) {
            echo "Record updated successfully";
	           echo'<script> window.location="allproducts.php"; </script> ';
            }
       }
   }
	
	$a=$_FILES['Image']['name'];
    if(strlen("$a")== 0){
       $sql = "UPDATE addproducts set image='".$image2."' where id='".$id."' ";
      if (mysqli_query($db, $sql)) {
              echo "Record updated successfully";
			  echo'<script> window.location="allproducts.php"; </script> ';
                 }
	        }

}else {
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
   <body>
   
  
  <div class="container"><br><br>
  <h3>Update Image:</h3>
  <br>
   <form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
   
            <input type="hidden" name="new" value="1" />
                     <input name="id" type="hidden" value="<?php echo $list['id'];?>" />
   
  <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Image: </label>
        <div class="col-xs-5">
           <input type="hidden"  name="image1" placeholder="Enter Name" required value="<?php echo $list['image'];?>" />  <input type="file"  name="Image" />
                       
        </div>
    </div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
           <input type = "submit" name="submit"/>
        </div>
    </div>
         
			
      </form>
      <?php } ?>
	  </div>
   </body>
   </section>
</html>