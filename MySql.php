<?php
	class MySql
	{
		private static $pdo;
	
		public static function connect(){
			if(!isset(self::$pdo)){
				// Substitua com as credenciais do seu banco de dados local
				self::$pdo = new PDO('mysql:host=localhost;dbname=u397599254_bibli','root',''); // usuário 'root' e senha vazia no WampServer por padrão
				// Opcionalmente, você pode definir o modo de erro para excepcionar:
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
	
			return self::$pdo;
		}
	}
	

?>