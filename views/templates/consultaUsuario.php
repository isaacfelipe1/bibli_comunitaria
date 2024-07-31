<main>
    <h2>Todos os usuários</h2>
    <table id="customers">
    <tr>
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
                <td><?php echo $value['id_usuario']?></td>
                <td><?php echo $value['nome']?></td>
                <td><?php 
                $sexo = $value['sexo'];
                if ($sexo == 1) {
                    echo 'Masculino';
                } else {
                    echo 'Feminino';
                } 
                // echo $value['sexo']?></td>
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