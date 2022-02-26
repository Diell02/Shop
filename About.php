<?php

require "connectionA.php";
 

$id1 = 1;
$stmt1 = $pdo->prepare("SELECT * FROM `about_contents` WHERE `id`=?");
$stmt1->execute([$id1]);
$conpar1 = $stmt1->fetch();

$id2 = 2;
$stmt2 = $pdo->prepare("SELECT * FROM `about_contents` WHERE `id`=?");
$stmt2->execute([$id2]);
$conpar2 = $stmt2->fetch();

$id3 = 3;
$stmt3 = $pdo->prepare("SELECT * FROM `about_contents` WHERE `id`=?");
$stmt3->execute([$id3]);
$conpar3 = $stmt3->fetch();

$id4 = 4;
$stmt4 = $pdo->prepare("SELECT * FROM `about_contents` WHERE `id`=?");
$stmt4->execute([$id4]);
$conpar4 = $stmt4->fetch();

$id5 = 5;
$stmt5 = $pdo->prepare("SELECT * FROM `about_contents` WHERE `id`=?");
$stmt5->execute([$id5]);
$conpar5 = $stmt5->fetch();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Project</title>
        <link rel="stylesheet" type="text/css" href="About.css">
    </head>
    
    <body>
        <script src="About.js"></script>
        <div class="header">
            <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
            <div class="header-right">
              <a href="Home.php">Home</a>
              <a href="Contact.php">Contact</a>
              <a class="active" href="About.php">About</a>
              <a href="Shop.php">Shop</a>
              <a href="Login.php">Login</a>
              
            </div>
          </div>

          
            <div class="para">
              <h2 id="titu">Our Story</h2>
              <div id="linet"></div>

            <p id="par1"><?=$conpar1["contents"]?></p>
              

            <p id="par2"><?=$conpar2["contents"]?></p>

            <p id="par3"><?=$conpar3["contents"]?></p>

            <p id="par4"><?=$conpar4["contents"]?>.</p>

            <p id="par5"><?=$conpar5["contents"]?></p>
              
              </div>
              <h2 id="titullf">Founders</h2>
              <div class="founders">
                
              <div id="pers1">
              <div class="img1"><img src="Pics/Black.png" width="180px", height="180px"></div>
              <h3 id="texti1">Diell</h3></div>
              
              <div id="pers2">
              <div class="img2"><img src="Pics/Black.png" width="180px", height="180px"></div>
              <h3 id="texti2">Dion</h3></div>
              </div>

            <div class="line"></div>
          <div class="footer">
            <div class="footer-left">
              <a href="Home.php" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
              <ul id="ul1">
                <li><a href="Home.php">Home</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="Login.php">Login</a></li>
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