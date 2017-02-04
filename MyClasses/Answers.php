<?php
require_once(__DIR__ . '/DBConnect.php');

class Answers
{
	
	public static function getFirstAnswer()
	{
		$choose1 = 'SELECT * FROM `answers` WHERE `choose` = 1';
		$query = Database:: prepare($choose1);
		$query->execute();
		$result = $query->fetch();
		for ($i=2; $i<=21; $i++)
		{
			$answer[$i-2] = $result['question'. ($i-1)];
		}
		return $answer;
	}
	public static function getSecondAnswer()
	{
		$choose1 = 'SELECT * FROM `answers` WHERE `choose` = 2';
		$query = Database:: prepare($choose1);
		$query->execute();
		$result = $query->fetch();
		for ($i=2; $i<=21; $i++)
		{
			$answer[$i-2] = $result['question'. ($i-1)];
		}
		return $answer;
	}
	public static function getThirdAnswer()
	{
		$choose1 = 'SELECT * FROM `answers` WHERE `choose` = 3';
		$query = Database:: prepare($choose1);
		$query->execute();
		$result = $query->fetch();
		for ($i=2; $i<=21; $i++)
		{
			$answer[$i-2] = $result['question'. ($i-1)];
		}
		return $answer;
	}
}