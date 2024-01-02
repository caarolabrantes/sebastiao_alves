<main class="container-fluid">

    <?php if(isset($_POST["apagar_imp"])): ?>


        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>Tem a certeza que deseja apagar "<?= $pub_apagar["titulo"]?>"?</h2>

                <div class="d-flex justify-content-center">
                
                    <form action="" method="POST" class="m-3">
                        <input type="hidden" name="apagar_imp" value="<?=$pub_apagar["id"]?>">
                        <button name="apagar_pub" value="true">SIM</button>
                    </form>

                    <a href="<?=$url_backoffice?>imprensa" class="m-3">
                        <button type="button">NÃO</button>
                    </a>              
                    
                </div>

            </div>

        </div>

    <?php elseif(isset($_POST["editar_imp"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>EDITAR PUBLICAÇÃO IMPRENSA</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_imp" value="<?=$pub_editar["id"]?>">
                    <label for="imagem">Link Imagem </label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem" autocomplete="off" required value="<?= $pub_editar["imagem"]?>">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type = "button">
                            Buscar Imagens
                        </button>
                    </a>                   
                    <br><br>
                    <label for="titulo">Titulo Publicação</label>
                    <br>
                    <input style="width: 900px;" type="text" name="titulo" autocomplete="off" required value="<?= $pub_editar["titulo"]?>">
                    <br><br>
                    <label for="titulo">Data da Publicação</label>
                    <br>
                    <input style="width: 900px;" type="text" name="data" autocomplete="off" required value="<?= $pub_editar["data"]?>">
                    <br><br>
                    <label for="Texto">Texto Publicação</label>
                    <br>
                    <textarea name="texto" id="texto" cols="90" rows="10"><?= $pub_editar["texto"]?></textarea>
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

    <?php elseif(isset($_POST["criar_pub"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>CRIAR PUBLICAÇÃO IMPRENSA</h2>
                <form action="" method="POST">
                    <input type="hidden" name="criar_pub">
                    <label for="imagem">Link Imagem </label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem" id="imagem" autocomplete="off" required placeholder="URL IMAGEM">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type = "button">
                            Buscar Imagens
                        </button>
                    </a>                   
                    <br><br>
                    <label for="titulo">Titulo Publicação</label>
                    <br>
                    <input style="width: 900px;" type="text" name="titulo" id="titulo" autocomplete="off" required placeholder="Titulo do livro">
                    <br><br>
                    <label for="titulo">Data da Publicação</label>
                    <br>
                    <input style="width: 900px;" type="text" name="data" autocomplete="off" required>
                    <br><br>
                    <label for="texto">Texto Publicação</label>
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

                <h2>Editar Informações Imprensa</h2>
                <br>
                <br>
                <?php if(!empty($imprensa)): ?>

                    <table>

                        <tr>
                            <th>Imagem</th>
                            <th>Titulo</th>
                            <th>Data</th>
                            <th>Texto</th>
                            <th>Editar/ Apagar </th>
                        </tr>
                        <?php foreach($imprensa as $i): ?>
                        
                            <tr>    
                                <td><img src="<?= $i["imagem"] ?>"></td>
                                <td><?= $i["titulo"] ?></td>
                                <td><?= $i["data"] ?></td>
                                <td><?= $i["texto"] ?></td>
                        
                                <td>
                                    <form action="" method="POST">
                                        <button class="botao" name="editar_imp" value="<?=$i["id"]?>">EDITAR</button>
                                        <br><br>
                                        <button class="botao" name="apagar_imp" value="<?=$i["id"]?>">APAGAR</button>

                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>

                <?php endif; ?>

                <br><br>
                
                <form action="" method="POST">
                    <button class="botao" name="criar_pub">CRIAR NOVA PUBLICAÇÃO</button>
                </form>
                


            </div>
        </div>
    
    <?php endif; ?>

    
</main>