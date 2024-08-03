<main>
    <h2>Dados do Usuário:</h2>
    <fieldset class="fieldset-cadastro" style="margin-left: 2rem;">
        <form class="form-cadastro" method="post">
            <div class="div-label-input">
                <div class="label-input">
                    <div style="display: block;">
                        <label for=""><strong class="label-strong">*Nome de usuário:</strong></label>
                    </div>
                    <div style="display: block;">
                        <input style="width: 300px; margin: 0.5rem 0 0 0;" class="campo" type="text" name="nome_usuario" placeholder="Informe seu nome aqui" required>
                    </div>
                </div><br>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Senha:</strong></label>
                    </div>
                    <div>
                        <input style="width: 300px; margin: 0.5rem 0 0 0;" class="campo" type="password" name="senha" placeholder="********" required>    
                    </div>
                </div>
            </div>
            <div class="div-submit-reset">
                <div class="submit-reset">
                    <input class="bt-submit" type="submit" name="bt_enviar" value="Enviar">
                </div>
                <div class="submit-reset">
                    <input class="bt-reset" type="reset" name="limpar" value="Limpar">
                </div>
            </div>
        </form>
    </fieldset>
</main>
<?php
use models\CadastroLoginModel;
$cad = new CadastroLoginModel();
$cad->cadastrarUsuario();
?>
