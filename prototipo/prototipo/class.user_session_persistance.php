<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class
 *
 * @author Dario
 */
class user_session_persistance {

    var $DB;

    public function DBConnect($ServerAddr,$dbName){
	mysql_connect($ServerAddr)
	or die('Not connected : ' . mysql_error());
	mysql_select_db($dbName)
	or die('Errore nella selezione del Database : ' . mysql_error());
    }

    public function check($nome,$passwd) {
	$QueryLogin= "SELECT * FROM Utenti WHERE nome=$nome";
	//$hashPassword=SHA1($passwd);
	$QueryPasswordCheck="SELECT * FROM Utenti WHERE nome=$nome AND password=$password"; //Ci andrebbe $hashPassword
	$result=mysql_query($QueryLogin)
	or die('Non è presente un utente registrato con questo username');
	$result=mysql_query($QueryPasswordCheck)
	or die('Password non valida');

    }

    public function loadConfiguration(){

    }

    public function storeConfiguration(){

    }
}
?>
