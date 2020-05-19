<?php
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<title>Shroomgirl - Online Game | Way of Life</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../stylesheet.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.SG-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-coffee, .fa-frog, .fa-tachometer-alt {font-size:200px}
.fa-shopping-basket{font-size: 20px}
</style>
<body>

<!-- Navbar -->
<div class="SG-top">
  <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
    <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-right SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a onclick="window.location.href = '../main.php';"                     href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Home</a>
    <a onclick="window.location.href = '../gameGuide/gameGuide.php';"      href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
    <a onclick="window.location.href = '../news/news.php';"                href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
    <a onclick="window.location.href = '../community/community.php';"      href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
    <a onclick="window.location.href = 'shop.php';"                        href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>

    <?php
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo "
    <a href=\"../login.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Login</a>
    ";
    }
    else
    echo "
    <a href = '../game/PickItRic.php';\" href=\"#\" class=\"SG-bar-item SG-display-middle SG-red SG-button SG-hide-small SG-padding-large SG-hover-white\">PLAY</a>
    <a href=\"#\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Checkout</a>
    ";
    ?>

  </div>



  <!-- Navbar on small screens -->
  <div id="navDemo" class="SG-bar-block SG-white SG-hide SG-hide-large SG-hide-medium SG-large">

    <a onclick="window.location.href = '../main.php';"                     href="#" class="SG-bar-item SG-button SG-padding-large">Home</a>
    <a onclick="window.location.href = '../gameGuide/gameGuide.php';"      href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
    <a onclick="window.location.href = '../news/news.php';"                href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
    <a onclick="window.location.href = '../community/community.php';"      href="#" class="SG-bar-item SG-button SG-padding-large">Community</a>
    <a onclick="window.location.href = 'shop.php';"                        href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
  </div>
</div>

<!-- Header -->
<header class="SG-container SG-yellow SG-center" style="padding:128px 16px">
  <h1 class="SG-margin SG-jumbo">'Shroom Shop</h1>
  <p class="SG-xlarge">Buying some shrooms? Carefull how you answer that...</p>
  <?php

  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "
    <button onclick=\"location.href='../login.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Login</button>
      <button onclick=\"location.href='../register.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Sign Up</button>
    ";
  }
  ?>
</header>

<header class="SG-container SG-bar SG-black SG-center SG-text-white"  font-weight:bold; >
<div class="SG-center SG-jumbo">
      <h1>Dont have the skill to win? Wallet bulging? Well we can help!</h1>
</div>
</header>

<!-- First Grid -->
<div class="SG-row-padding SG-padding-64 SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
      <h1>F-Jump - Hamstring Upgrade </h1>
      <br>
        <h4>
          Frog Jump <br>
          Jump like a frog on steroids! We dont know how far that is but it paints the right mental image.
          Be head, shoulder.. hell even feet over your opponents as your death defying leaps project you into the lead.
          Everyone knows what you have done, but you dont care... your the one with the medal. </h4>
        <br>
          <div class="SG-right SG-text-blue">
            <h2>
              only  65 <img src="../images/Mushroom_1.png" alt="Girl running left and right" width="50" height="40">
            </h2>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div>
            <button type="button" class="SG-button SG-right SG-blue SG-padding-2">buy now</button>
          </div>
    </div>

    <div class="SG-third SG-center">
      <i class="fa fa-frog SG-padding-64 SG-text-green"></i>
    </div>
  </div>
</div>


<!-- Second Grid -->
<div class="SG-row-padding SG-light-grey SG-padding-64 SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
      <h1>U-Sane? - Irresponsible Speeds</h1>
      <br>
        <h4>
          U-Sane - Speed Upgrade<br>
          Lost your mind in the slow lane? Excellent. Accelerate to speeds compatible only with insanity, excessive jaw movement and other unconventional skin manipulation techniques.
          Now you can wizz past your opponents in the fast lane, in your own express highway to the top.
          They'll try and complain but they are too busy asphyxiating in the cloud of burnt rubber behind you.

        </h4>
        <br>
          <div class="SG-right SG-text-blue">
            <h2>
                only  55 <img src="../images/Mushroom_1.png" alt="Girl running left and right" width="50" height="40">            </h2>
          </div>
          <br>
          <br>
          <br>
          <br>
          <div>
            <button type="button" class="SG-button SG-right SG-blue SG-padding-2">buy now</button>
          </div>
    </div>

    <div class="SG-third SG-center">
      <i class="fa fa-tachometer-alt SG-padding-64 SG-text-red"></i>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="SG-container SG-padding-64 SG-center SG-opacity">
  <div class="SG-xxlarge SG-padding-32">
    <a href="https://en-gb.facebook.com/" class="fab fa-facebook-square SG-hover-opacity"></a>
    <a href="https://www.instagram.com/accounts/login/?hl=en" class="fab fa-instagram-square SG-hover-opacity"></a>
    <a href="https://accounts.snapchat.com/accounts/login?client_id=geo" class="fab fa-snapchat-square SG-hover-opacity"></a>
    <a href="https://www.pinterest.co.uk/login/" class="fab fa-pinterest-square SG-hover-opacity"></a>
    <a href="https://twitter.com/login?lang=en-gb" class="fab fa-twitter-square SG-hover-opacity"></a>
    <a href="https://uk.linkedin.com/" class="fab fa-linkedin-square SG-hover-opacity"></a>
 </div>

</footer>

<script>


// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("SG-show") == -1) {
    x.className += " SG-show";
  } else {
    x.className = x.className.replace(" SG-show", "");
  }
}
</script>

</body>
</html>
