<?php
namespace models;

class AlterarEditarUsuarioModel extends Model
{
    public function alterarUsuario()
    {
        if (isset($_POST["bt-atualizar"])) {
            $id_usuario = $_POST["id_usuario"];
            $nome = $_POST["nome"];
            $sexo = $_POST["sexo"];
            $idade = $_POST["idade"];
            $telefone = $_POST["telefone"];
            $endereco = $_POST["endereco"];
            $observacao = $_POST["observacao"];
            if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                $foto = $_FILES['foto'];
                $extensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
                $nome_arquivo = uniqid() . '-' . $foto['name'];
                $caminho_arquivo = 'uploads/' . $nome_arquivo;
                if (!file_exists('uploads')) {
                    mkdir('uploads', 0777, true);
                }
                if (!move_uploaded_file($foto['tmp_name'], $caminho_arquivo)) {
                    echo "<script>alert('Erro ao enviar a foto.');</script>";
                    return;
                }
            } else {
                $caminho_arquivo = null; 
            }
            $query = "UPDATE usuario SET nome=:nome, sexo=:sexo, idade=:idade, telefone=:telefone, endereco=:endereco, observacao=:observacao";
            if ($caminho_arquivo) {
                $query .= ", foto=:foto";
            }
            $query .= " WHERE id_usuario=:id_usuario";

            $alt = \MySql::connect()->prepare($query);
            $alt->bindParam(':nome', $nome);
            $alt->bindParam(':sexo', $sexo);
            $alt->bindParam(':idade', $idade);
            $alt->bindParam(':telefone', $telefone);
            $alt->bindParam(':endereco', $endereco);
            $alt->bindParam(':observacao', $observacao);
            if ($caminho_arquivo) {
                $alt->bindParam(':foto', $nome_arquivo);
            }
            $alt->bindParam(':id_usuario', $id_usuario);

            $alt->execute();

            if (!$alt->rowCount() > 0) {
                $errorInfo = $alt->errorInfo();
                echo "Erro durante o update: " . $errorInfo[2];
            } else {
                echo "<script>
                    function cadastro() {
                        alert('Usuário alterado com sucesso!');
                    }
                    cadastro();
                    window.location.href='localhost:8080/selecaoAlterarUsuario.php';
                </script>";
            }
        }
    }

    public static function listarUsuario2()
    {
        $id_usuario = $_POST["id_usuario"];
        $alt = \MySql::connect()->prepare("SELECT id_usuario, nome, sexo, idade, telefone, endereco, observacao, foto FROM usuario WHERE id_usuario=:id_usuario");
        $alt->bindParam(':id_usuario', $id_usuario);
        $alt->execute();
        return $alt->fetchAll();
    }
}
?>
