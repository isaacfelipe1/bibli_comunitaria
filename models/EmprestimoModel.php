<?php
namespace models;

class EmprestimoModel extends Model
{
    public function emprestar()
    {
        date_default_timezone_set('America/Sao_Paulo');
        if (isset($_POST["bt_enviar"])) {
            $fk_cod_livro = $_POST["fk_cod_livro"];
            $fk_cod_usuario = $_POST["fk_cod_usuario"];
            $data_emprestimo = date('Y-m-d');
            $data_devolucao = date('Y-m-d', strtotime('+1 week'));

            $usuarioQuery = \MySql::connect()->prepare("SELECT telefone FROM usuario WHERE id = ?");
            $usuarioQuery->execute([$fk_cod_usuario]);
            $usuario = $usuarioQuery->fetch();

            if ($usuario) {
                $telefoneUsuario = $usuario['telefone'];
                
                $emprestimo = \MySql::connect()->prepare("INSERT INTO emprestado VALUES (NULL,?,?,DEFAULT,?,?)");
                $emprestimo->execute([$fk_cod_livro, $fk_cod_usuario, $data_emprestimo, $data_devolucao]);

                if (!$emprestimo->rowCount() > 0) {
                    echo "Erro durante o insert: erro em $emprestimo";
                } else {
                    echo "<script> 
                            function cadastro() {
                                alert('Empréstimo realizado! Telefone do usuário: $telefoneUsuario');
                            }
                            cadastro();
                          </script>";
                }
            } else {
                echo "Usuário não encontrado.";
            }
        }
    }
}
?>
