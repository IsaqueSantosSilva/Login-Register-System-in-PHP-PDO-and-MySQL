<?php

$dbhost ="localhost"; 
$dbname ="database"; 
$dbuser ="root"; 
$dbpass =""; 

$emailid = $_POST['email']; 
$userid = $_POST['username']; 
$userpsw = $_POST['upassword']; 

try {
    $conn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO users (email, username, upassword) VALUES ('$emailid','$userid','$userpsw')";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;



?>