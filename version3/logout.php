<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	unset($_SESSION['email']);
	header("Location: indexk.php");
} else {
	header("Location: indexk.php");
}
?>