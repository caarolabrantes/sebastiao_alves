<?php
$total = selectSQLUnico("SELECT Count(id) as total FROM imprensa");
$total_elementos = intval($total["total"]);

$pagina_atual = 1;

$numero_el_pag = 2;

$total_pags = ceil($total_elementos / $numero_el_pag);

if (isset($_GET["pagina"]) && $_GET["pagina"] <= $total_pags){
    $pagina_atual = $_GET["pagina"];
}

$offset = ($pagina_atual-1) * $numero_el_pag;

$publicacoes_imprensa = selectSQL("SELECT * FROM imprensa ORDER BY id DESC LIMIT $numero_el_pag OFFSET $offset");

$classe = "noticia_um";

$imprensa = selectSQL("SELECT * FROM imprensa");


?>