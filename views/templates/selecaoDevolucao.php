<?php 
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Livros Emprestados</h2>
    <form method="post">
        <div class="table-container">
            <table id="customers">
                <thead>
                    <tr>
                        <th class='rotulo'>#</th>
                        <th class='rotulo'>Cód. Livro</th>
                        <th class='rotulo'>Cód. Usuário</th>
                        <th class='rotulo'>Usuário</th>
                        <th class='rotulo'>Livro</th>
                        <th class='rotulo'>Status</th>
                        <th class='rotulo'>Data Emprestimo</th>
                        <th class='rotulo'>Data Devolução</th>
                        <th class='rotulo'>Atrasado</th> 
                        <th class='rotulo'>Telefone</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $emprestimo = models\ConsultaEmprestimoModel::listarEmprestimos();
                    foreach ($emprestimo as $value) {
                        $atrasado = strtotime($value['data_devolucao']) < strtotime(date('Y-m-d')) ? 'Sim' : 'Não';
                        
                        $telefoneUsuario = '';
                        if ($atrasado === 'Sim') {
                            
                            $usuarioQuery = \MySql::connect()->prepare("SELECT telefone FROM usuario WHERE id_usuario = ?");
                            $usuarioQuery->execute([$value['id_usuario']]); 
                            $usuario = $usuarioQuery->fetch();
                            $telefoneUsuario = $usuario ? $usuario['telefone'] : 'Não encontrado';
                        }
                        ?>
                        <tr>
                            <td><input type="radio" name="id_emprestimo" value="<?php echo $value['id_emprestimo']; ?>" required></td>
                            <td><?php echo $value['cod_livro']; ?></td>
                            <td><?php echo $value['id_usuario']; ?></td>
                            <td><?php echo $value['nome']; ?></td>
                            <td><?php echo $value['letra_titulo']; ?></td>
                            <td><?php echo $value['status']; ?></td>
                            <td><?php echo $value['data_registro']; ?></td>
                            <td><?php echo $value['data_devolucao']; ?></td>
                            <td style="color: <?php echo $atrasado === 'Sim' ? 'red' : 'inherit'; ?>;"><?php echo $atrasado; ?></td>
                            <td><?php echo $atrasado === 'Sim' ? $telefoneUsuario : '-'; ?></td> 
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <input class='bt-submit' type='submit' name='bt-dev' value='Devolver'>
    </form>
</main>
<?php
use models\SelecaoDevolucaoModel;
$excl = new SelecaoDevolucaoModel();
$excl->devolverLivro();
?>
