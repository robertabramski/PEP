<?php

	class Users extends Model
	{
		public function __construct()
		{
			parent::__construct();
			
			$this->fields = array
			(
				'user' => array('type' => 'label'),
				'pass' => array('type' => 'password'),
				'role' => array('type' => 'select', 'options' => array('user', 'admin'))
			);
		}
		
		public function get_user($id)
		{
			$result = $this->select('*', array('user_id' => $id), 1);
			return $result[0];
		}
		
		public function get_users()
		{
			return $this->select('*');
		}
	}
	
?>