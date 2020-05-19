<?php
// Initialize the session
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<title>Shroomgirl - Online Game | Way of Life</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.SG-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-gamepad,.fa-coffee, .fa-seedling, .fa-leaf, .fa-snowflake {font-size:200px}
.fa-exclamation-circle {font-size: 75px}
body {
background-image: url('images/giphygrass.gif');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}


</style>

<body>

<!-- Navbar -->
<div class="SG-top">
  <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
    <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-left SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a onclick="window.location.href = 'gameGuide/gameGuide.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
    <a onclick="window.location.href = 'news/news.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
    <a onclick="window.location.href = 'community/community.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
    <a onclick="window.location.href = 'shop/shop.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>
    <?php

    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo "

    <a href=\"login.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Login</a>
    ";
  }
    else
    echo "
    <a href = 'game/PickItRic.php';\" href=\"#\" class=\"SG-bar-item SG-display-middle SG-red SG-button SG-hide-small SG-padding-large SG-hover-white\">PLAY</a>
    <a href=\"logout.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Logout</a>
    ";
    ?>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="SG-bar-block SG-white SG-hide SG-hide-large SG-hide-medium SG-large">
    <a onclick="window.location.href = 'gameGuide/gameGuide.php';" href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
    <a onclick="window.location.href = 'news/news.php';" href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
    <a onclick="window.location.href = 'community/community.php';" class="SG-bar-item SG-button SG-padding-large">Community</a>
    <a onclick="window.location.href = 'shop/shop.php';" href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
  </div>
</div>


<header class="SG-container SG-center SG-text-white" style="padding:128px 16px" font-weight:bold; >
  <h1 class="SG-margin SG-jumbo">Shroomgirl</h1>
  <p class="SG-xlarge">Free-to-Play</p>

  <?php

$button = ($_SESSION["username"]);

  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "
    <button onclick=\"location.href='login.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Login</button>
      <button onclick=\"location.href='register.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Sign Up</button>
    ";
  }

  else



echo "<button onclick=\"location.href='game/PickItRic.php';\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Hello $button
</button>";

  ?>

</header>

<header class="SG-container SG-bar SG-black SG-center SG-text-white"  font-weight:bold; >
<div class="SG-center SG-jumbo">
      <h1>Levels</h1>
</div>
</header>

<!-- First Grid -->
<div class="SG-row-padding SG-padding-16 SG-white SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
        <h1> Spring </h1>
              <input type="image" src="images/levelOneSnapshot.png"   alt="Image of level one, Spring"  onclick="window.location.href = 'game/PickItRic.php?07';" name="saveForm" class="btTxt submit" id="saveForm" width="400" height="300"/>
      <h5 class="SG-padding-16"> </h5>
      <p class="SG-text-grey"></p>
    </div>

    <div class="SG-third SG-center">
      <i class="fa fa-seedling SG-padding-64 SG-text-green"></i>
      <h4> Take a trip through a springtime oasis, as you get to grips with the game</h4>
    </div>
  </div>
</div>


<!-- Second Grid -->
<div class="SG-row-padding SG-light-grey SG-padding-16 SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
      <h1> Autumn </h1>
            <input type="image" src="images/levelTwoSnapshot.png"   alt="Image of level two, Autumn"  onclick="window.location.href = 'game/PickItRic.php?06';" name="saveForm" class="btTxt submit" id="saveForm" width="400" height="300"/>
    </div>

  <div class="SG-third SG-center">
    <i class="fa fa-leaf SG-padding-64 SG-text-blue SG-margin-right"></i>
    <h4>How high can you go? Take a trip through our jumping challenge in Autumn equinox</h4>
  </div>


  </div>
</div>

<!-- Third Grid -->
<div class="SG-row-padding SG-padding-16 SG-white SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
        <h1> Winter </h1>
              <input type="image" src="images/levelThreeSnapshot.png"  alt="Image of level three, Winter"  onclick="window.location.href = 'game/PickItRic.php?05';" name="saveForm" class="btTxt submit" id="saveForm" width="400" height="300"/>
    </div>

    <div class="SG-third SG-center">
      <i class="fa fa-snowflake SG-padding-64 SG-text-light-blue"></i>
            <h4>Think your getting good at the game? Put your timing to the test with this, our most challenging level yet!</h4>
    </div>


    </div>
      </div>
    <div class="SG-center SG-light-grey">
      <i class="fa fa-exclamation-circle SG-padding-64 SG-text-red"><h3> Warning - Flashing Objects </h3></i>



</div>


<div class="SG-container SG-black SG-center SG-opacity SG-padding-64">
    <h1 class="SG-margin SG-xlarge">Just a couple of shrooms and you'll be hooked</h1>
</div>
-->
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
