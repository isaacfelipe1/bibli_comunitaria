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
        <div class="filter-container" class="filter-container" style="margin-bottom: 20px; text-align: center;">
            <label for="filter"  style="font-weight: bold; margin-right: 10px;">Filtrar por:</label>
            <select name="filter" id="filter" style="padding: 8px 12px; border-radius: 5px; border: 1px solid #ccc; font-size: 16px;">
                <option value="todos" <?php echo isset($_POST['filter']) && $_POST['filter'] == 'todos' ? 'selected' : ''; ?>>Todos</option>
                <option value="atrasados" <?php echo isset($_POST['filter']) && $_POST['filter'] == 'atrasados' ? 'selected' : ''; ?>>Atrasados</option>
            </select><br>
            <input class="bt-submit" type="submit" name="bt-filtrar" value="Aplicar Filtro">
        </div>
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
                        <th class='rotulo'>Data Empréstimo</th>
                        <th class='rotulo'>Data Devolução</th>
                        <th class='rotulo'>Atrasado</th> 
                        <th class='rotulo'>Telefone</th> 
                        <th class='rotulo'>Responsável pelo Registro</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $emprestimos = models\ConsultaEmprestimoModel::listarEmprestimos();
                    $dataAtual = date('Y-m-d'); 
                    $filter = isset($_POST['filter']) ? $_POST['filter'] : 'todos';

                    foreach ($emprestimos as $value) {
                        $atrasado = strtotime($value['data_devolucao']) < strtotime($dataAtual) ? 'Sim' : 'Não';

                        if ($filter == 'atrasados' && $atrasado !== 'Sim') {
                            continue;
                        }

                        $telefoneUsuario = '-';
                        if ($atrasado === 'Sim') {
                            $usuarioQuery = \MySql::connect()->prepare("SELECT telefone FROM usuario WHERE id_usuario = ?");
                            $usuarioQuery->execute([$value['id_usuario']]); 
                            $usuario = $usuarioQuery->fetch();
                            $telefoneUsuario = $usuario ? $usuario['telefone'] : 'Não encontrado';
                        }

                        $corDevolucao = strtotime($value['data_devolucao']) > strtotime($dataAtual) ? 'color: blue;' : '';

                        ?>
                        <tr>
                            <td>
                                <input type="radio" name="id_emprestimo" value="<?php echo $value['id_emprestimo']; ?>">
                            </td>
                            <td><?php echo $value['cod_livro']; ?></td>
                            <td><?php echo $value['id_usuario']; ?></td>
                            <td><?php echo $value['nome']; ?></td>
                            <td><?php echo $value['letra_titulo']; ?></td>
                            <td><?php echo $value['status']; ?></td>
                            <td><?php echo $value['data_registro']; ?></td>
                            <td style="<?php echo $corDevolucao; ?>"><?php echo $value['data_devolucao']; ?></td>
                            <td style="color: <?php echo $atrasado === 'Sim' ? 'red' : 'inherit'; ?>;"><?php echo $atrasado; ?></td>
                            <td><?php echo $telefoneUsuario; ?></td>
                            <td><?php echo !empty($value['usuario_logado']) ? htmlspecialchars($value['usuario_logado']) : '-'; ?></td> 
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <input class='bt-submit' type='submit' name='bt-dev' value='Devolver Livro'>
        <input class='bt-submit' type='submit' name='bt-renovar' value='Renovar Empréstimo'>
    </form>
</main>

<?php
use models\SelecaoDevolucaoModel;
use models\EmprestimoModel;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['bt-dev']) && isset($_POST['id_emprestimo'])) {
        $excl = new SelecaoDevolucaoModel();
        $excl->devolverLivro();
    } elseif (isset($_POST['bt-renovar']) && isset($_POST['id_emprestimo'])) {
        $renovacao = new EmprestimoModel();
        $renovacao->renovarEmprestimo($_POST['id_emprestimo']);
    }
}
?>
