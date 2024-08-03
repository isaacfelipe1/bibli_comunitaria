<?php 
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
<table id="customers" style="border: 1px solid black">
<tr>
        <th>Codigo</th>
        <th>Nome</th>
        <th>Sexo</th>
        <th>Idade</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Observação</th>
</tr>
<?php 
    $usuarios = \Models\PesquisaUsuarioModel::pesquisarUsuarios();
    foreach ($usuarios as $value) {
?>
    <tr>
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
</main>
