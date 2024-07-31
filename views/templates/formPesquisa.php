<main>
	<h2>
		Pesquisa de Livros
	</h2>
<form method="post" action="pesquisaLivro">
	<div id="form-pesquisa">
		<div id="label-pesquisa">
			<div style="display: inline-block; margin-right: 2rem">
				<label style="display: block;" for="">Titulo</label>
				<input type="radio" name="tipo" value="letra_titulo" required>
			</div>

			<div style="display: inline-block;margin-right: 2rem">
				<label style="display: block;" for="">CDD</label>
				<input type="radio" required name="tipo" value="cdd">
			</div>

			<div style="display: inline-block;margin-right: 2rem">
				<label style="display: block;" for="">Código</label>
				<input type="radio" required name="tipo" value="cod_livro">
			</div>

		</div>

		<div style="margin-top: 1rem ;" class="input-pesquisa">
		<input style="margin-left: 0;width:15vw" type="text" name="elemento" placeholder="CCD/Título/Código" required>
			<input class="bt-submit" type="submit" name="bt_enviar" value="Pesquisar">
		</div>
	</div>
</form>
</main>
