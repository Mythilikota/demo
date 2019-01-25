<?php
require_once 'admin/config.php';
$id=$_REQUEST['id'];
$sql = "SELECT * from users where id='".$id."'"; 
$result =  $db->query($sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="alert alert-warning">
  <strong>Warning!
  </strong> Please relogin when you updated your address details.
</div>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
    </title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
  </head>
  <body>
    <div class="form">
      <br>
      <br>
      <?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$username =$_REQUEST['username'];
$phone =$_REQUEST['phone'];
$city =$_REQUEST['city'];
$street=$_REQUEST['street'];
$zipcode=$_REQUEST['zipcode'];
$sql = "UPDATE users set username='".$username."',phone='".$phone."',city='".$city."',street='".$street."',zipcode='".$zipcode."' where id='".$id."'";
if (mysqli_query($db, $sql)) {
echo "Record updated successfully";
echo'<script> window.location="logout.php"; </script> ';
} else {
echo "Error updating record: " . mysqli_error($db);
}
}else {
?>
      <div>
        <form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
          <input type="hidden" name="new" value="1" />
          <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
          <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2">Name
            </label>
            <div class="col-xs-5">
              <input type="text" class="form-control" name="username" placeholder="Enter Name" required value="<?php echo $row['username'];?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="input" class="control-label col-xs-2">Phone
            </label>
            <div class="col-xs-5">
              <input type="text" class="form-control"  name="phone" placeholder="Enter Name" required value="<?php echo $row['phone'];?>" />
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="control-label col-xs-2">City
            </label>
            <div class="col-xs-5">
              <input type="text" class="form-control"  name="city" placeholder="Enter Name" required value="<?php echo $row['city'];?>" />
              </p>
          </div>
          </div>
        <div class="form-group">
          <label for="inputPassword" class="control-label col-xs-2">Street
          </label>
          <div class="col-xs-5">
            <input type="text" class="form-control"  name="street" placeholder="Enter Name" required value="<?php echo $row['street'];?>" />
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword" class="control-label col-xs-2">Zipcode
          </label>
          <div class="col-xs-5">
            <input type="text" class="form-control"  name="zipcode" placeholder="Enter Name" required value="<?php echo $row['zipcode'];?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-2 col-xs-10">
            <input name="submit" class="btn btn-warning" type="submit" value="Update" />
          </div>
          </form>
        <?php } ?>
      </div>
    </div>
  </body>
</html>
