<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login');
    exit;
}

$usuario = \MySql::connect()->prepare("SELECT * from usuario order by nome");
$usuario->execute();
?>
<main>
    <h2>Empréstimo de Livros</h2>

<fieldset class="fieldset-cadastro">
    <form class="form-cadastro" method="post">
        <div class="div-label-input">
            <div class="label-input">

                <div class="label-input">
                    <div>
                        <label for=""> <strong class="label-strong">Código Livro:</strong></label>
                    </div>
                </div>
                <div>
                    <input id="campo" style="margin: 0.5rem 0 0 0;width:5vw;padding: 10px" type="number" name="fk_cod_livro" placeholder="155">
                </div>
                
            </div>
            <div class="label-input">
                <div>
                    <label for=""> <strong class="label-strong">Nome do usuario:</strong> </label>
                </div>
                <div>
                    <select name="fk_cod_usuario" id="campo" style="width: 10vw;margin: 1.5rem 0 0 0">
                    <?php 
                    if (!empty($usuario))
                        foreach ($usuario as $item){
                    ?>
                    <option value="<?php echo $item["id_usuario"]?>"><?php echo $item["nome"]?></option>
                    <?php
                        }
                        ?>
                    </select>
                </div>
                
            </div>
            
            



            <!--  
            <div class="label-input">
                <div class="label-input">
                    <label for=""> <strong class="label-strong">Código Usuário:</strong> </label>
                </div>
                <div>
                    <input id="campo" style="margin: 0.5rem 0 0 0;width:5vw" type="number" name="fk_cod_usuario" placeholder="19">
                </div>
                
            </div>
            -->

        </div>
        <div class="div-submit-reset">
            <div class="submit-reset">
                <input style="margin-top: 2rem;" class="bt-submit" type="submit" name="bt_enviar" value="Emprestar">
            </div>
        </div>
    </form>
</fieldset>
</main>
<?php
use models\EmprestimoModel;
$cad = new EmprestimoModel();
$cad->emprestar();
?>