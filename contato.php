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
    <title>Tráfego Pago - Vendex</title>
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
        <section  style="background: url(./img/bn-trafegopago.webp); background-size: cover">
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
                                <h1 style="padding-bottom: 2rem; font-weight: 700;">Tráfego Pago</h1>
                            <!--Titulo-->
                            <!--Texto-->
                                <strong ><p style="font-weight: 900; font-size: 1.1rem">Cuidamos da gestão de tráfego pago do seu e-commerce.</p></strong>
                            <!--Texto-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <main>
        <br><br>
        <!--Formulario-->
            <?php echo $formulario ?>  
        <!--Formulario-->
        <br><br>
    </main>
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