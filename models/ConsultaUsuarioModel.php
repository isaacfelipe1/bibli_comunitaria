<?php
	namespace models;
	date_default_timezone_set('America/Sao_Paulo');
	class ConsultaUsuarioModel extends Model
	{
		public static function listarUsuarios(){
		$usuarios = \MySql::connect()->prepare("SELECT * FROM usuario order by nome");
		$usuarios->execute();
		return $usuarios->fetchAll();
		}
	}
?>