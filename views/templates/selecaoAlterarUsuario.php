<?php 
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Alterar informações do usuário</h2>
    <form method="post" action="alterarEditarUsuario">
        <table id="customers" style="border: 1px solid black">
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Idade</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Observação</th>
                <th>Foto</th>
            </tr>
            <?php 
                $alt = \models\ConsultaUsuarioModel::listarUsuarios();
                foreach ($alt as $value) {
            ?>
            <tr>
                <td><input type="radio" name="id_usuario" value="<?php echo $value['id_usuario']; ?>" required></td>
                <td><?php echo $value['id_usuario']; ?></td>
                <td><?php echo $value['nome']; ?></td>
                <td><?php echo ($value['sexo'] == 0) ? 'Masculino' : 'Feminino'; ?></td>
                <td><?php echo $value['idade']; ?></td>
                <td><?php echo $value['telefone']; ?></td>
                <td><?php echo $value['endereco']; ?></td>
                <td><?php echo $value['observacao']; ?></td>
                <td>
                    <?php if (!empty($value['foto'])) { ?>
                        <img src="uploads/<?php echo $value['foto']; ?>" alt="Foto do Usuário" style="width: 50px; height: 50px; object-fit: cover;">
                    <?php } else { ?>
                        Sem Foto
                    <?php } ?>
                </td>
            </tr>
            <?php 
                }
            ?>
        </table>
        <input style="margin-left: 2rem;" class='bt-submit' type='submit' name='bt_alt' value='Alterar'>
    </form>
</main>
