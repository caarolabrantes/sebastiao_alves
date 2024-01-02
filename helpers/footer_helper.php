<?php

function getFacebook(){
    $facebook = selectSQLUnico("SELECT link FROM redes WHERE nome = 'facebook'");
    return $facebook["link"];
}

function getInstagram(){
    $instagram = selectSQLUnico("SELECT link FROM redes WHERE nome = 'instagram'");
    return $instagram["link"];
}

function getLinkedin(){
    $linkedin = selectSQLUnico("SELECT link FROM redes WHERE nome = 'linkedin'");
    return $linkedin["link"];
}

?>