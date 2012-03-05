<?php
$host = "localhost";
$user = "biathlon1";
$pass = "biathlon2012";
$db = "biathlon1";

$verbinden = mysql_connect($host,$user,$pass);
if(!$verbinden){echo "Server konnte nicht gefunden werden!";}

$set_db = mysql_select_db($db);
if(!$set_db){echo "Datenbank konnte nicht gefunden werden!";}

?>  