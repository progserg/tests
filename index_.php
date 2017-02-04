<?php
//require_once(__DIR__ . '/MyClasses/Querys.php');
include(__DIR__ . '/MyClasses/Users.php');
require_once (__DIR__.'/MyClasses/Compare.php');
session_start();

$query = new Query();
$user = '';
//если заходим в тест первый раз
if (empty($_POST['user']) && empty($_SESSION['user'])) {
	header("Location: http://" . $_SERVER['HTTP_HOST'] . "/login.php");
} //ввели имя на странице логина
elseif (!empty($_POST['user'])) {
	$user = new User(session_id(), $_POST['user']);
	$_SESSION['user'] = $user;
	$_SESSION['num_question'] = 1;
	header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
}
//проходим тест//
if (!empty($_SESSION['user'])) {
	//перезапуск теста
	if (!empty($_POST['endTest'])) {
		//..сначала
		if ($_POST['endTest'] == 'restart') {
			$_SESSION['num_question'] = 1;
			header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
		}
		//..перелогиниваемся
		if ($_POST['endTest'] == 'relogin') {
			unset($_SESSION['user']);
			unset($_SESSION['num_question']);
			if (isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time() - 86400, '/');
			}
			session_destroy();
			header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
		}
	}
	//в процессе тестирования..
	if (empty($_POST['endTest'])) {
		if ($_SESSION['num_question'] <= 20 && $_SESSION['num_question'] > 0) {
			if (!empty($_POST['answer'])) {
				$user = $_SESSION['user'];
				$user->setChoose("choose" . $_SESSION['num_question'], $_POST['answer']);


				if (!empty($_POST['testing'])) {
					if ($_POST['testing'] == 'inProgress') {
						$_SESSION['num_question']++; //берем следующий вопрос
					}
				}
			}
			if ($_SESSION['num_question'] > 20) {
				header("Location: http://" . $_SERVER['HTTP_HOST'] . "/index.php");
			}
			if ($_SESSION['num_question'] < 21) {
				$questions = $query->selectQuestionByNumber($_SESSION['num_question']);
				$_SESSION['questions'] = $questions;
				header("Location: http://" . $_SERVER['HTTP_HOST'] . "/questions.php");
			}
		}
		elseif ($_SESSION['num_question'] > 20) {
			$user = $_SESSION['user'];
			$chooses = $user->getChooses();
			$result = Compare::calculate($chooses);
			$user->setResult($result);
			header("Location: http://" . $_SERVER['HTTP_HOST'] . "/result.php");
		}
	}

}

