<?php include "hdr.php";
$req = "SELECT * FROM `users`";
$result = mysqli_query($link, $req);

$users = [];
while ($row = mysqli_fetch_assoc($result))
	$users[] = $row;
?>
<table>
	<tr>
		<th>ID</th>
		<th>Имя</th>
		<th>Фамилия</th>
		<th>Отчество</th>
		<th>Телефон</th>
		<th>Mail</th>
		<th>Паспорт</th>
		<th>Роль</th>
		<th>Школа</th>
		<th>Класс</th>
		<p><?

			?>
		</p>
	</tr>
	<?
	for ($i = 0; $i < count($users); $i++) {
		echo "<tr>";
		echo "<td>" . $users[$i]['id'] . "</td><td>" . $users[$i]['name'] . "</td><td>" . $users[$i]['surname'] . "</td><td>" . $users[$i]['patronim'] . "</td><td>" . $users[$i]['telephone'] . "</td><td>" . $users[$i]['mail'] . "</td><td>" . $users[$i]['passport'] . "</td><td class='role' id = " . $users[$i]['id'] . ">" . $users[$i]['role'] . "</td><td>" . $users[$i]['school'] . "</td><td>" . $users[$i]['class'] . "</td>";
		echo "</tr>";
	}
	?>
</table>
<script type="text/javascript" src="jquery-3.6.1.min.js"></script>
<script type='text/javascript' src='js.js'></script>
</body>

</html>