<?php
	namespace models;
	class CadastroLoginModel extends Model
	{

        public function cadastrarUsuario()
{
        if (isset($_POST["bt_enviar"])) {
            $nome_usuario = $_POST["nome_usuario"];
            $senha = $_POST["senha"];

            $password_hash = password_hash($senha, PASSWORD_DEFAULT);


            $cadastro = \MySql::connect()->prepare("INSERT INTO login (username, password_hash) VALUES (?, ?)");
            $cadastro->execute([$nome_usuario, $password_hash]);

            if ($cadastro->rowCount() > 0) {
                echo "<script> function cadastro(){
                    alert('Cadastro realizado com sucesso!')
                }
                cadastro();</script>";
            } else {
                echo "<script> function cadastro(){
                    alert('Erro durante o cadastro!')
                }
                cadastro();</script>";
            }
        }
    }
		
	}
?>