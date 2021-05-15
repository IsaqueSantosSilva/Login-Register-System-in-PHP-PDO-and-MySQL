<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>LOGIN</title>
</head>
<body>
  <h1>SIMPLE LOGIN AND REGISTER SYSTEM</h1>
  <!-- FORM SECTION -->
  <form method="POST">
    <div class="form-div">
      <h2>LOGIN</h2>
      <div class="mb-3">
        <label class="form-label">Email address:</label>
        <input name="email" type="email" class="form-control"  required>
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" required>
      </div>
      <div class="div-btn">
       <button type="submit" class="btn btn-primary">LOGIN</button>
      </div>
      <div class="create-login-bn">
        <a href="register.php">Create Account</a>
      </div>
    </div>
  </form>
</body>
</html>