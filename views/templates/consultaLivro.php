<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
$pagina = 1;

if (isset($_GET['pagina']))
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

if (!$pagina)
    $pagina = 1;

$limite = 20;

$inicio = ($pagina * $limite) - $limite;

$contador = \MySql::connect()->prepare("SELECT COUNT(cod_livro) as count FROM livros");
$contador->execute();
$resultado = $contador->fetch();

$registros = $resultado['count'];
$paginas = ceil($registros / $limite);

$livros = \MySql::connect()->prepare("SELECT * FROM livros LIMIT $inicio, $limite");
$livros->execute();
?>

<main>
    <h2>Acervo de Livros</h2>

    <form method="post" action="pesquisaLivro">
        <div id="form-pesquisa">
            <div id="label-pesquisa">
                <div style="display: inline-block; margin-right: 2rem">
                    <label style="display: block;" for="">Titulo</label>
                    <input type="radio" name="tipo" value="letra_titulo" required>
                </div>

                <div style="display: inline-block;margin-right: 2rem">
                    <label style="display: block;" for="">CDD</label>
                    <input type="radio" required name="tipo" value="cdd">
                </div>

                <div style="display: inline-block;margin-right: 2rem">
                    <label style="display: block;" for="">Código</label>
                    <input type="radio" required name="tipo" value="cod_livro">
                </div>

            </div>

            <div style="margin-top: 1rem ;" class="input-pesquisa">
                <input style="margin-left: 0;width:15vw" type="text" id="campo" name="elemento" placeholder="CCD/Título/Código" required>
                <button class="bt-submit" name="bt_enviar"><i class="bi bi-search"></i></button>
            </div>


        </div>
    </form>
    <div id="resultadoLivros">
            </div>
    <table id="customers" style="border: 1px solid black">
        <script>
            function capitalizeWords(text) {
                return text.replace(/\b\w/g, function(match) {
                    return match.toUpperCase();
                });
            }
            const cells = document.querySelectorAll('td');
            cells.forEach(cell => {
                const originalText = cell.textContent;
                const formattedText = capitalizeWords(originalText);
                cell.textContent = formattedText;
            });
        </script>
        <tr>
            <th>Codigo</th>
            <th>CDD</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Exemplar</th>
            <th>Edição</th>
        </tr>
        <?php
        if (!empty($livros)) {
            foreach ($livros as $item) :
        ?>
                <tr>
                    <td class="td-consulta"><?= $item['cod_livro'] ?></td>
                    <td class="td-consulta"><?= $item['cdd'] ?></td>
                    <td style="text-transform: capitalize;" class="td-consulta"><?= $item['letra_sobrenome'] ?></td>
                    <td class="td-consulta"><?= $item['letra_titulo'] ?></td>
                    <td class="td-consulta"><?= $item['exemplar'] ?></td>
                    <td class="td-consulta"><?= $item['edicao'] ?></td>
                </tr>
        <?php
            endforeach;
        }
        ?>
    </table>

    <a style="margin-left:2rem" class="a-paginacao" href="?pagina=1">Primeira</a>

    <?php if ($pagina > 1) : ?>
        <a class="a-paginacao" href="?pagina=<?= $pagina - 1 ?>">
            <<< /a>
            <?php endif; ?>

            <?= $pagina ?>

            <?php if ($pagina < $paginas) : ?>
                <a class="a-paginacao" href="?pagina=<?= $pagina + 1 ?>">>></a>
            <?php endif; ?>

            <a class="a-paginacao" href="?pagina=<?= $paginas ?>">Ultima</a>
</main>