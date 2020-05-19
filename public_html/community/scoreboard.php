<!DOCTYPE html><?php
// Initialize the session
  session_start();
  include'../config.php';
?>

<html lang="en">
<title>Shroomgirl - Online Game | Way of Life</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../stylesheet.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.SG-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-comments,.fa-coffee {font-size:200px}

table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}

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
<header class="SG-container SG-purple SG-center" style="padding:128px 16px">
  <h1 class="SG-margin SG-jumbo">HighSpores</h1>
  <p class="SG-xlarge">Think your a big shot? Find out...</p>
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
<div class="SG-row-padding SG-padding-64 SG-container">

  <table>
  <tr>
  <th>Username</th>
  <th>Score</th>
  </tr>
<?php
 $sql = "SELECT username, score FROM users ORDER BY score DESC LIMIT 10";


$result = $link->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "</td><td>" . $row["username"] . "</td><td>"
. $row["score"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$link->close();
?>

</table>



</div>


<!-- Second Grid -->
<div class="SG-row-padding SG-light-grey SG-padding-64 SG-container">

  <div class="container">
   <br />
   <h2 align="center">Cant see yourself? Maybe your a ghost? No? Give your name a search below</h2><br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>

</div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>

<!-- Footer -->
<footer class="SG-container SG-padding-64 SG-center SG-opacity">
  <div class="SG-xlarge SG-padding-32">
    <i class="fa fa-facebook-official SG-hover-opacity"></i>
    <i class="fa fa-instagram SG-hover-opacity"></i>
    <i class="fa fa-snapchat SG-hover-opacity"></i>
    <i class="fa fa-pinterest-p SG-hover-opacity"></i>
    <i class="fa fa-twitter SG-hover-opacity"></i>
    <i class="fa fa-linkedin SG-hover-opacity"></i>
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
