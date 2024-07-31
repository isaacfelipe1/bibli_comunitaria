<?php
namespace models;
class LogoutModel extends Model{
    public function logout(){
        if (isset($_POST["logout"])) {
            session_start();

        // Destruir a sessão
        session_destroy();

        // Redirecionar para a página de login
        header('Location: home');
        exit;
        }
    }
    
}
?>
