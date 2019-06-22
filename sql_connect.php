<?php
$servername = "localhost";
$username = "root";
$password = "36673667";
$dbname = "minishop";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
