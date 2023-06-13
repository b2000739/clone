<? include 'hdr.php';
$id = $_GET['id'];
$req = 'SELECT * FROM `participation` WHERE `id` ='  . $id;
$result = mysqli_query($link, $req);
$check = [];
while ($row = mysqli_fetch_assoc($result))
	$check[] = $row;


if ($_POST['ok']) {
	$points = $_POST['points'];
	$req = 'UPDATE `participation` SET `points` = "' . $points . '" WHERE  `id`=' . $check[0]['id'];

	mysqli_query($link, $req);
	$req = $req = "UPDATE `users` SET `points` =(`points` + " . $points . ") WHERE `id` ="  . $check[0]['id_user'];
	mysqli_query($link, $req);
	header('Location:olimps.php');
}

?>
<section class="practice-section">
	<div class="practice-test">

		<form method='POST' enctype="multipart/form-data">
			<ol>
				<li>Какие неудобства возникли у вас во время пользования сайтом
				</li>
				<p class='orange'>
					<? if ($check[0]['test-1']) {
						echo "Ответ: " .  $check[0]['test-1'];
					} else if ($check[0]['test-1'] == '') {
						echo "<p class='red'>Ответ не дан</p>";
					} ?> </p>
				<li>По скольки предметам предоставляются олимпиады</li>
				<? if ($check[0]['test-2'] == '11') {
					echo "<p class='green'> Ответ:" . $check[0]['test-2'] . "</p>";
				} else if ($check[0]['test-2'] == '') {
					echo "<p class='red'>Ответ не дан</p>";
				} else {
					echo "<p class='red'> Ответ: " . $check[0]['test-2'] . "</p>";
				}; ?>
				<li>По какому из предметов больше всего олимпиад</li>
				<? if ($check[0]['test-3'] == 'Математика') {
					echo "<p class='green'> Ответ:" . $check[0]['test-3'] . "</p>";
				} else if ($check[0]['test-3'] == '') {
					echo "<p class='red'>Ответ не дан</p>";
				} else {
					echo "<p class='red'> Ответ: " . $check[0]['test-3'] . "</p>";
				}; ?>
				<li>Какое максимальное колличество можно получить за одну олимпиаду</li>
				<? if ($check[0]['test-4'] == '100') {
					echo "<p class='green'> Ответ: " . $check[0]['test-4'] . "</p>";
				} else if ($check[0]['test-4'] == '') {
					echo "<p class='red'>Ответ не дан</p>";
				} else {
					echo "<p class='red'> Ответ: " . $check[0]['test-4'] . "</p>";
				}; ?>
				<li>На сколько баллов сделан сайт</li>
				<? if ($check[0]['test-5'] == '40+') {
					echo "<p class='green'> Ответ:" . $check[0]['test-5'] . "</p>";
				} else if ($check[0]['test-5'] == '') {
					echo "<p class='red'>Ответ не дан</p>";
				} else {
					echo "<p class='red'> Ответ: " . $check[0]['test-5'] . "</p>";
				}; ?>
			</ol>
			<h2> Выставить баллы</h2>
			<input name='points' class='points'>
			<input type='submit' name='ok' value='Отправить результаты' class='btn'>
		</form>
	</div>
</section>