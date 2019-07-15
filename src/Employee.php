<?php
namespace Nishal;
class Employee
{
	public $salary;

	public function display()
	{
		$this->salary = 2000;
		echo $this->salary;
	}
}