<?php

	class Input
	{
		public function __construct()
		{
			unset($_GET);
			
			if(get_magic_quotes_gpc())
			{
				$_POST = array_map('stripslashes', $_POST);
			}
			
			foreach($_POST as $key => $value)
			{
				$_POST[$key] = $this->sanitize($value);
			}
		}
		
		public function post($value)
		{
			return $_POST[$value];
		}
		
		private function sanitize($value)
		{
			return strip_tags(addslashes($value));
		}
	}
	
?>