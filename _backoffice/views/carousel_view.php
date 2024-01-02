

<main class="container-fluid">

    <?php if(isset($_POST["apagar_carr"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>Tem a certeza que deseja apagar "<?= $banner_apagar["titulo"]?>"?</h2>
                <img style="width: 500px" src="<?= $banner_apagar["imagem"] ?>" alt="">

                <div class="d-flex justify-content-center">
                
                    <form action="" method="POST" class="m-3">
                        <input type="hidden" name="apagar_carr" value="<?=$banner_apagar["id"]?>">
                        <button name="apagar_s" value="true">SIM</button>
                    </form>

                    <a href="<?=$url_backoffice?>carousel" class="m-3">
                        <button type="button">NÃO</button>
                    </a>
                    
                </div>

            </div>
        </div>

    <?php elseif(isset($_POST["editar_carr"])): ?>

        <div class="row principal">
            <div class="col-12 fundo text-center p-3">

                <h2>EDITAR BANNER</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_carr" value="<?=$id_editar?>">
                    <label for="imagem_desktop">Link Imagem Desktop</label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem_desktop" autocomplete="off" required value="<?= $banner_editar["imagem"]?>">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">
                            Buscar Imagens
                        </button>
                    </a>
                    <br><br>
                    <label for="imagem_mobile">Link Imagem Mobile</label>
                    <br>
                    <input style="width: 800px;" type="text" name="imagem_mobile" autocomplete="off" required value="<?= $banner_editar["imagem_mob"]?>">
                    <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                        <button type="button">
                            Buscar imagens
                        </button>
                    </a>                    
                    <br><br>
                    <label for="Titulo">Titulo Banner</label>
                    <br>
                    <input style="width: 900px;" type="text" name="titulo" autocomplete="off" required value="<?= $banner_editar["titulo"]?>">
                    <br><br>
                    <label for="Categoria">Categoria Banner</label>
                    <br>
                    <input style="width: 900px;" type="text" name="categoria" autocomplete="off" value="<?= $banner_editar["destaque"]?>">
                    <br><br>
                    <label for="Texto">Texto Banner</label>
                    <br>
                    <textarea name="texto_banner" id="texto" cols="90" rows="10"><?= $banner_editar["descricao"]?></textarea>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#texto' ) )
                            .catch( error => {
                            console.error( error );
                        } );
                     </script>
                    <br><br>
                    <label for="link">Link Saber Mais</label>
                    <br>
                    <input style="width: 900px;" type="text" name="link" autocomplete="off" value="<?= $banner_editar["link_saber"]?>">
                    <br><br>

                    <input type="submit" value="Editar">
                    
                </form>
                
            </div>
        </div>


        <?php elseif(isset($_POST["criar_banner"])): ?>

            <div class="row principal">
                <div class="col-12 fundo text-center p-3">

                    <h2>CRIAR BANNER</h2>
                    <form action="" method="POST">
                        <input type="hidden" name="criar_banner">
                        <label for="imagem_desktop">Link Imagem Desktop</label>
                        <br>
                        <input style="width: 800px;" type="text" id="imagem_desktop" name="imagem_desktop" autocomplete="off" required>
                        <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                            <button type="button">
                                Buscar Imagens
                            </button>
                        </a>
                        <br><br>
                        <label for="imagem_mobile">Link Imagem Mobile</label>
                        <br>
                        <input style="width: 800px;" type="text" id="imagem_mobile" name="imagem_mobile" autocomplete="off" required>
                        <a href="<?= $url_base ?>tinyfilemanager/tinyfilemanager.php" target="_blank">
                            <button type="button">
                                Buscar imagens
                            </button>
                        </a>                    
                        <br><br>
                        <label for="titulo">Titulo Banner</label>
                        <br>
                        <input style="width: 900px;" type="text" name="titulo" autocomplete="off" required>
                        <br><br>
                        <label for="Categoria">Categoria Banner</label>
                        <br>
                        <input style="width: 900px;" type="text" name="categoria" autocomplete="off">
                        <br><br>
                        <label for="Texto">Texto Banner</label>
                        <br>
                        <textarea name="texto_banner" id="texto" cols="90" rows="10"></textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#texto' ) )
                                .catch( error => {
                                console.error( error );
                            } );
                        </script>
                        <br><br>
                        <label for="link">Link Saber Mais</label>
                        <br>
                        <input style="width: 900px;" type="text" name="link" autocomplete="off">
                        <br><br>

                        <input type="submit" value="Criar">
                        
                    </form>
                    
                </div>
            </div>
    
        <?php else: ?>

            <div class="row principal">
                <div class="col-12 fundo text-center p-3">

                    <h2>Editar Carousel</h2>
                    <br>
                    <?php if(!empty($imagens_cab)): ?>

                        <table>

                            <tr>
                                <th>Imagem Desktop</th>
                                <th>Imagem Mobile</th>
                                <th>Titulo</th>
                                <th>Categoria</th>
                                <th>Descrição</th>
                                <th>Editar/ Apagar </th>
                            </tr>
                            <?php foreach($imagens_cab as $c): ?>
                            
                                <tr>    
                                    <td><img src="<?= $c["imagem"] ?>"></td>
                                    <td><img src="<?= $c["imagem_mob"] ?>"></td>
                                    <td><?= $c["titulo"] ?></td>
                                    <td><?= $c["destaque"] ?></td>
                                    <td><?= $c["descricao"] ?></td>
                            
                                    <td>
                                        <form action="" method="POST">
                                            <button class="botao" name="editar_carr" value="<?=$c["id"]?>">EDITAR</button>
                                            <br><br>
                                            <button class="botao" name="apagar_carr" value="<?=$c["id"]?>">APAGAR</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>

                        </table>

                    <?php endif; ?>

                    <br>

                    <form action="" method="POST">
                        <button class="botao" name="criar_banner">CRIAR NOVO BANNER</button>
                    </form>

                    

                </div>
            </div>

    <?php endif; ?>

    
</main>