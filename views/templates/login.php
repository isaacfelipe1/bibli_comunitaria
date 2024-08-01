<?php
session_start();

use models\LoginModel;

$cad = new LoginModel();
$cad->logar();

?>
<fieldset class="fieldset-login">
    <h1 class="h1-login">Login</h1>
    <hr style="margin-bottom: 1rem">
    <form method="post" action="" class="form-login">
        <div class="div-login">
            <div class="div-campo-login">
                <label id="label-login" for="" style="margin: 1rem 0 1rem 0;">Nome de Usuário</label>
            </div>

            <div class="div-campo-login">
                <input name="nome_usuario" id="input-login" type="text" >
            </div>
        </div>
        
        <div class="div-login">
            <div class="div-campo-login">
                <label id="label-login" for="">Senha</label>
            </div>
            <div class="div-campo-login">
                <input name="senha" id="input-login" type="password" placeholder="********">
            </div>
        </div>

    <input class="logar" type="submit" name="logar" value="Logar">
    </form>
    <p style="margin-top:1rem">Não possui cadastro? Cadastre-se <a href="cadastroLogin">aqui</a></p>
</fieldset>
