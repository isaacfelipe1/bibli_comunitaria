<main>
    <h2>Informações do usuário</h2>
    <fieldset class="fieldset-cadastro">
    <form class="form-cadastro" method="post">
    <script>
    function formatPhoneNumber(input) {
        const value = input.value.replace(/\D/g, ''); 
        if (value.length <= 10) {
        input.value = value.replace(/^(\d{2})(\d{4})(\d{4})$/, '($1) $2-$3');
        } else {
        input.value = value.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
        }
    }
    </script>
        <div class="div-label-input">
            <div class="label-input">
                <div>
                    <label for=""><strong class="label-strong">Nome:</strong></label>
                </div>
                <div>
                    <input id="campo" style="margin: 0.5rem 0 0 0;width: 50vw" style="width:50vh"  type="text" name="nome" placeholder="Ex: Peter Parker" required>
                </div>
            </div>
            <!-- 
            <div class="label-input" style="display: inline-block;">
                <label for="">*Sexo:</label>
                <input type="text" name="sexo" placeholder="Ex: Masculino" require>
            </div>
            -->
            
            <div class="label-input">
                <div>
                    <label for=""><strong class="label-strong">Sexo:</strong></label>
                </div>
                
                <div>
                    <select id="campo" style="width:100px" name="sexo" required>
                        <option value="0">Masculino</option>
                        <option value="1">Feminino</option>
                    </select>
                </div>
            </div>
            
            <!--  
            <div class="label-input" style="display:inline-block;">
                <label for="">*Idade:</label>
                <input type="number" name="idade" require placeholder="Ex: 19">
            </div>
            -->

            <div class="label-input">
                <div>
                    <label for=""><strong class="label-strong">Idade:</strong></label>
                </div>

                <div>
                    <select id="campo" name="idade" required>
                    <?php 
                        $i = 10;
                        for($i=10;$i<=100;$i++) {
                            $value = $i;
                    ?>
                        <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                        <?php 
                        }
                    ?>
                    </select>   
                </div>
            </div>
            <div class="label-input">
                <div>
                    <label for=""><strong class="label-strong">Telefone:</strong></label>    
                </div>
                <div>
                    <input id="campo" oninput="formatPhoneNumber(this)" style="margin: 0.5rem 0 0 0;width: 25vw" type="text" name="telefone" placeholder="Ex: (92) XXXXX-XXXX">
                </div>
            </div>

            <div class="label-input">
                <div>
                    <label for=""><strong class="label-strong">Endereço:</strong></label>
                </div>
                <div>
                    <input id="campo" style="margin: 0.5rem 0 0 0;width: 30vw" type="text" name="endereco" placeholder="Rua dos Lobos, nº 49">
                </div>
                
            </div>

            <div class="label-input">
                <div>
                    <label for=""><strong class="label-strong">Observação:</strong></label>
                </div>
                <div>
                    <textarea style="margin: 0.5rem 0 0 0;width: 35vw; height:15vh; border: 1px solid rgba(190, 186, 186, 0.726); margin-bottom:2rem" type="text" name="observacao">
                    </textarea>
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
use models\CadastroUsuarioModel;
$cad = new CadastroUsuarioModel();
$cad->cadastrarUsuarios();
?>
