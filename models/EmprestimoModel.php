<?php
	
	namespace models;

class EmprestimoModel extends Model
{
    public function emprestar() {
        date_default_timezone_set('America/Sao_Paulo');

        if (isset($_POST["bt_enviar"])) {
            $fk_cod_livro = $_POST["fk_cod_livro"];
            $fk_cod_usuario = $_POST["fk_cod_usuario"];

            $verificaEmprestimos = \MySql::connect()->prepare("
                SELECT COUNT(*) AS total 
                FROM emprestado 
                WHERE fk_cod_usuario = ? AND status = 'Emprestado'
            ");
            $verificaEmprestimos->execute([$fk_cod_usuario]);
            $totalEmprestimos = $verificaEmprestimos->fetch()['total'];

            if ($totalEmprestimos >= 1) {
                echo "<script>alert('O usuário já possui um livro emprestado. Não é possível realizar um novo empréstimo.');</script>";
                return;
            }

            $data_emprestimo = date('Y-m-d');
            $data_devolucao = date('Y-m-d', strtotime('+1 week'));
            $usuario_logado = $_SESSION['user'];  
            
            $emprestimo = \MySql::connect()->prepare("
                INSERT INTO emprestado 
                (fk_cod_livro, fk_cod_usuario, status, data_registro, data_devolucao, usuario_logado) 
                VALUES (?, ?, 'Emprestado', ?, ?, ?)
            ");
            $emprestimo->execute([$fk_cod_livro, $fk_cod_usuario, $data_emprestimo, $data_devolucao, $usuario_logado]);

            if (!$emprestimo->rowCount() > 0) {
                echo "Erro durante o insert: erro em $emprestimo";
            } else {
                echo "<script>alert('Empréstimo realizado com sucesso!');</script>";
            }
        }
    }

    public function renovarEmprestimo($id_emprestimo) {
        $query = \MySql::connect()->prepare("SELECT data_devolucao FROM emprestado WHERE id_emprestimo = ?");
        $query->execute([$id_emprestimo]);
        $emprestimo = $query->fetch();

        if ($emprestimo) {
            $novaDataDevolucao = date('Y-m-d', strtotime($emprestimo['data_devolucao'] . ' +7 days'));
            $atualizaEmprestimo = \MySql::connect()->prepare("
                UPDATE emprestado 
                SET data_devolucao = ? 
                WHERE id_emprestimo = ?
            ");
            $atualizaEmprestimo->execute([$novaDataDevolucao, $id_emprestimo]);

            if ($atualizaEmprestimo->rowCount() > 0) {
                echo "<script>alert('Empréstimo renovado com sucesso! Nova data de devolução: {$novaDataDevolucao}');</script>";
            } else {
                echo "<script>alert('Erro ao renovar o empréstimo. Nenhuma linha foi atualizada.');</script>";
            }
        } else {
            echo "<script>alert('Empréstimo não encontrado.');</script>";
        }
    }
}

?>