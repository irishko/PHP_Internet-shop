<?php
require_once "sql_connect.php";

session_start();
if (!$_SESSION["user"]) {
	header("Location: login.php");
} elseif (!$_REQUEST["num"] || !$_REQUEST["names"]) {
	header("Location: index.php");
}

$names = explode(";", $_REQUEST["names"]);
$nums = explode(";", $_REQUEST["num"]);

for ($i = 0; $i < count($names); $i++) { 
	$sql = "INSERT INTO orders (user, item, quantity) VALUES ('" . $_SESSION["user"] . "', '" . $names[$i] . "', '" . $nums[$i] . "')";
	mysqli_query($conn, $sql);
}
$_SESSION["items"] = NULL;

?>