<!--CONTEÚDO-->

<main>

    <div class="container-fluid p-0">
        <div class="row area_titulo" id="area_contactos">
            <div class="col-12 menu_simples_titulo menu_selec">
                contactos
            </div>

            <div class="col-12 sub_menu_simples t1">
                Pode contactar-me através do e-mail ou telefone
            </div>

        </div>

        <div class="row area_contactos">

            <div class="col-2 vazia d-md-flex d-none">

            </div>

            <div class="col-md-2 col-12 telf">

                <div class="campo">
                    <div class="tit_campo">
                        Telefone
                    </div>
                        
                    <div class="des_campo">
                        <?= getTelefone_contactos(); ?>
                    </div>

                </div>

            </div>

            <div class="col-md-4 col-12 mor">


                <div class="campo">
                    <div class="tit_campo">
                        Morada
                    </div>
                        
                    <div class="des_campo">
                        <?= getMorada_contactos(); ?>
                    </div>

                </div>

            </div>

            <div class="col-md-2 col-12 mail">

                <div class="campo">
                    <div class="tit_campo">
                        E-mail
                    </div>
                        
                    <div class="des_campo">
                        <?= getEmail_contactos(); ?>
                    </div>
                </div>

            </div>


            <div class="col-12">
                <p class="linha_contactos">

                </p>
            </div>

            <div class="col-12 horario">

                <div class="campo">
                    <div class="tit_campo">
                        Horário
                    </div>
                        
                    <div class="des_campo">
                        <?= getHorario_contactos(); ?>
                    </div>
                </div>

            </div>

        </div>


    </div>

    <script src="<?= $url_public; ?>js/main.js"></script>

</main>

<!--FIM DO CONTEÚDO-->