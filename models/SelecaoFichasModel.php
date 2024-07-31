<?php
	namespace models;
	class SelecaoFichasModel extends Model
	{
        public function limparFichas(){
            if (isset($_POST["bt_limp_fich"])) {

                        $fich = \MySql::connect()->prepare("DELETE FROM fichas");
                        $fich -> execute ();
                        if(!$fich->rowCount()>0){
                            echo "Erro durante o insert: erro em $fich";
                        }
                        else{
                            echo "<script> function cadastro(){
                                alert('Fichas criadas com com sucessso!')
                                }
                                cadastro()
                                window.location.href='http://localhost/estrutura_mvc 2/fichas';
                                </script>";
                        }
			
			}
        }


		public function criarFichas(){
			if (isset($_POST["bt_fich"])) {
                if(isset($_POST['cod_livro'])){
                    $opcoesSelecionadas = $_POST['cod_livro'];

                    foreach ($opcoesSelecionadas as $opcao) {
                        $fich = \MySql::connect()->prepare("INSERT INTO fichas (fk_cod_livro) VALUES ($opcao)");
                        $fich -> execute ();
                        if(!$fich->rowCount()>0){
                            echo "Erro durante o insert: erro em $fich";
                        }
                        else{
                            echo "<script> function cadastro(){
                                alert('Fichas criadas com com sucessso!')
                                }
                                cadastro()
                                window.location.href='http://localhost/estrutura_mvc 2/fichas';
                                </script>";
                        }
                    }
                }
			//$cod_livro = $_POST["codigo"];
            
			
			}
			
		}
	}
?>