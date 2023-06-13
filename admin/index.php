<? include "hdr.php";
$id = $_COOKIE['user_id'];

$req = "SELECT `role` FROM `users` WHERE `id`=" . $id;
$result = mysqli_query($link, $req);
$result = mysqli_fetch_assoc($result)['role'];
if ($result) {
	echo "
	<section class='admin'>
<div>
<ol class='rounded'>
<li><a href='users.php'>Таблица пользователей</a></li>

<li><a href='type.php'>Направленности тестов</a></li>
<li><a href='olimps.php'>Тесты</a></li>
<li><a href='add_olimp.php'>Добавит тест</a></li>
<li><a href='add_type.php'>Добавить Квалфикациz</a></li>
</ol>
</section>
	";
} else {
	echo 'Эта страница недоступна для вас, у вас нет прав';
}
