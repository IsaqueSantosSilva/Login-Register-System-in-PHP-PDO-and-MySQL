<?php
session_start(); 
$_SESSION['uid']=''; 
$_SESSION['uname']=''; 
session_unset(); 

header("Location: login.php");
?>