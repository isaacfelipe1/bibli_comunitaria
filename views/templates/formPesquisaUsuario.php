<form method="post" action="pesquisaUsuario">
	<div id="form-pesquisa">
		<div id="label-pesquisa">
		<p>
        Pesquisar por:
		</p>
		<p>
			<label for="">Nome</label>
			<input type="radio" name="tipo" value="nome" required>
		</p>
		<p>
			<label for="">Codigo</label>
		<input type="radio" required name="tipo" value="id_usuario">
		</p>
		
		<p>
			<label for="">Pesquisar</label>
		</p>

		</div>

		<div class="input-pesquisa">
		<input type="text" name="elemento" placeholder="Nome/Codigo" required>
			<input class="bt-submit" type="submit" name="bt_enviar" value="Pesquisar">
		</div>
	</div>
</form>