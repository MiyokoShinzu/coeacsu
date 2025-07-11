<?php
$servername = "localhost";
$username = "u616194426_coeacsu"; // Change username
$password = "EVALLO21ab."; // Change password
$dbname = "u616194426_accre_db"; // Change database name

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>