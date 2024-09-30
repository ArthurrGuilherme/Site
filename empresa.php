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
    <title>Empresa - Vendex</title>
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
                                <h1 style="padding-bottom: 2rem; font-weight: 700;">Nossa Empresa</h1>
                            <!--Titulo-->
                            <!--Texto-->
                                <strong ><p style="font-weight: 900; font-size: 1.1rem">Nossa especialidade é aumentar as vendas do seu e-commerce</p>
                                <p style="font-weight: 900; font-size: 1.1rem">através das maiores plataformas dos marketplaces do país</p></strong>
                            <!--Texto-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <!--Conteudo principal-->
        <main>
            <!--Serviços-->
                <section class="p-5">
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h4 class="text-light">Os melhores profissionais a seu serviço!</h4>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span class="text-light">
                                        <p >Profissionais certificados para turbinar suas vendas com estratégias personalizadas com foco total em</p>
                                        <p>performance. Aqui trabalhamos em 04 verticais: Estrategista de Marketing & SEO, estrategista de ADS,</p>
                                        <p>estrategista de precificação para maximizar a sua margem de lucro e gestor de e-commerce, para</p>
                                        <p>garantir seu sucesso nos maiores marketplaces do pais.</p>
                                    </span>
                                <!--Texto-->
                            </span>
                        </div>
                    </article>
                </section>
            <!--Serviços-->
            <!--Soluções-->
                <section>
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--Texto-->
                            <span id="SessaoTexto" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4 class="text-light">Sobre nós</h4>
                                    <h3>CONTAMOS COM UM TIME DE</h3> 
                                    <h3>ESPECIALISTAS PARA</h3>
                                    <h3>GERENCIAR O SEU NEGÓCIO!</h3>
                                <!--Titulo-->
                                <br>
                                <!--Legenda-->
                                    <span class="text-light">
                                        <p>Somos uma empresa tecnológica, com profissionais</p>
                                        <p>cuidadosamente capacitados e certificados para oferecer a</p>
                                        <p>melhor assessoria e gestão nos maiores marketplaces do país.</p>
                                        <p>Nossas soluções vão desde a implantação de sistemas,</p>
                                        <p>passando por cadastro e otimização de anúncios, até a</p>
                                        <p>aplicação de estratégias avançadas de marketing para</p>
                                        <p>aumentar o faturamento de seu negócio.</p>
                                    </span>
                                <!--Legenda-->
                                <br>
                                <!--Legenda-->
                                    <span class="text-light">
                                        <p>Dispomos de uma equipe de profissionais experientes em e-</p>
                                        <p>commerce, aplicando métodos e estratégias de posicionamento</p>
                                        <p>de mercado, estratégia de operações e de crescimento para</p>
                                        <p>ganhar mercado, garantindo o seu sucesso.</p>
                                    </span>
                                <!--Legenda-->
                            </span>    
                        <!--Texto-->
                        <!--Img-->
                            <span>
                                <img class="w-50" id="Img" src="./img/empresaSobrenos.webp" alt="Imagem 01">
                            </span>
                        <!--Img-->
                    </article>
                </section>
            <!--Soluções-->
        </main>
    <!--Conteudo principal-->
</body>
</html>