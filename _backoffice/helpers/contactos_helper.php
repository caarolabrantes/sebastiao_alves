<?php

$form = isset($_POST["editar_cont"]);

$form2 = isset($_POST["telefone"]) && isset($_POST["morada"]) && isset($_POST["email"]) && isset($_POST["horario"]);

if($form2){
    $telefone = $_POST["telefone"];
    $morada = $_POST["morada"];
    $email = $_POST["email"];
    $horario = $_POST["horario"];
    iduSQL("UPDATE contactos SET telefone ='$telefone', morada='$morada', email='$email', horario='$horario' WHERE id=1");
    header("Location:".$url_backoffice."contactos");
    exit();
}


?>