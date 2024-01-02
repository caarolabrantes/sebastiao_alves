<?php

$imagens_cab = selectSQL("SELECT * FROM carrossel");


function getImagem_carrossel($id){
    $imagem_carrossel_desktop = selectSQLUnico("SELECT imagem FROM carrossel WHERE id='$id'");
    return $imagem_carrossel_desktop["imagem"];
}

function getCategoria_carrossel($id){
    $categoria_carrossel_desktop = selectSQLUnico("SELECT destaque FROM carrossel WHERE id='$id'");
    return $categoria_carrossel_desktop["destaque"];
}

function getTitulo_carrossel($id){
    $titulo_carrossel_desktop = selectSQLUnico("SELECT titulo FROM carrossel WHERE id='$id'");
    return $titulo_carrossel_desktop["titulo"];
}

function getTexto_carrossel($id){
    $texto_carrossel_desktop = selectSQLUnico("SELECT descricao FROM carrossel WHERE id='$id'");
    return $texto_carrossel_desktop["descricao"];
}

function getImagem_carrossel_mob($id){
    $imagem_carrossel_mobile = selectSQLUnico("SELECT imagem_mob FROM carrossel WHERE id='$id'");
    return $imagem_carrossel_mobile["imagem_mob"];
}



?>