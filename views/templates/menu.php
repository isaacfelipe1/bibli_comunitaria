<?php
session_start();

// Verificar se o usuário está logado
if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<form method="post" action="">
    <p>
    <button  class="bt-logout" type="submit" name="logout"><i style="color:#047f52; font-size: 2.5rem" class="bi bi-box-arrow-left"></i>    </button>
    </p>
    
</form>

<div id="div-cadastro">
        <div id="div-opcao-cadastro">
            <a href="cadastroLivro"><center><i class="bi bi-plus-lg" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="cadastroLivro">Cadastro</a></a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="emprestimo"> <center><i class="bi bi-book" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="emprestimo">Emprestimo</a></a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="consultaLivro"><center><i class="bi bi-list-columns" style="color:black; font-size: 2.5rem"></i></a></center>
            <a id="a-opcao-cadastro" href="consultaLivro" >Consulta</a></a>
        </div>


        <div id="div-opcao-cadastro">
            <a href="selecaoExclusaoLivro"><center><i class="bi bi-trash3" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="selecaoExclusaoLivro">Excluir</a></a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="selecaoAlterarLivro"><center><i class="bi bi-pen" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="selecaoAlterarLivro">Alterar Informações</a></a>
        </div>
        
        <div id="div-opcao-cadastro">
            <a href="selecaoFichas"><center><i style="color:black; font-size: 2.5rem" class="bi bi-card-list"></i></center>
            <a id="a-opcao-cadastro" href="selecaoFichas">Fichas</a></a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="selecaoDevolucao"><center><i class="bi bi-journal-arrow-down" style="color:black; font-size: 2.5rem"></i></center>
            <a id="a-opcao-cadastro" href="selecaoDevolucao">Devolucao</a></a>
        </div>

        <div id="div-opcao-cadastro">
            <a href="selecaoCodigos"><center><i style="color:black; font-size: 2.5rem" class="bi bi-regex"></i></center>
            <a id="a-opcao-cadastro" href="selecaoCodigos">Codigos</a></a>
        </div>
        
    </div>
<?php
use models\LogoutModel;
$cad = new LogoutModel();
$cad->logout();
?>
