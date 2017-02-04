<?php
include(__DIR__ . '/Answers.php');
require_once (__DIR__.'/DBConnect.php');

class Compare
{
	public static function calculate($chooses)
	{
		$result = 0;
		$firstAnswers = Answers::getFirstAnswer();
		$secondAnswers = Answers::getSecondAnswer();
		$thirdAnswers = Answers::getThirdAnswer();
		for ($i = 0; $i < 20; $i++) {
			switch ($chooses[$i]) {
				case 1:
					$result += $firstAnswers[$i];
					break;
				case 2:
					$result += $secondAnswers[$i];
					break;
				case 3:
					$result += $thirdAnswers[$i];
					break;
				default:
					$result +=0;
					break;
			}
		}

		return $result;

	}
}