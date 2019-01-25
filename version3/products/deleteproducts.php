<?php


	require_once 'config.php';
	
	$id= $_REQUEST['id'];
$sql = "DELETE FROM addproducts WHERE id=$id"; 
$result =  $db->query($sql);

echo'<script> window.location="allproducts.php"; </script> ';
?>


