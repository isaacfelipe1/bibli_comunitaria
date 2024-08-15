<?php
	namespace models;

	class CadastroAlunoModel extends Model
	{
		public function cadastrarAlunos()
		{
			date_default_timezone_set('America/Sao_Paulo');
	
			if (isset($_POST["bt_enviar"])) {
			
				$nome = $_POST["nome"];
				$sexo = $_POST["sexo"];
				$idade = $_POST["idade"];
				$telefone = $_POST["telefone"];
				$endereco = $_POST["endereco"];
				$observacao = $_POST["observacao"];
				$responsavel = $_POST["responsavel"];
				$escola = $_POST["escola"];
				$turma = $_POST["turma"];
				$disponibilidade = $_POST["disponibilidade"];
				$foto = $_FILES['foto'];
				$fotoNome = uniqid() . '-' . $foto['name']; 
				$fotoDiretorio = 'uploads/' . $fotoNome; 
	
				if (!file_exists('uploads')) {
					mkdir('uploads', 0777, true);
				}
	
				if (move_uploaded_file($foto['tmp_name'], $fotoDiretorio)) {
					$livros = \MySql::connect()->prepare("INSERT INTO alunos(nome, sexo, idade, telefone, endereco, observacao, responsavel, escola, turma, disponibilidade, foto) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
					$livros->execute(array($nome, $sexo, $idade, $telefone, $endereco, $observacao, $responsavel, $escola, $turma, $disponibilidade, $fotoNome));
	
					if (!$livros->rowCount() > 0) {
						echo "Erro durante o insert: erro em $livros";
					} else {
						echo "<script>
								function cadastro() {
									alert('Cadastro realizado com sucesso!');
								}
								cadastro();
								window.location.href='menu';
							  </script>";
					}
				} else {
					echo "<script>alert('Erro ao enviar a foto.');</script>";
				}
			}
		}
	}
	
?>