<?php
	namespace models;
	class CadastroAlunoModel extends Model
	{

		public function cadastrarAlunos(){
            date_default_timezone_set('America/Sao_Paulo');
			if (isset($_POST["bt_enviar"])) {
                $nome=$_POST["nome"];
                $sexo = $_POST["sexo"];
                $idade = $_POST["idade"];
                $telefone = $_POST["telefone"];
                $endereco = $_POST["endereco"];
                $observacao = $_POST["observacao"];
                $responsavel = $_POST["responsavel"];
                $escola = $_POST["escola"];
                $turma = $_POST["turma"];
                // $serie = $_POST["serie"];
                $disponibilidade = $_POST["disponibilidade"];
            $livros = \MySql::connect()->prepare("INSERT INTO alunos(nome,sexo,idade, telefone, endereco, observacao, responsavel, escola, turma, disponibilidade) values (?,?,?,?,?,?,?,?,?,?)");
			$livros -> execute (array ($nome, $sexo, $idade, $telefone, $endereco, $observacao, $responsavel, $escola, $turma, $disponibilidade));
			if(!$livros->rowCount()>0){
				echo "Erro durante o insert: erro em $livros";
			}
			else{
				echo "<script> function cadastro(){
					alert('Cadastro realizado!')
					}
					cadastro();
					window.location.href='menu';
					</script>";
			}
			}
			
		}
	}
?>