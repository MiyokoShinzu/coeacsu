<?php
$servername = "194.59.164.39";
$username = "u659629058_userevallo"; // Change username
$password = "c6ehxV57."; // Change password
$dbname = "u659629058_evaaccre"; // Change database name

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
else{
    echo "Connected Successfully";
}
?>
