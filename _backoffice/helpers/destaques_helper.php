<?php


$form_ed_des = isset($_POST["editar_dest"]);

if($form_ed_des){
    $id_editar = $_POST["editar_dest"];

    $form_destaque = isset($_POST["livros"]) && isset($_POST["destaque"]);

    if($form_destaque){
        $id = $_POST["livros"];
        $imagem_c = getImagem_livro($id);
        $titulo_c = getTitulo_livro($id);
        $categoria_c = $_POST["destaque"];
        $id_editar = $_POST["editar_dest"];
        iduSQL("UPDATE cards_ultimos_livros SET imagem ='$imagem_c', categoria='$categoria_c', titulo='$titulo_c' WHERE id='$id_editar'");
        header("Location:".$url_backoffice."destaques");
        exit();
    }
}









?>