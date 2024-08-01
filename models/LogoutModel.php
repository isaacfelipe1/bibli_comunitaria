<?php
namespace models;

class LogoutModel extends Model {
    public function logout() {
        if (isset($_POST["logout"])) {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION = [];
            session_destroy();
            header('Location: home');
            exit;
        }
    }
}
?>
