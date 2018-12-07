<?php

class Fan
{
	public $blade;
	public $stand;
	protected $rotor;
	private $state = false;

	public function __construct($blade, $stand)
	{
		$this->blade = $blade;
		$this->stand = $stand;
	}

	public function switchState($state)
	{
		$this->state = (boolean) $state;
	}

	public function isFanRunning()
	{
		if ($this->state === true) {
			return true;
		} else {
			return false;
		}
	}
}

$oxFan = new Fan(3, 4);
echo $oxFan->blade;
//$oxFan->blade = 2;