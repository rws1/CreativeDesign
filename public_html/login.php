<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: main.php");
    exit;
}

// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            // Redirect user to welcome page
                            header("location: main.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <html lang="en">
  <title>Shroomgirl - Online Game | Way of Life</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .SG-bar,h1,button {font-family: "Montserrat", sans-serif}
  .wrapper{ width: 350px; padding: 20px; }
  .fa-gamepad,.fa-coffee {font-size:200px}

  body {
  background-image: url('images/png/BG/BG.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  }

    </style>
</head>
<body>

  <!-- Navbar -->
  <div class="SG-top">
    <div class="SG-bar SG-blue SG-card SG-left-align SG-large">
      <a class="SG-bar-item SG-button SG-hide-medium SG-hide-large SG-right SG-padding-large SG-hover-white SG-large SG-blue" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

      <a onclick="window.location.href = 'gameGuide/gameGuide.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Game Guide</a>
      <a onclick="window.location.href = 'news/news.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">News</a>
      <a onclick="window.location.href = 'community/community.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Community</a>
      <a onclick="window.location.href = 'shop/shop.php';" href="#" class="SG-bar-item SG-button SG-hide-small SG-padding-large SG-hover-white">Shop</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="SG-bar-block SG-white SG-hide SG-hide-large SG-hide-medium SG-large">
      <a href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
      <a href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
      <a href="#" class="SG-bar-item SG-button SG-padding-large">Community</a>
      <a href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
    </div>
  </div>



    <div class="SG-third">
      <br>
      <div class="SG-padding-16 SG-margin">
        <h2>  Login</h2>
        <p>  Please fill in your credentials to login.</p>
        <p>  You must be logged in to play the game and see the scoreboards. </p>
      </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <div>

            <div class="SG-container SG-padding-8 form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" size="50" class="SG-input" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>

            <div class="SG-container SG-padding-8 form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label><br>
                <input type="password" size="50" name="password" class="SG-input">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>

            <div class="SG-container form-group">
                <input type="submit" class="SG-button SG-black SG-large SG-margin-top" value="Login">
            </div>
            <br>
            <br>
            <br>
            <div class="SG-container">
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
            <p>Forgotten your password?  <a href="reset.php">Reset it here</a>.</p>
          </div>
        </form>
    </div>
</body>
</html>
