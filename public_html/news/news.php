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
.fa-medal, .fa-rocket, .fa-envelope-open-text {font-size:50px}
</style>
<body>

<!-- Navbar -->
<div class="SG-top">
  <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
    <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-right SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a onclick="window.location.href = '../main.php';"                      href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Home</a>
    <a onclick="window.location.href = '../gameGuide/gameGuide.php';"       href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
    <a onclick="window.location.href = 'news.php';"                         href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
    <a onclick="window.location.href = '../community/community.php';"       href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
    <a onclick="window.location.href = '../shop/shop.php';"                 href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>

    <?php
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo "
    <a href=\"../login.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Login</a>
    ";
    }
    else
    echo "
    <a href = '/game/PickItRic.php';\" href=\"#\" class=\"SG-bar-item SG-display-middle SG-red SG-button SG-hide-small SG-padding-large SG-hover-white\">PLAY</a>
    <a href=\"../logout.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Logout</a>
    ";
    ?>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="SG-bar-block SG-white SG-hide SG-hide-large SG-hide-medium SG-large">
    <a onclick="window.location.href = '../main.php';"                     href="#" class="SG-bar-item SG-button SG-padding-large">Home</a>
    <a onclick="window.location.href = '../gameGuide/gameGuide.php';"       href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
    <a onclick="window.location.href = 'news.php';"                         href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
    <a onclick="window.location.href = '../community/community.php';"       href="#" class="SG-bar-item SG-button SG-padding-large">Community</a>
    <a onclick="window.location.href = '../shop/shop.php';"                 href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>

    <?php
    // Check if the user is logged in, if not then redirect him to login page
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
      echo "
    <a href=\"../login.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Login</a>
    ";
    }
    else
    echo "
    <a onclick=\"window.location.href = \'../game/PickItRic.php\';\" href=\"#\" class=\"SG-bar-item SG-display-middle SG-red SG-button SG-hide-small SG-padding-large SG-hover-white\">PLAY</a>
    <a href=\"../logout.php\" id=\"logout\" class=\" SG-bar-item SG-button SG-hide-small SG-display-right SG-green SG-padding-large SG-hover-white\">Logout</a>
    ";
    ?>

  </div>
</div>

<!-- Header -->
<header class="SG-container SG-red SG-center" style="padding:128px 16px">
  <h1 class="SG-margin SG-jumbo">The Newshroom</h1>
  <p class="SG-xlarge">Keeping up to date with Shroomgirl news? You must be a fungi...</p>
  <?php

  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "
    <button onclick=\"location.href='../login.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Login</button>
      <button onclick=\"location.href='../register.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Sign Up</button>
    ";
  }
  ?>
<br>
<br>
<br>
  <!-- First Grid -->
  <div class="SG-row-padding SG-padding-16 SG-container" background-image: url("../images/space.gif");>
    <div class="SG-content nwsDivBackground">
      <div class="SG-twothird nwsDivBackground">
          <h1>Mushrooms In Space </h1>
          <img src="../images/space.gif" alt="an image of a strange planet" width="400" height="300">

        <h5 class="SG-padding-16"> </h5>
        <p class="SG-text-grey"></p>
      </div>

      <div class="SG-third SG-center">
        <br>
        <br>
        <br>
        <h4>
          COMING SOON - Our brand new level with gravity defying jumps, new challenges and fearsome enemies.
          <br> <br>Out at the end of April,
          our new level explores the cosmos as our intrepid adventurer reaches dizzying new heights in search of her
          coveted 'shrooms. A space mission only rivaled by the latest apolo mission by NASA... maybe.
        </h4>
      </div>
    </div>
  </div>


  <!-- Second Grid -->
  <div class="SG-row-padding SG-light-grey SG-padding-16 SG-container">
    <div class="SG-content">
      <div class="SG-twothird">
        <h1> Scoreboards</h1>
              <input type="image" src="../images/highscores.png"   alt="Image of level two, Autumn"  onclick="window.location.href = '../community/scoreboard.php';" name="saveForm" class="btTxt submit" id="saveForm" width="500" height="300"/>
      </div>

    <div class="SG-third SG-center">
      <i class="fa fa-medal SG-padding-16 SG-text-blue SG-margin-right"></i>
      <h4> Turn up the competition! Fed up of not being able to gloat to the world about your prowess? Well worry no more, our scoreboards are now live.
        Let all your friends know that their measly collection of 'shrooms is not worth the memory it occupies.
        Simply headover to community section and click on scoreboards, to find out where you stand on our HighSpores!
       </h4>
    </div>


    </div>
  </div>

  <!-- Third Grid -->
  <div class="SG-row-padding SG-padding-16 SG-white SG-container">
    <div class="SG-content">
      <div class="SG-twothird">
          <h1> Feedback Time </h1>
                <input type="image" src="../images/feedback.png"  alt="Image of level three, Winter"  onclick="window.location.href = '../community/community.php';" name="saveForm" class="btTxt submit" id="saveForm" width="500" height="300"/>
      </div>

      <div class="SG-third SG-center">
        <br>
        <br>
        <i class="fa fa-envelope-open-text SG-padding-16 SG-text-light-blue"></i>
              <h4>
                Not happy with our website? Let us have it!! Our new feedback form allows you to let us know any issues or problems you may face when using our site.
                 Or maybe how good we are doing? No? Your right, hatred only please.
               </h4>
      </div>


      </div>
        </div>
      <div class="SG-center SG-light-grey">
        <i class="fa fa-exclamation-circle SG-padding-16 SG-text-red"><h3> Warning - Flashing Objects </h3></i>



  </div>


<div class="SG-container SG-black SG-center SG-opacity SG-padding-64">
    <h1 class="SG-margin SG-xlarge">Just a couple of shrooms and you'll be hooked</h1>
</div>

<!-- Footer -->
<footer class="SG-container SG-padding-32 SG-center SG-opacity">
  <div class="SG-xxlarge SG-padding-16">
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
