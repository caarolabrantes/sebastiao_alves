<!--CONTEÚDO-->

<main>


    <div class="container-fluid p-0">
        <div class="row area_titulo" id="area_imprensa">
            <div class="col-12 menu_simples_titulo menu_selec">
                imprensa
            </div>

            <div class="col-12 sub_menu_simples t1">
                últimas notícias
            </div>

        </div>

        <div class="row area_imprensa">
            
            <?php foreach($publicacoes_imprensa as $p): ?>
                <div class="col-12 <?= $classe ?>">

                    <div class="titulo_noticia t1">
                        <?= $p["titulo"]; ?>
                    </div>

                    <div class="linha_sep_noticia">

                    </div>

                    <div class="data_noticia">
                        <?= $p["data"]; ?>
                    </div>

                    <div class="texto_noticia p_texto">

                        <img src="<?= $p["imagem"]; ?>" alt="imprensa<?= $p["id"] ?>">

                        <p>
                            <?= $p["texto"]; ?>
                        </p>

                    </div>

                </div>
                
                <?php $classe = "noticia"; ?>

            <?php endforeach;?>


            <div class="col-12 paginacao">

                <form action="">

                    <?php if ($pagina_atual > 1): ?>
                        <button name="pagina" class="seta_imprensa" id="seta_imprensa_esq" value="<?=($pagina_atual - 1)?>"><img src="public/imagens/setaesquerda1.svg" alt="setaesquerda1"></button>
                    <?php endif; ?>
                    <?php for($i=1; $i<= $total_pags; $i++): ?>
                        <button name="pagina" value="<?=$i;?>" class="<?= ($i == $pagina_atual) ? "numeros_pag active" : "numeros_pag" ?>"><?=$i?></button>
                    <?php endfor; ?>
                    <?php if ($pagina_atual < $total_pags): ?>
                        <button name="pagina" class= "seta_imprensa" value="<?=($pagina_atual + 1)?>"><img src="public/imagens/setadireita1.svg" alt="setadireita1"></button>
                    <?php endif; ?>
                </form>
            </div>

        </div>
    </div>

    <script src="<?= $url_public; ?>js/main.js"></script>

</main>

<!--FIM DO CONTEÚDO-->