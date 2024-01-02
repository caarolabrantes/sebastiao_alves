<?php

$livros = selectSQL("SELECT * FROM livros");


function getTitulo_livro($id){
    $titulo_livro= selectSQLUnico("SELECT titulo FROM livros WHERE id='$id'");
    return $titulo_livro["titulo"];
}

function getImagem_livro($id){
    $imagem_livro = selectSQLUnico("SELECT imagem FROM livros WHERE id='$id'");
    return $imagem_livro["imagem"];
}

function getTexto_livro($id){
    $texto_livro = selectSQLUnico("SELECT texto FROM livros WHERE id='$id'");
    return $texto_livro["texto"];
}

?>