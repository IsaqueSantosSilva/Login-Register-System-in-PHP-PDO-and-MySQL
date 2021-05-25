<?php

include("validation.php");
$userClass = new UserClass();

$errorMessage = "" ;

if (!empty($_POST['submitloginform'])) {
 
  $email=$_POST['emailid'];
  $password=$_POST['userpassowrd'];
  
 if(strlen(trim($email))>1 && strlen(trim($password))>1 ){
  
  $uid=$userClass->userLogin($email,$password);
        if($uid){
   $url='home.php';
            header("Location: $url"); //REDIRECIONAR PARA HOME 
  }
  else{
   $errorMessage = "Email ou senha inválidos!" ;
  }
  
 }
 else{
  $errorMessage = "Detalhes inválidos" ; 
 }
} 
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login</title>
</head>
<body>

<div class="ui-div">
  <h1>LOGIN</h1>
    <form class="ui form" method="post" action="" name="login">
  <div class="field">
    <label>Email:</label>
    <input type="email" name="emailid" placeholder="Email Adress..." required>
  </div>
  <div class="field">
    <label>Password:</label>
    <input type="password" name="userpassowrd" placeholder="Password..." required>
  </div>
  <div class="btn">
    <input class="ui button" type="submit" name="submitloginform" value="Submit">
  </div>
  <div class="link">
    <a class="link" href="register.php">Create Account</a>
  </div>
  <div class="errorMsg"><?php echo $errorMessage; ?></div>
  </form>
</div>

</body>
</html>