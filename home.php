<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>HOME</title>
</head>
<body>
<h1>WELCOME <?php echo ""?>.</h1>
<h1>YOUR EMAIL IS <?php echo ""?>.</h1>
<h1>AND YOUR PASSWORD IS <?php echo ""?>.</h1>
<div class="div-home-links">
    <div>
        <a href="logout.php">LOGOUT</a>
    </div>
    <div>
        <a href="">DELETE ACCOUNT</a>
    </div>
</div>
    
</body>
</html>