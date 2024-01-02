<?php

if (isset($_POST["apagar_carr"])){
    $id_apagar = $_POST["apagar_carr"];
    $banner_apagar= selectSQLUnico("SELECT * FROM carrossel WHERE id='$id_apagar'");

    if(isset($_POST["apagar_s"])){
        $id = $_POST["apagar_carr"];
        apagarBanner($id);
        header("Location:".$url_backoffice."carousel");
        exit();
    }
}


function apagarBanner($id){
    iduSQL("DELETE FROM carrossel WHERE id='$id'");
}


if (isset($_POST["editar_carr"])){
    $id_editar = $_POST["editar_carr"];
    $banner_editar= selectSQLUnico("SELECT * FROM carrossel WHERE id='$id_editar'");

    $form = isset($_POST["imagem_desktop"]) && isset($_POST["imagem_mobile"]) && isset($_POST["titulo"]) && isset($_POST["texto_banner"]) && isset($_POST["link"]);


    if($form){
        $id = $_POST["editar_carr"];
        $imagem_desktop = $_POST["imagem_desktop"];
        $imagem_mobile = $_POST["imagem_mobile"];
        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $texto = $_POST["texto_banner"];
        $link = $_POST["link"];
        iduSQL("UPDATE carrossel SET imagem ='$imagem_desktop', imagem_mob='$imagem_mobile', titulo='$titulo', destaque='$categoria', descricao='$texto', link_saber='$link' WHERE id='$id'");    
        header("Location:".$url_backoffice."carousel");
        exit();
    }

}


if (isset($_POST["criar_banner"])){

    $form= isset($_POST["imagem_desktop"]) && isset($_POST["imagem_mobile"]) && isset($_POST["titulo"]) && isset($_POST["texto_banner"]) && isset($_POST["link"]);

    if($form){
        $imagem_d= $_POST["imagem_desktop"];
        $imagem_m= $_POST["imagem_mobile"];
        $titulo = $_POST["titulo"];
        $categoria = $_POST["categoria"];
        $texto = $_POST["texto_banner"];
        $link = $_POST["link"];
        iduSQL("INSERT INTO carrossel (imagem, imagem_mob, destaque, titulo, descricao, link_saber) VALUES ('$imagem_d', '$imagem_m', '$titulo', '$categoria', '$texto', '$link')");
        header("Location:".$url_backoffice."carousel");
        exit();
    }
    
}




?>