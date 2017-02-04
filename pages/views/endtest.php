<div class="login">
	<h1>
		<?php echo $user->getName(); ?>, Ваш результат:
	</h1>
	<p id="score">
		<?php echo $user->getResult($user->getUserID()); ?>
	</p>
</div>
