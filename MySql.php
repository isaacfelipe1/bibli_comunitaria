<?php
	

	class MySql
	{
		private $pdo;
		
		public static function connect(){
			if(!isset($pdo)){
				$pdo = new PDO('mysql:host=localhost;dbname=u397599254_bibli','u397599254_root','Bibli123456#');
			}

			return $pdo;
		}
	}
?>