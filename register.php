<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "facultylookup";

// Create connection
$conn = new mysqli($servername, $username, $password, $database );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST['submit'])){
extract($_POST);

$query = "insert into candidate";

}

?>
