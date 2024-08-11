<?php 
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Selecione os campos para criar fichas</h2>
    
    <?php
    use models\SelecaoFichasModel;
    $excl = new SelecaoFichasModel();
    $excl->limparFichas();
    ?>
    <form method="post">
        <a class="ficha-codigo" href="fichas" style="background-color: #047f52">Ver Fichas</a> <!-- Botão verde -->
        <input class="ficha-codigo" type="submit" name='bt_limp_fich' value="Limpar fichas">

        <div class="table-container">
            <table id="customers">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Código</th>
                        <th>Título</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $livros = models\ConsultaLivroModel::listarLivros();
                    foreach ($livros as $value) {
                    ?>
                    <tr>
                        <td><input type="checkbox" name="cod_livro[]" value="<?php echo $value['cod_livro']?>"></td>
                        <td><?php echo $value['cod_livro']?></td>
                        <td><?php echo $value['letra_titulo']?></td>
                    </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <input class='bt-submit mt-3' type='submit' name='bt_fich' value='Criar'>

    </form>
</main>

<?php
$excl = new SelecaoFichasModel();
$excl->criarFichas();
?>
