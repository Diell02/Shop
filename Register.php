
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Register.css">
</head>
<body>

  <div class="header">
    <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
    <div class="header-right">
      <a href="Home.php">Home</a>
      <a href="Login.php">Login</a>
      <a class="active" href="Register.php">Regjistrohu</a>
      
    </div>
  </div>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return Validate()" name="vform" >
        <div class="container">
          <h1 id="reg">Regjistrohu</h1>
          
          <hr>
          <div id="name_div">
            <label>Name</label> <br>
            <input type="text" name="name" class="textInput">
            <div id="name_error"></div>
          </div>

          <div id="lastname_div">
            <label>Lastname</label> <br>
            <input type="text" name="lastN" class="textInput">
            <div id="lastname_error"></div>
          </div>

          <div id="address_div">
            <label>St. Address</label> <br>
            <input type="text" name="address" class="textInput">
            <div id="address_error"></div>
          </div>

          <div id="phone_div">
            <label>Phone Number</label> <br>
            <input type="number" name="phone" class="numberInput">
            <div id="phone_error"></div>
          </div>

          <div id="username_div">
            <label>Username</label> <br>
            <input type="text" name="username" class="textInput">
            <div id="name_error"></div>
          </div>

          <div id="email_div">
            <label>Email</label> <br>
            <input type="email" name="email" class="textInput">
            <div id="email_error"></div>
          </div>

          <div id="zipcode_div">
            <label>Zipcode</label> <br>
            <input type="number" name="zipcode" class="numberInput">
            <div id="zipcode_error"></div>
          </div>
      
          <div id="password_div">
            <label>Password</label> <br>
            <input type="password" name="pass" class="textInput">
          </div>

          <div id="pass_confirm_div">
             <label>Password confirm</label> <br>
             <input type="password" name="passc" class="textInput">
             <div id="password_error"></div>
          <hr>
      
          <input type="submit" id="registerBtn" name="registerBtn" value="Register">
        </div>
      </form>
      <?php include_once 'registerController.php';?>
      <div id="con-r"><button type="submit" class="loginbtn" onclick="login()">Login</button></div>
      <script src="Register.js"></script>
</body>
</html>