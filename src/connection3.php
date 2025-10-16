<?php
$servername = "153.92.15.84";
$username = "u148988291_evallo"; // Change username
$password = "COEAcsu21."; // Change password
$dbname = "u148988291_accre_db"; // Change database name

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
