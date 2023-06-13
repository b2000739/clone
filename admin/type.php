<? include 'hdr.php';
$req = "SELECT * FROM `type`";
$result = mysqli_query($link, $req);

$test = [];
while ($row = mysqli_fetch_assoc($result))
	$test[] = $row; ?>
<table>
	<tr>
		<th>ID</th>
		<th>Название</th>
		<th>Подпись</th>
		<th>Функции</th>
	</tr>

	<?
	for ($i = 0; $i < count($test); $i++) {
		echo "<tr>";

		echo "<td>" . $test[$i]['id'] . "</td><td>" . $test[$i]['name'] . "</td><td>" . $test[$i]['caption'] . "</td>
	<td>
	
	<i class='fa fa-trash-o fa-fw gds-delete' id=" . $test[$i]['id'] . "></i>
	
	<a href='edit_type.php?id=" . $test[$i]['id'] . "'>
	<i class='fa fa-wrench fg fw' ></i>
	</td>";
		echo "</tr>";
	}


	?>
</table>
<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
<script type='text/javascript' src='js.js'></script>