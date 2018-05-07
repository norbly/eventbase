<?php

$servername = "localhost";
$username = "norbly";
$passwort = "passwort";
$dbname = "eventbase";

$conn = new mysqli($servername, $username, $passwort, $dbname);

if ($conn->connect_error) {
	$_SESSION['message'] = "connction failed: " . $conn->connect_error;
	header("location: error.php");
	die();
}

?>