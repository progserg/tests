<?php
include (__DIR__.'/MyClasses/Users.php');

session_start();
$user = $_SESSION['user'];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Вопрос № <?php echo $_SESSION['num_question']; ?></title>
</head>
<body>
<h1>Привет, <?php echo $user->getName(); ?></h1>
<h2>Вопрос №<?php echo $_SESSION['num_question']; ?></h2>
<p style="border: 1px #ee11ca solid;">
	<?php
	echo $_SESSION['questions']['question'];
	?>
</p>
<form action="/index.php" method="post">
	<input type="hidden" name="testing" value="inProgress"/>
	<input type="radio" name="answer" value="1"/>
	<?php
	echo $_SESSION['questions']['answer1'];
	?>
	<br/>
	<input type="radio" name="answer" value="2"/>
	<?php
	echo $_SESSION['questions']['answer2'];
	?>
	<br/>
	<input type="radio" name="answer" value="3"/>
	<?php
	echo $_SESSION['questions']['answer3'];
	?>
	<br/>
	<br/>
	<input type="submit" value="Следующий вопрос ->"/>
</form>
<form action="/index.php" method="post">
	<input name="endTest" type="hidden" value="restart">
	<input type="submit" value="Начать сначала">
</form>
<form action="/index.php" method="post">
	<input name="endTest" type="hidden" value="relogin">
	<input type="submit" value="Начать под новым именем">
</form>
</body>
</html>