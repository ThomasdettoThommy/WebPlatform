<?php

$name=$_GET['name'];
$surname=$_GET['surname'];
$country=$_GET['country'];
$email=$_GET['email'];
$password=$_GET['password'];

include "config.inc.php";
include "class.user_session_persistance.php";

$usp=new user_session_persistance;

$usp->DBConnect($dbServerAddress, $dbName);

if(!$usp->userReg($email, $password, $name, $surname, $country))
    die("Errore nella procedura di registrazione");
else
    //redirect alla homepage
?>
