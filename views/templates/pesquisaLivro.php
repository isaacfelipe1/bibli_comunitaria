<?php 
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Resultados da pesquisa</h2>
<table id="customers" style="border: 1px solid black">
    <tr>
            <th>Codigo</th>
            <th>CDD</th>
            <th>Autor</th>
            <th>Titulo</th>
            <th>Exemplar</th>
            <th>Edição</th>
            <th>Ano Registro</th>
    </tr>
    <?php 
        $livros = \Models\PesquisaLivroModel::pesquisarLivros();
        foreach ($livros as $value) {
    ?>
        <tr>
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
    </table>
</main>
