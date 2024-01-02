<?php

$form_autor = isset($_POST["editar_autor"]);

if ($form_autor){

    $form_a = isset($_POST["imagem_autor"]) && isset($_POST["texto_autor"]);

    if($form_a){
        $imagem_autor = $_POST["imagem_autor"];
        $texto_autor = $_POST["texto_autor"];
        iduSQL("UPDATE autor SET imagem ='$imagem_autor', texto='$texto_autor'");
        header("Location:".$url_backoffice."autor");
        exit();
    }

}

?>