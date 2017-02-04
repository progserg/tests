<?php
require_once (__DIR__.'/MyClasses/Querys.php');
session_start();
$query = new Query();
$users = $query->getAllUsers();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Все результаты</title>
</head>
<body>
<table style="border: 1px #0c71aa solid;">
	<thead>
	<th>
		Имя
	</th>
	<th>
		Дата теста
	</th>
	<th>
		Результат
	</th>
	</thead>
	<?php foreach ($users as $user): ?>
		<tr>
			<td align="center" style="border: 2px #999 solid;"><?php echo $user['name']; ?></td>
			<td align="center" style="border: 2px #999 solid;"><?php echo $user['date']; ?></td>
			<td align="center" style="border: 2px #999 solid;"><?php echo $user['result']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
<form action="/index.php" method="post">
	<input type="hidden" name="endTest" value="restart"/>
	<input type="submit" value="пройти тест сначала"/>
</form>
<form action="/index.php" method="post">
	<input type="hidden" name="endTest" value="relogin"/>
	<input type="submit" value="пройти тест под другим именем"/>
</form>
<hr/>
</body>
</html>