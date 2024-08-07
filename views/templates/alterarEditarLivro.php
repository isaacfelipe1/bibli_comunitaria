<?php
	use models\AlterarEditarLivroModel;
	$alt = models\AlterarEditarLivroModel::listarLivros2();
    foreach ($alt as $value) {
?>
<main>
	<h2>Alterar Informações</h2>
	<fieldset class="fieldset-cadastro">
		<form class="form-cadastro" method="post">
		<div class="div-label-input">
			<div class="label-input">
				<div style="display: block;">
					<input  type="hidden" name="cod_livro" value="<?php echo $value["cod_livro"]; ?>">
					<label for=""> <strong class="label-strong" >CDD:</strong> </label>
				</div>
				<div style="display: block;">
					<input style="margin: 0.5rem 0 0 0;width:5vw" id="campo" type="text" name="cdd" value="<?php echo $value["cdd"]; ?>" required>					
				</div>
			</div>

			<div class="label-input">
				<div style="display: block;">
					<label for=""> <strong class="label-strong">Autor:</strong> </label>
				</div>
				<div style="display: block;">
					<input style="margin: 0.5rem 0 0 0;width:60vw" id="campo" type="text" name="letra_sobrenome" value="<?php echo $value["letra_sobrenome"]; ?>" required>					
				</div>
			</div>


			<div class="label-input">
				<div style="display:block">
					<label for="">Titulo:</label>
				</div>
				<div style="display:block">
					<input style="margin: 0.5rem 0 0 0;width:68vw" id="campo" type="text" name="letra_titulo" value="<?php echo $value["letra_titulo"]; ?>" required>
				</div>
			</div>

			<div class="label-input">
				<div style="display:block">
					<label for=""> <strong class="label-strong">Exemplar:</strong> </label>
				</div>
				<div style="display:block">
					<select id="campo" name="exemplar" required>
                            <?php 
                                $i = 1;
                                for($i=1;$i<=100;$i++) {
                                    $value = $i;
                            ?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php 
                                }
                            ?>
                    </select> 
				</div>
			</div>
			<div class="label-input">
				<div style="display:block">
					<label for=""> <strong class="label-strong">Edicao:</strong></label>
				</div>
				<div style="display:block">
					<select id="campo" name="edicao" required>
                            <?php 
                                $i = 1;
                                for($i=1;$i<=100;$i++) {
                                    $value = $i;
                            ?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php 
                                }
                            ?>
                    </select>
				</div>
			</div>
			<input class="bt-submit " type="submit" name="bt-atualizar" value="Atualizar">
		</form>
</fieldset>
</main>

<?php 
}
?>
<?php 
$cad = new AlterarEditarLivroModel();
$cad ->alterarLivros();
?>