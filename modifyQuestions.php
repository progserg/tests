<?php
//страница редактирования вопросов
require_once(__DIR__ . '/MyClasses/Querys.php');
$query = new Query();

if(!empty($_POST['action']))
{
	if($_POST['action']=='update')
	{
		$query->changeQuestion($_POST['id'], $_POST['num_question'], $_POST['question'], $_POST['answer1'], $_POST['answer2'], $_POST['answer3']);
	}
	if($_POST['action']=='add')
	{
		$query->addQuestion($_POST['num_question'], $_POST['question'], $_POST['answer1'], $_POST['answer2'], $_POST['answer3']);
	}
	if($_POST['action']=='del')
	{
		$query->deleteQuestion($_POST['id']);
	}
}
?>


<?php


$values = $query->selectQuestions();
foreach ($values as $value):
	?>
	<form action="/index.php?view=starttesting" method="post" style="border: 1px #6e1d11 solid;">
		<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
		<input type="hidden" name="action" value="update">
		Номер вопроса:
		<input type="text" name="num_question" value="<?php echo $value['number']; ?>"/><br/>
		Вопрос:
		<input type="text" name="question" value="<?php echo $value['question']; ?>"/><br/>
		Первый вариант ответа:
		<input type="text" name="answer1" value="<?php echo $value['answer1']; ?>"/><br/>
		Второй вариант ответа:
		<input type="text" name="answer2" value="<?php echo $value['answer2']; ?>"/><br/>
		Третий вариант ответа:
		<input type="text" name="answer3" value="<?php echo $value['answer3']; ?>"/><br/>
		<input type="submit" value="Сохранить изменения">
	</form>
	<form action="/index.php?view=starttesting" method="post">
		<input type="hidden" name="id" value="<?php echo $value['id']; ?>">
		<input type="hidden" name="action" value="del">
		<input type="submit" value="Удалить запись">
	</form>
	<?php
endforeach;
?>
<hr>
<h4>Добавить вопрос</h4>
<form action="/index.php?view=starttesting" method="post" style="border: 2px #444444 solid;">
	<input type="hidden" name="action" value="add">
	Номер вопроса:
	<input type="text" name="num_question" /><br/>
	Вопрос:
	<input type="text" name="question" /><br/>
	Первый вариант ответа:
	<input type="text" name="answer1" /><br/>
	Второй вариант ответа:
	<input type="text" name="answer2" /><br/>
	Третий вариант ответа:
	<input type="text" name="answer3" /><br/>
	<input type="submit" value="Записать">
</form>
</body>
</html>