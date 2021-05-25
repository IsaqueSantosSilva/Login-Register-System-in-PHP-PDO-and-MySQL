<?php

include("validation.php");

$userClass = new UserClass();

$errorMessage = "";
$sucessMessage = "";
if (!empty($_POST['submitregistrationform'])) {

  $username = $_POST['username'];
  $email = $_POST['emailid'];
  $password = $_POST['userpassowrd'];
  $username_check = preg_match('~^[A-Za-z0-9_]{3,20}$~i', $username);
  $email_check = preg_match('~^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.([a-zA-Z]{2,4})$~i', $email);
  
  if ($username_check && $email_check) {

    $uid = $userClass->userRegistration($username, $email, $password);

    if ($uid) {

      $sucessMessage = "REGISTERED!";
    } else {
      $errorMessage = "EMAIL ALREADY IN USE";
    }
  } else {
    $errorMessage = "INVALID ACCOUNT DETAILS";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Register</title>
</head>
<body>
   
<div class="ui-div">
  <h1>REGISTER</h1>
    <form id="ui-form" class="ui form" method="post" action="" name="register">
  <div class="field">
    <label>Email:</label>
    <input type="email" name="emailid" placeholder="Email Adress..." required>
  </div>
  <div class="field">
    <label>Username:</label>
    <input type="text" name="username" placeholder="Username..." required>
  </div>
  <div class="field">
    <label>Password:</label>
    <input type="password" name="userpassowrd" placeholder="Password..." required>
  </div>
  <div class="btn">
    <input id="btn" class="ui button" type="submit" name="submitregistrationform" value="Submit">
  </div>
  <div class="link">
    <a class="link" href="login.php">Login</a>
  </div>
  <div class="errorMsg"><?php echo $errorMessage; ?></div>
  <div class="sucessMsg"><?php echo $sucessMessage; ?></div>
  </form>
</div>

</body>
</html>