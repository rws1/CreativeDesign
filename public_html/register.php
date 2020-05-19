<?php
// Include config file
require_once "config.php";

// Define variables and initialize with empty values
$email = $username = $password = $confirm_password = "";
$email_err = $username_err = $password_err = $confirm_password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

  // Validate username
  if(empty(trim($_POST["email"]))){
      $email_err = "Please enter an email address.";
  } else{
      // Prepare a select statement
      $sql = "SELECT id FROM users WHERE email = ?";

      if($stmt = mysqli_prepare($link, $sql)){
          // Bind variables to the prepared statement as parameters
          mysqli_stmt_bind_param($stmt, "s", $param_email);

          // Set parameters
          $param_email = trim($_POST["email"]);

          // Attempt to execute the prepared statement
          if(mysqli_stmt_execute($stmt)){
              /* store result */
              mysqli_stmt_store_result($stmt);

              if(mysqli_stmt_num_rows($stmt) == 1){
                  $email_err = "This email is already in use.";
              } else{
                  $email = trim($_POST["email"]);
              }
          } else{
              echo "Oops! Something went wrong. Please try again later.";
          }

          // Close statement
          mysqli_stmt_close($stmt);
      }
  }


    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }

    // Check input errors before inserting in database
    if (empty($email_err) && (empty($username_err) && empty($password_err) && empty($confirm_password_err))){

        // Prepare an insert statement
        $sql = "INSERT INTO users (email,username, password) VALUES (?,?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_email,$param_username, $param_password);

            // Set parameters
            $param_email = $email;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
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
      <a onclick="window.location.href = 'gameGuide/gameGuide.php';" href="#" class="SG-bar-item SG-button SG-padding-large">Game Guide</a>
      <a onclick="window.location.href = 'news/news.php';" href="#" class="SG-bar-item SG-button SG-padding-large">News</a>
      <a onclick="window.location.href = 'community/community.php';" class="SG-bar-item SG-button SG-padding-large">Community</a>
      <a onclick="window.location.href = 'shop/shop.php';" href="#" class="SG-bar-item SG-button SG-padding-large">Shop</a>
    </div>
  </div>

    <div class="wrapper">
      <br>
      <br>
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

          <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
              <label>Email</label>
              <input type="text" name="email" class="SG-input" value="<?php echo $email; ?>">
              <span class="help-block"><?php echo $email_err; ?></span>
          </div>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="SG-input" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="SG-input" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="SG-input" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="SG-button SG-black SG-padding-large SG-large SG-margin-top" value="Submit">

            </div>

        </form>
    </div>
  <br>
  <br>
    <div class="wrapper">
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
  </div>
</body>
</html>
