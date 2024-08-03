<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Alterar informações</h2>
<form method="post" action="alterarEditarLivro">
<table id="customers" style="border: 1px solid black">
<tr>
        <th>#</th>
        <th>Codigo</th>
        <th>CDD</th>
        <th>Autor</th>
        <th>Titulo</th>
        <th>Exemplar</th>
        <th>Edição</th>
        <th>Ano Registro</th>
</tr>
<?php 
    $livros = models\ConsultaLivroModel::listarLivros();
    foreach ($livros as $value) {
?>
    <tr>
        <td><input type="radio" name="cod_livro" value="<?php echo $value['cod_livro']?>" required></td>
        <td><?php echo $value['cod_livro']?></td>
        <td><?php echo $value['cdd']?></td>
        <td><?php echo $value['letra_sobrenome']?></td>
        <td><?php echo $value['letra_titulo']?></td>
        <td><?php echo $value['exemplar']?></td>
        <td><?php echo $value['edicao']?></td>
        <td><?php echo $value['ano_registro']?></td>
    </tr>

<?php 
    }
?>
</table>
    <input style="margin-left: 2rem;" class='bt-submit' type='submit' name='bt_alt' value='Alterar'>
</form>
</main>
