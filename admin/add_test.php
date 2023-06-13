<? include "hdr.php";
?>
<form method='POST' enctype="multipart/form-data">
	<section class="add">
		<div class="container">
			<p>Введите название вашей олимпиады: <input type="text" name='name'> </p>
			<p>На сколько очков она рассчитана: <input type='text' name="points"> </p>
			<p>Для учеников каких классов она предназначена: <input type='text' name="class"> </p>

			<p>Выберите категорию вашего товара<select name='profile'>
					<?

					$req = "SELECT * FROM `type`";
					$res = mysqli_query($link, $req) or die(mysqli_error($link));
					$categories = [];
					while ($row = mysqli_fetch_assoc($res))
						$categories[] = $row;
					for ($i = 0; $i < count($categories); $i++) {
						echo "<option value='" . $categories[$i]['id'] . "'>" . $categories[$i]['name'] . "</option>";
					}
					?>
				</select>
			</p>


		</div>
		<div class="container">
			<p> <input type='submit' name='ok' value='добавить' class='btn'></p>
		</div>
</form>
</section>
</body>

</html>
<?php
if ($_POST['ok']) {
	$name = $_POST['name'];
	$profile = $_POST['profile'];
	$points = $_POST['points'];
	$class = $_POST['class'];
	$req = "INSERT INTO `tests` (`name`, `profile`, `points`, `class`) VALUES ('$name', '$profile', '$points', '$class')";
	mysqli_query($link, $req) or die(mysqli_error($link));
	header('Location:index.php');
}
