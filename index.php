<?php
require_once(__DIR__ . '/MyClasses/CommonQueryes.php');
require_once(__DIR__ . '/MyClasses/Querys.php');
require_once(__DIR__ . '/MyClasses/Users.php');
require_once(__DIR__ . '/MyClasses/Admins.php');
require_once(__DIR__ . '/MyClasses/Compare.php');
session_start();

$query = new Query();
$user = '';
$endtest = false;

function isAdmin($name)
{
	if (Admin::isAdmin($name)) {
		$_SESSION['admin'] = $name;
		return true;
	} else {
		return false;
	}
}


function getQuestion($query)
{
	if ($_SESSION['num_question'] <= 20 && $_SESSION['num_question'] > 0) {
		$questions = $query->selectQuestionByNumber($_SESSION['num_question']);
		$_SESSION['questions'] = $questions;
	} else {

		return $endtest = true;
	}
}

$view = empty($_GET['view']) ? 'welcome' : $_GET['view'];
switch ($view) {
	case ('welcome'):
		$user = null;
		unset($_SESSION['user']);
		unset($_SESSION['num_question']);
		unset($_SESSION['admin']);
		if (isset($_COOKIE[session_name()])) {
			setcookie(session_name(), '', time() - 86400, '/');
		}
		session_destroy();
		break;
	case ('starttesting'):
		if (!isset($_SESSION['user'])) {
			if (!empty($_POST['user'])) {
				if (isAdmin($_POST['user'])) {
					$view = 'adminpanel';
				} else {
					$user = new User(session_id(), $_POST['user']);
					$_SESSION['user'] = $user;
					$_SESSION['num_question'] = 1;
					getQuestion($query);
					$view = 'testing';
				}
			} else {
				$view = 'welcome';
			}

		} else {
			$user = $_SESSION['user'];
			$view = 'testing';
		}
		if (isset($_SESSION['admin'])) {
			$view = 'adminpanel';
		}
		break;
	case ('restart'):

		if (!empty($_SESSION['user'])) {
			$user = $_SESSION['user'];
			$_SESSION['num_question'] = 1;
			getQuestion($query);
			$view = 'testing';
		} else {
			unset($_SESSION['admin']);
			$view = 'welcome';
		}
		break;
	case ('intesting'):
		$user = $_SESSION['user'];
		if (!empty($_POST['answer']) && $_GET['q'] == ($_SESSION['num_question'] + 1)) {
			if (20 >= $_SESSION['num_question'] && 0 < $_SESSION['num_question']) {
				$user->setChoose("choose" . $_SESSION['num_question'], $_POST['answer']);
			}
			$_SESSION['num_question']++;
			$endtest = getQuestion($query);

		}
		$view = 'testing';
		if (isset($_GET['endtest'])) {
			$endtest = true;
		}
		if ($endtest) {
			$chooses = $user->getChooses();
			$result = Compare::calculate($chooses);
			$user->setResult($result);
			$_SESSION['num_question'] = 100;
			$view = 'endtest';
		}
		break;
	case ('raiting'):
		if (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
		}
		break;
	default:
		('welcome');
		break;
}
include(__DIR__ . '/pages/index.php');