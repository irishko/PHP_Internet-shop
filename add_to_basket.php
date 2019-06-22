<?php

	session_start();
	if (!$_SESSION["user"] || $_SESSION["user"] == "") {
		header("Location: login.php");
	} elseif ($_POST["id"]) {
		$num = $_SESSION["items"][$_POST["id"]]["num"];
		$_SESSION["items"][$_POST["id"]] = ["id" => $_POST["id"], "num" => ++$num];
		header("Location: index.php");
	}

?>