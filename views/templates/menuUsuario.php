<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>

<!-- Ícones de Voltar e Sair -->
<div id="div-voltar" style="margin-bottom: 1rem; display: flex; align-items: center; padding: 0 1rem;">
    <a href="javascript:history.back()" style="margin-right: auto; padding-left: 1rem;">
        <i class="bi bi-arrow-left-circle" style="color:black; font-size: 2.5rem;"></i> 
    </a>
    <form method="post" action="" style="margin-left: auto;">
        <button class="bt-logout" type="submit" name="logout" style="background: none; border: none; cursor: pointer;">
            <i class="bi bi-box-arrow-left" style="color:black; font-size: 2.5rem;"></i>
        </button>
    </form>
</div>

<!-- Conteúdo principal -->
<div id="div-cadastro">
    <div id="div-opcao-cadastro">
        <a href="cadastroUsuario">
            <center><i class="bi bi-person" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="cadastroUsuario">Cadastro</a>
        </a>
    </div>
    
    <div id="div-opcao-cadastro">
        <a href="cadastroAluno">
            <center><i class="bi bi-person-check" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="cadastroAluno">Matricula</a>
        </a>
    </div>
    
    <div id="div-opcao-cadastro">
        <a href="consultaAluno">
            <center><i class="bi bi-person-check" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="consultaAluno">Consulta Matricula</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="consultaUsuario">
            <center><i class="bi bi-people" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="consultaUsuario">Todos os usuários</a>
        </a>
    </div>

    <div id="div-opcao-cadastro">
        <a href="selecaoExclusaoUsuario">
            <center><i class="bi bi-trash3" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="selecaoExclusaoUsuario">Excluir</a>
        </a> 
    </div>
    
    <div id="div-opcao-cadastro">
        <a href="selecaoAlterarUsuario">
            <center><i class="bi bi-pen" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="selecaoAlterarUsuario">Alterar Informações</a>
        </a>
    </div>

    <div id="div-opcao-cadastro" style="display:inline-block">
        <a href="formPesquisaUsuario">
            <center><i class="bi bi-search" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="formPesquisaUsuario">Pesquisar Usuário</a>
        </a>
    </div>
    <div id="div-opcao-cadastro" style="display:inline-block; margin-top: 1rem;">
        <a href="cadastroLogin">
            <center><i class="bi bi-person-plus" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="cadastroLogin">Cadastrar usuário</a>
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
