<?php
require_once(__DIR__ . '/DBConnect.php');
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
		if($sessionID == '')
		{
			$this->sessionID = date('Hms');
		}
		else{
			$this->sessionID = $sessionID;
		}
		if($name == '')
		{
			$this->name = $this->sessionID;
		}
		else{
			$this->name = $name;
		}
		$this->date = date('Y-m-d H:m:s');
		$this->addUser($this->sessionID, $this->name, $this->date);

		$values = [':sessionID'=>$sessionID, ':name' => $name, ':date' => $this->date];
		$query = Database:: prepare($this->getUserID);
		$query->execute($values);
		$id = $query->fetch();
		$this->id = $id['id'];
	}

	protected function addUser($sessionID, $name, $date)
	{
		$values = [':sessionID'=>$sessionID, ':name' => $name, ':date' => $date];
		$query = Database:: prepare($this->addUser);
		return $query->execute($values);
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
		$choose = '`'. $choose . '`';
		$setChoose = 'UPDATE `users` SET ' . $choose . '= :value WHERE `id` = :id';
		$values = [ ':value' => $value, ':id' => $this->id];
		$query = Database:: prepare($setChoose);
		return $query->execute($values);
	}

	public function getResult()
	{
		$query = Database:: prepare($this->getResult);
		$query->execute([':id' => $this->id]);
		$result = $query->fetch();
		return $result['result'];
	}

	public function getChooses()
	{
		$query = Database:: prepare($this->getAllChooses);
		$query->execute([':id' => $this->id]);
		$chooses = $query->fetch();
		
		for($i=1; $i<=20; $i++)
		{
			$this->choose[$i-1] = $chooses['choose'.$i];
		}
		return $this->choose;
	}

	public function setResult($result)
	{
		$values = [ ':result' => $result, ':id' => $this->id];
		$query = Database:: prepare($this->setResult);
		return $query->execute($values);
	}
}