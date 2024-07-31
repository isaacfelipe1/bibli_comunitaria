<?php
	namespace models;
	class SelecaoCodigosModel extends Model
	{
        public function limparCodigos(){
            if (isset($_POST["bt_limp_cod"])) {

                        $fich = \MySql::connect()->prepare("DELETE FROM codigos");
                        $fich -> execute ();
                        if(!$fich->rowCount()>0){
                            echo "Erro durante o insert: erro em $fich";
                        }
                        else{
                            echo "<script> function cadastro(){
                                alert('Codigos excuidos com com sucessso!')
                                }
                                cadastro()
                                window.location.href='selecaoCodigos';
                                </script>";
                        }
			
			}
        }


		public function criarCodigos(){
			if (isset($_POST["bt_cod"])) {
                if(isset($_POST['cod_livro'])){
                    $opcoesSelecionadas = $_POST['cod_livro'];

                    foreach ($opcoesSelecionadas as $opcao) {
                        $cod = \MySql::connect()->prepare("INSERT INTO codigos (fk_cod_livro) VALUES ($opcao)");
                        $cod -> execute ();
                        if(!$cod->rowCount()>0){
                            echo "Erro durante o insert: erro em $cod";
                        }
                        else{
                            echo "<script> function cadastro(){
                                alert('Codigos criados com com sucessso!')
                                }
                                cadastro()
                                window.location.href='selecaoCodigos';
                                </script>";
                        }
                    }
                }
			//$cod_livro = $_POST["codigo"];
            
			
			}
			
		}
	}
?>