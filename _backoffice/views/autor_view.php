

<main class="container-fluid">

    <?php if($form_autor): ?>
        <div class="row principal">
            <div class="col-12">

                <h2>EDITAR AUTOR</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_autor" ?>
                    <label for="imagem">Link Imagem </label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem_autor" autocomplete="off" required value="<?= getImagem_autor()?>">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type = "button">
                            Buscar Imagens
                        </button>
                    </a>                   
                    <br><br>
                    <label for="Texto">Texto Autor</label>
                    <br>
                    <textarea name="texto_autor" id="texto" cols="90" rows="10"><?= getTexto_autor()?></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#texto' ) )
                            .catch( error => {
                            console.error( error );
                        } );
                    </script>
                    <br><br>

                    <input type="submit" value="Editar">
                    
                </form>

            </div>
        </div>

    <?php else: ?>

        <div class="row principal">
            <div class="col-12">

                <h2>Imagem do autor da página Autor</h2>
                <br><br>

                <p class="text-center">
                    <img src="<?=getImagem_autor(); ?>" alt="" style="max-width: 300px">
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Texto da página Autor</h2>
                <br><br>

                <p>
                    <?=getTexto_autor()?>
                </p>

                <br><br>

                <form action="" method="POST">
                    <button class="botao" name="editar_autor">EDITAR AUTOR</button>
                </form>

            </div>
        </div>
    
    <?php endif; ?>
    
</main>