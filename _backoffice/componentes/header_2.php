<?php

verificarLogado();

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Backoffice Sabastião Alves</title>

        <!--BOOTSTRAP-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <!--CSS-->
        <link rel="stylesheet" href="<?=$url_public?>css/estilo_backof.css">
        <!--CK EDITOR-->
        <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>
        
    </head>
    <body>

        <header class="container-fluid">

            <div class="row d-flex justify-content-center">
                <div class="col-10 fundo text-center p-3">

                    <h2 class="titulo_back">Sebastião Alves - Backoffice</h2>


                    <nav class="navbar navbar-expand-md">
                        <div class="container-fluid ">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0  m-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>inicio">Início</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>carousel">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>autor">Autor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>livros">Livros</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>destaques">Destaques</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>imprensa">Imprensa</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>contactos">Contactos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>redes">Redes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>configuracoes">Configurações</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?=$url_backoffice?>logout">Sair</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
                    

                </div>
            </div>

        </header>