<?php
include 'functions.php';
include 'sql-connector.php';
include 'cart.php';

if (isset($_COOKIE['logged_in'])){?>
<html>
   <head>
      <title>My Store</title>
   </head>
   <body>
      <p>You are logged in. Please click below to log out.</p> 
      <form action="logout.php">
       <input type="submit" value="Logout">
      </form>
<?php } else {
include 'login.php';
}
?>

