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
        <div class="table-container">
            <table id="customers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Sexo</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Observação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $usuarios = models\ConsultaUsuarioModel::listarUsuarios();
                        foreach ($usuarios as $value) {
                    ?>
                    <tr>
                        <td><input type="radio" name="codigo" value="<?php echo $value['id_usuario']?>" required></td>
                        <td><?php echo $value['id_usuario']?></td>
                        <td><?php echo $value['nome']?></td>
                        <td><?php echo ($value['sexo'] == 1) ? 'Masculino' : 'Feminino'; ?></td>
                        <td><?php echo $value['idade']?></td>
                        <td><?php echo $value['telefone']?></td>
                        <td><?php echo $value['endereco']?></td>
                        <td><?php echo $value['observacao']?></td>
                    </tr>
                    <?php 
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <input class='bt-submit' type='submit' name='bt_excl' value='Excluir'>
    </form>
</main>

<?php
use models\SelecaoExclusaoUsuarioModel;
$excl = new SelecaoExclusaoUsuarioModel();
$excl->excluirUsuarios();
?>
