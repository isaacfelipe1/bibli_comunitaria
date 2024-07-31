<?php 
$pagina = 1;

if (isset($_GET['pagina']))
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

if(!$pagina)
    $pagina = 1;

$limite = 10;

$inicio = ($pagina * $limite) - $limite;

$contador = \MySql::connect()->prepare("SELECT COUNT(id_ficha) as count FROM fichas");
$contador->execute();
$resultado = $contador->fetch();

$registros = $resultado['count'];
$paginas = ceil($registros / $limite);

$livros = \MySql::connect()->prepare("SELECT fichas.id_ficha, livros.letra_titulo, livros.letra_sobrenome, livros.cdd 
                                        FROM livros, fichas WHERE livros.cod_livro=fichas.fk_cod_livro
                                        LIMIT $inicio, $limite");
$livros->execute();
?>
<main>
    <center>
    <table style="margin-bottom: 2rem;" border="1px">
        <?php
        if (!empty($livros)) {
            foreach ($livros as $item):
                ?>
                    <tr>
                        <td colspan='5s' style='text-align: center'>Biblioteca Comunitaria Maria Dolores</td>		
                    </tr>
                    <tr>
                        <td colspan='5s'>Autor: <?= $item['letra_sobrenome'] ?></td>		
                    </tr>
                    <tr>
                        <td colspan='2s'>Titulo: <?= $item['letra_titulo'] ?></td>		
                        <td>Cdd: <?= $item['cdd'] ?></td>		
                    </tr>
                    <tr>
                        <td style='width: 200px'>Nome do leitor</td>
                        <td>Saída</td>
                        <td>Devolver</td>
                    </tr>
                    <tr>
                        <td style='width: 500px' class='campo1'></td>
                        <td style='width: 100px' class='campo1'></td>
                        <td style='width: 100px' class='campo1'></td>
                    </tr>
                    <tr>
                        <td class='campo2'></td>
                        <td style='width: 100px' class='campo2'></td>
                        <td style='width: 100px' class='campo2'></td>
                    </tr>
                    <tr>
                        <td class='campo3'></td>
                        <td style='width: 100px' class='campo3'></td>
                        <td class='campo3'></td>
                    </tr>
                    <tr>
                        <td class='campo3'></td>
                        <td style='width: 100px' class='campo3'></td>
                        <td class='campo3'></td>
                    </tr>
                    <tr>
                        <td class='campo3'></td>
                        <td style='width: 100px' class='campo3'></td>
                        <td class='campo3'></td>
                    </tr>
                    <style>
                        .campo1, .campo2, .campo3{
                            height: 17px;
                        }
                    </style>
                <?php
            endforeach;
        }
        ?>
    </table>
    </center>
    <a style="margin-left: 2rem" class="a-paginacao" href="?pagina=1">Primeira</a>
    
    <?php if ($pagina > 1): ?>
        <a class="a-paginacao" href="?pagina=<?= $pagina - 1 ?>"><<</a>
    <?php endif; ?>

    <?= $pagina ?>

    <?php if ($pagina < $paginas): ?>
        <a class="a-paginacao" href="?pagina=<?= $pagina + 1 ?>">>></a>
    <?php endif; ?>
    
    <a class="a-paginacao" href="?pagina=<?= $paginas ?>">Ultima</a>
</main>
