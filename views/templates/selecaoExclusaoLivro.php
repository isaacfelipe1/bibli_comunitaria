<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Excluir Livros</h2>
    <form method="post">
        <div class="table-container">
            <table id="customers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>CDD</th>
                        <th>Autor</th>
                        <th>Título</th>
                        <th>Exemplar</th>
                        <th>Edição</th>
                        <th>Ano Registro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $livros = models\ConsultaLivroModel::listarLivros();
                        foreach ($livros as $value) {
                    ?>
                    <tr>
                        <td><input type="radio" name="codigo" value="<?php echo $value['cod_livro']?>" required></td>
                        <td><?php echo $value['cod_livro']?></td>
                        <td><?php echo $value['cdd']?></td>
                        <td><?php echo $value['letra_sobrenome']?></td>
                        <td><?php echo $value['letra_titulo']?></td>
                        <td><?php echo $value['exemplar']?></td>
                        <td><?php echo $value['edicao']?></td>
                        <td><?php echo $value['ano_registro']?></td>
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
use models\SelecaoExclusaoLivroModel;
$excl = new SelecaoExclusaoLivroModel();
$excl->excluirLivros();
?>
