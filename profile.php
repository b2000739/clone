<?
include 'hdr.php';
$req = "SELECT * FROM `users` WHERE `id` = " . $_COOKIE["user_id"];
$result = mysqli_fetch_assoc(mysqli_query($link, $req));
?>
<section class="n-profile">
	<div class="profile">
		<h2>Ваше имя: <i><? echo $result['name'] ?></i> </h2>
		<h2>Ваша фамилия: <i><? echo $result['surname'] ?></i> </h2>
		<h2>Ваше отчество:<i> <? echo $result['patronim'] ?></i> </h2>
		<h2>Ваш телефон: <i><? echo $result['telephone'] ?></i> </h2>
		<h2>Ваша почта: <i><? echo $result['mail'] ?></i> </h2>
		<h2>Ваш паспорт: <i><? echo $result['passport'] ?></i> </h2>
		<h2>Школа в который вы обучаетесь: <i><? echo $result['school'] ?></i> </h2>
		<h2>Класс в котором вы обучаетесь:<i> <? echo $result['class'] ?></i> </h2>
		<h2>Ваши очки:<i> <? echo $result['points'] ?></i> </h2>

		<a href='change.php'>Изменить данные</a>
	</div>
</section>