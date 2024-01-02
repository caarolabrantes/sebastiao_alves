
<main>
    

    <div class="container-fluid p-0">
        <div class="row area_titulo" id="area_autor">
            <div class="col-12 menu_simples_titulo menu_selec">
                AUTOR
            </div>

            <div class="col-12 sub_menu_simples t1">
                Sobre mim
            </div>

        </div>

        <div class="row ">

            <div class="col-12 corpo_autor p_texto">

                <img src="<?= getImagem_autor(); ?>" alt="Sebastião Alves">

                <div id="pequeno" class="d-md-none">
                    <?= getTexto_autor(); ?>
                </div>
                
                <div id="grande" class="d-md-flex d-none">
                    <?= getTexto_autor(); ?>
                </div>

            </div>

            <div class="col-12 botao_ver_mais_autor d-md-none d-flex">
                <button type="button" class="ver_mais_autor" onclick="verMais(this)">
                    <img src="public/imagens/vermais.svg" alt="botao_ver_mais_autor">
                </button>
            </div>

            <div class="col-12 botao_voltar d-md-block d-flex">
                <button type="button" class="voltar_atras" onclick="voltarAtras(event)">
                    <img src="public/imagens/voltar1.svg" alt="Voltar atrás">
                </button>
            </div>

        </div>

    </div>

    <script src="<?= $url_public; ?>js/main.js"></script>

</main>

