<?php 
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<div id="div-cadastro">
        <div id="div-opcao-cadastro">
            <a href="cadastroUsuario">
            <center><i class="bi bi-person" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="cadastroUsuario">Cadastro</a></a>
        </div>
        
        <div id="div-opcao-cadastro">
            <a href="cadastroAluno">
            <center><i class="bi bi-person-check" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="cadastroAluno">Matricula</a></a>
        </div>
        
        <div id="div-opcao-cadastro">
            <a href="consultaAluno">
            <center><i class="bi bi-person-check" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="consultaAluno">Consulta Matricula</a></a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="consultaUsuario">
            <center><i class="bi bi-people" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="consultaUsuario" >Todos os usuários</a>
            </a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="selecaoExclusaoUsuario">
            <center><i class="bi bi-trash3" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="selecaoExclusaoUsuario">Excluir</a></a> 
        </div>
        

        <div id="div-opcao-cadastro">
            <a href="selecaoAlterarUsuario">
            <center><i class="bi bi-pen" style="color:black; font-size: 2.5rem;"></i></center>
            <a id="a-opcao-cadastro" href="selecaoAlterarUsuario">Alterar Informações</a></a>
        </div>

        <div id="div-opcao-cadastro" style="display:inline-block">
            <a href="formPesquisaUsuario">
            <center><i class="bi bi-search" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="formPesquisaUsuario">Pesquisar Usuário</a></a>
        </div>
</div>