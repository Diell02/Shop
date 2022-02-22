<!DOCTYPE html>
<html>
    <head>
      
        <title>Project</title>
        <link rel="stylesheet" type="text/css" href="Contact.css">
    </head>
    
    <body >
      
      <div class="header" id="Header1">
        <a href="Home.html" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
        <div class="header-right">
          <a href="Home.html">Home</a>
          <a class ="active" href="Contact.php">Contact</a>
          <a href="About.html">About</a>
          <a href="Shop.php">Shop</a>
          <a href="Login.php">Login</a>
        </div>
      </div>

        <div class="container">
          <div id="map">
            <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTT55Tbb8I00KPYu079yjwC2DLdLNoi2c&callback=initMap&libraries=&v=weekly"
            async
          ></script></div>
            <div class="row">
              <div class="column">
                <form method="post" action="Contact.php" name="contact">
                  <label for="name">Emri</label>
                  <input type="text" id="name" name="name" placeholder="Emri juaj...">
                  <label for="lastN">Mbiemri</label>
                  <input type="text" id="lastN" name="lastN" placeholder="Mbiemri juaj...">
                  <label for="address">Adresa</label>
                  <input type="text" id="address" name="address" placeholder="Adresa juaj...">
                  <label for="email">Email</label>
                  <input type="email" id="email" name="email" placeholder="Email..">

                  <textarea for ="message" id="message" name="message" placeholder="Mesazhi..." style="height:90px"></textarea>
                  <input type="submit" name="submit" value="Dergo">
                </form>
                <?php 
                  require_once 'Contactt.php';
                ?>
              </div>
            </div>
          </div>
            
          <div class="footer">
            <div class="footer-left">
              <a href="Home.html" class="logo"><img src="Pics/Black.png" width="40px", height="40px">Kenzol</a>
              <ul id="ul1">
                <li><a href="Home.html">Home</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="About.html">About</a></li>
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
          <script src="Contact.js"></script>
    </body>
    
</html>