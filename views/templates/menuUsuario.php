<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<form method="post" action="">
    <p>
        <button class="bt-logout" type="submit" name="logout"><i style="color:#047f52; font-size: 2.5rem" class="bi bi-box-arrow-left"></i> </button>
    </p>
</form>
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
