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
                </tr>
            </thead>
            <tbody>
                <?php 
                    $usuarios = models\ConsultaUsuarioModel::listarUsuarios();
                    foreach ($usuarios as $value) {
                ?>
                <tr>
                    <td><?php echo $value['id_usuario']?></td>
                    <td><?php echo $value['nome']?></td>
                    <td><?php echo ($value['sexo'] == 0) ? 'Masculino' : 'Feminino'; ?></td>
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
</main>
