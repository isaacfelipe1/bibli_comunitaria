<?php 
$pagina = 1;

if (isset($_GET['pagina']))
    $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);

if(!$pagina)
    $pagina = 1;

$limite = 50;

$inicio = ($pagina * $limite) - $limite;

$contador = \MySql::connect()->prepare("SELECT COUNT(id_cod) as count FROM codigos");
$contador->execute();
$resultado = $contador->fetch();

$registros = $resultado['count'];
$paginas = ceil($registros / $limite);

$livros = \MySql::connect()->prepare("SELECT livros.cdd, livros.letra_sobrenome, livros.letra_titulo, livros.edicao,livros.volume, livros.exemplar, livros.cod_livro,livros.ano_registro
                                        FROM livros, codigos WHERE livros.cod_livro=codigos.fk_cod_livro
                                        LIMIT $inicio, $limite");
$livros->execute();
?>
<main>
    
    <div>
        <?php
        if (!empty($livros)) {
            foreach ($livros as $item):
                ?>
                <div style="display:inline-block; text-align:center; margin-right:1rem; margin-bottom:1rem">
                    <div>
                        <td colspan='5s' style="color:blue"><?= $item['cdd'] ?></td>		
                    </div>
                    <div>
                        <td colspan='2s'><?= substr($item['letra_sobrenome'], 0, 1) ?><?= strtolower(substr($item['letra_titulo'], 0,1))  ?></td>		
                    </div>
                    <div>
                        <td colspan='5s'><?= $item['edicao'] ?>.ed.v<?= $item['volume'] ?></td>
                    </div>
                    <div>
                        <td colspan='5s'>ex.<?= $item['exemplar'] ?></td>
                    </div>
                    <div>
                        <td colspan='5s'><?= $item['cod_livro'] ?>-<?= substr($item['ano_registro'], 0,4) ?></td>
                    </div>
                    <style>
                        
                    </style>
                </div>
                <?php
            endforeach;
        }
        ?>
    </div>
    <a style="margin-left:2rem" class="a-paginacao" href="?pagina=1">Primeira</a>
    
    <?php if ($pagina > 1): ?>
        <a class="a-paginacao" href="?pagina=<?= $pagina - 1 ?>"><<</a>
    <?php endif; ?>

    <?= $pagina ?>

    <?php if ($pagina < $paginas): ?>
        <a class="a-paginacao" href="?pagina=<?= $pagina + 1 ?>">>></a>
    <?php endif; ?>
    
    <a class="a-paginacao" href="?pagina=<?= $paginas ?>">Ultima</a>
</main>
