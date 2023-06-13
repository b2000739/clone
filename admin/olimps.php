<? include 'hdr.php';
$req = "SELECT * FROM `tests`";
$result = mysqli_query($link, $req);

$test = [];
while ($row = mysqli_fetch_assoc($result))
	$test[] = $row; ?>
<table>
	<tr>
		<th>Название</th>
		<th>Категория</th>
		<th>Очки</th>
		<th>Опции</th>
	</tr>

	<?
	for ($i = 0; $i < count($test); $i++) {
		echo "<tr>";
		$req = "SELECT `profile` FROM `tests` WHERE `id` =" . $test[$i]['id'];

		$result = mysqli_fetch_assoc(mysqli_query($link, $req))['profile'];

		$req = "SELECT `name` FROM `type` WHERE `id` =" . $result;

		$profile = mysqli_fetch_assoc(mysqli_query($link, $req))['name'];


		echo "<td>" . $test[$i]['name'] . "</td><td>" . $profile . "</td><td>" . $test[$i]['points'] . "</td>
	<td>
	
	<i class='fa fa-trash-o fa-fw gds-delete_n' id=" . $test[$i]['id'] . "></i>
	
	<a href='edit_olimp.php?id=" . $test[$i]['id'] . "'>
	<i class='fa fa-wrench fg fw' ></i>
	</a>
	<a href='check_olimp.php?id=" . $test[$i]['id'] . "'>
	<i class='fa fa-check fg fw'></i>
	</td>";
		echo "</tr>";
	}


	?>
</table>
<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
<script type='text/javascript' src='js.js'></script>