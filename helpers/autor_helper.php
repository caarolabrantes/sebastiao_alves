<?php

function getImagem_autor(){
    $imagem_autor = selectSQLUnico("SELECT imagem FROM autor WHERE id=1");
    return $imagem_autor["imagem"];
}

function getTexto_autor(){
    $texto_autor = selectSQLUnico("SELECT texto FROM autor WHERE id=1");
    return $texto_autor["texto"];
}

?>