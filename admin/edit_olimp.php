<?php
$id = $_GET['id'];
$link = mysqli_connect("olimpiads.atwebpages.com", "4318051_admin",  "ecu}L!6[9FOc*eiU", "4318051_admin");

$req = "SELECT * FROM `tests` WHERE `id` =" . $id;
$result = mysqli_query($link, $req);
$product = mysqli_fetch_assoc($result);
if ($_POST['ok']) {
	$name = $_POST['name'];

	$points = $_POST['points'];
	$class = $_POST['class'];
	$type = $_POST['type'];
	$req = "UPDATE `tests` SET `name`='$name' ,`points`= $points,`class`= '$class',`profile` = $type";
	if ($_FILES['img']['name']) {
		$req .= ', `photos` = "' . $_FILES['img']['name'] . '"';
		copy($_FILES['img']['tmp_name'], '../assets/img/' . $_FILES['img']['name']);
		echo $req;
	}
	$req .= " WHERE `id` = $id";

	mysqli_query($link, $req) or die(mysqli_error($link));
	$url = 'edit_product.php?id=' . $id;
	header('Location:olimps.php');
}
include 'hdr.php'
?>


<form method="post" enctype='multipart/form-data'>
	<p>Название товара: <input type='text' name='name' value='<? echo $product['name'] ?>'></p>
	<p>Очки олимпиады: <textarea name='points'> <? echo $product['points'] ?> </textarea></p>
	<p>Класс учеников: <input type='text' name='class' value='<? echo $product['class'] ?>'></p>

	<p>Выберите категорию вашего товара<select name='type'>
			<?

			$req = "SELECT * FROM `type`";
			$res = mysqli_query($link, $req) or die(mysqli_error($link));
			$type = [];
			while ($row = mysqli_fetch_assoc($res))
				$type[] = $row;
			for ($i = 0; $i < count($type); $i++) {
				if ($type[$i]['id']  == $product['category']) {
					echo "<option value='" . $type[$i]['id'] . "'selected>" . $type[$i]['name'] . "</option>";
				} else {
					echo "<option value='" . $type[$i]['id'] . "'>" . $type[$i]['name'] . "</option>";
				}
			}
			?>
		</select>
	</p>
	<p><input type='submit' value="Сохранить" name='ok' class='btn'></p>
</form>
</body>

</html>