<?php
require_once (__DIR__.'/MyClasses/Users.php');
session_start();
if(isset($_SESSION['user']))
{
	$user = $_SESSION['user'];
}
else{
	header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
<h1>
	<?php echo $user->getName();?>, Ваш результат:
</h1>
<?php echo $user->getResult($user->getUserID()); ?>
<form action="/index.php" method="post">
	<input type="hidden" name="endTest" value="restart"/>
	<input type="submit" value="пройти тест сначала"/>
</form>
<form action="/index.php" method="post">
	<input type="hidden" name="endTest" value="relogin"/>
	<input type="submit" value="пройти тест под другим именем"/>
</form>
<hr/>
<form action="/raiting.php" method="post">
	<input type="submit" value="просмотреть результаты"/>
</form>
</body>
</html>