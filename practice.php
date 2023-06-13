<? include 'hdr.php';

$req = ' SELECT `class` FROM `tests` WHERE `id` = ' . $_GET['id'];
$ans = mysqli_query($link, $req);


if ($_POST['ok']) {

	$profile = $_GET['id'];
	header('Location:practice_test.php?id=' . $profile);
}
$class = mysqli_fetch_assoc($ans)['class'];



?>
<section class="practic">
	<div class="el">
		<? echo '<h2>Перед тем как проходить олимпиаду помни, что те6е запрещено использовать сторонние источники информации. Олимпиада предназначена на учеников ' .  $class . ' класса. На олимпиаду тебе дается 20 минут времени. После этого ответы не засчитываются. Результаты олимпиады ты сможешь узнать после прохождения когда один из проверяющих проверит ответы. Результаты отобразаться в шапке сайта около звезды
		</h2>';
		?>
	</div>

	<div class="practice">
		<form method='POST' enctype="multipart/form-data"><input type='submit' name='ok' value='перейти к тесту'></form>

	</div>
</section>