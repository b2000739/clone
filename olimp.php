<?
$link = mysqli_connect("olimpiads.atwebpages.com", "4318051_admin",  "ecu}L!6[9FOc*eiU", "4318051_admin");

?>
<html lang='ru'>

<head>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<title>Project</title>
	<link rel='stylesheet' href='assets/style/style.css'>
</head>

<body>
	<section class="register">
		<div class="container">
			<form method='POST' enctype="multipart/form-data">
				<input name='name' type="text" placeholder="Ваше имя*">
				<input name='surname' type="text" placeholder="Ваша фамилия*">
				<input name='patronim' type="text" placeholder="Ваше отчество">
				<input name='password' type="text" placeholder="Ваш пароль*">
				<input name='r-password' type="text" placeholder="Повторите ваш пароль*">
				<input name='telephone' type="text" placeholder="Ваш телефон*">
				<input name='mail' type="text" placeholder="Ваш e-mail*">
				<input name='passport' type="text" placeholder="Ваши паспортные данные*">
				<input name='school' type="text" placeholder='В каком учереждении вы обучатесь*'>
				<input name='class' type="text" placeholder="В каком классе/курсе вы обучаетесь?*">
				<input type='submit' name='ok' value='добавить' class='btn'>
			</form>
		</div>
		<div class="container signin">
			<p>Уже есть аккаунт? <a href="login.php">Sign in</a>.</p>
		</div>
	</section>
</body>
<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$patronim = $_POST['patronim'];
$password = $_POST['password'];
$r_password = $_POST['r-password'];
$telephone = $_POST['telephone'];
$mail = $_POST['mail'];
$passport = $_POST['passport'];
$school = $_POST['school'];
$class = $_POST['class'];
if ($_POST['ok']) {
	$hash = password_hash($password, PASSWORD_BCRYPT);
	$result = mysqli_query($link, "SELECT * FROM `users` WHERE `name`='" . $name . "'");
	if (mysqli_num_rows($result) > 0) {
		echo 'Аккаунт с таким именем уже существует';
	} else if ($r_password == $_POST['password']) {
		$password = $hash;
		$req = "INSERT INTO `users` (`name`,`surname`,`patronim`,`password`,`telephone`,`mail`,`passport`,`role`,`school`,`class`) VALUES ( '$name', '$surname', '$patronim', '$password', '$telephone', '$mail', '$passport', 1 , '$school', $class)";
		echo (mysqli_query($link, $req) or die(mysqli_error($link))) ?  header('Location: login.php') :  'все плохо';
	} else {
		echo 'пароли не совпадают';
	}
}
?>

</html>