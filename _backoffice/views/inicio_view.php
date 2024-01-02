

<!--CONTEÚDO--> 

<main class = "container-fluid d-flex justify-content-center ">

    <div class="row">
        <div class="col-10 principal">

            <p style="font-weight: bold">
                Bem-vindo(a) <span><?= $_SESSION["login"]["nome"]?></span>!
                <br><br>
                Último acesso: <span><?= $_SESSION["login"]["data_ult_aces"] ?></span>
            </p>
          
        </div>
    </div>


</main>


<!--FIM DO CONTEÚDO--> 