 <!--CONTEÚDO-->

 <?php
    $i = $rotas[3];
 ?>

 <main>

    <div class="container-fluid p-0">
        <div class="row area_titulo" id="area_livros">
        
            <div class="col-12 menu_simples_titulo menu_selec">
                livros
            </div>

            <div class="col-12 sub_menu_simples t1">
                <?= getTitulo_livro($i) ?>
            </div>

        </div>

        <div class="row area_livro">

            <div class="col-md-5 col-12 img_cont_livro">

                <img src="<?= getImagem_livro($i) ?>" alt="livro-conteudo">

            </div>

            
            <div class="col-md-7 col-12 texto_cont_livro p_texto">

                <p>
                    <?= getTexto_livro($i) ?>
                </p>


            </div>

            <div class="col-9 vazia d-md-block d-none">

            </div>

            <div class="col-md-3 col-12 botao_area_livro">
                <button class="botao_voltar_livro" onclick="voltarAtras(event)">
                    <img src="http://localhost/sebastiao_alves/public/imagens/voltar1.svg" alt="botao_voltar">
                </button>
            </div>
            
            

        </div>

    </div>

    <script src="<?= $url_public; ?>js/main.js"></script>

</main>

<!--FIM DO CONTEÚDO-->