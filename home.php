<?php

session_start(); 
include("session.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>

    <!-- SHOWING USER INFO USING $_SESSION AND ECHO -->
    <div class="userdiv">
        <h1 class="info-text2">WELCOME</h1> 
        <h1 class="info-text"> "<?php echo $_SESSION['uname'];?>" </h1>
        <h1 class="info-text2">YOUR EMAIL IS:</h1>
        <h1 class="info-text">"<?php echo $_SESSION['emailid'];?>"</h1>
        <h1 class="info-text2">AND YOU JOINED US IN:</h1>
        <h1 class="info-text">"<?php echo $_SESSION['joindateid'];?>"</h1>
    <div class="div-home-links">
        <a class="links" href="logout.php">LOGOUT</a> 
    </div>

    <!-- DELETE ACCOUNT BUTTON -->
    <div class="div-home-links">
        <a class="links" href="#ex1" rel="modal:open"">DELETE ACCOUNT</a>
    </div>

    <!--  MODAL -->
    <div id="ex1" class="modal">
  <h2>ARE YOU SURE YOU WANT TO DELETE YOUR ACCOUNT?</h2>
    <!-- DELETE BUTTON -->
    <div>
    <a class="yes-btn"  href="delete.php" >YES</a>
    <a class="no-btn" href="#" rel="modal:close">NO</a>
    </div>
</div>
<div class="feedback-btn">
    <a target="_black" href="http://isaquesilva.infinityfreeapp.com/Feedback-Sender-PHPMailer/">Send Feedback</a>
</div>

    
    <!--jQuery :) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

</body>
</html>