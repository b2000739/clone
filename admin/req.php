<?php
$link = mysqli_connect("olimpiads.atwebpages.com", "4318051_admin",  "ecu}L!6[9FOc*eiU", "4318051_admin");

if ($_POST['req'] == 'delproduct') {
	$id = $_POST['id'];
	$req = 'DELETE FROM `type` WHERE `id` =' . $id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))) {
		echo 'ok';
	}
}
if ($_POST['req'] == 'delproduct_n') {
	$id = $_POST['id'];
	$req = 'DELETE FROM `tests` WHERE `id` =' . $id;
	if (mysqli_query($link, $req) or die(mysqli_error($link))) {
		echo 'ok';
	}
}
if ($_POST['result']) {
	$id = $_POST['id'];
	$req = 'SELECT `role` FROM `users` WHERE `id` =' . $id;
	$query = mysqli_query($link, $req);
	$result = mysqli_fetch_assoc($query);
	$result = $result['role'] == 1 ? 0 : 1;
	$req = 'UPDATE `users` SET `role` = ' . $result . ' WHERE `id` = ' . $id;
	mysqli_query($link, $req) or die(mysqli_error($link));
}
