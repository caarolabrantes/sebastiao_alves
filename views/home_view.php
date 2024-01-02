<main>
    <div class="container-fluid m-0 p-0">
        <div class="row area_bem_vindo">
            <div class="col-lg-4 col-12 imagem_bem_vindo">
                <img src="<?=getImagemAutor()?>" alt="autor">
            </div>

            <div class="col-lg-7 col-12 texto_bem_vindo">
                <div id="titulo_bem_vindo" class="t1">
                        BEM VINDO AO MEU WEBSITE
                </div>

                <div id="descricao_bem_vindo" class="p_texto">
                    <?=getTexto_autor() ?>
                </div>

                <div id="botao_saber_mais">
                    <a href="<?= $url_base . "autor" ?>">
                        <img src="public/imagens/sabermais1.svg" alt="saber_mais">
                    </a>
                </div>

            </div>
        </div>

        <div class="row ult_livros">

            <div class="col-12 titulo_ult_livros t1">
                Últimos Livros
            </div>

            <div class="col-12 texto_ult_livros p_texto">
                <?= getTexto_ult_livros() ?>
            </div>

        <div class="row destaques_ult_livros d-flex align-items-center g-4">

            <?php for($i=1; $i <= count($cards); $i++): ?>

                <div class="col-md-3 col-12 card">
                    <img class = "imagem_destaque" src="<?= getImagem_card($i) ?>" alt="livro-conteudo">
                    <div class="titulo_destaque">
                        <?= getTitulo_card($i) ?>
                    </div>
                    <div class="categoria_destaque">
                        <?= getCategoria_card($i) ?>
                    </div>
                    <div class="texto_destaque">
                        <?= getTextoLivro($i) ?>
                    </div>

                    <div class="botao_saber_destaques">
                        <a href="<?= $url_base."livros/". getIdLivro($i)?>">
                            <img src="public/imagens/sabermais1.svg" alt="saber_mais">
                        </a>
                    </div>
                </div>

            <?php endfor; ?>
            
        </div>

    </div>

    <script src="<?= $url_public; ?>js/main.js"></script>

</main>