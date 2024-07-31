<?php
	namespace models;
	class SelecaoDevolucaoModel extends Model
	{
		public function devolverLivro()
{
    if (isset($_POST["bt-dev"])) {
        if (isset($_POST['id_emprestimo'])) {
            $id_emprestimo = $_POST['id_emprestimo'];

            $excl = \MySql::connect()->prepare("DELETE FROM emprestado WHERE id_emprestimo = :id_emprestimo");
            $excl->bindParam(':id_emprestimo', $id_emprestimo, \PDO::PARAM_INT);
            $excl->execute();

            if ($excl->rowCount() > 0) {
                echo "<script>alert('Livro devolvido com sucesso!');</script>";
            } else {
                echo "<script>alert('Erro durante a devolução do livro.');</script>";
            }
        } else {
            echo "<script>alert('Selecione um livro para devolver.');</script>";
        }

        echo "<script>window.location.href='selecaoDevolucao';</script>";
    }
}
	}
?>