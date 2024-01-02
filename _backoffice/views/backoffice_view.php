<!--CONTEÚDO--> 
<?php

?>


<main class="container-fluid">

    <div class="row d-flex justify-content-center ">
        <div class="col-10 fundo d-flex justify-content-center text-center p-4 principal">
            <form action="" method = "POST">
                <label for="login" style="font-size: 20px">LOGIN</label>
                <br><br>
                <?php if($form_log && !$sucess): ?>
                    <p style="color: red">LOGIN INVÁLIDO!</p>
                <?php endif; ?>
                <input type="hidden" name="id" value= "<?= $colaborador["id"]?>">
                <input type="text" name="login" required placeholder="Login" autocomplete="off">
                <br><br>
                <input type="password" name="senha" required placeholder="Senha" autocomplete="off">
                <br><br>
                <input type="submit" value="ENTRAR" class="botao">
            </form>
        </div>
    

    <?php if($form_log && $sucess): ?>
        <form action="localhost/sebastiao_alves/_backoffice/helpers/inicio_helper.php" method="POST">
            <input type="hidden" name="login" value= "<?= $colaborador["login"]?>">
        </form>
    <?php endif; ?>

    </div>


</main>

<!--FIM DO CONTEÚDO--> 

