<?php
$users = Queryes::getAllUsers();
?>

<table>
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
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['date']; ?></td>
			<td><?php echo $user['result']; ?></td>

		</tr>
		<tr>
			<td colspan="3">
				<hr>
			</td>
		</tr>
	<?php endforeach; ?>
</table>
<!--<form action="/index.php" method="post">
	<input type="hidden" name="endTest" value="restart"/>
	<input class="btn alert-success" type="submit" value="пройти тест сначала"/>
</form>
<form action="/index.php" method="post">
	<input type="hidden" name="endTest" value="relogin"/>
	<input type="submit" value="пройти тест под другим именем"/>
</form>-->