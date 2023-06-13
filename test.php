<? include "hdr.php";
$number = $_GET['id'];
$quest = 'SELECT * FROM `tests` WHERE `profile`=' . $number;
$result = mysqli_query($link, $quest);
$test = [];
while ($row = mysqli_fetch_assoc($result))
	$test[] = $row;
$req = 'SELECT `img` FROM `type` WHERE `id` =' . $number;
$img = mysqli_fetch_assoc(mysqli_query($link, $req))['img'];
$req = "SELECT `caption` FROM `type` WHERE `id` = " . $number;
$caption = mysqli_fetch_assoc(mysqli_query($link, $req))['caption'];
?>
<section class="fully-n">
	<section class="fully">
		<? echo "<div class='img'><img src='assets/" . $img . "'> </div>" ?>
		<? echo "<div class='caption'><h2>" . $caption . "</h2></div>" ?>
	</section>

	<div class=" test-row">

		<? for ($i = 0; $i < count($test); $i++) {
			echo "<div class='test-n'>";
			echo "<img src='assets/" . $img . "'>";
			echo "<div class='text'>";
			echo "<h4>" . $test[$i]['name'] . "</h4>";
			echo "<p class='first'>Рекомендуется для " . $test[$i]['class'] . " класса</p>";
			echo "<p>" . $test[$i]['points'] . " олимпиадных очков</p>";
			if ($_COOKIE['user_id']) {
				echo "<a class='btn' href = 'practice.php?id=" . $test[$i]['id'] . "'>Перейти к олимпиаде</a>";
			} else {
				echo "<a class='btn' href = '#'>недоступно</a>";
			}
			echo "</div>";
			echo "</div>";
		}
		?>
	</div>
</section>