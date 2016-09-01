<?php 
include 'shop-header.php';

if( isset( $_POST['username'])) {
   register_user( $_POST['username'], $_POST['firstname'], $_POST['lastname'], $_POST['password'] );
}

?>
<form method="post" action="">
  Username: <br>
  <input type="text" name="username" value=""><br>
  First Name: <br>
  <input type="text" name="firstname" value=""><br>
  Last Name: <br>
  <input type="text" name="lastname" value="" ><br>
  Password: <br>
  <input type="password" name="password" value="" ><br>
  <input type="submit" value="Submit">
</form>
    <?php
    include 'shop-footer.php'
    ?>