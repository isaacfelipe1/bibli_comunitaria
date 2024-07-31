<?php
	namespace models;
	class CadastroUsuarioModel extends Model
	{

		public function cadastrarUsuarios(){
            date_default_timezone_set('America/Sao_Paulo');
			if (isset($_POST["bt_enviar"])) {
                $nome=$_POST["nome"];
                $sexo = $_POST["sexo"];
                $idade = $_POST["idade"];
                $telefone = $_POST["telefone"];
                $endereco = $_POST["endereco"];
                $observacao = $_POST["observacao"];
            $livros = \MySql::connect()->prepare("INSERT INTO usuario(nome,sexo,idade, telefone, endereco, observacao) values (?,?,?,?,?,?)");
			$livros -> execute (array ($nome, $sexo, $idade, $telefone, $endereco, $observacao));
			if(!$livros->rowCount()>0){
				echo "Erro durante o insert: erro em $livros";
			}
			else{
				echo "<script> function cadastro(){
					alert('Cadastro realizado!')
					}
					cadastro();</script>";
			}
			}
			
		}
	}
?>