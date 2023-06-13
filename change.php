<?
include 'hdr.php';
$req = "SELECT * FROM `users` WHERE `id` = " . $_COOKIE["user_id"];
$result = mysqli_fetch_assoc(mysqli_query($link, $req));
?>
<section class="n-change">
	<div class="change">
		<form method='POST' enctype="multipart/form-data">
			<p>Ваш телефон: <input type='text' name='tel' value='<? echo $result['telephone'] ?>'></p>
			<p>Ваша почта: <input type='text' name='mail' value='<? echo $result['mail'] ?>'></p>
			<p>Ваша школа: <input type='text' name='school' value='<? echo $result['school'] ?>'></p>
			<p>Ваш класс: <input type='text' name='class' value='<? echo $result['class'] ?>'></p>
			<p>Изначальный пароль*: <input type='text' name='password-id'></p>
			<p>Новый пароль: <input type='text' name='password'></p>
			<p>Новый пароль(повторить): <input type='text' name='password-s'></p>
			<input type='submit' name='ok' value='добавить' class='btn'></p>
		</form>
	</div>
</section>
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$class = $_POST['class'];
$school = $_POST['school'];
$password_id = $_POST['password-id'];
$password_s = $_POST['password-s'];
$password = $_POST['password'];
$cookie = $_COOKIE["user_id"];
if ($_POST['ok']) {

	if (password_verify($password_id, $result['password'])) {
		if (isset($password) && $password == $password_s) {
			$password =  password_hash($password, PASSWORD_BCRYPT);
			$req = "UPDATE `users` SET `name` = '$name', `password` = '$password', `mail` = '$mail', `class` = '$class', `school`='$school'";
		} else {
			$req = "UPDATE `users` SET `name` = '$name', `mail` = '$mail', `class` = $class, `school`='$school'";
		}
		$req .= " WHERE `id` =" . $cookie;
		header('Location:index.php');
		mysqli_query($link, $req) or die(mysqli_error($link));
	} else echo 'Изначальный пароль не правилен';
}
?>