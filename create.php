<?php

require_once "sql_connect.php";

if ($_POST["login"] && $_POST["passwd"] && ($_POST["passwd"] === $_POST["repasswd"])) {
	$sql = "INSERT INTO users (user, pass) VALUES ('" . $_POST["login"] . "', '" . hash("whirlpool", $_POST["passwd"]) . "')";
	mysqli_query($conn, $sql);
	header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Create Account</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="login">
	<header>
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<a href="index.php" class="logo">Minishop</a>
				<nav class="main-menu">
					<ul class="main-menu__list">
						<li class="main-menu__item">
							<a href="index.php" class="main-menu__link">Main</a>
						</li>
					</ul>
				</nav>
				<nav class="user-menu">
					<ul class="user-menu__list">
						<?php

						session_start();
						if (!$_SESSION["user"]) { ?>
							<li class="user-menu__item"><a href="login.php">Log-in</a></li>
							<li class="user-menu__item"><a href="create.php">Create an account</a></li>
						<?php } else { ?>
							<li class="user-menu__item">Hello, <?= $_SESSION["user"] ?></li>
							<li class="user-menu__item"><a href="logout.php">Log-out</a></li>
						<?php }
						if ($_SESSION["user"] == "admin") { ?>
							<li class="user-menu__item plus"><a href="admin.php"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							width="30" height="30"
							viewBox="0 0 224 224"
							style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><path d="M111.78125,22.19583c-8.2417,0.12078 -14.82732,6.89568 -14.71458,15.1375v59.73333h-59.73333c-5.3855,-0.07616 -10.39482,2.75334 -13.10979,7.40503c-2.71497,4.6517 -2.71497,10.4049 0,15.0566c2.71497,4.6517 7.72429,7.4812 13.10979,7.40503h59.73333v59.73333c-0.07616,5.3855 2.75334,10.39482 7.40503,13.10979c4.6517,2.71497 10.4049,2.71497 15.0566,0c4.6517,-2.71497 7.4812,-7.72429 7.40503,-13.10979v-59.73333h59.73333c5.3855,0.07616 10.39482,-2.75334 13.10979,-7.40503c2.71497,-4.6517 2.71497,-10.4049 0,-15.0566c-2.71497,-4.6517 -7.72429,-7.4812 -13.10979,-7.40503h-59.73333v-59.73333c0.05518,-4.03392 -1.52395,-7.91857 -4.378,-10.76988c-2.85405,-2.8513 -6.74022,-4.42669 -10.77409,-4.36763z"></path></g></g></svg></a></li>
						<?php } else { ?>
						<li class="user-menu__item"><a href="basket.php" class="basket">
							<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
							width="30" height="30"
							viewBox="0 0 224 224"
							style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><path d="M41.21615,18.63021l-31.84635,0.16406l0.09115,18.66667l19.32292,-0.09115l30.7526,73.77344l-11.17448,17.86459c-7.82465,12.49501 1.68969,29.65885 16.42448,29.65885h112.54688v-18.66667h-112.54688c-1.03854,0 -1.15829,-0.20467 -0.60156,-1.09375l10.97396,-17.57291h69.70833c6.776,0 13.02977,-3.68011 16.31511,-9.60677l33.61459,-60.53906c3.46267,-6.216 -1.03644,-13.85417 -8.14844,-13.85417h-137.64844zM65.33333,168c-10.30932,0 -18.66667,8.35735 -18.66667,18.66667c0,10.30932 8.35735,18.66667 18.66667,18.66667c10.30932,0 18.66667,-8.35735 18.66667,-18.66667c0,-10.30932 -8.35735,-18.66667 -18.66667,-18.66667zM158.66667,168c-10.30932,0 -18.66667,8.35735 -18.66667,18.66667c0,10.30932 8.35735,18.66667 18.66667,18.66667c10.30932,0 18.66667,-8.35735 18.66667,-18.66667c0,-10.30932 -8.35735,-18.66667 -18.66667,-18.66667z"></path></g></g></svg></a>
							<span class="basket-num">
							<?php
								session_start();
								echo count($_SESSION["items"]);
							?>	
							</span>
						</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<h1 class="login">
		Create an account
	</h1>
	<form method="POST">
		<input type="text" name="login" placeholder="Login">
		<input type="password" name="passwd" placeholder="Password">
		<input type="password" name="repasswd" placeholder="Re Password">
		<input type="submit" name="submit" value="OK" class="form__button">
	</form>
</body>
</html>
