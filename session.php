<?php

//IN CASE USER NOT LOGGED IN REDIRECT TO LOGIN PAGE
if(empty($_SESSION['uid']))
{
$url='login.php';
header("Location: $url");
}

?>