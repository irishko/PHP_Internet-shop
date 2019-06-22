<?php

require_once "sql_connect.php";

session_start();
if ($_SESSION["user"] != "") {
	$sql = "DELETE FROM `users` WHERE `user` = 'test5'";
	mysqli_query($conn, $sql);
	$_SESSION["user"] = NULL;
	header("Location: login.php");
}
?>
