<?php 
    include './shared/shared.php';
    include './shared/head.php';
    include './shared/Lps.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pagina sobre a empresa">
    <title>Trabalhe Conosco - Vendex</title>
    <!--Css/js principais-->
        <?php echo $headcss ?>
    <!--Css/js principais-->
    <!--Api-->
        <!--boxicons-->
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <!--boxicons-->
    <!--Api-->   
</head>
<body>
    <!--Container principal das paginas estaticas-->
        <section  style="background: url(./img/bn-empresa.webp); background-size: cover">
            <!--Header Primario-->
                <?php echo $headerprincial ?>
            <!--Header Primario-->
            <!--Header Secundario-->
                <?php echo $headersecundario ?>
            <!--Header Primario-->
            <!--Apresentação-->
                <section style="padding: 5rem 0px 10rem 0px;" class="container-md d-flex justify-content-between" id="ContainerApresentacao">
                    <!--Estrutura texto-->
                        <article class="d-flex flex-column">
                            <!--Titulo-->
                                <h1 style="padding-bottom: 2rem; font-weight: 700;">Venha trabalhar com a gente!</h1>
                            <!--Titulo-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <!--Conteudo principal-->
        <main>
            <!--Equipe-->
                <section class="p-5">
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center">
                                <!--Titulo-->
                                    <h4 class="text-light text-center">Junte-se à nossa equipe</h4>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span class="text-light">
                                        <p>Incentivamos uma mentalidade centrada no cliente, acelerada e focada na execução através de dados. Tudo isso</p>
                                        <p>misturado com muita tecnologia e um ambiente muito agradável de se trabalhar...</p>
                                    </span>
                                <!--Texto-->
                                <br>
                                <!--Texto-->
                                    <span class="text-light">
                                        <p>Incentivamos uma mentalidade centrada no cliente, acelerada e focada na execução através de dados. Tudo isso</p>
                                        <p>misturado com muita tecnologia e um ambiente muito agradável de se trabalhar...</p>
                                    </span>
                                <!--Texto-->
                            </span>
                        </div>
                    </article>
                </section>
            <!--Equipe-->
        </main>
    <!--Conteudo principal-->
    <!--Footer-->
        <?php echo $footer ?>  
    <!--Footer-->
</body>
    <?php echo $headjs ?>
    <script>
    document.querySelector("#Btnconato03").addEventListener("click", function (event) {
    event.preventDefault();

    scrollto("#formulario")

    console.log("go to up")
    })                 
    </script>
</html>