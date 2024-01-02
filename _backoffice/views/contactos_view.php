

<main class="container-fluid">

    <?php if(isset($_POST["editar_cont"])): ?>

        <div class="row principal">
            <div class="col-12">
                <h2>EDITAR CONTACTOS</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_cont">
                    <label for="telefone">Telefone</label>
                    <br>
                    <input style="width: 900px;" type="text" name="telefone" autocomplete="off" value="<?= getTelefone_contactos()?>">
                    <br><br>
                    <label for="morada">Morada</label>
                    <br>
                    <input style="width: 900px;" type="text" name="morada" autocomplete="off" value="<?= getMorada_contactos()?>">                  
                    <br><br>
                    <label for="email">Email</label>
                    <br>
                    <input style="width: 900px;" type="text" name="email" autocomplete="off" value="<?= getEmail_contactos()?>">
                    <br><br>
                    <label for="horario">Horário</label>
                    <br>
                    <input style="width: 900px;" type="text" name="horario" autocomplete="off" value="<?= getHorario_contactos()?>">
                    <br><br>

                    <input type="submit" value="Editar">

                </form>
                    
            </div>

        </div>

    
    <?php else: ?>

        <div class="row principal">
            <div class="col-12">

                <h2>Telefone</h2>
                <br>

                <p class="text-center">
                    <?=getTelefone_contactos(); ?>
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Morada</h2>
                <br>

                <p class="text-center">
                    <?=getMorada_contactos(); ?>
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Email</h2>
                <br>

                <p class="text-center">
                    <?=getEmail_contactos(); ?>
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Horário:</h2>
                <br>

                <p class="text-center">
                    <?=getHorario_contactos(); ?>
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <form action="" method="POST">
                    <button class="botao" name="editar_cont">EDITAR CONTACTOS</button>
                </form>
                

            </div>
        </div>

    <?php endif; ?>

    
</main>