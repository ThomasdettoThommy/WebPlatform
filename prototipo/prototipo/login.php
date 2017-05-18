<?php

$username=$_GET['username'];
$password=$_GET['password'];

include "config.inc.php";
include "class.user_session_persistance.php";

$usp=new user_session_persistance;

$usp->DBConnect($dbServerAddress, $dbName);

if($usp->userLogin($username,$password))
{
    header("Location: ./homepage.html");
    /*print "<h2>Benvenuto!</h2>";
    print "Buongiorno $username";*/
}
else print "Utente non registrato";
?>
