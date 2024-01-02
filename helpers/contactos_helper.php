<?php

function getTelefone_contactos(){
    $telefone_contactos = selectSQLUnico("SELECT telefone FROM contactos WHERE id=1");
    return $telefone_contactos["telefone"];
}

function getMorada_contactos(){
    $morada_contactos = selectSQLUnico("SELECT morada FROM contactos WHERE id=1");
    return $morada_contactos["morada"];
}

function getEmail_contactos(){
    $email_contactos = selectSQLUnico("SELECT email FROM contactos WHERE id=1");
    return $email_contactos["email"];
}

function getHorario_contactos(){
    $horario_contactos = selectSQLUnico("SELECT horario FROM contactos WHERE id=1");
    return $horario_contactos["horario"];
}

?>