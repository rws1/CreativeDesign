<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">


<html>

  <head>

    <html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/stylesheet.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name = "viewport" content = "user-scalable=no,width=device-width">
    <link href = "PickItRic.css" rel = "stylesheet" type = "text/css">
    <title>Shroomgirl - Online Game | Way of Life</title>

  </head>
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .SG-bar,h1,button {font-family: "Montserrat", sans-serif}
  .wrapper{ width: 350px; padding: 20px; }
  .fa-gamepad,.fa-coffee {font-size:200px}



    </style>

  <body>

    <!-- Navbar
    <div class="SG-top">
      <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
        <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-right SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

        <a onclick="window.location.href = '/gameGuide/gameGuide.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
        <a onclick="window.location.href = '/news/news.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
        <a onclick="window.location.href = '/community/community.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
        <a onclick="window.location.href = '/shop/shop.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>
      </div>

      <! Navbar on small screens >
      <div id="navDemo" class="SG-bar-block SG-white SG-hide SG-hide-large SG-hide-medium SG-large">
        <a href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
        <a href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
        <a href="#" class="SG-bar-item SG-button SG-padding-large">Community</a>
        <a href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
      </div>
    </div>

    <!-- Added a menu to navigate projects from the main page -->

<?php $passthis =($_SESSION["username"]) ?>;

<script>
alert("Hello <?php echo $passthis; ?>");
</script>

    <div id="World.mushroom_count" >
      </div>
    </div>

    <div id = "menu">

      <p>menu</p>
      <div id = "menu-list">


       <a href = "PickItRic.php?05">Level 3</a>
       <a href = "PickItRic.php?06">Level 2</a>
       <a href = "PickItRic.php?07">Level 1</a>
        <a href = "../main.php">Quit</a>

      </div>
    </div>

    <canvas></canvas>






</script>

    <!--the appropriate js file containing the game logic for each part based on url parameters. -->
    <script type = "text/javascript">
      let part = String(window.location).split("?")[1];

      let parts = {

        "05":["controller-02.js", "display-05.js", "engine-06.js", "game-05.js", "main-05.js"],
        "06":["controller-02.js", "display-05.js", "engine-06.js", "game-06.js", "main-06.js"],
        "07":["controller-02.js", "display-05.js", "engine-06.js", "game-07.js", "main-07.js"],
      };
      switch(part) {
        case "05": case "06": case "07": break;
        default:
          part = "07";
      }
      for (let index = 0; index < parts[part].length; index ++) {
        let script = document.createElement("script");
        script.setAttribute("type", "text/javascript");
        script.setAttribute("src", parts[part][index]);
        document.head.appendChild(script);
      }
      let menu      = document.getElementById("menu");
      let menu_list = document.getElementById("menu-list");
      menu.addEventListener("click", function(event) {
        menu_list.style.display = (menu_list.style.display == "none") ? "grid" : "none";
      });
      menu_list.style.display = "none";
 </script>

<script></script>

  </body>

</html>
