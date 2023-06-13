<?
$link = mysqli_connect("olimpiads.atwebpages.com", "4318051_admin",  "ecu}L!6[9FOc*eiU", "4318051_admin");

if (isset($_GET['logout'])) {
	setcookie('user_id', '');
	header("Location: /");
}
if ($_COOKIE['user_id']) {
	$id_user = $_COOKIE['user_id'];
	$req = "SELECT `points` FROM `users` WHERE `id` =" . $id_user;

	$result = mysqli_query($link, $req);
	$count = mysqli_fetch_assoc($result)['points'];
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css?<?php echo time() ?>">
	<title>Document</title>
</head>

<body>


	<header>
		<div class='logo'>
			<img src="assets/olimp.png">
		</div>

		<nav>
			<a href='index.php' class='href'>Home</a>
			<a href='admin/index.php' class='href'>Admin panel</a>
			<? if (!$_COOKIE['user_id']) {
				echo "<a href='olimp.php' class='href'>Registration</a>";
				echo "<a href='login.php' class='href'>LogIn</a>";
			} else {
				echo "<a href='?logout=1' class='href'> Выйти  </a>";
				echo "<a href = 'profile.php' class='href'> Профиль </a>";
			}

			?>
			<div>
				<a href="#olimp"> <i class='fa fa-star fa-2x'></a></i>
				<? echo $count ?>
			</div>

		</nav>
	</header>