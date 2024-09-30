<main>
    <h2>Todos os usuários</h2>
    <div class="table-container">
        <table id="customers">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Sexo</th>
                    <th>Idade</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Observação</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $usuarios = models\ConsultaUsuarioModel::listarUsuarios();
                    foreach ($usuarios as $value) {
                ?>
                <tr>
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
            </tbody>
        </table>
    </div>
</main>
