<?php
	namespace models;
	class GeradorCodigosModel extends Model
	{
		public static function listarCodigos(){
            $codigos = \MySql::connect()->prepare("SELECT * FROM livros");
        }
	}
?>