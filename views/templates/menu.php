<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>

<form method="post" action="" style="display: flex; align-items: center; margin: 20px;">
    <button class="bt-back" type="button" onclick="window.location.href='home'" style="display: flex; align-items: center; background: none; border: none; cursor: pointer;">
        <i style="color:#000; font-size: 2.5rem; margin-right: 10px;" class="bi bi-arrow-left-circle"></i>
        <span style="font-size: 1.2rem; color: #000;"></span>
    </button>
    <button class="bt-logout" type="submit" name="logout" style="background: none; border: none; cursor: pointer; margin-left: auto;">
        <i style="color:#000; font-size: 2.5rem;" class="bi bi-box-arrow-left"></i>
    </button>
</form>
<div id="div-cadastro">
    <div id="div-opcao-cadastro">
        <a href="cadastroLivro">
            <center><i class="bi bi-plus-lg" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="cadastroLivro">Cadastro</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="emprestimo">
            <center><i class="bi bi-book" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="emprestimo">Empréstimo</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="consultaLivro">
            <center><i class="bi bi-list-columns" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="consultaLivro">Consulta</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="selecaoExclusaoLivro">
            <center><i class="bi bi-trash3" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="selecaoExclusaoLivro">Excluir</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="selecaoAlterarLivro">
            <center><i class="bi bi-pen" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="selecaoAlterarLivro">Alterar Informações</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="selecaoFichas">
            <center><i style="color:black; font-size: 2.5rem" class="bi bi-card-list"></i></center>
            <a id="a-opcao-cadastro" href="selecaoFichas">Fichas</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="selecaoDevolucao">
            <center><i class="bi bi-journal-arrow-down" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="selecaoDevolucao">Devolução</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="selecaoCodigos">
            <center><i style="color:black; font-size: 2.5rem" class="bi bi-regex"></i></center>
            <a id="a-opcao-cadastro" href="selecaoCodigos">Códigos</a>
        </a>
    </div>
</div>

<?php
use models\LogoutModel;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    $cad = new LogoutModel();
    $cad->logout();
}
?>
