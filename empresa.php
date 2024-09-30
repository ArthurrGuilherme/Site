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
            <!--Sobre Nós-->
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
                                    <span style="font-size: 0.8rem;" class="text-light">
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
                                    <span style="font-size: 0.8rem;" class="text-light">
                                        <p>Dispomos de uma equipe de profissionais experientes em e-</p>
                                        <p>commerce, aplicando métodos e estratégias de posicionamento</p>
                                        <p>de mercado, estratégia de operações e de crescimento para</p>
                                        <p>ganhar mercado, garantindo o seu sucesso.</p>
                                    </span>
                                <!--Legenda-->
                            </span>    
                        <!--Texto-->
                        <!--Img-->
                            <img class="w-50" id="Img" src="./img/empresaSobrenos.webp" alt="Imagem 01">
                        <!--Img-->
                    </article>
                </section>
            <!--Sobre Nós-->
                <section class="p-3">
                    <article class="container-md d-flex justify-content-evenly align-items-center p-5">
                        <!--Img-->
                            <img class="w-100" id="Img" src="./img/empresa-nossa-estrutura.webp" alt="Imagem 01">
                        <!--Img-->
                        <!--Texto-->
                            <span id="SessaoTexto" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4 class="text-light">Nossa Estrutura</h4>
                                    <h3>Contamos com uma ampla</h3> 
                                    <h3>estrutura, tecnologia e</h3>
                                    <h3>profissionais certificados</h3>
                                    <h3>para atender o seu negócio</h3>
                                <!--Titulo-->
                                <br>
                                <!--Legenda-->
                                    <span style="font-size: 0.8rem;" class="text-light">
                                        <p>Somos um canal com soluções para e-commerce e</p>
                                        <p>marketplaces, composto por profissionais que vão gerenciar o</p>
                                        <p>seu negócio, monitorando cada passo das estratégias que serão</p>
                                        <p>aplicadas para alcançar os resultados desejados e melhorar o</p>
                                        <p>seu posicionamento em seu nicho de mercado.</p>
                                    </span>
                                <!--Legenda-->
                                <br>
                                <!--Legenda-->
                                    <span style="font-size: 0.8rem;" class="text-light">
                                        <p>Cada profissional efetua um monitoramento diário, avaliando a</p>
                                        <p>evolução de cada estratégia, garantindo a otimização dos</p>
                                        <p>processos, a divulgação em diversos canais, gerenciando</p>
                                        <p>vendas/estoque e com um atendimento ágil e eficiente, para um</p>
                                        <p>perfeito escalonamento de seu negócio.</p>
                                    </span>
                                <!--Legenda-->
                            </span>    
                        <!--Texto-->
                    </article>
                </section>
            <!--Sobre Nós-->
            <!--Contato-->
                <?php echo "$contato" ?>
            <!--Contato-->
            <!--Sobre Nós-->
                <section>
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--Texto-->
                            <span id="SessaoTexto" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4 class="text-light">Nossa História</h4>
                                    <h3>UM COMPROMISSO COM A</h3> 
                                    <h3>EFICIÊNCIA!</h3>
                                <!--Titulo-->
                                <br>
                                <!--Legenda-->
                                    <span style="font-size: 0.9rem;" class="text-light">
                                        <p>Nossa empresa valoriza o comprometimento com os objetivos a</p>
                                        <p>que se propõe realizar e os desafios são o que nos impulsiona</p>
                                        <p>para um contínuo aperfeiçoamento, para oferecer as melhores</p>
                                        <p>soluções com os melhores rendimentos, uma característica de</p>
                                        <p>nossa trajetória.</p>
                                    </span>
                                <!--Legenda-->
                            </span>    
                        <!--Texto-->
                        <!--Img-->
                            <img class="w-50" id="Img" src="./img/empresa-nossa-historia.webp" alt="Imagem 01">
                        <!--Img-->
                    </article>
                </section>
            <!--Sobre Nós-->
        </main>
    <!--Conteudo principal-->
</body>
    <?php echo $headjs ?>
</html>