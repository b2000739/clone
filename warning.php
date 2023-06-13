<? include 'hdr.php';
if ($_POST['ok']) {
	header('Location:index.php');
};

?>
<section class="practic">
	<div class="el">
		<? echo '<h2>Ваш тест будет очень скоро проверен нашими админами. Если вы отвественный пользователь вы сам можете проверить свой тест. Используйте аккаунт админа (Имя:Илья Пароль:filatowq).Выберите олимпиаду которую вы проходили и проверьте её. Заранее спасибо!';
		?>
	</div>

	<div class="practice">
		<form method='POST' enctype="multipart/form-data"><input type='submit' name='ok' value='Перейти на главную '></form>

	</div>
</section>