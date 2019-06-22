<?php
session_start();
$_SESSION["user"] = NULL;
$_SESSION["items"] = NULL;
header("Location: index.php");
?>
