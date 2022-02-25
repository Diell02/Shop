<?php 
  $hide="";
  $hidee="";
  session_start();
  if(!isset($_SESSION['username'])){
    header("Location: Login.php" );
  }
  else{
    if($_SESSION['role']== "admin"){
      $hide = "";
      $hidee="hide";
    }else{
      $hide = "hide";
      $hidee= "hide";
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
        <link rel="stylesheet" type="text/css" href="Shop.css">
        <style>
        .hide{
          display:none;
        }
        </style>
    </head>
    
    <body>
        <script src="Shop.js"></script>
        <div class="header">
            <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
            <div class="header-right">
              <a href="Home.php">Home</a>
              <a href="Contact.php">Contact</a>
              <a href="About.php">About</a>
              <a class="active" href="Shop.php">Shop</a>
              <a href="Login.php" class="<?php echo $hidee ?>">Login</a>
              <a href="dashboard.php" class="<?php echo $hide ?>">Dashboard</a>
              <a href="logout.php">Logout</a><br>
              
            </div>
          </div>
          <div class="Shirt-L">
          <img src="Pics/Black.png" width="250px", height="250px">
          <div class="Shirts-L">
            <h1 id="emri">Bluze</h1>
            <h2 id="cmimi">15.99$</h2>
            <p id="par">Perdorimi: Vrapim<br>Materiali: Pambuk 90%, Poliester 10%</p>
            <br><a href="Shop.php"><button id="buy-L">Buy</button></a></div>
        </div>

        <div class="Shirt-R">
          <img src="Pics/GreenArmy.png" width="250px", height="250px">
          <div class="Shirts-R">
            <h1 id="emri">Bluze</h1>
            <h2 id="cmimi">15.99$</h2>
            <p id="par">Perdorimi: Vrapim<br>Materiali: Pambuk 90%, Poliester 10%</p>
            <br><a href="Shop.php"><button id="buy-R">Buy</button></a></div>
        </div>

        <div class="Shirt-L">
          <img src="Pics/AquaGreen.png" width="250px", height="250px">
          <div class="Shirts-L">
            <h1 id="emri">Bluze</h1>
            <h2 id="cmimi">15.99$</h2>
            <p id="par">Perdorimi: Vrapim<br>Materiali: Pambuk 90%, Poliester 10%</p>
            <br><a href="Shop.php"><button id="buy-L">Buy</button></a></div>
        </div>

        <div class="Shirt-R">
          <img src="Pics/DarkRed.png" width="250px", height="250px">
          <div class="Shirts-R">
            <h1 id="emri">Bluze</h1>
            <h2 id="cmimi">15.99$</h2>
            <p id="par">Perdorimi: Vrapim<br>Materiali: Pambuk 90%, Poliester 10%</p>
            <br><a href="Shop.php"><button id="buy-R">Buy</button></a></div>
        </div>

        <div class="Shirt-L">
          <img src="Pics/AquaGreen.png" width="250px", height="250px">
          <div class="Shirts-L">
            <h1 id="emri">Bluze</h1>
            <h2 id="cmimi">15.99$</h2>
            <p id="par">Perdorimi: Vrapim<br>Materiali: Pambuk 90%, Poliester 10%</p>
            <br><a href="Shop.php"><button id="buy-L">Buy</button></a></div>
        </div>

        <div class="Shirt-R">
          <img src="Pics/DarkRed.png" width="250px", height="250px">
          <div class="Shirts-R">
            <h1 id="emri">Bluze</h1>
            <h2 id="cmimi">15.99$</h2>
            <p id="par">Perdorimi: Vrapim<br>Materiali: Pambuk 90%, Poliester 10%</p>
            <br><a href="Shop.php"><button id="buy-R">Buy</button></a></div>
        </div>

          <div class="line"></div>
      <div class="visline"></div>
      
    <div class="footer">
      <div class="footer-left">
        <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
          <ul id="ul1">
            <li><a href="Home.php">Home</a></li>
            <li><a href="Contact.php">Contact</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="Login.php">Login</a></li></ul>
            </div>
          <div class="footer-right">
                <a href="https://www.facebook.com" class="icon"><img src="Pics/fb.png" width="30px", height="30px"></a>
                <a href="https://www.twitter.com" class="icon"><img src="Pics/tw.png" width="30px", height="30px"></a>
                <a href="https://www.google.com" class="icon"><img src="Pics/g.png" width="30px", height="30px"></a>
                <a href="https://www.linkedin.com" class="icon"><img src="Pics/in.png" width="30px", height="30px"></a>
                <br><br><br>
                <ul id="ul2"><li>Phone:+383123123</li>
                  <li>Email:ubt-uni@ubt-uni.net</li>
                  <li>Adresa:Nena Tereze</li></ul></div> 
    </div>
  </body>
    
</html>

<?php 
  }
?>