<?php

	class Users extends Model
	{
		public function __construct()
		{
			parent::__construct();
			
			//TODO: User uniqueness.
			//TODO: Need some description options to display in admin.
			$this->fields = array
			(
				'user_id' 	=> array('type' => 'pk', 'name' => 'Key'),
				'user' 		=> array('type' => 'none', 'name' => 'Username'),
				'pass' 		=> array('type' => 'password', 'name' => 'Password'),
				'role' 		=> array('type' => 'select', 'name' => 'Role', 'options' => array('user', 'admin'))
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