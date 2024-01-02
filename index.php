<?php

require_once("requisitos.php");


$rota_completa = $_SERVER["REQUEST_URI"];
$rotas = explode("/", $rota_completa);

if(str_contains($rotas[count($rotas)-1], "?")){
    $parametros = str_replace("?", "", $rotas[count($rotas)-1]);
    $parametros = explode("&", $parametros);
    $_GET = [];
    foreach($parametros as $p){
        $p = explode("=", $p);
        $_GET[$p[0]] = $p[1];
    }
    $rotas[count($rotas) - 1] = explode("?", $rotas[count($rotas) - 1])[0];
}

switch($rotas[2]){

    case "":
    case "home":
        require_once("models/home_model.php");
        break;

    case "autor":
        require_once("models/autor_model.php");
        break;

    case "livros":
        require_once("models/livros_model.php");
        break;

    case "imprensa":
        require_once("models/imprensa_model.php");
        break;

    case "contactos":
        require_once("models/contactos_model.php");
        break;

    case "backoffice":
        if(empty($rotas[3])){$rotas[3] = "";}
        switch($rotas[3]){
            case "":
                require_once("_backoffice/models/backoffice_model.php");
                break;

            case "inicio":
                require_once("_backoffice/models/inicio_model.php");
                break;

            case "carousel":
                require_once("_backoffice/models/carousel_model.php");
                break;
        
            case "home":
                require_once("_backoffice/models/home_model.php");
                break;

            case "autor":
                require_once("_backoffice/models/autor_model.php");
                break;
                
            case "destaques":
                require_once("_backoffice/models/destaques_model.php");
                break;
            
            case "imprensa":
                require_once("_backoffice/models/imprensa_model.php");
                break;

            case "contactos":
                require_once("_backoffice/models/contactos_model.php");
                break;

            case "livros":
                require_once("_backoffice/models/livros_model.php");
                break;

            case "redes":
                require_once("_backoffice/models/redes_model.php");
                break;

            case "configuracoes":
                require_once("_backoffice/models/configuracoes_model.php");
                break;

            case "logout":
                logout();
                header("Location:" . $url_backoffice);
                exit();
                break;

            default:
                require_once("models/erro_model.php");
                break;
        }
        break;

    default:
        require_once("models/erro_model.php");
        break;

}

?>