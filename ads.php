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
    <title>Gestão de Ads - Vendex</title>
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
        <section  style="background: url(./img/bn-marketplace.webp); background-size: cover">
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
                                <h1 style="padding-bottom: 2rem; font-weight: 700;">Gestão de ADS</h1>
                            <!--Titulo-->
                            <!--Texto-->
                                <strong ><p style="font-weight: 900; font-size: 1.1rem">Descubra o que nossos especialistas podem</p>
                                <p style="font-weight: 900; font-size: 1.1rem">fazer nas suas campanhas!</p></strong>
                            <!--Texto-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <main>
        <!--Equipe-->
            <section class="p-5">
                <article>
                    <!--Texto-->
                    <div>
                        <span class="d-flex flex-column align-items-center text-center">
                            <!--Titulo-->
                                <h4 class="text-light">Uma equipe com experiência e certificação</h4>
                            <!--Titulo-->
                            <!--Texto-->
                                <span class="text-light">
                                    <p>Nosso quadro colaborativo é formado por profissionais especializados e experientes em e-commerce, com foco</p>
                                    <p>nos principais marketplaces do país e todos com certificação.</p>
                                </span>
                            <!--Texto-->
                        </span>
                    </div>
                </article>
            </section>
        <!--Equipe-->
        <!--Sobre Nós-->
            <section>
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <h4 class="text-light">Gestão de ADS para Marketplace</h4>
                                <h3>Advertising</h3>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Nossa equipe será responsável pela gestão dos seus ads nos</p>
                                    <p>principais canais de vendas do país!</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Quando se fala de campanha paga dentro dos Marketplaces,</p>
                                    <p>seremos responsáveis por todas as ações desde a escolha do</p>
                                    <p>produto, passando pela criação da campanha, otimização e até</p>
                                    <p>sugestão de melhoria dos cadastros dos seus produtos.</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                    <!--Img-->
                        <img style="width: 30% !important; border-radius: 16px" class="w-25" id="Img" src="./img/imagem_2024-02-21_140501773.webp" alt="Imagem 01">
                    <!--Img-->
                </article>
            </section>
        <!--Sobre Nós-->
        <!--Serviços-->
            <section class="p-5">
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Img-->
                        <img style="width: 30% !important; border-radius: 16px" class="w-25" id="Img" src="./img/imagem_2024-02-21_140842550.webp" alt="Imagem 01">
                    <!--Img-->
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <h4 class="text-light">Gestão de ADS para Marketplace</h4>
                                <h3>Redução de ACOS</h3>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Aqui na Vendex sabemos como é importante reduzir os custos</p>
                                    <p>contínuos, por isso trabalharemos para reduzir todos os custos</p>
                                    <p>inúteis rapidamente. Desde modo, faremos com que nosso</p>
                                    <p>serviço se pague facilmente.</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                </article>
            </section>
        <!--Serviços-->
        <!--Sobre Nós-->
            <section>
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <h4 class="text-light">Gestão de ADS para Marketplace</h4>
                                <h3>Aumento de Faturamento</h3>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Além de organizar a casa, os principais motivos da gestão de ads</p>
                                    <p>são:</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>* <strong style="color: var(--rosa-vendex);">Alavancar</strong> novos produtos e anúncios</p>
                                    <p>* <strong style="color: var(--rosa-vendex);">Ranquear</strong> produtos e anúncios já existentes</p>
                                    <p>* E com isso <strong style="color: var(--rosa-vendex);">faturar</strong> mais!</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                    <!--Img-->
                        <img style="width: 30% !important; border-radius: 16px" class="w-25" id="Img" src="./img/imagem_2024-02-21_141113804.webp" alt="Imagem 01">
                    <!--Img-->
                </article>
            </section>
        <!--Sobre Nós-->
        <!--Parceiros-->
            <section class="p-3">
                <?php echo $Parceiros ?>
            </section> 
        <!--Parceiros-->
        <!--Contato-->
            <?php echo $contato ?>
        <!--Contato-->

    </main>
    <!--Footer-->
        <?php echo $footer ?>  
    <!--Footer-->
</body>
    <?php echo $headjs ?>
</html>