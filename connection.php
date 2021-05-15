<?php

$dbhost ="localhost"; 
$dbname ="database"; 
$dbuser ="root"; 
$dbpass =""; 

try {
    $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
    return $dbConnection;       
    }
    
    catch (PDOException $e) {
    echo $e->getMessage();
    }

?>