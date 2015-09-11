<?php
	//admin table
	class Admin
	{
		private $id;
		private $name;
		private $password;
		//ID
		public function getId()
		{
			return $this->id;
		}
		//name
		public function getName()
		{
			return $this->name;
		}
		//password
		public function getPassword()
		{
			return $this->password;
		}
	}
?>