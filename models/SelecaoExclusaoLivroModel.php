<?php
	namespace models;
	class SelecaoExclusaoLivroModel extends Model
	{
		public function excluirLivros(){
			if (isset($_POST["bt_excl"])) {
			$cod_livro = $_POST["codigo"];
            $excl = \MySql::connect()->prepare("DELETE FROM livros WHERE cod_livro=$cod_livro");
			$excl -> execute ();
			if(!$excl->rowCount()>0){
				echo "Erro durante o insert: erro em $excl";
			}
			else{
				echo "<script> function cadastro(){
					alert('Livro excluído com sucessso!')
					}
					cadastro()
					window.location.href='selecaoExclusaoLivro';
					</script>";
			}
			}
			
		}
	}
?>