<?php

namespace models;

date_default_timezone_set('America/Sao_Paulo');
class ConsultaLivroModel extends Model
{


	//Aqui é o método para puxar os livros!
	public static function listarLivros()
	{
		global $pagina;
		global $paginas;
		$pagina = 1;

		if (isset($_GET['pagina']))
			$pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

		if (!$pagina)
			$pagina = 1;



		$limite = 20;
		$inicio = ($pagina * $limite) - $limite;
		$registros = \MySql::connect()->prepare("SELECT COUNT(cod_livro) AS count FROM livros")->fetch();

		if ($registros !== false) {
			$registros = $registros["count"];
		} else {
			$registros = 0;
		}

		$paginas = ceil($registros / $limite);
		$livros = \MySql::connect()->prepare("SELECT * FROM livros");
		$livros->execute();

		return $livros->fetchAll();
	}
}
