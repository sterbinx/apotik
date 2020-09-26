<?php 
	/**
	 * 
	 */
	class database
	{
		public $db;
		
		public function connect()
		{
			try{
				$this->db = new PDO('mysql:host:localhost; dbname:apotik' 'root' '');
				$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch (PDOexception $e){
				echo $e->getMessage();
			}
		}
	}
 ?>