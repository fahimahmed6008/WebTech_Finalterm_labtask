<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link type="text/css" rel="stylesheet" href="css/style.css">
        <link type="text/css" rel="stylesheet" href="css/register.css">
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
  <div class="container">
    <h2>Login</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Username</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Password</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Login</button><br>
	  <a href="register.php">Go To Register</a>
    </form>
	</div>
    <br>
    
    <?php require 'script.php'; ?>
  </body>
</html>
