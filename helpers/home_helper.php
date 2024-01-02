<?php

function getImagemAutor(){
    $imagem_autor = selectSQLUnico("SELECT imagem_autor FROM home WHERE id='1'");
    return $imagem_autor["imagem_autor"];
}

function getTexto_ult_livros(){
    $texto_ult_livros = selectSQLUnico("SELECT texto_ult_livros FROM home WHERE id='1'");
    return $texto_ult_livros["texto_ult_livros"];
}

//Cards

$cards = selectSQL("SELECT * FROM cards_ultimos_livros");

function getImagem_card($id){
    $imagem_card = selectSQLUnico("SELECT imagem FROM cards_ultimos_livros WHERE id='$id'");
    return $imagem_card["imagem"];
}

function getCategoria_card($id){
    $categoria_card = selectSQLUnico("SELECT categoria FROM cards_ultimos_livros WHERE id='$id'");
    return $categoria_card["categoria"];
}

function getTitulo_card($id){
    $titulo_card = selectSQLUnico("SELECT titulo FROM cards_ultimos_livros WHERE id='$id'");
    return $titulo_card["titulo"];
}

function getIdLivro($id){
    $titulo = getTitulo_card($id);
    $id_link = selectSQLUnico ("SELECT id FROM livros WHERE titulo = '$titulo'");
    return $id_link["id"];
}

function getTextoLivro($id){
    $titulo = getTitulo_card($id);
    $texto_card = selectSQLUnico ("SELECT texto FROM livros WHERE titulo = '$titulo'");
    return $texto_card["texto"];
}

?>