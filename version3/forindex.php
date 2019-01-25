<p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
<form name="chngpwd" action="" method="post" onSubmit="return valid();">
<table align="center">
<tr height="50">
<td>Old Password :</td>
<td><input type="password" name="opwd" id="opwd"></td>
</tr>
<tr height="50">
<td>New Passowrd :</td>
<td><input type="password" name="npwd" id="npwd"></td>
</tr>
<tr height="50">
<td>Confirm Password :</td>
<td><input type="password" name="cpwd" id="cpwd"></td>
</tr>
<tr>
<td><a href="index.php">Back to login Page</a></td>
<td><input type="submit" name="Submit" value="Change Passowrd" /></td>
</tr>
 </table>
</form>
<?php
session_start();

if(isset($_POST['Submit']))
{
$sql=mysql_query("SELECT password FROM  userinfo where password='".$_POST['opwd']."' && email='".$_SESSION['login']."'");
$num=mysql_fetch_array($sql);
if($num>0)
{
 $con=mysql_query("update userinfo set password='".$_POST['npwd']."' where email='".$_SESSION['login']."'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>