<? include 'hdr.php';
?>
</body>
<section class='about'>
	<div class="text">
		<div class="initial">
			<h2>
				О нас
			</h2>
			<p>
				Наш всеросийский центр предоставляет пвозможность детям проходить олимпиады. Которые будут катироваться, при подаче заявки в лагерь. В некоторых ВУЗах и техникумах. Для самых маленьких наши конкурсы повышают общий интелект ребенка и позволяют ему расти, а не быть карликом.Наши конкурсы и олимпиады развивают интеллект участников, повышают мотивацию к обучению через игру и соревнование, дают новые знания и знакомят с современными образовательными технологиями и сервисами.<br><br> Разные типы конкурсов — отличная возможность выбрать подходящий формат мероприятия, с разными сроками выполнения, разными заданиями и возможностью выполнить их онлайн или офлайн.
			</p>
		</div>
		<div class="key">
			<h3> Ключевые преимущества</h3>
			<ul>
				<li>Повышение образовательных результатов</li>
				<li>Усвоение материала без пробелов</li>
				<li>Рост</li>
				<li>Доступность для детей с повышенными запросами</li>
				<li>Разные форматы проведения конкрусов</li>
			</ul>
		</div>
	</div>
</section>
<section class="class">
	<h2> Предметы </h2>
	<div class="grid">
		<?
		$req = 'SELECT * FROM `type`';
		$result = mysqli_query($link, $req);
		$type = [];
		while ($row = mysqli_fetch_assoc($result))
			$type[] = $row;

		for ($i = 0; $i < count($type); $i++) {
			echo "<div class='type'>";
			echo "<img src='assets/" . $type[$i]['img'] . "'>";
			echo "<div class='text'>";
			echo "<h4>" . $type[$i]['name'] . "</h4>";
			echo "<p>" . $type[$i]['caption'] . "</p>";

			echo "<a class='btn' href = 'test.php?id=" . $type[$i]['id'] . "'>Перейти к предмету</a>";
			echo "</div>";
			echo "</div>";
		}
		?> </div>
</section>
<section class="olimp">
	<h2> Олимпиады </h2>
	<div class="grid" id='olimp'>

			<?
			$req = 'SELECT * FROM `tests`';
			$result = mysqli_query($link, $req);
			$test = [];
			while ($row = mysqli_fetch_assoc($result))
				$test[] = $row;

			for ($i = 0; $i < count($test); $i++) {

				$profile = $test[$i]['profile'];
				$req = 'SELECT `img` FROM `type` WHERE `id` =' . $profile;
				$img = mysqli_fetch_assoc(mysqli_query($link, $req))['img'];
				echo "<div class='test-n'>";
				echo "<img src='assets/" . $img . "'>";
				echo "<div class='text'>";
				echo "<h4>" . $test[$i]['name'] . "</h4>";
				echo "<p class='first'>Рекомендуется для " . $test[$i]['class'] . " класса</p>";
				echo "<p>" . $test[$i]['points'] . " олимпиадных очков</p>";
				if ($_COOKIE['user_id']) {
					echo "<a class='btn' href = 'practice.php?id=" . $test[$i]['id'] . "'>Перейти к олимпиаде</a>";
				} else {
					echo "<a class='btn' href = '#'>недоступно</a>";
				}

				echo "</div>";
				echo "</div>";
			}
			?>
</section>
</div>
<? include 'footer.php';
