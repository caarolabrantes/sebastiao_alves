<?php

$id = $_SESSION["login"]["id"];

?>


<main class="container-fluid">

    <div class="row principal">
        <div class="col-12">

            <h2>Alterar Senha</h2>
            <br>

            <form action="" method="POST">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="password" name="senha_atual" id="" placeholder="Senha atual" required autocomplete="off"> <br><br>
                <input type="password" name="senha_nova" id="" placeholder="Senha NOVA" required autocomplete="off"> <br><br>
                <input type="password" name="senha_nova_conf" id="" placeholder="Confirmar senha nova" required autocomplete="off"> <br><br>
                <input type="submit" value="ALTERAR SENHA!">
            </form>

            <br><br>
            
            <p><?= $sucesso; ?></p>

        </div>
    </div>

    
</main>