

<main class="container-fluid">

    <?php if($form_home): ?>

        <div class="row principal">
            <div class="col-12">

                <h2>EDITAR HOME</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_home"?>
                    <label for="imagem">Link Imagem </label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem_home" autocomplete="off" required value="<?= getImagemAutor() ?>">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type = "button">
                            Buscar Imagens
                        </button>
                    </a>                   
                    <br><br>
                    <label for="Texto">Texto Últimos Livros</label>
                    <br>
                    <textarea name="texto_ult_livros" id="texto" cols="90" rows="10"><?= getTexto_ult_livros()?></textarea>
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

                <h2>Imagem do autor da página HOME</h2>
                <br><br>

                <p class="text-center">
                    <img src="<?=getImagemAutor(); ?>" alt="" style="max-width: 300px">
                </p>    
                
                <br><br>
                <hr>
                <br><br>

                <h2>Texto dos Últimos Livros da página HOME</h2>
                <br><br>

                <p>
                    <?=getTexto_ult_livros()?>
                </p>

                <br><br>

                <form action="" method="POST">
                    <button class="botao" name="editar_home">EDITAR HOME</button>
                </form>

            </div>
        </div>

    <?php endif; ?>

    
</main>