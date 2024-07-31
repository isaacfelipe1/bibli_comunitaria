<?php
	namespace models;
	class PesquisaUsuarioModel extends Model
	{

		public static function pesquisarUsuarios(){
            if (isset($_POST["bt_enviar"])) {
				$tipo = $_POST["tipo"];
				$elemento = $_POST["elemento"];
			}
			if($tipo=='nome'){
				$livros = \MySql::connect()->prepare("SELECT * FROM usuario WHERE nome LIKE '%$elemento%'");
				$livros->execute();
				return $livros->fetchAll();
			}
			elseif($tipo =='id_usuario'){
				$livros = \MySql::connect()->prepare("SELECT * FROM usuario WHERE id_usuario='$elemento'");
				$livros->execute();
				return $livros->fetchAll();
			}
			else{
				echo "
				<script>
				alert('Não foram encontrados resultados para a busca!');
				</script>
				";
			}
			
		}
	}
?>