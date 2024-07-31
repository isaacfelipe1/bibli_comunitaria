<?php
	use models\AlterarEditarUsuarioModel;
	$alt = models\AlterarEditarUsuarioModel::listarUsuario2();
    foreach ($alt as $value) {
?>
<main>
	<h2>
		Alterar Informações do usuário
	</h2>
<fieldset class="fieldset-cadastro">
<form class="form-cadastro" method="post">
	<div class="div-label-input">
		<div class="label-input">
			<div>
				<input type="hidden" name="id_usuario" value="<?php echo $value["id_usuario"]; ?>">
				<label for=""> <strong class="label-strong">Nome:</strong></label>
			</div>
			<div>
				<input style="margin: 0.5rem 0 0 0;width: 30vw" id="campo" type="text" name="nome" value="<?php echo $value["nome"]; ?>" required>
			</div>
		</div>

		<div class="label-input">
			<div>
				<label for=""> <strong class="label-strong">Telefone:</strong></label>	
			</div>
			<div>
				<input oninput="formatPhoneNumber(this)" style="margin: 0.5rem 0 0 0;width: 25vw" id="campo" type="text" name="telefone" value="<?php echo $value["telefone"]; ?>" required>
			</div>
		</div>

		<div class="label-input">
			<div>
				<label for=""> <strong class="label-strong">Endereco:</strong></label>
			</div>
			<div>
				<input style="margin: 0.5rem 0 0 0;width: 40vw" id="campo" type="text" name="endereco" value="<?php echo $value["endereco"]; ?>" required>
			</div>
		</div>

		<div style="display: block;" class="label-input">
			<div>
				<label for=""> <strong class="label-strong">Observacao:</strong></label>
			</div>
			<div>
				<textarea style="margin: 0.5rem 0 0 0;width: 35vw; height:15vh; border: 1px solid rgba(190, 186, 186, 0.726); margin-bottom:2rem" name="observacao" id="" cols="30" rows="10" value="<?php echo $value["observacao"]; ?>"></textarea>
			</div>
		</div>

			
		<div class="label-input">
			<div>
				<label for=""> <strong class="label-strong">Sexo:</strong></label>
			</div>
			<div>
				<select id="campo" style="width:100px" name="sexo" required>
                    <option value="0">Masculino</option>
                    <option value="1">Feminino</option>
                </select>
			</div>
		</div>


		<div class="label-input">
			<div>
				<label for=""> <strong class="label-strong">Idade:</strong></label>
			</div>
			<div>
				<select id="campo" name="idade" required>
                    <?php 
                        $i = 10;
                        for($i=10;$i<=100;$i++) {
                            $value = $i;
                    ?>
                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php 
                        }
                    ?>
                </select>  
			</div>
		</div>
		<input style="display: block;" class="bt-submit" type="submit" name="bt-atualizar" value="Atualizar">
	</div>
</form>
</fieldset>
</main>


<?php 
}
?>
<?php
$alt = new AlterarEditarUsuarioModel();
$alt->alterarUsuario();
?>