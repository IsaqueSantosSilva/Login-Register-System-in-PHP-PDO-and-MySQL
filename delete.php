<?php

session_start();

require "validation.php";

// CHECKS IF THE ID IS DECLARED AND IS DIFFERENT THAN NULL
 if (isset($_SESSION['uid'])) 
 {
   $userID = $_SESSION['uid'];

   $dbhost ="localhost"; 
   $dbname ="database";
   $dbuser ="root"; 
   $dbpass =""; 

   //DELETE ENTRY
   $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
    $query = $dbConnection->prepare("DELETE FROM user WHERE UID='$userID'");
    $query->execute();

 // REDIRECT BACK TO LOGIN PAGE WHEN ACCOUNT HAS BEEN DELETED
      echo '<script>alert("ACCOUNT DELETED");</script>';
      //tHE ONLY RESON I'M USING JS HERE IS BECAUSE ECHO WON'T WORK WITH HEADER AND IDK WHY.
      echo("<script>window.location = 'register.php';</script>");
 }
 else
 // IF THE ID ISN'T VALID YOU WILL SE THIS
 echo "NO ID";

 {

 }

?>