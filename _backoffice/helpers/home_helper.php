<?php

$form_home = isset($_POST["editar_home"]);

if ($form_home){

    $form_h = isset($_POST["imagem_home"]) && isset($_POST["texto_ult_livros"]);

    if($form_h){
        $imagem_home = $_POST["imagem_home"];
        $texto_home = $_POST["texto_ult_livros"];
        iduSQL("UPDATE home SET imagem_autor='$imagem_home', texto_ult_livros='$texto_home'");
        header("Location:".$url_backoffice."home");
        exit();
    }

}

?>