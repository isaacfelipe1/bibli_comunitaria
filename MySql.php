<?php
	

	class MySql
	{
		private $pdo;
		
		public static function connect(){
			if(!isset($pdo)){
				$pdo = new PDO('mysql:host=srv1182.hstgr.io;dbname=u397599254_bibli','u397599254_root','Bibli123456#');
			}

			return $pdo;
		}
	}
?>