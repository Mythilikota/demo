<?php
include('session.php');
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
$sql = "UPDATE addproducts set image2='".$file_name."' where id='".$id."' ";
if (mysqli_query($db, $sql)) {
echo "Record updated successfully";
echo'<script> window.location="allproducts.php"; </script> ';
}
}
}
$a=$_FILES['Image']['name'];
if(strlen("$a")== 0){
$sql = "UPDATE addproducts set image2='".$image2."' where id='".$id."' ";
if (mysqli_query($db, $sql)) {
echo "Record updated successfully";
echo'<script> window.location="allproducts.php"; </script> ';
}
}
}else {
?>
<?php
if(isset($_POST['Submit']))
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
$sql = "UPDATE addproducts set image3='".$file_name."' where id='".$id."' ";
if (mysqli_query($db, $sql)) {
echo "Record updated successfully";
echo'<script> window.location="allproducts.php"; </script> ';
}
}
}
$a=$_FILES['Image']['name'];
if(strlen("$a")== 0){
$sql = "UPDATE addproducts set image3='".$image2."' where id='".$id."' ";
if (mysqli_query($db, $sql)) {
echo "Record updated successfully";
echo'<script> window.location="allproducts.php"; </script> ';
}
}
}else {
?>
<html lang="en">
  <head>
    <title>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    <script src="script.js">
    </script>
    <link rel="stylesheet" href="../style.css">
    <style>
      .my {
        margin-left:-50px;
      }
    </style>
  </head> 
  <body>
    <section>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
              <span class="sr-only">Toggle navigation
              </span>
              <span class="icon-bar">
              </span>
              <span class="icon-bar">
              </span>
              <span class="icon-bar">
              </span>
            </button>
            <a class="navbar-brand" href="#">Online Shopping
            </a>
            <p class="navbar-brand "> Welcome:&nbsp 
              <?php echo $login_session; ?>
            </p>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li> 
              </li>
              <li>
                <a href="logout.php">Logout
                </a>
              </li>
            </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
      </nav>
      <!-- /.navbar -->
      <div class="container">
        <div class="row">
          <div class="my">
            <div class="col-md-2">
              <ul class="nav nav-pills nav-stacked">
                <li class="active">
                  <a href="#">
                    <i class="fa fa-home fa-fw">
                    </i>Home
                  </a>
                </li>
                <li>
                  <a href="allproducts.php">
                    </i>All Products
                </a>
              </li>
            <li>
              <a href="addcategory.php">
                </i>Add Category
            </a>
          </li>
        <li>
          <a href="addsubcategory.php">
            </i>Add SubCategory
        </a>
      </li>
    <li>
      <a href="addproduct.php">
        </i>Add NewProduct
    </a>
  </li>
<li>
									<a href="orders.php">Orders</a>
								</li>
								<li>
									<a href="users.php">Users</a>
								</li>
<li>
  <a href="http://www.jquery2dotnet.com">
    <i class="fa fa-calendar fa-fw">
    </i>Calender
  </a>
</li>
</ul>
</div>
</div>
<!------- Including CSS File ------>
<h3>Update Image:
</h3>
<br>
<div class="col-md-4">
  <form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
    <input type="hidden" name="new" value="1" />
    <input name="id" type="hidden" value="<?php echo $list['id'];?>" />
    <div class="form-group">
      <label for="inputPassword" class="control-label col-xs-2">Image2: 
      </label>
      <div class="col-xs-5">
        <input type="hidden"  name="image1" placeholder="Enter Name"  value="<?php echo $list['image2'];?>" />  
        <input type="file" required  name="Image" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-10">
        <input type = "submit" name="submit"/>
      </div>
    </div>
  </form>
</div>
<?php } ?>  
<div class="col-md-4">
  <form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
    <div class="form-group">
      <label for="inputPassword" class="control-label col-xs-2">Image3: 
      </label>
      <div class="col-xs-5">
        <input type="hidden"  name="image1" placeholder="Enter Name"  value="<?php echo $list['image3'];?>" />  
        <input type="file" required  name="Image" />
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-offset-2 col-xs-10">
        <input type = "submit" name="Submit"/>
      </div>
    </div>
  </form>
</div>
<?php } ?>   		
</section>
</body>
</html>
