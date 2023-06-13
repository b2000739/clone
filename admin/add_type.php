<? include "hdr.php";
?>
<form method='POST' enctype="multipart/form-data">
	<section class="add">
		<div class="container">
			<p>Введите название вашей квалификации: <input type="text" name='name'> </p>
			<p>Опишите её: <input type='text' name="caption"> </p>
			<p>Добавьте фото <input type='file' name="img"></p>
		</div>
		<div class="container">
			<p> <input type='submit' name='ok' value='добавить' class='btn'> </p>
		</div>
</form>
</section>
</body>

</html>
<?php
if ($_POST['ok']) {
	$name = $_POST['name'];
	$caption = $_POST['caption'];
	$img = $_FILES['img']['name'];
	copy($_FILES['img']['tmp_name'], '../assets/' . $img);
	$req = "INSERT INTO `type` (`name`, `caption`, `img`) VALUES ('$name', '$caption', '$img')";
	mysqli_query($link, $req) or die(mysqli_error($link));
	header('Location:index.php');
}
