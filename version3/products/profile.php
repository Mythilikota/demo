<?php
 
 require_once 'config.php';
 
 
 if(isset($_POST['btn_save_updates']))
 {
  
   
  $imgFile = $_FILES['user_image']['name'];
  $tmp_dir = $_FILES['user_image']['tmp_name'];
  $imgSize = $_FILES['user_image']['size'];
     
  if($imgFile)
  {
   $upload_dir = '../uploads/'; // upload directory 
   $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
   $userpic = rand(1000,1000000).".".$imgExt;
   if(in_array($imgExt, $valid_extensions))
   {   
    if($imgSize < 5000000)
    {
     unlink($upload_dir.$edit_row['userPic']);
     move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    }
    else
    {
     $errMSG = "Sorry, your file is too large it should be less then 5MB";
    }
   }
   else
   {
    $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";  
   } 
  }
  else
  {
   // if no image selected the old image remain as it is.
   $userpic = $edit_row['userPic']; // old image from database
  } 
      
  
  // if no error occured, continue ....
 $sql = "UPDATE addproducts set image='".$userpic."' where id='".$id."'";
   
  if (mysqli_query($db, $sql)) {
    echo "Record updated successfully";

echo'<script> window.location="allproducts.php"; </script> ';
} else {
    echo "Error updating record: " . mysqli_error($db);
}

		 
		 
      }else{
         print_r($errors);
      }
   
?>
