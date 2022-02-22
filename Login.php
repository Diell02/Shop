<?php
SESSION_START();
    if (isset($_SESSION['username'])){
        header("location: Shop.php");
    }else{

    
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="LoginS.css">
<script src="LoginJs.js"></script>
</head>
<body>
  <div class="header">
    <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
    <div class="header-right">
      <a href="Home.php">Home</a>
      <a class ="active" href="Login.php">Login</a>
    </div>
  </div>

<div class="imgcontainer">
  <img src="Pics/Login.png" alt="Avatar" class="avatar">
</div>
<div class="container">
  <div class="main">
  <h2>Login</h2>
  <form id="form_id" method="post" name="login" action="login.php">
  <label>User Name :</label>
  <input type="text" name="username" id="username"/>
  <label>Password :</label>
  <input type="password" name="password" id="password"/>
  <input type="submit" name="loginBtn" value="Login" id="submit" /><br>
  <br><input type="button" value="Register" id="reg" onclick="regi()"/>
  </form>
  <?php
    require_once 'loginValidate.php';

    ?>
  </div>
  </div><br>

</body>
</html>
<?php
}
?>
