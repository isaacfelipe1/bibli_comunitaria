<main>
    <h2>Matrículas</h2>
    <table id="customers">
        <tr>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>Endereço</th>
            <th>Responsável</th>
            <th>Escola</th>            
            <th>Turma</th>
            <th>Disponibilidade</th>
            <th>Observação</th>
            <th>Foto</th> 
        </tr>
        <?php 
            $livros = models\ConsultaAlunoModel::listarAlunos();
            foreach ($livros as $value) {
        ?>
            <tr>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['nome']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F">
                    <?php 
                    $sexo = $value['sexo'];
                    echo $sexo == 1 ? 'F' : 'M'; 
                    ?>
                </td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['idade']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['telefone']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['endereco']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['responsavel']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['escola']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['turma']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F">
                    <?php 
                    $disponibilidade = $value['disponibilidade'];
                    echo $disponibilidade == "Manhã" || $disponibilidade == 1 ? 'Manhã' : 'Tarde'; 
                    ?>
                </td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['observacao']?></td>
                <td>
                    <?php if (!empty($value['foto'])) { ?>
                        <img src="uploads/<?php echo $value['foto']; ?>" alt="Foto de <?php echo $value['nome']; ?>" style="width: 50px; height: 50px; object-fit: cover;">
                    <?php } else { ?>
                        <span>Sem Foto</span>
                    <?php } ?>
                </td>
            </tr>
        <?php 
            }
        ?>
    </table>
</main>
