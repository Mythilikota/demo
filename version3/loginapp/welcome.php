<?php
   include('session.php');

   if ($_SESSION['role'] == 0) {
     header("location:../shipping/orders.php");
   } else if ($_SESSION['role'] == 1) {
     header("location:../products/allproducts.php");
   } else if ($_SESSION['role'] == 2) {
     header("location:../admin/allproducts.php");
   } else {
     echo "person not a user!";
   }
?>
<html>

   <head>
      <title>Welcome </title>
   </head>

   <body>
   
      <h2><a href="logout.php">Sign Out</a></h2>
   </body>

</html>
