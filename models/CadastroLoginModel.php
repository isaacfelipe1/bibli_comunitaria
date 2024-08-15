<?php
	namespace models;

    class CadastroLoginModel extends Model
    {
        public function cadastrarUsuario()
        {
            if (isset($_POST["bt_enviar"])) {
                $nome_usuario = $_POST["nome_usuario"];
                $senha = $_POST["senha"];
                $foto = $_FILES['foto'];
    
                $password_hash = password_hash($senha, PASSWORD_DEFAULT);

                $fotoNome = uniqid() . '-' . $foto['name']; 
                $fotoDiretorio = 'uploads/' . $fotoNome; 
    
                if (!file_exists('uploads')) {
                    mkdir('uploads', 0777, true);
                }
    
                if (move_uploaded_file($foto['tmp_name'], $fotoDiretorio)) {
                    $cadastro = \MySql::connect()->prepare("INSERT INTO login (username, password_hash, foto) VALUES (?, ?, ?)");
                    $cadastro->execute([$nome_usuario, $password_hash, $fotoNome]);
    
                    if ($cadastro->rowCount() > 0) {
                        echo "<script>
                                function cadastro(){
                                    alert('Cadastro realizado com sucesso!')
                                }
                                cadastro();
                              </script>";
                    } else {
                        echo "<script>
                                function cadastro(){
                                    alert('Erro durante o cadastro!')
                                }
                                cadastro();
                              </script>";
                    }
                } else {
                    echo "<script>
                            alert('Erro ao enviar a foto.');
                          </script>";
                }
            }
        }
    }
    
?>