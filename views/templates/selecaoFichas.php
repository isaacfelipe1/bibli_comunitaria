<?php 
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Selecione os campos para criar fichas</h2>
    

    <?php
    use models\SelecaoFichasModel;
    $excl = new SelecaoFichasModel();
    $excl->limparFichas();
    ?>
<form method="post">
<a style="background-color: #04aa6d;text-decoration:none" class="ficha-codigo" href="fichas">Ver Fichas</a>
<input class="ficha-codigo" type="submit" name='bt_limp_fich' value="Limpar fichas">

<table id="customers" style="border: 1px solid black;">
<tr>
        <th>#</th>
        <th>Codigo</th>
        <th>Titulo</th>
</tr>
<?php 
    $livros = models\ConsultaLivroModel::listarLivros();
    foreach ($livros as $value) {
?>
    <tr>
        <td><input type="checkbox" name="cod_livro[]" value="<?php echo $value['cod_livro']?>"></td>
        <td><?php echo $value['cod_livro']?></td>
        <td><?php echo $value['letra_titulo']?></td>
    </tr>

<?php 
    }
?>
</table>
    <input style="margin-left: 2rem;" class='bt-submit' type='submit' name='bt_fich' value='Criar'>
</form>
</main>

<?php
$excl = new SelecaoFichasModel();
$excl->criarFichas();
?>