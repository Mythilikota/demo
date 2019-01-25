<?php
  ini_set("display_errors", true);
  // check user is logged in.
  include('session.php');
  // get currently logged in user id.
  // if the role of the user is greater than or equal to user allow access to
  // this page.
  if ($_SESSION['role'] >= 1) {
    echo "Welcome " . $login_session; // $login_session holds username.
  }
  // else redirect to page not found.
  else {
    header("location:404.php");
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