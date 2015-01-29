<?php

$hostname = "192.168.1.194";
$database = "minimegaprint_db";
$username = "my_remote";
$password = "db2012";

$connect = mysql_connect($hostname, $username, $password)
or die('Could not connect: ' . mysql_error());
//Select The database
$bool = mysql_select_db($database, $connect);
if ($bool === False){
   print "can't find $database";
} else {
   print "connesso!";
}

?>
