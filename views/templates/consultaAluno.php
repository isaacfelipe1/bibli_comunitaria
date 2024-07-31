<main>
    <h2>Matrículas</h2>
    <table id="customers">
    <tr>
            <th>Nome</th>
            <th>Sexo</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>Endereco</th>
            <th>Responsavel</th>
            <th>Escola</th>            
            <th>Turma</th>
            <th>Disponibilidade</th>
            <th>Observacao</th>

    </tr>
        <?php 
            $livros = models\ConsultaAlunoModel::listarAlunos();
            foreach ($livros as $value) {
        ?>
            <tr>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['nome']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php 
                $sexo = $value['sexo'];
                if ($sexo == 1) {
                    echo 'F';
                } else {
                    echo 'M';
                } 
                // echo $value['sexo']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['idade']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['telefone']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['endereco']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['responsavel']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['escola']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['turma']?></td>
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php 
                $disponibilidade = $value['disponibilidade'];
                if ($disponibilidade == "Manhã" || $disponibilidade == 1){
                    echo 'Manhã';
                }
                else{
                    echo 'Tarde';
                } ?></td>
                 <!-- echo $value['disponibilidade'] -->
                <td style="text-transform: uppercase; font-size:13px; font-weight:500; color: #4F4F4F"><?php echo $value['observacao']?></td>
            </tr>

        <?php 
            }
        ?>
    </table>
</main>