


<main class="container-fluid">

    <?php if($form_ed_des): ?>

        <div class="row principal">
            <div class="col-12">

                <h2>EDITAR DESTAQUES</h2>
                <form action="" method="POST">
                    <input type="hidden" name="editar_dest" value= "<?= $id_editar; ?>" ?>
                    <select name="livros" id="livros">
                        <?php foreach($livros as $l): ?>
                            <option value="<?= $l["id"]?>"> <?= $l["titulo"]; ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <br><br>
                    <label for="destaque">Observação do destaque</label>
                    <br><br>
                    <input type="text" style="width: 800px;" name="destaque" id="destaque" value="<?= getCategoria_card($id_editar)  ?>">
                    <br><br>
                    <input type="submit" value="Editar">
                    
                </form>

            </div>
        </div>

    <?php else: ?>
   
        <div class="row principal">
            <div class="col-12">

                <h2>Editar Destaques</h2>
                <br>
                <br>
                <?php if(!empty($cards)): ?>

                    <table>

                        <tr>
                            <th>Imagem</th>
                            <th>Titulo</th>
                            <th>Categoria</th>
                            <th>Editar</th>
                        </tr>
                        <?php foreach($cards as $c): ?>
                        
                            <tr>    
                                <td><img src="<?= $c["imagem"] ?>"></td>
                                <td><?= $c["titulo"] ?></td>
                                <td><?= $c["categoria"] ?></td>
                        
                                <td>
                                    <form action="" method= "POST">
                                        <button class="botao" name="editar_dest" value="<?=$c["id"]?>">EDITAR</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </table>

                <?php endif; ?>

                <br><br>

            </div>
        </div>

    <?php endif; ?>

    
</main>