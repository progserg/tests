<?php
require_once (__DIR__.'/DBConnect.php');

class Queryes{
	protected static $getAllUsers = 'SELECT * FROM `users`';

	public static function getAllUsers()
	{
		$query = Database:: prepare(self::$getAllUsers);
		$query->execute();
		return $query;
	}
}