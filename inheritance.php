<?php
class User
{
	protected $name;

	public function login()
	{
		echo $this->name . " is Logging in";
	}

	public function sayName()
	{
		echo $this->name, PHP_EOL;
	}

	public function changeNameTo($name)
	{
		if ($this->canEdit) {
			$this->name = $name;
		}
	}
}

class Admin extends User
{
	private $canEdit = true;

	public function __construct($name)
	{
		$this->name = $name;
	}

	public function changeNameTo($name)
	{
		if ($this->canEdit) {
			$this->name = $name;
		}
	}
}

class Client extends  User
{
	private $canEdit = false;
	public function __construct($name)
	{
		$this->name = $name;
	}
}

$client = new Client('Okoro');
$admin = new Admin('Freedom');

$admin->sayName();
$admin->changeNameTo('Nduka');
$admin->sayName();

