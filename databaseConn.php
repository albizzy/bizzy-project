<?php
$servername = "localhost";//"localhost";
$username = "root";//"root";
$password = ""; //"";
$dbname = "newdatabase";//"newdatabase";

// Create connection
$link = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
?>