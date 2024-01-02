<?php


if (isset($_POST["editar"])){
    $id_editar = $_POST["editar"];
    $livro_editar= selectSQLUnico("SELECT * FROM livros WHERE id='$id_editar'");

    $form = isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);


    if($form){
        $imagem= $_POST["imagem"];
        $titulo = $_POST["titulo"];
        $texto = $_POST["texto"];
        $id = $_POST["editar"];
        iduSQL("UPDATE livros SET imagem ='$imagem', titulo='$titulo', texto='$texto' WHERE id='$id'");
        header("Location:".$url_backoffice."livros");
        exit();
    }

}

if (isset($_POST["apagar"])){
    $id_apagar = $_POST["apagar"];
    $livro_apagar= selectSQLUnico("SELECT * FROM livros WHERE id='$id_apagar'");

    if(isset($_POST["apagar_livro"])){
        $id = $_POST["apagar"];
        apagarLivro($id);
        header("Location:".$url_backoffice."livros");
        exit();
    }
}

if (isset($_POST["criar_livro"])){

    $form= isset($_POST["imagem"]) && isset($_POST["titulo"]) && isset($_POST["texto"]);

    if($form){
        $imagem= $_POST["imagem"];
        $titulo = $_POST["titulo"];
        $texto = $_POST["texto"];
        iduSQL("INSERT INTO livros (titulo, imagem, texto) VALUES ('$titulo', '$imagem', '$texto')");
        header("Location:".$url_backoffice."livros");
        exit();
    }
    
}


function apagarLivro($id){
    iduSQL("DELETE FROM livros WHERE id='$id'");
}



?>