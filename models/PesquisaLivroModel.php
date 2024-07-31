<?php
	namespace models;
	class PesquisaLivroModel extends Model
	{

		public static function pesquisarLivros(){
            if (isset($_POST["bt_enviar"])) {
				$tipo = $_POST["tipo"];
				$elemento = $_POST["elemento"];
			}
			if($tipo=='letra_titulo'){
				$livros = \MySql::connect()->prepare("SELECT * FROM livros WHERE letra_titulo LIKE '%$elemento%'");
				$livros->execute();
				return $livros->fetchAll();
			}
			elseif($tipo =='cdd'){
				$livros = \MySql::connect()->prepare("SELECT * FROM livros WHERE cdd='$elemento'");
				$livros->execute();
				return $livros->fetchAll();
			}
			elseif($tipo =='cod_livro'){
				$livros = \MySql::connect()->prepare("SELECT * FROM livros WHERE cod_livro='$elemento'");
				$livros->execute();
				return $livros->fetchAll();
			}
			else{
				echo "
				<script>
				alert('Não foram encontrados resultados para a busca!');
				</script>
				";
			}
			
		}
	}
?>