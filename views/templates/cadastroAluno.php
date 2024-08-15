<main>
    <h2>Informações do aluno</h2>
    <fieldset class="fieldset-cadastro">
        <form class="form-cadastro" method="post" enctype="multipart/form-data">
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
                        <input id="campo" style="margin: 0.5rem 0 0 0;width: 50vw" type="text" name="nome" placeholder="Ex: Peter Parker" required>
                    </div>
                </div>

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

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Idade:</strong></label>
                    </div>
                    <div>
                        <select id="campo" name="idade" required>
                            <?php 
                                $i = 6;
                                for($i=6;$i<=100;$i++) {
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
                        <label for=""><strong class="label-strong">Responsável:</strong></label>
                    </div>
                    <div>
                        <input id="campo" style="margin: 0.5rem 0 0 0;width: 35vw" type="text" name="responsavel" placeholder="Ex: Martha Wayne" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Escola:</strong></label>
                    </div>
                    <div>
                        <input id="campo" style="margin: 0.5rem 0 0 0;width: 35vw" type="text" name="escola" placeholder="Escola Exemplo" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Turma:</strong></label>
                    </div>
                    <div>
                        <input id="campo" style="margin: 0.5rem 0 0 0;width: 20vw" type="text" name="turma" placeholder="Ex: 6 ano C" required>
                    </div>
                </div>

                <div class="label-input">
                    <div>
                        <label for=""><strong class="label-strong">Disponibilidade de horário:</strong></label>
                    </div>
                    <div>
                        <select id="campo" style="width:100px" name="disponibilidade" required>
                            <option value="0">Manhã</option>
                            <option value="1">Tarde</option>
                        </select>
                    </div>
                </div>

                <div class="label-input" style="display: block">
                    <div>
                        <label for=""><strong class="label-strong">Observação:</strong></label>
                    </div>
                    <div>
                        <textarea style="margin: 0.5rem 0 0 0;width: 35vw; height:15vh; border: 1px solid rgba(190, 186, 186, 0.726); margin-bottom:2rem; resize: none;" name="observacao"></textarea>
                    </div>
                </div>

                <div class="label-input" style="display: block">
                    <div>
                        <label for=""><strong class="label-strong">Foto do Aluno:</strong></label>
                    </div>
                    <div>
                        <input id="campo" style="margin: 0.5rem 0 0 0;width: 35vw" type="file" name="foto" required>
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
use models\CadastroAlunoModel;
$cad = new CadastroAlunoModel();
$cad->cadastrarAlunos();
?>
