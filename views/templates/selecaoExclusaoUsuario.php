<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Excluir Usuários</h2>
<form method="post">
<table id="customers" style="border: 1px solid black">
<tr>
        <th>#</th>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>Observacao</th>
</tr>
<?php 
    $livros = models\ConsultaUsuarioModel::listarUsuarios();
    foreach ($livros as $value) {
?>
    <tr>
        <td><input type="radio" name="codigo" value="<?php echo $value['id_usuario']?>" required></td>
        <td><?php echo $value['id_usuario']?></td>
        <td><?php echo $value['nome']?></td>
        <td><?php echo $value['sexo']?></td>
        <td><?php echo $value['idade']?></td>
        <td><?php echo $value['telefone']?></td>
        <td><?php echo $value['endereco']?></td>
        <td><?php echo $value['observacao']?></td>
    </tr>

<?php 
    }
?>
</table>
    <input style="margin-left: 2rem;" class='bt-submit' type='submit' name='bt_excl' value='Excluir'>
</form>
<?php
use models\SelecaoExclusaoUsuarioModel;
$excl = new SelecaoExclusaoUsuarioModel();
$excl->excluirUsuarios();
?>
</main>
