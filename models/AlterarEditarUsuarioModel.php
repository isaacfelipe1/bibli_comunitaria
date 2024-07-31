<?php
	namespace models;
	class AlterarEditarUsuarioModel extends Model
	{
		public function alterarUsuario(){

            if (isset($_POST["bt-atualizar"])){
                $id_usuario = $_POST["id_usuario"];
                $nome = $_POST["nome"];
                $sexo = $_POST["sexo"];
                $idade = $_POST["idade"];
                $telefone = $_POST["telefone"];
                $endereco = $_POST["endereco"]; 
                $observacao = $_POST["observacao"]; 
                $alt = \MySql::connect()->prepare("UPDATE usuario SET nome='$nome', sexo='$sexo', idade=$idade, telefone='$telefone', endereco='$endereco' WHERE id_usuario=$id_usuario");
                $alt -> execute();
                if(!$alt->rowCount()>0){
                    echo "Erro durante o insert: erro em $alt";
                }
                else{
                    echo "<script> function cadastro(){
                        alert('Livro alterado com sucessso!')
                        }
                        cadastro()
                        window.location.href='http://localhost/estrutura_mvc 2/consultaUsuario';
                        </script>";
                }
			}
			
		}

        public static function listarUsuario2(){
            $id_usuario = $_POST["id_usuario"];
            $alt = \MySql::connect()->prepare("SELECT id_usuario, nome, sexo, idade, telefone, endereco, observacao FROM usuario WHERE id_usuario=$id_usuario");
            $alt -> execute();
            return $alt->fetchAll();
        }
	}
?>