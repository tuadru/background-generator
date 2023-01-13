<?php
$MyUsername = "frendonja";  // enter your username for mysql
$MyPassword = "frendonja";  // enter your password for mysql
$MyHostname = "139.162.149.133";      // this is usually "localhost" unless your database resides on a different server

$dbh = mysql_pconnect($MyHostname , $MyUsername, $MyPassword);
$selected = mysql_select_db("ethernet",$dbh); //Enter your database name here 
?>