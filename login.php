<html>
   <head>
      <title>My Store</title>
   </head>
   <body>
      <div>
         <div>
            <div><b>Login</b></div><br/>
            <div>
               <form action = "index.php" method = "POST">
                  <label>Username: </label><input type = "text" placeholder = "Username" name = "username"/><br /><br />
                  <label>Password: </label><input type = "password" placeholder = "Password" name = "password"/><br/><br />
                  <input type = "submit" value = " Login "/> <br/> <br/>
                  <a href="register-users.php">Register</a>
                  <?php 
                  login();
                  ?>
               </form>
            </div>
         </div>
      </div>