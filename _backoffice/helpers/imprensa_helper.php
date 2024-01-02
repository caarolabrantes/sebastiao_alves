<?php

if (isset($_POST["apagar_imp"])){
    $id_apagar_imp = $_POST["apagar_imp"];
    $pub_apagar= selectSQLUnico("SELECT titulo, id FROM imprensa WHERE id='$id_apagar_imp'");

    if(isset($_POST["apagar_pub"])){
        $id = $_POST["apagar_imp"];
        apagarPub($id);
        header("Location:".$url_backoffice."imprensa");
        exit();
    }
}

function apagarPub($id){
    iduSQL("DELETE FROM imprensa WHERE id='$id'");
}

if (isset($_POST["editar_imp"])){
    $id_editar_imp = $_POST["editar_imp"];
    $pub_editar= selectSQLUnico("SELECT * FROM imprensa WHERE id='$id_editar_imp'");

    $form = isset($_POST["titulo"]) && isset($_POST["imagem"]) && isset($_POST["data"]) && isset($_POST["texto"]);


    if($form){
        $imagem= $_POST["imagem"];
        $titulo = $_POST["titulo"];
        $data = $_POST["data"] ;
        $texto = $_POST["texto"];
        $id = $_POST["editar_imp"];
        iduSQL("UPDATE imprensa SET imagem ='$imagem', titulo='$titulo', data='$data', texto='$texto' WHERE id='$id'");
        header("Location:".$url_backoffice."imprensa");
        exit();
    }

}

if (isset($_POST["criar_pub"])){

    $form= isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]) && isset($_POST["data"]);

    if($form){
        $imagem= $_POST["imagem"];
        $titulo = $_POST["titulo"];
        $texto = $_POST["texto"];
        $data = $_POST["data"];
        iduSQL("INSERT INTO imprensa (titulo, imagem, texto, data) VALUES ('$titulo', '$imagem', '$texto', '$data')");
        header("Location:".$url_backoffice."imprensa");
        exit();
    }
    
}
?>