<?php

include("conection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>REGISTER</title>
</head>
<body>
  <h1>SIMPLE LOGIN AND REGISTER SYSTEM</h1>
  <!-- FORM SECTION -->
  <form method="POST">
    <div class="form-div">
      <h2>REGISTER</h2>
      <div class="mb-3">
        <div class="mb-3">
          <label class="form-label">Email address:</label>
          <input name="email" type="email" class="form-control" id="exampleInputPassword1" required>
        </div>
        <label class="form-label">Username:</label>
        <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="div-btn">
       <button type="submit" class="btn btn-primary">REGISTER</button>
      </div>
      <div class="create-login-bn">
        <a href="login.php">Login</a>
      </div>
    </div>
  </form>
</body>
</html>