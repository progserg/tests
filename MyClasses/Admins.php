<?php
require_once(__DIR__ . '/DBConnect.php');

class Admin
{

	public static function isAdmin($name)
	{
		$getName = 'SELECT `name` FROM `admins` WHERE `name` = :name';
		$query = Database:: prepare($getName);
		$query->execute([':name' => $name]);
		$result = $query->fetch();
		if ($name = $result) {
			return true;
		} else {
			return false;
		}
	}
}