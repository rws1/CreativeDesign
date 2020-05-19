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
.fa-lightbulb,.fa-coffee, .fa-user-graduate {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="SG-top">
  <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
    <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-right SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a onclick="window.location.href = '../main.php';"                 href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Home</a>
    <a onclick="window.location.href = 'gameGuide.php';"               href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
    <a onclick="window.location.href = '../news/news.php';"            href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
    <a onclick="window.location.href = '../community/community.php';"  href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
    <a onclick="window.location.href = '../shop/shop.php';"            href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>

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
    <a href=\"../logout.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Logout</a>
    ";
    ?>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="SG-bar-block SG-white SG-hide SG-hide-large SG-hide-medium SG-large">
    <a onclick="window.location.href = '../main.php';"                     href="#" class="SG-bar-item SG-button SG-padding-large">Home</a>
    <a onclick="window.location.href = 'gameGuide.php';"               href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
    <a onclick="window.location.href = '../news/news.php';"            href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
    <a onclick="window.location.href = '../community/community.php';"  href="#" class="SG-bar-item SG-button SG-padding-large">Community</a>
    <a onclick="window.location.href = '../shop/shop.php';"            href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
  </div>
</div>

<!-- Header -->
<header class="SG-container SG-blue SG-center" style="padding:128px 16px">
  <h1 class="SG-margin SG-jumbo">Shroomgirl Game Guide</h1>
  <p class="SG-xlarge">Need help playing the game? Your in the right place!</p>
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

<!-- First Grid -->
<div class="SG-row-padding SG-padding-32 SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
      <h1>Help Section</h1>
      <br>
      <br>

        <h2> How to play : </h2>
        <h4>The aim of the game is to collect the mushrooms dotted around the map, by running into them.
          You can navigate the map via running and jumping.
        </h4>
        <br>
      </div>
      <div class="SG-third SG-center">
        <i class="fa fa-lightbulb SG-padding-64 SG-text-blue"></i>
      </div>
    </div>

  </div>

        <div class="SG-light-grey SG-row-padding SG-padding-32 SG-container">
          <div class="SG-content">
            <div class="SG-twothird">
              <h2> Running : </h2>
              <h4> Running is achieved by pushing the left and right arrows down on your keyboard. </h4>
            <br>
            <div>
              <img src="../images/moveLandR.gif" alt="Girl running left and right" width="260" height="215">    <img src="../images/sidePress.gif" alt="Girl jumping" width="260" height="215">
            </div>
        </div>
      </div>
    </div>

    <div class="SG-row-padding SG-padding-32 SG-container">
      <div class="SG-content">
        <div class="SG-twothird">
          <h2> Jumping : </h2>
          <h4>Jumping is your ally, use it to get to the higher ledges and to navigate gaps
          between platforms. It is achieved by pressing the up arrow on the keyboard.</h4>
        <br>
        <div>
              <img src="../images/jump.gif" alt="Girl jumping" width="260" height="215">       <img src="../images/upPress.gif" alt="Girl jumping" width="260" height="215">
            </div>
        </div>
      </div>
    </div>

    <div class="SG-light-grey SG-row-padding SG-padding-32 SG-container">
      <div class="SG-content">
        <div class="SG-twothird">
          <h2> Collecting : </h2>
          <h4>Collecting mushrooms is the aim of the game, they can be collected by simply moving your character into with them</h4>
            <br>
            <div>
              <img src="../images/collectMush.gif" alt="Girl jumping" width="260" height="215">       <img src="../images/jumpAndCol.gif" alt="Girl jumping" width="260" height="215">
          </div>
      </div>
    </div>
  </div>

  <div class="SG-row-padding SG-padding-32 SG-container">
    <div class="SG-content">
      <div class="SG-twothird">
                        <h2> Put it all together : </h2>
        <h4> Combine all those skills together and it will look a little like this </h4>
        <br>
        <iframe width="760" height="515" src="../images/jump.gif" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="SG-third SG-center">
        <br>
        <br>
        <i class="fa fa-user-graduate SG-padding-64 SG-text-blue"></i>
        <h4> Congratulations, your now fit to play to the game!</h4>
    </div>
  </div>
</div>
</div>
        <!--
        <iframe width="360" height="115" src="../images/allarrowsTrim.gif" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      -->
      <div class="SG-center SG-light-grey">
        <i class="fa fa-exclamation-circle SG-padding-64 SG-text-red"><h3> Warning - Flashing Objects </h3></i>
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
