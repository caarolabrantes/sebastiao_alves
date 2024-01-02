<?php

$form = isset($_POST["editar_redes"]);

$form2 = isset($_POST["facebook"]) && isset($_POST["instagram"]) && isset($_POST["linkedin"]);

if($form2){
    $facebook = $_POST["facebook"];
    $instagram = $_POST["instagram"];
    $linkedin = $_POST["linkedin"];
    iduSQL("UPDATE redes SET link='$facebook' WHERE id=1");
    iduSQL("UPDATE redes SET link='$instagram' WHERE id=2");
    iduSQL("UPDATE redes SET link='$linkedin' WHERE id=3");
    header("Location:".$url_backoffice."redes");
    exit();
}


?>