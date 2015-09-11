<?php
	class empty
	{
		private $id;
		private $name;
		private $email;
		private $level;
		private $salary;
		
		public function getEmail()
		{
			return $this->email;
		}
		
		public function getLevel()
		{
			return $this->level;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getSalary()
		{
			return $this->salary;
		}
	}
?>