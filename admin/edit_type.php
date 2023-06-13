<?php
$id = $_GET['id'];
$link = mysqli_connect("olimpiads.atwebpages.com", "4318051_admin",  "ecu}L!6[9FOc*eiU", "4318051_admin");

$req = "SELECT * FROM `type` WHERE `id` =" . $id;
$result = mysqli_query($link, $req);
$product = mysqli_fetch_assoc($result);
if ($_POST['ok']) {
	$name = $_POST['name'];
	$caption = $_POST['caption'];
	echo $_POST['caption'];
	$req = "UPDATE `type` SET `name`='$name' ,`caption`= '$caption'";
	if ($_FILES['img']['name']) {
		$req .= ', `img` = "' . $_FILES['img']['name'] . '"';
		copy($_FILES['img']['tmp_name'], '../assets/' . $_FILES['img']['name']);
		echo $req;
	}
	$req .= " WHERE `id` = $id";
	echo $req;
	mysqli_query($link, $req) or die(mysqli_error($link));
	$url = 'edit_product.php?id=' . $id;
	header('Location:type.php');
}
include 'hdr.php';
?>

<form method="post" enctype='multipart/form-data'>
	<p>Название квалификации: <input type='text' name='name' value='<? echo $product['name'] ?>'></p>
	<p>Подпись: <textarea name='caption'> <? echo $product['caption'] ?> </textarea></p>
	<p>Фото квалификации: <input type='file' name='img' value='<? echo $product['img'] ?>'></p>
	<p><input type='submit' value="Сохранить" name='ok' class=' btn'></p>

</form>
</body>

</html>