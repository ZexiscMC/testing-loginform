<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "login";

$conn = mysql_connect($host, $username, $password, $database);

if(!$conn) {
	echo("Connection Failed! Can't connect to database");
}
?>