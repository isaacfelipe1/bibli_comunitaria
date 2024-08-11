<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}
?>
<main>
    <h2>Informações do Livro:</h2>
    <fieldset class="fieldset-cadastro" style="margin-left: 2rem;">
        <form class="form-cadastro" method="post" >
            <div class="div-label-input">
                
                <div class="label-input">
                    <div style="display: block;">
                        <label for=""><strong class="label-strong">CDD:</strong></label>
                    </div>
                    <div style="display: block;">
                        <input style="margin: 0.5rem 0 0 0;width:5vw" id="campo-cdd" type="text" name="cdd" placeholder="Ex: 155" required>
                    </div>
                    
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Autor:</strong></label>
                    </div>
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 60vw;" id="campo-autor" type="text" name="autor" placeholder="Ex: José de Alencar" required>    
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Título:</strong></label>
                    </div>
                    
                    <div>
                        <input style="margin: 0.5rem 0 0 0;width: 68vw;" id="campo" type="text" name="titulo" placeholder="Ex: Iracema" required>
                    </div>
                    
                </div>
                <br>
                
                <!--  
                <div class="label-input">
                    <label for=""><strong class="label-strong">*Exemplar:</strong></label>
                    <input class="campo" type="text" name="exemplar" placeholder="1º" style="width: 5vw;" required>
                </div>
                -->
                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Exemplar:</strong></label>
                    </div>
                    
                    <div>
                        <select id="campo" name="exemplar" required>
                            <?php 
                                $i = 1;
                                for($i=1;$i<=100;$i++) {
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
                        <label for=""><strong class="label-strong">Edição:</strong></label>
                    </div>
                    <div>
                        <select id="campo" name="edicao" required>
                            <?php 
                                $i = 1;
                                for($i=1;$i<=100;$i++) {
                                    $value = $i;
                            ?>
                                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                                <?php 
                                }
                            ?>
                        </select>
                    </div>
                    
                </div>
            </div>
            <div class="div-submit-reset">
                <div class="submit-reset">
                    <input class="bt-submit" type="submit" name="bt_enviar" value="Enviar">
                </div>
                <div class="div-submit-reset">
                    <input class="bt-submit" type="reset" name="limpar" value="Limpar">
                </div>
            </div>
        </form>
    </fieldset>
</main>
<?php
use models\CadastroLivroModel;
$cad = new CadastroLivroModel();
$cad->cadastrarLivros();
?>
