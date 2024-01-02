<main class="container-fluid">

    <?php if(isset($_POST["apagar"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>Tem a certeza que deseja apagar "<?= $livro_apagar["titulo"]?>"?</h2>
                <img style="width: 200px" src="<?= $livro_apagar["imagem"] ?>" alt="">

                <div class="d-flex justify-content-center">
                
                    <form action="" method="POST" class="m-3">
                        <input type="hidden" name="apagar" value="<?=$livro_apagar["id"]?>">
                        <button name="apagar_livro" value="true">SIM</button>
                    </form>

                    <a href="<?=$url_backoffice?>livros" class="m-3">
                        <button type="button">NÃO</button>
                    </a>

                                    
                    
                </div>

            
                


            </div>
        </div>

    <?php elseif(isset($_POST["editar"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>EDITAR LIVRO</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar" value="<?=$livro_editar["id"]?>">
                    <label for="imagem">Link Imagem </label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem" autocomplete="off" required value="<?= $livro_editar["imagem"]?>">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type = "button">
                            Buscar Imagens
                        </button>
                    </a>                   
                    <br><br>
                    <label for="Titulo">Titulo Livro</label>
                    <br>
                    <input style="width: 900px;" type="text" name="titulo" autocomplete="off" required value="<?= $livro_editar["titulo"]?>">
                    <br><br>
                    <label for="Texto">Texto Livro</label>
                    <br>
                    <textarea name="texto" id="texto" cols="90" rows="10"><?= $livro_editar["texto"]?></textarea>
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

    <?php elseif(isset($_POST["criar_livro"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>CRIAR LIVRO</h2>
                <form action="" method="POST">
                    <input type="hidden" name="criar_livro">
                    <label for="imagem">Link Imagem </label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem" id="imagem" autocomplete="off" required placeholder="URL IMAGEM">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type = "button">
                            Buscar Imagens
                        </button>
                    </a>                   
                    <br><br>
                    <label for="titulo">Titulo Livro</label>
                    <br>
                    <input style="width: 900px;" type="text" name="titulo" id="titulo" autocomplete="off" required placeholder="Titulo do livro">
                    <br><br>
                    <label for="texto">Texto Livro</label>
                    <br>
                    <textarea name="texto" id="texto" cols="90" rows="10"></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#texto' ) )
                            .catch( error => {
                            console.error( error );
                        } );
                    </script>
                    <br><br>

                    <input type="submit" value="Criar">
                    
                </form>
                
            </div>
        </div>


    <?php else: ?>  

        <div class="row principal">
            <div class="col-12">

                <h2>Editar Livros</h2>
                <br>
                <br>
                <?php if(!empty($livros)): ?>

                    <table>

                        <tr>
                            <th>Imagem</th>
                            <th>Titulo</th>
                            <th>Texto</th>
                            <th>Editar/ Apagar </th>
                        </tr>
                        <?php foreach($livros as $l): ?>
                        
                            <tr>    
                                <td><img src="<?= $l["imagem"] ?>"></td>
                                <td><?= $l["titulo"] ?></td>
                                <td><?= $l["texto"] ?></td>
                        
                                <td>
                                    <form action="" method="POST">
                                        <button class="botao" name="editar" value="<?=$l["id"]?>">EDITAR</button>
                                        <br><br>
                                        <button class="botao" name="apagar" value="<?=$l["id"]?>">APAGAR</button>

                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>

                <?php endif; ?>

                <br><br>
                <form action="" method="POST">
                    <button class="botao" name="criar_livro">CRIAR NOVO LIVRO</button>
                </form>
                


            </div>
        </div>

    <?php endif; ?>
    
</main>