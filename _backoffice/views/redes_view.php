

<main class="container-fluid">

    <?php if($form): ?>

        <div class="row principal">
            <div class="col-12">
            <h2>EDITAR REDES</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_redes">
                    <label for="facebook">Facebook</label>
                    <br>
                    <input style="width: 900px;" type="text" name="facebook" autocomplete="off" value="<?= getFacebook()?>">
                    <br><br>
                    <label for="instagram">Instagram</label>
                    <br>
                    <input style="width: 900px;" type="text" name="instagram" autocomplete="off" value="<?= getInstagram()?>">                  
                    <br><br>
                    <label for="linkedin">Linkedin</label>
                    <br>
                    <input style="width: 900px;" type="text" name="linkedin" autocomplete="off" value="<?= getLinkedin()?>">
                    <br><br>

                    <input type="submit" value="Editar">

                </form>
                    
            </div>

        </div>


    <?php else: ?>


        <div class="row principal">
            <div class="col-12">

                <h2>Facebook</h2>
                <br>

                <p class="text-center">
                    <?=getFacebook(); ?>
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Instagram</h2>
                <br>

                <p class="text-center">
                    <?=getInstagram(); ?>
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Linkedin</h2>
                <br>

                <p class="text-center">
                    <?=getLinkedin(); ?>
                </p>    
                
                <br>
                <br>

                <form action="" method="POST">
                    <button class="botao" name="editar_redes">EDITAR REDES</button>
                </form>
                

            </div>
        </div>
    
    <?php endif; ?>

    
</main>