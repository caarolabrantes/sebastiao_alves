<?php

require_once("config/config.php");

$form_log= isset($_POST["login"]) && isset($_POST["senha"]);

if($form_log){
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $sucess = logar($login, $senha);

    if($sucess){
        $colaborador=selectSQLunico("SELECT * FROM colaboradores WHERE login='$login'");
        header("Location: ".$url_backoffice."inicio");
        exit();
    }
    
}

function logar($login, $senha){
    $colaborador = selectSQLunico("SELECT * FROM colaboradores WHERE login='$login' AND senha='$senha'");
    
    if(!empty($colaborador)){
        session_start();
        $_SESSION["login"] = $colaborador;
        unset($_SESSION["login"]["senha"]);
        setDataUltimoAcesso($colaborador["id"]);
        return true;
    }

    return false;
}

function setDataUltimoAcesso($id){

    date_default_timezone_set("Europe/Lisbon");
    $data_ult_acess = date("H:i - d/m/Y");
    iduSQL("UPDATE colaboradores SET data_ult_aces='$data_ult_acess' WHERE id='$id'");
}


function verificarLogado(){
    session_start();
    if(!empty($_SESSION["login"])){
        return true;
    }
    else{
        header ("Location: http://localhost/sebastiao_alves/backoffice/");
        exit();
    }
}

function logout(){
    session_start();
    session_destroy();
}


?>
