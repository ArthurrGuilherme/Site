<?php 
    include './shared/shared.php';
    include './shared/head.php';
    include './shared/Lps.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Descrição da pagina-->
        <meta name="description" content="Pagina Principal / Redirecionamento">
    <!--Descrição da pagina-->
    <!--Titulo da pagina-->
        <title>Home - Vendex</title>
    <!--Titulo da pagina-->
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
        <section  style="background: url(./img/banner-principal.webp); background-size: cover">
            <!--Header Primario-->
                <?php echo $headerprincial ?>
            <!--Header Primario-->
            <!--Header Secundario-->
                <?php echo $headersecundario ?>
            <!--Header Primario-->
            <!--Apresentação-->
                <section style="padding: 5rem 0px 5rem 0px;" class="container-md d-flex justify-content-between" id="ContainerApresentacao">
                    <!--Estrutura texto-->
                        <article class="d-flex flex-column">
                            <!--Titulo-->
                                <h1>Consultoria e</h1>
                                <h1>Gestão para</h1>
                                <h1><strong>Marketplaces</strong></h1>
                            <!--Titulo-->
                            <br>
                            <!--Texto-->
                                <strong><p>Aumente seu faturamento com</p>
                                <p>apoio de nossos profissionais.</p></strong>
                            <!--Texto-->
                            <br>
                            <!--Btn Principal-->
                                <span>
                                    <button type="button" style="font-weight: 700;" id="BtnContato" class="btn btn-dark">Contato</button>
                                </span>
                            <!--Btn Principal-->
                            <!--Arrow-->
                                <span id="Arrow" class="d-flex justify-content-center w-75 p-3">
                                    <i style="font-size: 3.5rem; font-weight: 900;" class='bx bx-chevrons-down'></i>
                                </span>
                            <!--Arrow-->
                        </article>
                    <!--Estrutura texto-->
                    <!--Estrutura Img-->
                        <span class="d-flex justify-content-end align-items-end">
                            <!--Consutoria do meli-->
                                <img class="w-25 p-3" src="./img/logoMeli.webp" alt="Consultoria Verificada">
                            <!--Consutoria do meli-->
                        </span>
                    <!--Estrutura Img-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->    
    <!--Conteudo Principal-->
        <main>
            <!--Soluções-->
                <section class="p-5">
                    <article class="container-md d-flex justify-content-evenly align-items-center p-5">
                        <!--Texto-->
                            <span id="SessaoTexto" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4 class="text-light">Nossa Solução</h4>
                                    <h2>GERENCIAMENTO DE</h2> 
                                    <h2>LOJAS E PRODUTOS</h2>
                                    <h2>EM MARKETPLACES</h2>
                                <!--Titulo-->
                                <br>
                                <!--Legenda-->
                                    <span class="text-light">
                                        <p>Somos uma empresa especializada em consultoria e</p>
                                        <p>gerenciamento de lojas virtuais e produtos de e-commerce,</p>
                                        <p>trazendo resultados nos maiores Marketplaces do mercado, com</p>
                                        <p>uma equipe qualificada auxiliando no aumento do faturamento,</p>
                                        <p>com profissionalismo e competência.</p>
                                    </span>
                                <!--Legenda-->
                                <br>
                                <button class="Btn01">Contato</button>
                            </span>    
                        <!--Texto-->
                        <!--Img-->
                            <img class="w-50" id="Img" src="./img/home-nossasolucao.webp" alt="Imagem 01">
                        <!--Img-->
                    </article>
                </section>
            <!--Soluções-->
            <!--Serviços-->
                <section class="p-3">
                    <article>
                        <!--Texto-->
                        <div>
                            <span style="color: var(--roxo-vendex);" class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h4 class="text-light">Nossos Serviços</h4>
                                    <h3>COM FOCO EM RESULTADOS E TECNOLOGIAS DE PONTA,</h3>
                                    <h3>GARANTIMOS O SEU SUCESSO!</h3>
                                <!--Titulo-->
                                <br>
                                <!--Texto-->
                                    <span class="text-light">
                                        <p >Com uma equipe de consultores especializados, disponibilizamos uma gama variada de serviços</p>
                                        <p class="text-light">e desenvolvemos projetos para otimizar o seu negócio.</p>
                                    </span>
                                <!--Texto-->
                            </span>
                        </div>
                        <!--Texto-->
                        <br>
                        <!--Cards-->
                            <div id="SessaoCards" class="d-flex justify-content-between container-md p-4">
                                <!--Markplaces-->
                                    <?php echo $markplaces ?>
                                <!--Markplaces-->
                                <!--Consultoria-->
                                    <?php echo $consuultoria ?>
                                <!--Consultoria-->
                                <!--Ads-->
                                    <?php echo $ads ?>
                                <!--Ads-->
                                <!--Automações-->
                                    <?php echo $automacoes ?>  
                                <!--Automações-->
                                <!--Trafego-->
                                    <?php echo $trafego ?>
                                <!--Trafego-->    
                            </div>
                        <!--cards-->
                    </article>
                </section>
            <!--Serviços-->
            <!--Parceiros-->
                <section class="p-3">
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h3 style="color: var(--roxo-vendex);">NOSSOS PARCEIROS</h3>
                                <!--Titulo-->
                                <br>
                                <!--Texto-->
                                    <span class="text-light">
                                        <p>Além da nossa equipe de profissionais, contamos com parcerias de primeira grandeza para</p>
                                        <p>garantir o sucesso de seu negócio!</p>
                                    </span>
                                <!--Texto-->
                            </span>
                            <!--Img-->
                                <span class="p-2">
                                    <ul id="ListaImg" class="d-flex justify-content-center">
                                        <li id="ClienteParceiros" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/logo-amazon.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros02" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/logo-magalu.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros03" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-75" src="./img/logo-mercadolivre.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros04" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-75" src="./img/logo-mercadoturbo (1).webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros05" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-75" src="./img/logo-nubimetrics.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros06" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-75" src="./img/logo-shopee.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros07" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/logo-tiny.webp" alt="" srcset="">
                                        </li>
                                    </ul>
                                </span>
                            <!--Img-->    
                        </div>
                        <!--Texto-->
                    </article>
                </section>
            <!--Parceiros-->
            <!--Empresa-->
                <section>
                    <article class="container-md d-flex justify-content-evenly align-items-center">
                        <!--Img-->
                            <img class="w-50" id="Img" src="./img/home-sobre-a-empresa.webp" alt="Imagem 01">
                        <!--Img-->
                        <!--Texto-->
                            <span id="SessaoTexto" style="color: var(--roxo-vendex);">
                                <!--Titulo-->
                                    <h4 class="text-light">Sobre a Empresa</h4>
                                    <h2 >SOMOS ESPECIALISTAS</h2> 
                                    <h2>COM FOCO EM RESULTADO</h2>
                                <!--Titulo-->
                                <br>
                                <!--Legenda-->
                                    <span class="text-light">
                                        <p>Temos um time de profissionais de alta competência em</p>
                                        <p>administração de e-commerces nos principais Marketplaces,</p>
                                        <p>através de gestão e assessoria de vendas com campanhas</p>
                                        <p>personalizadas nas plataformas, programas de automação,</p>
                                        <p>para gerir o seu negócio com rentabilidade e eficiência.</p>
                                    </span>
                                <!--Legenda-->
                                <br>
                                <button class="Btn01">Contato</button>
                            </span>    
                        <!--Texto-->
                    </article>
                </section>
            <!--Empresa-->
            <!--Contato-->
                <?php echo "$contato" ?>
            <!--Contato-->
            <!--Numeros-->
                <section id="sessaocliente" style="background: url(./img/background-numeros.webp); background-size: cover;">
                    <!--Mapa-->
                        <article class="container-md d-flex justify-content-evenly align-items-center text-light">
                            <!--Texto-->
                            <span id="SessaoTexto">
                                <!--Titulo-->
                                <h4>A Vendex</h4>
                                <h2 style="color: var(--roxo-vendex);">EM NÚMEROS</h2>
                                <br>
                                <!--Legenda-->
                                <span>
                                    <p>A Vendex tem uma variedade de serviços personalizados como</p>
                                    <p>alternativas para solucionar as necessidades de nossos</p>
                                    <p>clientes, porém, são os números a melhor expressão de nossos</p>
                                    <p>resultados.</p>
                                </span>
                                <br>
                                <!--Numeros-->
                                <div id="NumerosSessao" class="d-flex">
                                    <span>
                                        <span class="d-flex align-items-center" style="color: var(--rosa-vendex);">
                                            <h1>+</h1>
                                            <h1 style="display: none" id="contador01">0</h1>
                                        </span>
                                        <p>Clientes Ativos</p>
                                    </span>
                                    <span>
                                        <span class="d-flex align-items-center" style="color: var(--rosa-vendex);">
                                            <h1>+</h1>
                                            <h1 style="display: none" id="contador03">0</h1>
                                        </span>
                                        <p>Contas Gerenciadas</p>
                                    </span>
                                </div>
                                <br>
                                <div id="NumerosSessao" class="d-flex">
                                    <span>
                                        <span class="d-flex align-items-center" style="color: var(--rosa-vendex);">
                                            <h1>+</h1>
                                            <h1 style="display: none" id="contador02">0</h1>
                                            <h1>Milhões</h1>
                                        </span>
                                        <p>Reais Faturados</p>
                                    </span>
                                    <span>
                                        <span class="d-flex align-items-center" style="color: var(--rosa-vendex);">
                                            <h1>+</h1>
                                            <h1 style="display: none" id="contador04">0</h1>
                                            <h1>Mil</h1>
                                        </span>
                                        <p>Pedidos Entregues</p>
                                    </span>
                                </div>
                                <!--Numeros-->
                            </span>
                            <!--Texto-->
                            <!--Img-->
                            <img class="w-50" src="./img/mapa-02.webp" alt="Imagem 01">
                            <!--Img-->
                        </article>
                    <!--Mapa-->    
                    <!--Diferenciais-->
                        <article class="container-md d-flex justify-content-evenly align-items-center p-3">
                            <!--icons-->
                                <article style="gap: 2rem;" class="d-flex">
                                    <div>
                                        <span id="IconDiferenciais" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 100 75">
                                                    <path id="Caminho_184" data-name="Caminho 184" d="M43.75,79.5s-6.25,0-6.25-6.25,6.25-25,31.25-25S100,67,100,73.25s-6.25,6.25-6.25,6.25Zm25-37.5A18.75,18.75,0,1,0,50,23.25,18.75,18.75,0,0,0,68.75,42ZM32.6,79.5a13.986,13.986,0,0,1-1.35-6.25c0-8.469,4.25-17.189,12.1-23.25a39.531,39.531,0,0,0-12.1-1.75C6.25,48.25,0,67,0,73.25S6.25,79.5,6.25,79.5ZM28.125,42A15.625,15.625,0,1,0,12.5,26.375,15.625,15.625,0,0,0,28.125,42Z" transform="translate(0 -4.5)" fill="#b56afc" fill-rule="evenodd"></path>
                                                </svg>
                                            </span>
                                            <span class="text-light">
                                                <p>Time de</p>
                                                <p>Especialistas</p>
                                            </span>
                                        </span>
                                        <br>
                                        <span id="IconDiferenciais02" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 75 75">
                                                    <path id="phone-msg" d="M70.9,52.148a4.073,4.073,0,0,1,2.831,1.173A3.824,3.824,0,0,1,75,56.25V70.9A4.36,4.36,0,0,1,70.9,75a69.711,69.711,0,0,1-35.644-9.473A69.967,69.967,0,0,1,9.473,39.746,69.711,69.711,0,0,1,0,4.1,3.92,3.92,0,0,1,1.269,1.271,3.93,3.93,0,0,1,4.1,0H18.75a3.82,3.82,0,0,1,2.929,1.269A4.085,4.085,0,0,1,22.852,4.1,46.632,46.632,0,0,0,25.2,18.944a4,4,0,0,1-.977,4.3L15.04,32.421a61.272,61.272,0,0,0,27.54,27.54l9.179-9.179a4,4,0,0,1,4.3-.977A46.631,46.631,0,0,0,70.9,52.148ZM37.5,0H75V29.1H50L37.5,41.6Z" fill="#b56afc"></path>
                                                  </svg>
                                            </span>
                                            <span class="text-light">
                                                <p>Atendimento</p>
                                                <p>Personalizado</p>
                                            </span>
                                        </span>
                                    </div>
                                    <div>
                                        <span id="IconDiferenciais03" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 75.053 75">
                                                    <path id="salealt" d="M73.162,75H68.47a2.729,2.729,0,0,1-1.833-.7,3.05,3.05,0,0,1-1.026-1.65L62.385,56.232H34.232l3.226,16.422a1.861,1.861,0,0,1-.329,1.65,1.888,1.888,0,0,1-1.577.7H30.86a2.64,2.64,0,0,1-1.76-.7,3.05,3.05,0,0,1-1.026-1.65L14.144,2.346A1.892,1.892,0,0,1,14.474.659,1.927,1.927,0,0,1,16.05,0H59.013a1.812,1.812,0,0,1,1.393.551,1.914,1.914,0,0,1,.513,1.355.36.36,0,0,0,.073.184.36.36,0,0,1,.073.184l13.93,70.381a1.861,1.861,0,0,1-.329,1.65A1.809,1.809,0,0,1,73.162,75ZM42.224,23.387a15.114,15.114,0,0,1-6.488-1.355q-2.894-1.355-2.9-3.337a4.047,4.047,0,0,1,1.868-3.3A8.486,8.486,0,0,1,39.877,14a18.933,18.933,0,0,1,4.4.294,8.682,8.682,0,0,1,2.64,2.052,7.487,7.487,0,0,1,.659,1.026,3.815,3.815,0,0,0,.734.991,1.364,1.364,0,0,0,.953.329,2.592,2.592,0,0,0,1.8-.7,1.611,1.611,0,0,0,.551-1.65,8.952,8.952,0,0,0-2.676-5.022q-1.8-1.428-6.709-2.017,0-1.247-.038-1.868a6.625,6.625,0,0,0-.256-1.393,1.823,1.823,0,0,0-.734-1.1,2.434,2.434,0,0,0-1.32-.329,2.2,2.2,0,0,0-1.32.367,2.037,2.037,0,0,0-.734,1.174,7.17,7.17,0,0,0-.257,1.431q-.038.626-.038,1.723-5.205.659-7.295,2.53T28.147,18.7q0,4.98,3.85,7.184t10.227,2.2a14.769,14.769,0,0,1,6.488,1.393q2.894,1.393,2.9,3.3a4.04,4.04,0,0,1-1.868,3.3,8.492,8.492,0,0,1-5.17,1.393,18.933,18.933,0,0,1-4.4-.294,8.682,8.682,0,0,1-2.64-2.052,4.42,4.42,0,0,1-.659-.953,4.575,4.575,0,0,0-.734-1.026,1.294,1.294,0,0,0-.953-.367,2.52,2.52,0,0,0-1.8.734,1.6,1.6,0,0,0-.551,1.612q.88,3.666,2.676,5.095t6.709,1.944q0,1.32.038,1.906a6.58,6.58,0,0,0,.256,1.355,1.907,1.907,0,0,0,.7,1.1,2.745,2.745,0,0,0,2.676-.038,2.042,2.042,0,0,0,.734-1.174,7,7,0,0,0,.256-1.393q.035-.586.038-1.76,5.205-.586,7.295-2.457T56.3,32.771a7.654,7.654,0,0,0-3.85-7.149Q48.6,23.385,42.224,23.387ZM12.678,56.232,9.452,72.654A3.05,3.05,0,0,1,8.426,74.3a2.729,2.729,0,0,1-1.833.7H1.9a1.813,1.813,0,0,1-1.5-.7,1.853,1.853,0,0,1-.329-1.65l11.657-58.87,8.431,42.448Zm36.656,4.692-2.346,11.73a3.05,3.05,0,0,1-1.026,1.65,2.64,2.64,0,0,1-1.76.7H42.151L39.437,63.343l.513-2.419Z" transform="translate(-0.005)" fill="#b56afc"></path>
                                                  </svg>
                                            </span>
                                            <span class="text-light">
                                                <p>Experiência</p>
                                                <p>na Área</p>
                                                <p>de Vendas</p>
                                            </span>
                                        </span>
                                        <br>
                                        <span id="IconDiferenciais04" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                            <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 85.714 75">
                                                    <g id="Grupo_73" data-name="Grupo 73" transform="translate(-1013 -1465)">
                                                      <path id="Caminho_180" data-name="Caminho 180" d="M7.555,22.5H18.166a5.305,5.305,0,0,1,5.305,5.305V43.722a5.305,5.305,0,0,1-5.305,5.305H7.555A5.305,5.305,0,0,1,2.25,43.722V27.805A5.305,5.305,0,0,1,7.555,22.5Z" transform="translate(1016.056 1490.973)" fill="#b56afc"></path>
                                                      <path id="Caminho_181" data-name="Caminho 181" d="M18.805,13.5H29.416a5.305,5.305,0,0,1,5.305,5.305V55.943a5.305,5.305,0,0,1-5.305,5.305H18.805A5.305,5.305,0,0,1,13.5,55.943V18.805A5.305,5.305,0,0,1,18.805,13.5Z" transform="translate(1031.746 1478.751)" fill="#b56afc"></path>
                                                      <path id="Caminho_183" data-name="Caminho 183" d="M30.055,2.25H40.666a5.331,5.331,0,0,1,5.305,5.357V71.893a5.331,5.331,0,0,1-5.305,5.357H30.055a5.331,5.331,0,0,1-5.305-5.357V7.607A5.331,5.331,0,0,1,30.055,2.25Z" transform="translate(1047.438 1462.75)" fill="#b56afc"></path>
                                                      <path id="Caminho_182" data-name="Caminho 182" d="M0,34.153A2.666,2.666,0,0,1,2.679,31.5H83.036a2.653,2.653,0,1,1,0,5.305H2.679A2.666,2.666,0,0,1,0,34.153Z" transform="translate(1013 1503.195)" fill="#b56afc" fill-rule="evenodd"></path>
                                                    </g>
                                                  </svg>
                                            </span>
                                            <span class="text-light">
                                                <p>Resultados</p>
                                                <p>Comprovados</p>
                                            </span>
                                        </span>
                                    </div>
                                </article>        
                            <!--icons-->
                            <!--Texto-->
                                <div>
                                    <span style="color: var(--roxo-vendex);">
                                        <h4 class="text-light">Nossos Diferenciais</h4>
                                        <h3 >SOLUÇÕES PERSONALIZADAS</h3>
                                        <h3>E EXCELENTES RESULTADOS</h3>
                                        <br>
                                        <button class="Btn01">Contato</button>
                                    </span>
                                </div>
                            <!--Texto-->    
                        </article>
                    <!--Diferenciais-->
                </section>
            <!--Numeros-->
            <br>
            <!--Redes Sociais-->
                <section style="background: var(--background-vendx02);">
                    <article class="container-md p-4 d-flex justify-content-evenly align-items-center">
                        <!--Texto-->
                            <div class="text-light">
                                <h4>Fique Ligado nas nossas</h4>
                                <h3 class="text-black">REDES SOCIAIS</h3>
                                <span>
                                    <p>Acompanhe nossas publicações e fique por dentro das tendências e</p>
                                    <p>inovações que movimentam o mundo dos marketplaces.</p>
                                </span>
                            </div>
                        <!--Texto-->
                        <!--Icons-->
                            <div>
                                <span>
                                    <ul id="IconsHeader" class="d-flex flex-row">
                                        <li>
                                            <a href="#"><svg id="icons02" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: #fc6aed;transform: ;msFilter:;"><path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"></path></svg></a>
                                        </li>
                                        <li>
                                            <a href="#"><svg id="icons02" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: #fc6aed;transform: ;msFilter:;"><circle cx="4.983" cy="5.009" r="2.188"></circle><path d="M9.237 8.855v12.139h3.769v-6.003c0-1.584.298-3.118 2.262-3.118 1.937 0 1.961 1.811 1.961 3.218v5.904H21v-6.657c0-3.27-.704-5.783-4.526-5.783-1.835 0-3.065 1.007-3.568 1.96h-.051v-1.66H9.237zm-6.142 0H6.87v12.139H3.095z"></path></svg></a>
                                        </li>
                                        <li>
                                            <a href="#"><svg id="icons02" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24" style="fill: #fc6aed;transform: ;msFilter:;"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg></a>
                                        </li>
                                    </ul>
                                </span>
                            </div>
                        <!--Icons-->
                    </article>
                </section>
            <!--Redes Sociais-->
            <!--Case de sucesso-->
                <section class="p-4">
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h3 style="color: var(--roxo-vendex);">CASES DE SUCESSO</h3>
                                <!--Titulo-->
                                <br>
                                <!--Texto-->
                                    <span class="text-light">
                                        <p >Conheça alguns de nossos Cases de Sucesso e descubra o que nossa equipe de profissionais pode</p>
                                        <p>fazer por sua empresa.</p>
                                    </span>
                                <!--Texto-->
                            </span>
                            <!--Cases-->
                                <span>
                                    <!--Só quando eu fizer o banco de dados-->
                                </span>
                            <!--Cases-->
                        </div>
                        <!--Texto-->
                    </article>
                </section>
            <!--Case de sucesso-->
            <!--Clientes-->
                <section>
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center text-light">
                                <!--Titulo-->
                                    <h3 class="p-3" style="color: var(--roxo-vendex);">CLIENTES</h3>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span>
                                        <p>Aqui estão alguns parceiros e clientes que encontraram o sucesso de seu negócio!</p>
                                    </span>
                                <!--Texto-->
                            </span>
                            <!--Img-->
                                <span class="p-2">
                                    <ul id="ListaImg" class="d-flex justify-content-center">
                                        <li id="ClienteParceiros" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/tioali.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros02" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/farma.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros03" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/brazilian.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros04" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/pri.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros05" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/vr.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros06" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/eden.webp" alt="" srcset="">
                                        </li>
                                        <li id="ClienteParceiros07" class="bg-light d-flex justify-content-center align-items-center">
                                            <img class="w-100" src="./img/decorit.webp" alt="" srcset="">
                                        </li>
                                    </ul>
                                </span>
                            <!--Img-->    
                        </div>
                        <!--Texto-->
                    </article>
                </section>
            <!--Clientes-->
            <!--Formulario-->
                <?php echo $formulario ?>  
            <!--Formulario-->
            <br><br>
        </main>
    <!--Conteudo Principal-->
    <!--Footer-->
        <?php echo $footer ?>  
    <!--Footer-->
</body>
    <?php echo $headjs ?>
</html>