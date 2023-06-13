<? include 'hdr.php';
$id = $_GET['id'];
$req = "SELECT * FROM `participation`WHERE `id_olimp`=" . $id . " AND  `points` = 0";
$result = mysqli_query($link, $req);
$test = [];
while ($row = mysqli_fetch_assoc($result))
	$test[] = $row;
?>
<table>
	<tr>
		<th>ID</th>
		<th>Имя</th>

		<th>Отправить</th>
	</tr>

	<?
	for ($i = 0; $i < count($test); $i++) {
		echo "<tr>";
		$req = "SELECT `name` FROM `users` WHERE `id` =" . $test[$i]['id_user'];
		$result = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];


		// $profile = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];


		echo "
		<form method='POST' enctype='multipart/form-data'>
		<td>" . $test[$i]['id'] . "</td><td>" . $result . "</td>
	<td>
	<button type='submit' name='ok'value='" . $test[$i]['id'] . "' ><i class='fa fa-check fg fw'></i></button>
	</td>
	</form>";
		echo "</tr>";
	}

	if ($_POST['ok']) {
		$id = $_POST['ok'];
		header('Location:check_practic.php?id=' . $id);
	}
	?>