<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sebastião Alves</title>

        <!--link bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

        <!--link css-->
        <link rel="stylesheet" href="<?= $url_public; ?>css/estilo.css">
        <link rel="stylesheet" href="<?= $url_public; ?>fontes/fontes.css">

        <!--JS-->
        <script src="<?=$url_public?>/js/funcoes.js"></script>

    </head>
    <body>

        <header class="container-fluid m-0 p-0">

            <div class="row superior">
                <div class="col-md-4 col-9 titulo t1">
                    sebastião alves
                </div>

                <div class="col-2 d-md-none d-flex barra-nav">

                    <nav class="navbar">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="alterar()">
                            <img class="img_toggler" id="imgjs" src="http://localhost/sebastiao_alves/public/imagens/menu.svg" alt="menu">
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ">
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "") ? "active" : ""; ?>" aria-current="page" href="<?=$url_base?>">HOME</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "autor") ? "active" : "autor"; ?>" href="<?=$url_base?>autor">AUTOR</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link <?= ($rotas[2] == "livros") ? "active" : "livros"; ?> dropdown-toggle" href="<?=$url_base?>livros" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        LIVROS
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php foreach($livros as $i_d): ?>
                                            <li><a class="dropdown-item" href="<?= $url_base . "livros/" . $i_d["id"] ?>"><?= $i_d["titulo"]?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
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

                <div class="col-12 linha_separadora">
               
                </div>

                <div class="col-12 d-md-flex d-none barra-nav">

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
                                <li class="nav-item dropdown">
                                    <a id="dropdown_m" class="nav-link dropdown-toggle <?= ($rotas[2] == "livros") ? "active" : ""; ?> "  href="<?=$url_base?>livros" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        LIVROS
                                    </a>
                                    <ul class="dropdown-menu" >
                                        <?php foreach($livros as $i_dd): ?>
                                            <li><a class="dropdown-item" href="<?= $url_base . "livros/" . $i_dd["id"] ?>"><?= $i_dd["titulo"]?></a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "imprensa") ? "active" : ""; ?>" href="<?=$url_base?>imprensa">IMPRENSA </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?= ($rotas[2] == "contactos") ? "active" : ""; ?>" href="<?=$url_base?>contactos">CONTACTOS</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row carrossel">
               

                <div id="carouselExampleAutoplaying" class="carousel slide d-md-block d-none m-0 p-0" data-bs-ride="carousel">


                    <div class="carousel-inner">
                        
                        <?php foreach($imagens_cab as $i): ?>
                        
                            <div class="carousel-item <?php if($i["id"] == 1){ echo"active"; } ?>">
                                <img src="<?= $i["imagem"]?>" class="d-block w-100" alt="cabecalho1">
                                <div class="carousel-caption d-none d-md-block b-legendas">
                                    <div class="b_destaque"><?= $i["destaque"]?></div>
                                    <div class="b_titulo"><?= $i["titulo"]?></div>
                                    <div class="b_descricao"><?= $i["descricao"]?></div>
                            
                                    <a href="<?=$i["link_saber"]?>">
                                        <img class="sabermais1" src="http://localhost/sebastiao_alves/public/imagens/sabermais1.svg" alt="sabermais1">
                                    </a>
                                </div>
                            </div>

                        <?php endforeach; ?>

                            <div class="carousel-indicators"> 
                                <?php for($i = 0; $i < count($imagens_cab); $i++): ?>
                                    <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="<?= ($i) ?>" class="<?php if($i == 0){ echo"active"; } ?> botao" aria-current="true" aria-label="Slide <?= ($i)?>"></button>
                               <?php endfor; ?>
                            </div>

                     

                        
                    </div>
                </div>

                <div id="carouselExampleAutoplaying2" class="carousel slide d-md-none d-block" data-bs-ride="carousel">
    
                    <div class="carousel-inner">
                        
                    <?php foreach($imagens_cab as $i_m): ?>
                        
                        <div class="carousel-item <?php if($i_m["id"] == 1){ echo"active"; } ?>">
                            <img src="<?= $i_m["imagem_mob"]?>" class="d-block w-100" alt="cabecalho1">
                            <div class="carousel-caption d-md-none d-block b-legendas">
                                <div class="b_destaque"><?= $i_m["destaque"]?></div>
                                <div class="b_titulo"><?= $i_m["titulo"]?></div>
                                <div class="b_descricao"><?= $i_m["descricao"]?></div>
                        
                                <a href="<?=$i_m["link_saber"]?>">
                                    <img class="sabermais1" src="http://localhost/sebastiao_alves/public/imagens/sabermais1.svg" alt="sabermais1">
                                </a>
                            </div>
                        </div>

                    <?php endforeach; ?>

                            <div class="carousel-indicators"> 
                                <?php for($i = 0; $i < count($imagens_cab); $i++): ?>
                                    <button type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide-to="<?= ($i) ?>" class="<?php if($i == 0){ echo"active"; } ?> botao" aria-current="true" aria-label="Slide <?= ($i)?>"></button>
                               <?php endfor; ?>
                            </div>

                 
                       
                        
                    </div>
                </div>
                
            </div>

            
        </header>