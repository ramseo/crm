<?php 	

$localhost = "localhost";
$username = "root";
$password = "root";
$dbname = "penglead";
$store_url = "http://localhost/penglead";
// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>