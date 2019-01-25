
<?php  
	require_once '../admin/config.php';

$id=$_REQUEST['id'];

$sql = "SELECT * from order_items where id='".$id."'"; 
$result =  $db->query($sql);
$row = mysqli_fetch_assoc($result);
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
require_once "phpmailer/class.phpmailer.php";
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$email = $_REQUEST['email'];

$status=$_REQUEST['status'];

$sql = "UPDATE order_items set status='".$status."' where id='".$id."'";
 


if (mysqli_query($db, $sql)) {
   $mailto = $email;
   $my = 'nrupesh08@gmail.com';
      $mailbody="Your order status '"   .$status."'";
      $mail = new PHPMailer(true);
      $mail->IsSMTP();
      $mail->isHTML(true);
      $mail->SMTPDebug = 0;
      $mail->SMTPAuth = true;
      $mail->SMTPSecure = "ssl";
      $mail->Host = "smtp.gmail.com";
      $mail->Port = '465';
      $mail->AddAddress($email,$my);
      $mail->Username ="webteach02@gmail.com";
      $mail->Password ="rupi7382426840";
      $mail->SetFrom('webteach02@gmail.com','upix');
      $mail->Subject='This mail is regarding about your order delivery status';
      $mail->Body=$mailbody;
      $mail->Send();
} else {
    echo "Error updating record: " . mysqli_error($db);
}

}else {
?>
<div>
<form class="form-horizontal"  method = "POST" enctype = "multipart/form-data"  >
<center><h1>Status For The Delivery</h1></center><br>
<div class="container">
        <input type="hidden" name="new" value="1" />
		<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
   <input type="hidden" name="email" value="<?php echo $row['email'];?>">
   <div class="form-group">
  <label class="col-md-4 control-label" for="where">Status</label>
  <div class="col-md-4">
    <select id="where" name="status" class="form-control">
      <option value="Delivered">Delivered</option>
	    <option value="Delivered in 2 days">Delivered in 2 days</option>
		 <option value="Delivered in 1 day">Delivered in 1 day</option>
      <option value="Not Delivered">Not Delivered</option>
	  <option value="Progressing">Progressing</option>
    </select>
  </div>
</div>
    
    <div class="form-group">
        <div class="col-xs-offset-4 col-xs-8">
           <input name="submit" type="submit" value="Update" />

        </div>  
</form>

<?php } ?>

</div>
</div>
</div>
</body>
</html>