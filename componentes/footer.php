<footer class="container-fluid">

            <div class="row inferior">

                <div class="col-12 linha_separadora_inferior">
               
                </div>

                <div class="col-12 barra-nav d-md-flex d-none" id="barra-nav-inf">

                <nav class="navbar navbar-expand-md">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <img class="img_toggler" src="public/imagens/menu.svg" alt="menu">
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "") ? "active" : ""; ?>" aria-current="page" href="<?=$url_base?>">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "autor") ? "active" : ""; ?>" href="<?=$url_base?>autor">AUTOR</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "livros") ? "active" : ""; ?>" href="#" onclick="abrirDropdown(event)">LIVROS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "imprensa") ? "active" : ""; ?>" href="<?=$url_base?>imprensa">IMPRENSA</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "contactos") ? "active" : ""; ?>" href="<?=$url_base?>contactos">CONTACTOS</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-12 d-md-block d-none linha_separadora_inferior">
               
                </div>

            </div>

            <div class="row rodape_final">

                <div class="col-lg-6 col-6 contactos">
                    <div class="titulo_contactos t1">
                        contactos
                    </div>

                    <div class="campos_contactos">

                        <div class="campo morada">
                            <div class="titulo_campo">
                                Morada
                            </div>
                                
                            <div class="desc_campo">
                                <?= getMorada_contactos(); ?>
                            </div>
    
                        </div>
    
                        <div class="campo telefone">
                            <div class="titulo_campo">
                                Telefone
                            </div>
                                
                            <div class="desc_campo">
                                <?= getTelefone_contactos(); ?>
                            </div>
    
                        </div>
    
                        <div class="campo email">
                            <div class="titulo_campo">
                                E-mail
                            </div>
                                
                            <div class="desc_campo">
                                <?= getEmail_contactos(); ?>
                            </div>
                        </div>

                    </div>

                   

                </div>

                <div class="col-lg-5 col-12 redes_sociais">
                    <div class="titulo_redes_sociais t1">
                        siga-me nas redes sociais
                    </div>

                    <div class="redes">
                        <div class="rede">
                            <a href="<?= getInstagram()?>" target="_blank">
                                <img src="http://localhost/sebastiao_alves/public/imagens/instagram1.svg" alt="instagram1">
                            </a>
                        </div>

                        <div class="rede">
                            <a href="<?= getFacebook()?>" target="_blank">
                                <img src="http://localhost/sebastiao_alves/public/imagens/facebook1.svg" alt="facebook1">
                            </a>
                        </div>

                        <div class="rede">
                            <a href="<?= getLinkedin()?>" target="_blank">
                                <img src="http://localhost/sebastiao_alves/public/imagens/linkedin1.svg" alt="linkedin1">
                            </a>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row icones_legais">

                <div class="col-md-6 col-12 reclamacoes">

                    <a href="https://www.livroreclamacoes.pt" target="_blank">
                        <img id="livro_reclamacoes" src="http://localhost/sebastiao_alves/public/imagens/livroreclamacoes.svg" alt="livro_reclamacoes">
                    </a>

                    <a href="https://sebastiaoalves.com/ralc" target="_blank">
                        <img id="ralc" src="http://localhost/sebastiao_alves/public/imagens/ralc.svg" alt="ralc">
                    </a>
                    

                </div>

                <div class="col-md-5 col-12 cookies">

                    <div id="cookies">
                        Política de cookies.
                    </div>

                    <div id="copyright">
                        Copyright © Carolina Abrantes. Todos os direitos reservados.
                    </div>

                </div>

            </div>

        </footer>
        
    </body>
</html>