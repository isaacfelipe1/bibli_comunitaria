<?php
	namespace models;
	date_default_timezone_set('America/Sao_Paulo');
	class ConsultaAlunoModel extends Model
	{
		public static function listarAlunos(){
		$usuarios = \MySql::connect()->prepare("SELECT * FROM alunos order by nome");
		$usuarios->execute();
		return $usuarios->fetchAll();
		}
	}
?>