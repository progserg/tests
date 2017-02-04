<div class="test">
	<h1>Привет, <?php echo $user->getName(); ?></h1>
	<h2>Вопрос №<?php echo $_SESSION['num_question']; ?>:</h2>
	<p class="question">
		<?php
		echo $_SESSION['questions']['question'];
		?>
	</p>
	<form action="/index.php?view=intesting&q=<?php echo ($_SESSION['num_question']+1); ?>" method="post">
		<p class="answer">
			<input type="radio" name="answer" value="1"/>
			<?php
			echo $_SESSION['questions']['answer1'];
			?>
		</p>
		<p class="answer">
		<input type="radio" name="answer" value="2"/>
		<?php
		echo $_SESSION['questions']['answer2'];
		?>
		</p>
		<p class="answer">
		<input type="radio" name="answer" value="3"/>
		<?php
		echo $_SESSION['questions']['answer3'];
		?>
		</p>
		<input type="submit" value="Следующий вопрос ->"/>
	</form>
</div>
<!--<form action="/index.php" method="post">
	<input name="endTest" type="hidden" value="restart">
	<input type="submit" value="Начать сначала">
</form>
<form action="/index.php" method="post">
	<input name="endTest" type="hidden" value="relogin">
	<input type="submit" value="Начать под новым именем">
</form>-->