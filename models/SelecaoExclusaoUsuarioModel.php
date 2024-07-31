<?php
	namespace models;
	class SelecaoExclusaoUsuarioModel extends Model
	{
		public function excluirUsuarios(){
			if (isset($_POST["bt_excl"])) {
			$id_usuario = $_POST["codigo"];
            $excl = \MySql::connect()->prepare("DELETE FROM usuario WHERE id_usuario=$id_usuario");
			$excl -> execute ();
			if(!$excl->rowCount()>0){
				echo "Erro durante o insert: erro em $excl";
			}
			else{
				echo "<script> function cadastro(){
					alert('Livro excluído com sucessso!')
					}
					cadastro()
					window.location.href='consultaUsuario';
					</script>";
			}
			}
			
		}
	}
?>