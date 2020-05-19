<!DOCTYPE html><?php
// Initialize the session
session_start();
?>

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
.fa-comments,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="SG-top">
  <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
    <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-right SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a onclick="window.location.href = '../main.php';"                  href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Home</a>
    <a onclick="window.location.href = '../gameGuide/gameGuide.php';"   href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
    <a onclick="window.location.href = '../news/news.php';"             href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
    <a onclick="window.location.href = 'community.php';"                href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
    <a onclick="window.location.href = '../shop/shop.php';"             href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>

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
    <a onclick="window.location.href = '../main.php';"                  href="#" class="SG-bar-item SG-button SG-padding-large">Home</a>
    <a onclick="window.location.href = '../gameGuide/gameGuide.php';"   href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
    <a onclick="window.location.href = '../news/news.php';"             href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
    <a onclick="window.location.href = 'community.php';"                href="#" class="SG-bar-item SG-button SG-padding-large">Community</a>
    <a onclick="window.location.href = '../shop/shop.php';"             href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
  </div>
</div>

<!-- Header -->
<header class="SG-container SG-light-green SG-center" style="padding:128px 16px">
  <h1 class="SG-margin SG-jumbo">Shroomgirl Community</h1>
  <p class="SG-xlarge">Spored of having no friends? Chat, meet and make some budding new friendships...</p>
  <?php


  // Check if the user is logged in, if not then redirect him to login page
  if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    echo "
    <button onclick=\"location.href='../login.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Login</button>
      <button onclick=\"location.href='../register.php'\" class=\"SG-button SG-white SG-padding-large SG-large SG-margin-top\">Sign Up</button>
    ";
  }

  else
  echo "
    <a href=\"scoreboard.php\" id=\"logout\" class=\" SG-button SG-red SG-padding-large SG-large SG-margin-top\">Scoreboard</a>
    ";


  ?>
</header>

<!-- First Grid -->
<div class="SG-row-padding SG-padding-64 SG-container">
  <div class="SG-content">
    <div class="SG-twothird">
      <h1> Shroom girl encourages our players to get together and help each other through problems - game related and beyond! </h1>
      <br>
        <h2> Todays fun 'shroom' fact : </h2>
        <p>In the Blue Mountains of Oregon is a colony of Armillaria solidipes that is believed to be the world’s largest known organism.
          The fungus is over 2,400 years old and covers an estimated 2,200 acres (8.9 km2).
          Above ground the honey mushrooms are short-lived but the underlying mycelium (branch like vegetation) lives on.  </p>
        <br>
        <br>

    </div>
</div>
</div>



<!-- Second Grid -->
<div class="SG-row-padding SG-light-grey SG-center SG-padding-64 SG-container">
  <h1> Feedback - Let us know your thoughts!</h1>
  <div class="container">
    <form action="">
      <div class="row">
        <div class="col-25">
          <label for="fname">First Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="fname" name="firstname" placeholder="Your name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="lname">Last Name</label>
        </div>
        <div class="col-75">
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="country">Country</label>
        </div>
        <div class="col-75">
          <select id="country" name="country">
            <option value="uk">United Kingdom</option>
            <option value="australia">Australia</option>
            <option value="canada">Canada</option>
            <option value="usa">USA</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="subject">Subject</label>
        </div>
        <div class="col-75">
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px width:200px"></textarea>
        </div>
      </div>
      <br>
      <div class="row SG-center SG-button">
        <input type="submit" value="Submit">
      </div>
    </form>
  </div>
</div>



<div class="SG-container SG-black SG-center SG-opacity SG-padding-64">
    <h1 class="SG-margin SG-xlarge">Just a couple of shrooms and you'll be hooked</h1>
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
