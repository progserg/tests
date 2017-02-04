<?php
require_once(__DIR__ . '/Querys.php');
class User
{
	protected $id = '';
	protected $sessionID = '';
	protected $name = '';
	protected $date = '';
	protected $choose = '';
	protected $query;
	protected $result = 0;

	///////////////////////////////////////////////
	//Запросы к Users
	//////////////////////////////////////////////
	protected $addUser = 'INSERT INTO `users`(`name`, `sessionID`, `date`) VALUES ( :name, :sessionID, :date ) ';
	protected $getUserID = 'SELECT * FROM `users` WHERE `name` = :name AND `date` = :date AND `sessionID` = :sessionID';
	protected $getResult = 'SELECT `result` FROM `users` WHERE `id` = :id';
	protected $getAllUsers = 'SELECT * FROM `users`';
	protected $getAllChooses = 'SELECT `choose1`, `choose2`, `choose3`, `choose4`, `choose5`, `choose6`, `choose7`, `choose8`, `choose9`, `choose10`, `choose11`, `choose12`, `choose13`, `choose14`, `choose15`, `choose16`, `choose17`, `choose18`, `choose19`, `choose20` FROM `users` WHERE `id`=:id';
	protected $setResult = 'UPDATE `users` SET `result` = :result WHERE `id` = :id';

	public function __construct($sessionID = '', $name = '')
	{
		$this->query = new Query();
		if($sessionID == '')
		{
			$this->sessionID = date('Hms');
		}
		if($name == '')
		{
			$this->name = $this->sessionID;
		}
		$this->date = date('Y-m-d H:m:s');
		$this->sessionID = $sessionID;
		$this->name = $name;
		$this->query->addUser($this->sessionID, $this->name, $this->date);
		$this->id = $this->query->getUserID($this->sessionID, $this->name, $this->date);
		/*for($i=1; $i<=20; $i++)
		{
			$this->choose[$i-1] = $user['choose'.$i];
		}*/
	}

	public function getName()
	{
		return $this->name;
	}

	public function getUserID()
	{
		return $this->id;
	}

	public function setChoose($choose, $value)
	{
		return $this->query->setUserChoose($choose, $value, $this->id);
	}

	public function getResult($id)
	{
		$this->result = $this->query->getResult($id);
		return $this->result;
	}

	public function getChooses()
	{
		$chooses = $this->query->getAllChooses($this->id);
		for($i=1; $i<=20; $i++)
		{
			$this->choose[$i-1] = $chooses['choose'.$i];
		}
		return $this->choose;
	}

	public function setResult($result)
	{
		return $this->query->setUserResult($this->id, $result);
	}
}