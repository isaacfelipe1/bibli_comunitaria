<?php

namespace models;

class LoginModel extends Model
{
    public function logar()
    {
        date_default_timezone_set('America/Sao_Paulo');

        if (isset($_POST["logar"])) {
            $nome_usuario = $_POST["nome_usuario"];
            $senha = $_POST["senha"];

            // Consultar o banco de dados para obter o hash de senha correspondente ao nome de usuário
            $consulta = \MySql::connect()->prepare("SELECT password_hash FROM login WHERE username = ?");
            $consulta->execute([$nome_usuario]);
            $resultado = $consulta->fetch();

            if ($resultado && password_verify($senha, $resultado['password_hash'])) {
                // Senha está correta
                $_SESSION['user'] = $nome_usuario;
                echo "<script> function cadastro(){
                    
                }
                cadastro();
                window.location.href='menu';
                </script>";

            } else {
                // Senha está incorreta ou usuário não encontrado
                echo "<script> function cadastro(){
                    alert('Nome de usuário ou senha incorretos!')
                }
                cadastro();
                </script>";
            }
        }
    }
}
