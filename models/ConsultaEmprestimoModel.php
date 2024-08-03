<?php
	namespace models;
	date_default_timezone_set('America/Sao_Paulo');
	class ConsultaEmprestimoModel extends Model
	{

		public static function listarEmprestimos(){
		$livros = \MySql::connect()->prepare("SELECT emprestado.id_emprestimo, livros.cod_livro, usuario.id_usuario,usuario.nome, livros.letra_titulo, emprestado.status, emprestado.data_registro, emprestado.data_devolucao 
                                                FROM usuario, livros, emprestado
                                                WHERE emprestado.fk_cod_livro=livros.cod_livro
                                                AND emprestado.fk_cod_usuario=usuario.id_usuario order by nome");
		$livros->execute();
		return $livros->fetchAll();
		}
	}
?>