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
        <!--Beneficios-->
            <section id="sessaocliente" >
                <!--Diferenciais-->
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--icons-->
                            <article style="gap: 2rem;" class="d-flex">
                                <div>
                                    <span id="IconDiferenciais" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                        <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 87.112 87.111">
                                                <path id="sale" d="M76.223,43.556,87.112,54.445,73.5,59.889l2.722,16.333L59.889,73.5,54.445,87.112,43.556,76.223,32.667,87.112,27.222,73.5,10.889,76.223l2.722-16.333L0,54.445,10.889,43.556,0,32.667l13.611-5.444L10.889,10.889l16.333,2.722L32.667,0,43.556,10.889,54.445,0l5.444,13.611,16.333-2.722L73.5,27.222l13.611,5.444ZM29.945,21.778a7.04,7.04,0,0,0-5.786,3.189,12.485,12.485,0,0,0-2.381,7.7,12.526,12.526,0,0,0,2.381,7.7,6.843,6.843,0,0,0,11.571,0,12.526,12.526,0,0,0,2.381-7.7,12.485,12.485,0,0,0-2.381-7.7,7.04,7.04,0,0,0-5.786-3.189Zm27.222,0H54.445a1.6,1.6,0,0,0-.639.128q-.3.128-.467.213a1.743,1.743,0,0,0-.467.467q-.3.382-.382.511t-.382.68q-.3.552-.382.724L27.648,62.611a1.407,1.407,0,0,0,.254,1.87,2.793,2.793,0,0,0,2.042.852h2.722a2.86,2.86,0,0,0,.554-.044,1.354,1.354,0,0,0,.467-.213,2.58,2.58,0,0,0,.382-.3,2.9,2.9,0,0,0,.341-.467q.213-.339.3-.511t.341-.6q.256-.423.341-.6L59.466,24.5a1.407,1.407,0,0,0-.254-1.87,2.793,2.793,0,0,0-2.042-.852Zm0,21.778a7.04,7.04,0,0,0-5.786,3.189A12.485,12.485,0,0,0,49,54.445a12.526,12.526,0,0,0,2.381,7.7,6.843,6.843,0,0,0,11.571,0,12.526,12.526,0,0,0,2.381-7.7,12.485,12.485,0,0,0-2.381-7.7A7.04,7.04,0,0,0,57.167,43.556Zm0,16.333q-1.106,0-1.914-1.616a8.573,8.573,0,0,1-.808-3.872,8.3,8.3,0,0,1,.808-3.828Q56.061,49,57.167,49t1.914,1.573a8.3,8.3,0,0,1,.808,3.828,8.573,8.573,0,0,1-.808,3.872Q58.273,59.889,57.167,59.889ZM29.945,38.111q-1.106,0-1.914-1.616a8.573,8.573,0,0,1-.808-3.872,8.3,8.3,0,0,1,.808-3.828q.808-1.573,1.914-1.573T31.859,28.8a8.3,8.3,0,0,1,.808,3.828,8.573,8.573,0,0,1-.808,3.872Q31.05,38.111,29.945,38.111Z" fill="#b56afc"></path>
                                            </svg>
                                        </span>
                                        <span class="text-light">
                                            <p>Aumento das</p>
                                            <p>Vendas</p>
                                        </span>
                                    </span>
                                    <br>
                                    <span id="IconDiferenciais02" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                        <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 73.111 75.627">
                                                <path id="moneybag" d="M53.618,75.552q-3.426.076-17.06.076T19.5,75.552A83.531,83.531,0,0,1,4.912,74.258Q0,73.193,0,70.678a25.344,25.344,0,0,1,1.523-6.13q1.523-4.607,3.351-9.672A102.762,102.762,0,0,0,8.224,43.223,52.119,52.119,0,0,0,9.748,31.684q0-14.623,26.808-14.623T63.363,31.684a52.113,52.113,0,0,0,1.523,11.537,102.763,102.763,0,0,0,3.351,11.653q1.828,5.065,3.351,9.672a25.343,25.343,0,0,1,1.523,6.13q0,2.513-4.912,3.58A83.294,83.294,0,0,1,53.618,75.552ZM36.557,34.121A26.345,26.345,0,0,1,45.2,35.339q3.466,1.218,3.542,3.58v.076a2.437,2.437,0,0,0,4.874,0q0-8.911-14.623-9.672V26.81a2.437,2.437,0,0,0-4.874,0V29.32Q19.5,30.083,19.5,38.992a7.662,7.662,0,0,0,.5,2.895,4.6,4.6,0,0,0,1.6,2.019,10.316,10.316,0,0,0,2.4,1.294,14.109,14.109,0,0,0,3.426.723q2.13.229,4.113.3t5.027.076a25.87,25.87,0,0,1,8.72,1.256q3.464,1.256,3.464,3.622T45.276,54.8a26.016,26.016,0,0,1-8.718,1.256,26.345,26.345,0,0,1-8.645-1.218q-3.466-1.218-3.542-3.58v-.076a2.437,2.437,0,0,0-4.874,0q0,8.911,14.623,9.672v2.513a2.437,2.437,0,0,0,4.874,0V60.853q14.623-.763,14.623-9.672,0-9.748-17.06-9.748-1.067,0-2.666.038t-2.59.076q-.992.038-2.208,0a12.372,12.372,0,0,1-1.981-.191,8.764,8.764,0,0,1-1.447-.418,1.928,1.928,0,0,1-.989-.763,2.193,2.193,0,0,1-.3-1.181q0-2.361,3.5-3.618A25.951,25.951,0,0,1,36.557,34.121Zm0-21.934a70.5,70.5,0,0,0-8.378.458,60.922,60.922,0,0,1-2.7-6.208,15.2,15.2,0,0,1-1.105-4q0-1.218,1.981-2.437A17.409,17.409,0,0,0,31,1.752a23.48,23.48,0,0,0,5.561.685,23.48,23.48,0,0,0,5.561-.685A17.409,17.409,0,0,0,46.763,0q1.981,1.218,1.981,2.437a15.2,15.2,0,0,1-1.105,4,60.924,60.924,0,0,1-2.7,6.208,70.5,70.5,0,0,0-8.378-.458Z" fill="#b56afc"></path>
                                            </svg>
                                        </span>
                                        <span class="text-light">
                                            <p>Maior</p>
                                            <p>Ticket Médio</p>
                                        </span>
                                    </span>
                                </div>
                                <div>
                                    <span id="IconDiferenciais03" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                        <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 69.319 69.317">
                                                <path id="gear" d="M46.213,34.659A11.557,11.557,0,0,0,34.659,23.106,11.557,11.557,0,0,0,23.106,34.659,11.557,11.557,0,0,0,34.659,46.213,11.557,11.557,0,0,0,46.213,34.659Zm23.106-4.92V39.758a1.738,1.738,0,0,1-.362,1.038,1.377,1.377,0,0,1-.9.587L59.7,42.646a28.8,28.8,0,0,1-1.76,4.107q1.579,2.257,4.829,6.227a1.745,1.745,0,0,1,.451,1.128,1.5,1.5,0,0,1-.406,1.038,45.957,45.957,0,0,1-4.467,4.874q-3.248,3.2-4.242,3.2a2.2,2.2,0,0,1-1.173-.406l-6.227-4.874A25.782,25.782,0,0,1,42.6,59.66a73.587,73.587,0,0,1-1.309,8.393,1.519,1.519,0,0,1-1.625,1.263H29.649a1.705,1.705,0,0,1-1.105-.383,1.332,1.332,0,0,1-.518-.969l-1.263-8.3A27.938,27.938,0,0,1,22.7,57.991L16.338,62.82a1.622,1.622,0,0,1-1.128.406,1.555,1.555,0,0,1-1.128-.5,59.528,59.528,0,0,1-7.446-7.583,1.763,1.763,0,0,1-.316-1.038,1.738,1.738,0,0,1,.362-1.038q.678-.947,2.3-3t2.438-3.181a22.32,22.32,0,0,1-1.85-4.467L1.309,41.2a1.42,1.42,0,0,1-.947-.564A1.717,1.717,0,0,1,0,39.579V29.561a1.738,1.738,0,0,1,.362-1.038,1.362,1.362,0,0,1,.857-.587l8.393-1.263a22.273,22.273,0,0,1,1.76-4.151q-1.806-2.572-4.829-6.227a1.7,1.7,0,0,1-.451-1.084A1.9,1.9,0,0,1,6.5,14.172,44.664,44.664,0,0,1,10.945,9.32q3.273-3.227,4.263-3.227a1.918,1.918,0,0,1,1.173.451l6.227,4.829a25.782,25.782,0,0,1,4.107-1.716,73.586,73.586,0,0,1,1.309-8.393A1.519,1.519,0,0,1,29.649,0H39.668a1.705,1.705,0,0,1,1.105.383,1.34,1.34,0,0,1,.52.97l1.263,8.3a27.938,27.938,0,0,1,4.061,1.669L53.025,6.5a1.465,1.465,0,0,1,1.084-.406,1.745,1.745,0,0,1,1.128.451,61.823,61.823,0,0,1,7.446,7.671,1.46,1.46,0,0,1,.316.994,1.738,1.738,0,0,1-.362,1.038q-.678.947-2.3,3T57.9,22.428a27.292,27.292,0,0,1,1.85,4.423l8.259,1.263a1.42,1.42,0,0,1,.947.564,1.72,1.72,0,0,1,.362,1.061Z" fill="#b56afc"></path>
                                            </svg>
                                        </span>
                                        <span class="text-light">
                                            <p>Gestão</p>
                                            <p>Eficiente</p>
                                        </span>
                                    </span>
                                    <br>
                                    <span id="IconDiferenciais04" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                        <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 73.175 73.004">
                                                <path id="check-circle-u" d="M36.5.25A35.44,35.44,0,0,1,62.378,10.96a35.017,35.017,0,0,1,10.8,25.792,35.017,35.017,0,0,1-10.8,25.792A35.44,35.44,0,0,1,36.5,73.254,35.162,35.162,0,0,1,10.71,62.544,35.147,35.147,0,0,1,0,36.752,35.168,35.168,0,0,1,10.71,10.96,35.153,35.153,0,0,1,36.5.25ZM54.839,58.688V51.32h-36.5v7.368ZM30.333,44.122,54.839,19.616,49.7,14.474,30.333,33.84l-6.854-7.027-5.141,5.141Z" transform="translate(0 -0.25)" fill="#b56afc"></path>
                                            </svg>
                                        </span>
                                        <span class="text-light">
                                            <p>Melhores</p>
                                            <p>Resultados</p>
                                        </span>
                                    </span>
                                </div>
                            </article>        
                        <!--icons-->
                        <!--Texto-->
                            <div>
                                <span style="color: var(--roxo-vendex);">
                                    <h4 class="text-light">Nossos Benefícios</h4>
                                    <h3>EQUIPE EXPERIENTE EM</h3>
                                    <h3>ESTRUTURAÇÃO DE VENDAS</h3>
                                    <h3>DE E-COMMERCE</h3>
                                    <br>
                                    <button id="btn05" class="Btn01">Contato</button>
                                </span>
                            </div>
                        <!--Texto-->    
                    </article>
                <!--Diferenciais-->
            </section>
        <!--Beneficios-->
        <br>
        <!--Serviços-->
            <section>
                <article>
                    <!--Texto-->
                        <div>
                            <span style="color: var(--roxo-vendex);" class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h4 class="text-light">Conheça Agora</h4>
                                    <h3>NOSSOS SERVIÇOS ADICIONAIS</h3>
                                <!--Titulo-->
                            </span>
                        </div>
                    <!--Texto-->
                    <!--Cards-->
                        <div id="SessaoCards" class="d-flex justify-content-between container-md p-4">
                            <!--Consultoria-->
                                <?php echo $consuultoria01 ?>
                            <!--Consultoria-->
                            <!--Ads-->
                                <?php echo $markplaces01 ?>
                            <!--Ads-->
                            <!--Automações-->
                                <?php echo $automacoes01 ?>  
                            <!--Automações-->
                            <!--Trafego-->
                                <?php echo $trafego01 ?>
                            <!--Trafego-->    
                        </div>
                    <!--cards-->
                </article>
            </section>
        <!--Serviços-->
        <br>
        <!--Redes Sociais-->
            <?php echo $redes ?> 
        <!--Redes Sociais-->
        <br>
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