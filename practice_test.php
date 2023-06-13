<? include 'hdr.php';
?>
<? $id = $_GET['id'];
$id_user = $_COOKIE['user_id'];
if ($_POST['ok']) {
	$ans_1 = $_POST['test-1'];
	$ans_2 = $_POST['count-2'];
	$ans_3 = $_POST['count-3'];
	$ans_4 = $_POST['count-4'];
	$ans_5 = $_POST['count-5'];
	$req = "INSERT INTO `participation` (`id_user`,`id_olimp`,`points`,`test-1`,`test-2`,`test-3`,`test-4`,`test-5`) VALUES ($id_user,$id,'0','$ans_1','$ans_2','$ans_3','$ans_4','$ans_5');";
	mysqli_query($link, $req) or mysqli_error($link);
	header('Location:warning.php');
} ?>

<section class="practice-section">
	<div class="practice-test">

		<form method='POST' enctype="multipart/form-data">
			<ol>
				<li>Какие неудобства возникли у вас во время пользования сайтом
				</li>
				<input name='test-1' class='one'>
				<li>По скольки предметам предоставляются олимпиады</li>
				<label for='9'>9</label>
				<input type='radio' name='count-2' id='9' value='9'>
				<label for='10'>10</label>
				<input type='radio' name='count-2' id='10' value='10'>
				<label for='11'>11</label>
				<input type='radio' name='count-2' id='11' value='11'>
				<li>По какому из предметов больше всего олимпиад</li>
				<label for='Математика'>Математика</label>
				<input type='radio' name='count-3' id='Математика' value='Математика'>
				<label for='Русский'>Русский</label>
				<input type='radio' name='count-3' id='Русский' value='Русский'>
				<label for='История'>История</label>
				<input type='radio' name='count-3' id='История' value='История'>
				<li>Какое максимальное колличество можно получить за одну олимпиаду</li>
				<label for='100'>100</label>
				<input type='radio' name='count-4' id='100' value='100'>
				<label for='120'>120</label>
				<input type='radio' name='count-4' id='120' value='120'>
				<label for='150'>150</label>
				<input type='radio' name='count-4' id='150' value='150'>
				<li>На сколько баллов сделан сайт</li>
				<label for='20-30'>20-30</label>
				<input type='radio' name='count-5' id='20-30' value='20-30'>
				<label for='30-40'>30-40</label>
				<input type='radio' name='count-5' id='30-40' value='30-40'>
				<label for='40+'>40+</label>
				<input type='radio' name='count-5' id='40+' value='40+'>
			</ol>
			<input type='submit' name='ok' value='Отправить результаты' class='btn'>
		</form>
	</div>
</section>