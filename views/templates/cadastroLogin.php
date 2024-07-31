<main>
    <h2>Dados da Usuário:</h2>
    <fieldset class="fieldset-cadastro" style="margin-left: 2rem;">
        <form class="form-cadastro" method="post" >
            <div class="div-label-input">
                
                <div class="label-input">
                    <div style="display: block;">
                        <label for=""><strong class="label-strong">*Nome de usuário:</strong></label>
                    </div>
                    <div style="display: block;">
                        <input style="margin: 0.5rem 0 0 0;width:5vw" class="campo" type="text" name="nome_usuario" placeholder="Ex: 155" required>
                    </div>
                    
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">*Senha:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 60vw;" class="campo" type="password" name="senha" placeholder="Ex: José de Alencar" required>    
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
