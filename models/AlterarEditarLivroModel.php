<?php
	namespace models;
	class AlterarEditarLivroModel extends Model
	{
		public function alterarLivros(){

            if (isset($_POST["bt-atualizar"])){
                $cod_livro = $_POST["cod_livro"];
                $letra_sobrenome = $_POST["letra_sobrenome"];
                $letra_titulo = $_POST["letra_titulo"];
                $exemplar = $_POST["exemplar"];
                $edicao = $_POST["edicao"];
                $ano_registro = $_POST["ano_registro"]; 
                $alt = \MySql::connect()->prepare("UPDATE livros SET letra_sobrenome='$letra_sobrenome', letra_titulo='$letra_titulo', exemplar=$exemplar, edicao='$edicao', ano_registro='$ano_registro' WHERE cod_livro=$cod_livro");
                $alt -> execute();
                if(!$alt->rowCount()>0){
                    echo "Erro durante o insert: erro em $alt";
                }
                else{
                    echo "<script> function cadastro(){
                        alert('Livro alterado com sucessso!')
                        }
                        cadastro()
                        window.location.href='http://localhost/estrutura_mvc 2/consultaLivro';
                        </script>";
                }
			}
			
		}

        public static function listarLivros2(){
            $cod_livro = $_POST["cod_livro"];
            $alt = \MySql::connect()->prepare("SELECT cdd, cod_livro, letra_sobrenome, letra_titulo, exemplar, edicao, ano_registro FROM livros WHERE cod_livro=$cod_livro");
            $alt -> execute();
            return $alt->fetchAll();
        }
	}
?>