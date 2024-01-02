<?php

$form= isset($_POST["senha_atual"]) && isset($_POST["senha_nova"]) && isset($_POST["senha_nova_conf"]);
$sucesso="";



if ($form){
    $id = $_POST["id"];
    $senha = selectSQLUnico("SELECT senha FROM colaboradores WHERE id= '$id'");
    $senha_atual_dig = $_POST["senha_atual"];

    if ($senha["senha"] === $senha_atual_dig){

        if($_POST["senha_nova"] === $_POST["senha_nova_conf"]){
            $senha_nova = $_POST["senha_nova"];
            iduSQL("UPDATE colaboradores SET senha='$senha_nova' WHERE id= '$id'");
            $sucesso = "SENHA ALTERADA COM SUCESSO !!";
        }

        else{
            $sucesso = "AS SENHAS NOVAS INSERIDAS NÃO COINCIDEM!";
        }
    }

    else{
        $sucesso = "A SENHA ATUAL NÃO CORRESPONDE!";
    }

}




?>