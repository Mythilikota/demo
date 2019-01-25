
<?php
	require_once 'config.php';

$id=$_REQUEST['id'];
$sql = "SELECT * from addproducts where id='".$id."'"; 
$result =  $db->query($sql);
$list = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html>
<head>
   

<meta charset="utf-8">
<title></title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="form">
<br><br>
<?php

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];

$name =$_REQUEST['name'];
$category_name =$_REQUEST['category_name'];
$subcategory =$_REQUEST['subcategory'];
$oldprice=$_REQUEST['oldprice'];
$price=$_REQUEST['price'];

$rating =$_REQUEST['rating'];
$brandname =$_REQUEST['brandname'];
$type =$_REQUEST['type'];

$sql = "UPDATE addproducts set name='".$name."',category_name='".$category_name."',
subcategory='".$subcategory."',oldprice='".$oldprice."',price='".$price."',
rating='".$rating."',brandname='".$brandname."',type='".$type."' where id='".$id."'";



if (mysqli_query($db, $sql)) {
    echo "Record updated successfully";
	echo'<script> window.location="allproducts.php"; </script> ';
} else {
    echo "Error updating record: " . mysqli_error($db);
}




}else {
?>
<div>

<form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >

        <input type="hidden" name="new" value="1" />
		<input name="id" type="hidden" value="<?php echo $list['id'];?>" />
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Name</label>
        <div class="col-xs-5">
            
			<input type="text" class="form-control" name="name" placeholder="Enter Name" required   value="<?php echo $list['name'];?>" />
        </div>
    </div>
	
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Oldprice</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="oldprice" placeholder="Enter Name" required value="<?php echo $list['oldprice'];?>" />
        </div>
    </div>
   <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Price</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="price" placeholder="Enter Name" required value="<?php echo $list['price'];?>" />
        </div>
    </div>
 <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">description</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="description" placeholder="Enter Name" required value="<?php echo $list['description'];?>" />
        </div>
    </div>
     <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">rating</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="rating" placeholder="Enter Name" required value="<?php echo $list['rating'];?>" />
        </div>
    </div>
     <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">brandname</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="brandname" placeholder="Enter Name" required value="<?php echo $list['brandname'];?>" />
        </div>
    </div>
	 <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-2">Type</label>
        <div class="col-xs-5">
           <input type="text" class="form-control"  name="type" placeholder="Enter type" required value="<?php echo $list['type'];?>" />
        </div>
    </div>
      <div class="form-group">
				<label class="col-xs-2 control-label" for="declineType">MainCategory</label>
					        <div class="col-xs-5">
						<select id="issuetype" name="category_name" class="form-control">
							<?php
								$s = "SELECT  * FROM maincategory";
								$res = $db->query($s);
								// output data of each row
								while($list = $res->fetch_assoc()) {
								extract($list);
							?>
							<option title='<?php echo $list['categoryname'];?>' value="<?php echo $list['categoryname'];?>"><?php echo $list['categoryname'];?></option>
						<?php  } ?>
						</select>
					</div>
			</div>
			
		<div class="form-group">
			<label class="col-xs-2 control-label" for="declineType">SubCategory</label>
				        <div class="col-xs-5">
					<select id="issuetype" name="subcategory" class="form-control">
						<?php
							$s = "SELECT  * FROM subcategory";
							$res = $db->query($s);
							// output data of each row
							while($list = $res->fetch_assoc()) {
							extract($list);
						?>
						<option title='<?php echo $list['subcategory'];?>' value="<?php echo $list['subcategory'];?>"><?php echo $list['subcategory'];?></option>
					<?php  } ?>
					</select>
				</div>
		</div>
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-10">
           <input name="submit" type="submit" value="Update" />
        </div>

</form>
 
<?php } ?>



</div>
</div>
</body>
</html>