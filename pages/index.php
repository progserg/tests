<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
	<link rel="stylesheet" href="../style/css/style.css">
</head>
<body>
<header>
	<div id="logo"></div>
	<div class="logo_menu">
		<ul>
			<li><a href="/index.php?view=restart">Начать тест сначала</a></li>
			<li><a href="/index.php?view=welcome">Начать под новым именем</a></li>
			<li><a href="/index.php?view=raiting">Просмотреть все результаты</a></li>
		</ul>
	</div>
	<?php
	if (is_object($user)) {
		if (0 < $user->getResult($user->getUserID())) {
			//$_SESSION['num_question'] = 100; ////////////////////////поправь!!!!!!!!!!!!!
			?>
			<a href="/index.php?view=intesting&endtest" id="result">Просмотреть свой результат</a>
			<?php
		}
	}
	?>

</header>
<div class="wrapper">
	<div class="main">
		<?php
		require_once(__DIR__ . '/views/' . $view . '.php');
		?>
	</div>
</div>
<footer>
	jsdhbdhjf
</footer>
</body>
</html>