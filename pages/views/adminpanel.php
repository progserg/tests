<?php
if (isset($_SESSION['admin'])) {
	if ($_SESSION['admin'] == 'progserg') {
		require_once (__DIR__.'/../../modifyQuestions.php');
	}
} else {
	?>
	<div class="test">
		<?php echo 'Вы кто такие?!?! Я ВАС не звал!!! Идите нахуй!!!'; ?>
	</div>
<?php
}