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
            <!--MVV-->
                <section class="p-5">
                    <article style="gap: 1rem;" class="container-md d-flex justify-content-center align-items-center">
                        <div style="width: 22rem !important;" id="Cards06" class="card bg-black text-center d-flex justify-content-center w-50">
                            <svg class="w-100 p-3" id="Grupo_87" data-name="Grupo 87" xmlns="http://www.w3.org/2000/svg" width="174.554" height="175.126" viewBox="0 0 174.554 175.126">
                                <path id="Caminho_202" data-name="Caminho 202" d="M-3420.273,134.433a42.671,42.671,0,0,0-42.671,42.671,42.671,42.671,0,0,0,42.671,42.671A42.671,42.671,0,0,0-3377.6,177.1,42.671,42.671,0,0,0-3420.273,134.433Zm0,56.363a13.691,13.691,0,0,1-13.69-13.691,13.69,13.69,0,0,1,13.69-13.69,13.69,13.69,0,0,1,13.691,13.69A13.691,13.691,0,0,1-3420.273,190.8Z" transform="translate(3493.859 -75.659)" fill="#fff"></path>
                                <path id="Caminho_203" data-name="Caminho 203" d="M-3448.891,204.765c-3.592-.556-7.25-.842-10.765-1.71-30.016-7.412-49.38-26.053-56.465-56.124a72.758,72.758,0,0,1,46.977-85.352c26.482-9.221,50.941-4.509,72.791,13.2.609.494,1.2,1.013,1.995,1.69,1.164-1.232,2.351-2.378,3.39-3.646a2.954,2.954,0,0,0,.425-1.74c.031-5.587.056-11.174,0-16.76a5.467,5.467,0,0,1,1.719-4.25c6.39-6.348,12.713-12.762,19.058-19.154a3.326,3.326,0,0,1,3.858-1.022,3.417,3.417,0,0,1,2.176,3.528c0,.4,0,.8,0,1.2q.016,6.926.031,13.853c0,.559,0,1.119,0,1.873,2.463,0,4.782.01,7.1,0,3.021-.016,6.042-.037,9.062-.083,1.675-.026,3.056.457,3.747,2.108s0,2.955-1.169,4.134q-9.533,9.575-19.025,19.189a4.9,4.9,0,0,1-3.8,1.551c-5.358-.053-10.718.022-16.075-.05a4.123,4.123,0,0,0-3.277,1.34q-26.8,26.89-53.674,53.711c-.4.4-.788.828-1.22,1.2a3.345,3.345,0,0,1-4.635-.053,3.272,3.272,0,0,1-.094-4.625c2.106-2.243,4.318-4.388,6.5-6.559.883-.878,1.806-1.715,2.744-2.6-7.485-5.061-18.332-.15-19.938,8.782-1.35,7.5,3.572,14.692,10.833,15.819A13.375,13.375,0,0,0-3431,132.7c.089-.619.126-1.246.191-1.869a3.3,3.3,0,0,1,3.359-3.177,3.217,3.217,0,0,1,3.257,3.436,19.4,19.4,0,0,1-9.765,17.159,19.7,19.7,0,0,1-22.333-1.144c-6.822-5.288-9.463-12.4-7.493-20.757,1.992-8.453,7.687-13.555,16.2-15.169a19.191,19.191,0,0,1,14.636,3.162l14.323-14.347A38.471,38.471,0,0,0-3434.5,91.92a40.4,40.4,0,0,0-49.869,33.214c-3.621,22.714,13.558,44.435,36.513,46.168,21.313,1.609,39.779-12.659,43.321-33.622A39.239,39.239,0,0,0-3407.754,114c-.169-.361-.339-.721-.505-1.084-1.017-2.216-.544-4.044,1.282-4.968s3.635-.15,4.724,2a46.021,46.021,0,0,1,4.613,15.116,46.99,46.99,0,0,1-25.728,48.016c-28.034,14.125-62.372-3.435-67.288-34.41a46.912,46.912,0,0,1,39.468-54.188c13.469-1.98,25.643,1.433,36.345,9.915.357.283.71.57,1.069.851.041.032.108.029-.012,0l14.288-14.319a65.985,65.985,0,0,0-30.83-15.644,67.2,67.2,0,0,0-78.366,46.487c-10.689,35.12,9.511,72.863,44.671,83.47a66.933,66.933,0,0,0,84.156-45.326c5.754-19.612,2.833-38.207-8.1-55.508-.3-.481-.632-.948-.932-1.432-1.225-1.98-.964-3.842.689-4.966,1.7-1.152,3.7-.718,4.942,1.346a108.266,108.266,0,0,1,6.116,10.845,73.736,73.736,0,0,1-41.414,99.957,69.88,69.88,0,0,1-19.444,4.305,8.714,8.714,0,0,0-1.3.3Zm65.042-139.508.425.224q3.29-3.342,6.578-6.687c2.112-2.152,5.056-3.973,6.1-6.559,1.066-2.651.273-6.051.282-9.124,0-.513-.058-1.026-.081-1.407-4.289,4.169-8.5,8.251-12.69,12.359a1.88,1.88,0,0,0-.583,1.155C-3383.868,58.565-3383.849,61.911-3383.849,65.257Zm29.07-7.891a7.1,7.1,0,0,0-1.143-.324c-2.961,0-5.923-.034-8.882.065a2.916,2.916,0,0,0-1.706.884c-3.815,3.753-7.589,7.55-11.368,11.34-.287.288-.515.634-.969,1.2,3.5,0,6.673.019,9.848-.024a1.944,1.944,0,0,0,1.188-.528C-3363.542,65.878-3359.3,61.752-3354.779,57.366Z" transform="translate(3518.066 -29.639)" fill="#cb6ce6"></path>
                                <path id="Caminho_204" data-name="Caminho 204" d="M-3278.76,74.7c0-3.346-.02-6.692.026-10.038a1.882,1.882,0,0,1,.583-1.155c4.188-4.108,8.4-8.19,12.69-12.359.023.381.082.894.081,1.407-.009,3.073.784,6.473-.282,9.124-1.04,2.586-3.984,4.407-6.1,6.559q-3.284,3.347-6.577,6.687Z" transform="translate(3412.978 -39.087)" fill="#fff"></path>
                                <path id="Caminho_205" data-name="Caminho 205" d="M-3245.77,78.818c-4.522,4.386-8.764,8.513-13.031,12.612a1.943,1.943,0,0,1-1.188.528c-3.175.043-6.351.024-9.848.024.453-.566.682-.912.969-1.2,3.779-3.791,7.553-7.587,11.368-11.34a2.915,2.915,0,0,1,1.706-.884c2.958-.1,5.921-.065,8.881-.065A7.09,7.09,0,0,1-3245.77,78.818Z" transform="translate(3409.057 -51.091)" fill="#fff"></path>
                            </svg>
                            <div class="card-body">
                                <span class="CardTexto">
                                    <h5 class="card-title">Missão</h5>
                                </span>
                                <span class="text-light">
                                    <p>Nossa missão é proporcionar um</p>
                                    <p>crescimento escalável aos nossos</p>
                                    <p>clientes, garantindo um crescimento</p>
                                    <p>financeiro, com estabilidade no</p>
                                    <p>mercado em que atuam, oferecendo</p>
                                    <p>uma assessoria especializada para</p>
                                    <p>gerenciar todas as estratégias que</p>
                                    <p>envolvem os setores do e-commerce</p>
                                    <p>e do Marketplaces, com a segurança</p>
                                    <p>de quem possui uma metodologia</p>
                                    <p>eficiente para se adaptar a qualquer</p>
                                    <p>cenário econômico.</p>
                                </span>
                            </div>
                        </div>
                        <div style="width: 22rem !important;" id="Cards06" class="card bg-black text-center d-flex justify-content-center w-50">
                            <svg class="w-100 p-3" id="Grupo_87" data-name="Grupo 87" xmlns="http://www.w3.org/2000/svg" width="174.554" height="175.126" viewBox="0 0 174.554 175.126">
                                <path id="Caminho_202" data-name="Caminho 202" d="M-3420.273,134.433a42.671,42.671,0,0,0-42.671,42.671,42.671,42.671,0,0,0,42.671,42.671A42.671,42.671,0,0,0-3377.6,177.1,42.671,42.671,0,0,0-3420.273,134.433Zm0,56.363a13.691,13.691,0,0,1-13.69-13.691,13.69,13.69,0,0,1,13.69-13.69,13.69,13.69,0,0,1,13.691,13.69A13.691,13.691,0,0,1-3420.273,190.8Z" transform="translate(3493.859 -75.659)" fill="#fff"></path>
                                <path id="Caminho_203" data-name="Caminho 203" d="M-3448.891,204.765c-3.592-.556-7.25-.842-10.765-1.71-30.016-7.412-49.38-26.053-56.465-56.124a72.758,72.758,0,0,1,46.977-85.352c26.482-9.221,50.941-4.509,72.791,13.2.609.494,1.2,1.013,1.995,1.69,1.164-1.232,2.351-2.378,3.39-3.646a2.954,2.954,0,0,0,.425-1.74c.031-5.587.056-11.174,0-16.76a5.467,5.467,0,0,1,1.719-4.25c6.39-6.348,12.713-12.762,19.058-19.154a3.326,3.326,0,0,1,3.858-1.022,3.417,3.417,0,0,1,2.176,3.528c0,.4,0,.8,0,1.2q.016,6.926.031,13.853c0,.559,0,1.119,0,1.873,2.463,0,4.782.01,7.1,0,3.021-.016,6.042-.037,9.062-.083,1.675-.026,3.056.457,3.747,2.108s0,2.955-1.169,4.134q-9.533,9.575-19.025,19.189a4.9,4.9,0,0,1-3.8,1.551c-5.358-.053-10.718.022-16.075-.05a4.123,4.123,0,0,0-3.277,1.34q-26.8,26.89-53.674,53.711c-.4.4-.788.828-1.22,1.2a3.345,3.345,0,0,1-4.635-.053,3.272,3.272,0,0,1-.094-4.625c2.106-2.243,4.318-4.388,6.5-6.559.883-.878,1.806-1.715,2.744-2.6-7.485-5.061-18.332-.15-19.938,8.782-1.35,7.5,3.572,14.692,10.833,15.819A13.375,13.375,0,0,0-3431,132.7c.089-.619.126-1.246.191-1.869a3.3,3.3,0,0,1,3.359-3.177,3.217,3.217,0,0,1,3.257,3.436,19.4,19.4,0,0,1-9.765,17.159,19.7,19.7,0,0,1-22.333-1.144c-6.822-5.288-9.463-12.4-7.493-20.757,1.992-8.453,7.687-13.555,16.2-15.169a19.191,19.191,0,0,1,14.636,3.162l14.323-14.347A38.471,38.471,0,0,0-3434.5,91.92a40.4,40.4,0,0,0-49.869,33.214c-3.621,22.714,13.558,44.435,36.513,46.168,21.313,1.609,39.779-12.659,43.321-33.622A39.239,39.239,0,0,0-3407.754,114c-.169-.361-.339-.721-.505-1.084-1.017-2.216-.544-4.044,1.282-4.968s3.635-.15,4.724,2a46.021,46.021,0,0,1,4.613,15.116,46.99,46.99,0,0,1-25.728,48.016c-28.034,14.125-62.372-3.435-67.288-34.41a46.912,46.912,0,0,1,39.468-54.188c13.469-1.98,25.643,1.433,36.345,9.915.357.283.71.57,1.069.851.041.032.108.029-.012,0l14.288-14.319a65.985,65.985,0,0,0-30.83-15.644,67.2,67.2,0,0,0-78.366,46.487c-10.689,35.12,9.511,72.863,44.671,83.47a66.933,66.933,0,0,0,84.156-45.326c5.754-19.612,2.833-38.207-8.1-55.508-.3-.481-.632-.948-.932-1.432-1.225-1.98-.964-3.842.689-4.966,1.7-1.152,3.7-.718,4.942,1.346a108.266,108.266,0,0,1,6.116,10.845,73.736,73.736,0,0,1-41.414,99.957,69.88,69.88,0,0,1-19.444,4.305,8.714,8.714,0,0,0-1.3.3Zm65.042-139.508.425.224q3.29-3.342,6.578-6.687c2.112-2.152,5.056-3.973,6.1-6.559,1.066-2.651.273-6.051.282-9.124,0-.513-.058-1.026-.081-1.407-4.289,4.169-8.5,8.251-12.69,12.359a1.88,1.88,0,0,0-.583,1.155C-3383.868,58.565-3383.849,61.911-3383.849,65.257Zm29.07-7.891a7.1,7.1,0,0,0-1.143-.324c-2.961,0-5.923-.034-8.882.065a2.916,2.916,0,0,0-1.706.884c-3.815,3.753-7.589,7.55-11.368,11.34-.287.288-.515.634-.969,1.2,3.5,0,6.673.019,9.848-.024a1.944,1.944,0,0,0,1.188-.528C-3363.542,65.878-3359.3,61.752-3354.779,57.366Z" transform="translate(3518.066 -29.639)" fill="#cb6ce6"></path>
                                <path id="Caminho_204" data-name="Caminho 204" d="M-3278.76,74.7c0-3.346-.02-6.692.026-10.038a1.882,1.882,0,0,1,.583-1.155c4.188-4.108,8.4-8.19,12.69-12.359.023.381.082.894.081,1.407-.009,3.073.784,6.473-.282,9.124-1.04,2.586-3.984,4.407-6.1,6.559q-3.284,3.347-6.577,6.687Z" transform="translate(3412.978 -39.087)" fill="#fff"></path>
                                <path id="Caminho_205" data-name="Caminho 205" d="M-3245.77,78.818c-4.522,4.386-8.764,8.513-13.031,12.612a1.943,1.943,0,0,1-1.188.528c-3.175.043-6.351.024-9.848.024.453-.566.682-.912.969-1.2,3.779-3.791,7.553-7.587,11.368-11.34a2.915,2.915,0,0,1,1.706-.884c2.958-.1,5.921-.065,8.881-.065A7.09,7.09,0,0,1-3245.77,78.818Z" transform="translate(3409.057 -51.091)" fill="#fff"></path>
                            </svg>
                            <div class="card-body">
                                <span class="CardTexto">
                                    <h5 class="card-title">Missão</h5>
                                </span>
                                <span class="text-light">
                                    <p>Nossa missão é proporcionar um</p>
                                    <p>crescimento escalável aos nossos</p>
                                    <p>clientes, garantindo um crescimento</p>
                                    <p>financeiro, com estabilidade no</p>
                                    <p>mercado em que atuam, oferecendo</p>
                                    <p>uma assessoria especializada para</p>
                                    <p>gerenciar todas as estratégias que</p>
                                    <p>envolvem os setores do e-commerce</p>
                                    <p>e do Marketplaces, com a segurança</p>
                                    <p>de quem possui uma metodologia</p>
                                    <p>eficiente para se adaptar a qualquer</p>
                                    <p>cenário econômico.</p>
                                </span>
                            </div>
                        </div>
                        <div style="width: 22rem !important;" id="Cards06" class="card bg-black text-center d-flex justify-content-center w-50">
                            <svg class="w-100 p-3" id="Grupo_87" data-name="Grupo 87" xmlns="http://www.w3.org/2000/svg" width="174.554" height="175.126" viewBox="0 0 174.554 175.126">
                                <path id="Caminho_202" data-name="Caminho 202" d="M-3420.273,134.433a42.671,42.671,0,0,0-42.671,42.671,42.671,42.671,0,0,0,42.671,42.671A42.671,42.671,0,0,0-3377.6,177.1,42.671,42.671,0,0,0-3420.273,134.433Zm0,56.363a13.691,13.691,0,0,1-13.69-13.691,13.69,13.69,0,0,1,13.69-13.69,13.69,13.69,0,0,1,13.691,13.69A13.691,13.691,0,0,1-3420.273,190.8Z" transform="translate(3493.859 -75.659)" fill="#fff"></path>
                                <path id="Caminho_203" data-name="Caminho 203" d="M-3448.891,204.765c-3.592-.556-7.25-.842-10.765-1.71-30.016-7.412-49.38-26.053-56.465-56.124a72.758,72.758,0,0,1,46.977-85.352c26.482-9.221,50.941-4.509,72.791,13.2.609.494,1.2,1.013,1.995,1.69,1.164-1.232,2.351-2.378,3.39-3.646a2.954,2.954,0,0,0,.425-1.74c.031-5.587.056-11.174,0-16.76a5.467,5.467,0,0,1,1.719-4.25c6.39-6.348,12.713-12.762,19.058-19.154a3.326,3.326,0,0,1,3.858-1.022,3.417,3.417,0,0,1,2.176,3.528c0,.4,0,.8,0,1.2q.016,6.926.031,13.853c0,.559,0,1.119,0,1.873,2.463,0,4.782.01,7.1,0,3.021-.016,6.042-.037,9.062-.083,1.675-.026,3.056.457,3.747,2.108s0,2.955-1.169,4.134q-9.533,9.575-19.025,19.189a4.9,4.9,0,0,1-3.8,1.551c-5.358-.053-10.718.022-16.075-.05a4.123,4.123,0,0,0-3.277,1.34q-26.8,26.89-53.674,53.711c-.4.4-.788.828-1.22,1.2a3.345,3.345,0,0,1-4.635-.053,3.272,3.272,0,0,1-.094-4.625c2.106-2.243,4.318-4.388,6.5-6.559.883-.878,1.806-1.715,2.744-2.6-7.485-5.061-18.332-.15-19.938,8.782-1.35,7.5,3.572,14.692,10.833,15.819A13.375,13.375,0,0,0-3431,132.7c.089-.619.126-1.246.191-1.869a3.3,3.3,0,0,1,3.359-3.177,3.217,3.217,0,0,1,3.257,3.436,19.4,19.4,0,0,1-9.765,17.159,19.7,19.7,0,0,1-22.333-1.144c-6.822-5.288-9.463-12.4-7.493-20.757,1.992-8.453,7.687-13.555,16.2-15.169a19.191,19.191,0,0,1,14.636,3.162l14.323-14.347A38.471,38.471,0,0,0-3434.5,91.92a40.4,40.4,0,0,0-49.869,33.214c-3.621,22.714,13.558,44.435,36.513,46.168,21.313,1.609,39.779-12.659,43.321-33.622A39.239,39.239,0,0,0-3407.754,114c-.169-.361-.339-.721-.505-1.084-1.017-2.216-.544-4.044,1.282-4.968s3.635-.15,4.724,2a46.021,46.021,0,0,1,4.613,15.116,46.99,46.99,0,0,1-25.728,48.016c-28.034,14.125-62.372-3.435-67.288-34.41a46.912,46.912,0,0,1,39.468-54.188c13.469-1.98,25.643,1.433,36.345,9.915.357.283.71.57,1.069.851.041.032.108.029-.012,0l14.288-14.319a65.985,65.985,0,0,0-30.83-15.644,67.2,67.2,0,0,0-78.366,46.487c-10.689,35.12,9.511,72.863,44.671,83.47a66.933,66.933,0,0,0,84.156-45.326c5.754-19.612,2.833-38.207-8.1-55.508-.3-.481-.632-.948-.932-1.432-1.225-1.98-.964-3.842.689-4.966,1.7-1.152,3.7-.718,4.942,1.346a108.266,108.266,0,0,1,6.116,10.845,73.736,73.736,0,0,1-41.414,99.957,69.88,69.88,0,0,1-19.444,4.305,8.714,8.714,0,0,0-1.3.3Zm65.042-139.508.425.224q3.29-3.342,6.578-6.687c2.112-2.152,5.056-3.973,6.1-6.559,1.066-2.651.273-6.051.282-9.124,0-.513-.058-1.026-.081-1.407-4.289,4.169-8.5,8.251-12.69,12.359a1.88,1.88,0,0,0-.583,1.155C-3383.868,58.565-3383.849,61.911-3383.849,65.257Zm29.07-7.891a7.1,7.1,0,0,0-1.143-.324c-2.961,0-5.923-.034-8.882.065a2.916,2.916,0,0,0-1.706.884c-3.815,3.753-7.589,7.55-11.368,11.34-.287.288-.515.634-.969,1.2,3.5,0,6.673.019,9.848-.024a1.944,1.944,0,0,0,1.188-.528C-3363.542,65.878-3359.3,61.752-3354.779,57.366Z" transform="translate(3518.066 -29.639)" fill="#cb6ce6"></path>
                                <path id="Caminho_204" data-name="Caminho 204" d="M-3278.76,74.7c0-3.346-.02-6.692.026-10.038a1.882,1.882,0,0,1,.583-1.155c4.188-4.108,8.4-8.19,12.69-12.359.023.381.082.894.081,1.407-.009,3.073.784,6.473-.282,9.124-1.04,2.586-3.984,4.407-6.1,6.559q-3.284,3.347-6.577,6.687Z" transform="translate(3412.978 -39.087)" fill="#fff"></path>
                                <path id="Caminho_205" data-name="Caminho 205" d="M-3245.77,78.818c-4.522,4.386-8.764,8.513-13.031,12.612a1.943,1.943,0,0,1-1.188.528c-3.175.043-6.351.024-9.848.024.453-.566.682-.912.969-1.2,3.779-3.791,7.553-7.587,11.368-11.34a2.915,2.915,0,0,1,1.706-.884c2.958-.1,5.921-.065,8.881-.065A7.09,7.09,0,0,1-3245.77,78.818Z" transform="translate(3409.057 -51.091)" fill="#fff"></path>
                            </svg>
                            <div class="card-body">
                                <span class="CardTexto">
                                    <h5 class="card-title">Missão</h5>
                                </span>
                                <span class="text-light">
                                    <p>Nossa missão é proporcionar um</p>
                                    <p>crescimento escalável aos nossos</p>
                                    <p>clientes, garantindo um crescimento</p>
                                    <p>financeiro, com estabilidade no</p>
                                    <p>mercado em que atuam, oferecendo</p>
                                    <p>uma assessoria especializada para</p>
                                    <p>gerenciar todas as estratégias que</p>
                                    <p>envolvem os setores do e-commerce</p>
                                    <p>e do Marketplaces, com a segurança</p>
                                    <p>de quem possui uma metodologia</p>
                                    <p>eficiente para se adaptar a qualquer</p>
                                    <p>cenário econômico.</p>
                                </span>
                            </div>
                        </div>
                    </article>
                </section>
            <!--MVV-->
        </main>
    <!--Conteudo principal-->
</body>
    <?php echo $headjs ?>
</html>