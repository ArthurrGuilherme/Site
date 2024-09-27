<?php 
    include './shared/shared.php';
    include './shared/head.php';
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
        <section style="background: url(./img/banner-principal.webp); background-size: cover">
            <!--Header Primario-->
                <?php echo "$headerprincial" ?>
            <!--Header Primario-->
            <!--Header Secundario-->
                <?php echo "$headersecundario" ?>
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
                                    <button type="button" id="BtnContato" class="btn btn-dark">Contato</button>
                                </span>
                            <!--Btn Principal-->
                            <!--Arrow-->
                                <span id="Arrow" class="d-flex justify-content-center w-75 p-3">
                                    <i style="font-size: 3.5rem;" class='bx bx-chevrons-down'></i>
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
                        <!--Cards-->
                            <div id="SessaoCards" class="d-flex justify-content-between container-md p-4">
                                <!--Markplaces-->
                                    <div id="Cards" class="card bg-black d-flex justify-content-center text-center" style="width: 18rem;">
                                            <svg class="w-100 p-3" id="Grupo_53" data-name="Grupo 53" xmlns="http://www.w3.org/2000/svg" width="226.687" height="202.402" viewBox="0 0 226.687 202.402">
                                                <path id="Caminho_79" data-name="Caminho 79" d="M-2465.353-484.781h-125.459a12.57,12.57,0,0,0-12.316,15.083l16.453,80.645A12.57,12.57,0,0,0-2574.358-379h92.553a12.57,12.57,0,0,0,12.316-10.056l16.453-80.645A12.569,12.569,0,0,0-2465.353-484.781Z" transform="translate(2679.465 518.522)" fill="#fff" style="
                                                background-image: linear-gradient(135deg,var(--ast-global-color-2) 0%,var(--ast-global-color-1) 100%);
                                            "></path>
                                                <g id="Grupo_50" data-name="Grupo 50">
                                                <path id="Caminho_80" data-name="Caminho 80" d="M-2429.874-330.865h-114.793A22.977,22.977,0,0,1-2567.1-349.18l-25.842-126.581a10.185,10.185,0,0,0-9.05-8.067l-27.537-2.391a6.386,6.386,0,0,1-5.807-6.913,6.389,6.389,0,0,1,6.914-5.807l27.534,2.391a23.03,23.03,0,0,1,20.455,18.233l25.843,126.581a10.167,10.167,0,0,0,9.928,8.105h114.793a6.385,6.385,0,0,1,6.385,6.383A6.384,6.384,0,0,1-2429.874-330.865Z" transform="translate(2635.365 498.964)" fill="#cb6ce6"></path>
                                                </g>
                                                <g id="Grupo_51" data-name="Grupo 51" transform="translate(91.347 175.396)">
                                                <path id="Caminho_81" data-name="Caminho 81" d="M-2569.961-411.734a13.5,13.5,0,0,1-13.5,13.5,13.5,13.5,0,0,1-13.5-13.5,13.5,13.5,0,0,1,13.5-13.5A13.5,13.5,0,0,1-2569.961-411.734Z" transform="translate(2596.968 425.237)" fill="#cb6ce6"></path>
                                                <path id="Caminho_82" data-name="Caminho 82" d="M-2580.525-415.61a6.817,6.817,0,0,1-6.815,6.816,6.817,6.817,0,0,1-6.816-6.816,6.817,6.817,0,0,1,6.816-6.816A6.817,6.817,0,0,1-2580.525-415.61Z" transform="translate(2600.844 429.113)" fill="#cb6ce6"></path>
                                                </g>
                                                <g id="Grupo_52" data-name="Grupo 52" transform="translate(169.975 175.396)">
                                                <path id="Caminho_83" data-name="Caminho 83" d="M-2536.91-411.734a13.5,13.5,0,0,1-13.5,13.5,13.5,13.5,0,0,1-13.5-13.5,13.5,13.5,0,0,1,13.5-13.5A13.5,13.5,0,0,1-2536.91-411.734Z" transform="translate(2563.917 425.237)" fill="#cb6ce6"></path>
                                                <path id="Caminho_84" data-name="Caminho 84" d="M-2547.474-415.61a6.817,6.817,0,0,1-6.816,6.816,6.817,6.817,0,0,1-6.816-6.816,6.817,6.817,0,0,1,6.816-6.816A6.817,6.817,0,0,1-2547.474-415.61Z" transform="translate(2567.793 429.113)" fill="#cb6ce6"></path>
                                                </g>
                                                <path id="Caminho_85" data-name="Caminho 85" d="M-2510.2-462.291q-15.181,27.745-30.363,55.5c-1.287,2.377-3.581,4.527-6.418,4.6-2.7.14-5.02-1.829-6.229-4.094q-17.049-31-34.112-61.98c-1.506-2.491-1.706-6.055.485-8.227a7.523,7.523,0,0,1,4.542-2.12q11.715,21.3,23.439,42.593a5.482,5.482,0,0,0,4.811,3.169c2.188-.057,3.956-1.715,4.948-3.552q10.624-19.455,21.237-38.92l11.072.714a8.571,8.571,0,0,1,6.859,3.695C-2508.238-468.315-2508.708-464.872-2510.2-462.291Zm-27.508-12.447a3.736,3.736,0,0,0-2.986-1.611q-13.742-.892-27.489-1.784a3.718,3.718,0,0,0-3,.952,2.96,2.96,0,0,0-.209,3.58q7.422,13.5,14.859,27a3.085,3.085,0,0,0,2.712,1.787,3.493,3.493,0,0,0,2.792-2.005q6.606-12.076,13.2-24.161A3.664,3.664,0,0,0-2537.7-474.738Z" transform="translate(2700.042 527.03)" fill="#cb6ce6"></path>
                                            </svg>
                                        <div class="card-body">
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Gestão de</h5>
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Marketplace</h5>
                                        <br>
                                        <a href="#" id="LinkCards" style="background: var(--background-vendx); border: none;" class="btn btn-primary w-75">Saiba Mais</a>
                                        </div>
                                    </div>
                                  <!--Markplaces-->
                                  <!--Consultoria-->
                                    <div id="Cards02" class="card bg-black text-center d-flex justify-content-center" style="width: 18rem;">
                                        <svg class="w-100 p-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 193.05 184.57"><defs><style>.cls-1{fill:#cb6ce6;}.cls-2{fill:#fff;}</style></defs><title>Ativo 1</title><g id="Camada_2" data-name="Camada 2"><g id="Camada_1-2" data-name="Camada 1"><path class="cls-1" d="M135.53,86.89q-15.3,28-30.6,55.92c-1.29,2.39-3.6,4.56-6.46,4.64s-5.06-1.85-6.28-4.13Q75,112.09,57.82,80.87c-1.52-2.51-1.72-6.1.49-8.29a7.56,7.56,0,0,1,4.57-2.13Q74.69,91.9,86.5,113.36a5.54,5.54,0,0,0,4.85,3.2c2.21-.06,4-1.73,5-3.58l21.39-39.22,11.16.72a8.66,8.66,0,0,1,6.91,3.72C137.5,80.82,137,84.29,135.53,86.89ZM107.81,74.35a3.74,3.74,0,0,0-3-1.62q-13.85-.9-27.7-1.8a3.71,3.71,0,0,0-3,1,3,3,0,0,0-.21,3.61l15,27.2a3.12,3.12,0,0,0,2.73,1.8,3.54,3.54,0,0,0,2.82-2l13.3-24.35A3.69,3.69,0,0,0,107.81,74.35Z"></path><path class="cls-1" d="M5.48,30.54H25.34a3.68,3.68,0,0,0,3.05-1.25L47.29,0H27.59l-25,27.66C1.43,29,3,30.54,5.48,30.54Z"></path><path class="cls-1" d="M60.69,30.54h18c2.29,0,4.19-1.05,4.37-2.42L86.7,0H67L56.41,27.33C55.78,29,57.87,30.54,60.69,30.54Z"></path><path class="cls-1" d="M115,30.54h16.6c3.23,0,5.63-1.8,4.9-3.69L126.1,0H106.4L110,27.76C110.18,29.33,112.37,30.54,115,30.54Z"></path><path class="cls-1" d="M169.8,30.54h16.25c3.18,0,5.21-2,3.69-3.71L165.51,0h-19.7L164,28.15C164.9,29.59,167.21,30.54,169.8,30.54Z"></path><path class="cls-1" d="M13.81,55.39A13.81,13.81,0,0,0,27.63,41.58v-2.3a3,3,0,0,0-3-3H3a3,3,0,0,0-3,3v2.3A13.81,13.81,0,0,0,13.81,55.39Z"></path><path class="cls-1" d="M69,55.39A13.81,13.81,0,0,0,82.8,41.58V40.07a3.75,3.75,0,0,0-3.75-3.75H58.92a3.75,3.75,0,0,0-3.75,3.75v1.51A13.81,13.81,0,0,0,69,55.39Z"></path><path class="cls-1" d="M114.05,36.32a3.75,3.75,0,0,0-3.75,3.75v1.51a13.82,13.82,0,0,0,27.63,0V40.07a3.75,3.75,0,0,0-3.76-3.75Z"></path><path class="cls-1" d="M189.3,36.32H169.18a3.75,3.75,0,0,0-3.76,3.75v1.51a13.81,13.81,0,0,0,13.82,13.81h0a13.81,13.81,0,0,0,13.81-13.81V40.07A3.75,3.75,0,0,0,189.3,36.32Z"></path><polygon class="cls-2" points="14.74 63.87 14.74 166.04 95.91 166.04 97.19 166.04 178.35 166.04 178.35 63.87 168.52 63.87 168.52 156.31 97.19 156.31 95.91 156.31 24.57 156.31 24.57 63.87 14.74 63.87"></polygon><path class="cls-2" d="M96.55,170.78H2.33S1,184.57,17,184.57H176.11c15.95,0,14.65-13.79,14.65-13.79Z"></path></g></g></svg>
                                        <div class="card-body">
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Consultoria</h5>
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">De Venda</h5>
                                        <br>
                                        <a href="#" id="LinkCards" style="background: var(--background-vendx); border: none;" class="btn btn-primary w-75">Saiba Mais</a>
                                        </div>
                                    </div>
                                  <!--Consultoria-->
                                  <!--Ads-->
                                    <div id="Cards03" class="card bg-black text-center d-flex justify-content-center" style="width: 18rem;">
                                        <svg class="w-100 p-3" xmlns="http://www.w3.org/2000/svg" width="159.532" height="206.158" viewBox="0 0 24 24" style="fill: rgba(203,108,230);transform: ;msFilter:;"><path d="M19.023 16.977a35.13 35.13 0 0 1-1.367-1.384c-.372-.378-.596-.653-.596-.653l-2.8-1.337A6.962 6.962 0 0 0 16 9c0-3.859-3.14-7-7-7S2 5.141 2 9s3.14 7 7 7c1.763 0 3.37-.66 4.603-1.739l1.337 2.8s.275.224.653.596c.387.363.896.854 1.384 1.367l1.358 1.392.604.646 2.121-2.121-.646-.604c-.379-.372-.885-.866-1.391-1.36zM9 14c-2.757 0-5-2.243-5-5s2.243-5 5-5 5 2.243 5 5-2.243 5-5 5z"></path></svg>
                                        <div class="card-body">
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Gestão de</h5>
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">ADS</h5>
                                        <br>
                                        <a href="#" id="LinkCards" style="background: var(--background-vendx); border: none;" class="btn btn-primary w-75">Saiba Mais</a>
                                        </div>
                                    </div>
                                    <!--Ads-->
                                    <!--Automações-->
                                        <div id="Cards04" class="card bg-black text-center d-flex justify-content-center" style="width: 18rem;">
                                            <svg class="w-100 p-3" id="Grupo_54" data-name="Grupo 54" xmlns="http://www.w3.org/2000/svg" width="159.532" height="206.158" viewBox="0 0 159.532 206.158">
                                                <path id="Caminho_86" data-name="Caminho 86" d="M-2378.313-460.439q-16.9,30.894-33.809,61.8c-1.433,2.646-3.987,5.041-7.147,5.126-3.007.156-5.589-2.037-6.935-4.559q-18.984-34.517-37.983-69.014c-1.677-2.773-1.9-6.742.54-9.16a8.378,8.378,0,0,1,5.058-2.36q13.044,23.718,26.1,47.427c1.044,1.95,3.036,3.645,5.357,3.528,2.437-.063,4.405-1.91,5.509-3.955q11.829-21.663,23.647-43.337l12.328.795a9.544,9.544,0,0,1,7.637,4.114C-2376.133-467.146-2376.657-463.313-2378.313-460.439Zm-30.63-13.859a4.161,4.161,0,0,0-3.325-1.793q-15.3-.993-30.609-1.987a4.139,4.139,0,0,0-3.34,1.06,3.3,3.3,0,0,0-.233,3.987q8.264,15.036,16.545,30.06a3.435,3.435,0,0,0,3.02,1.989,3.89,3.89,0,0,0,3.109-2.233q7.355-13.446,14.7-26.9A4.08,4.08,0,0,0-2408.943-474.3Z" transform="translate(2536.351 521.828)" fill="#cb6ce6"></path>
                                                <path id="Caminho_87" data-name="Caminho 87" d="M-2373.163-352.864l2.405,13.584-68.865,36.715-32.05-181.089,77.284,10.85,2.4,13.584,3.356-.6-2.509-14.164c-.652-3.682-3.211-7.028-5.77-7.483l-74.947-13.359a7.1,7.1,0,0,0-2.191-.034l-.008-.042-13.126,2.318c-3.385.6-5.591,4.138-4.924,7.9l33.642,190.088c.667,3.767,3.952,6.334,7.338,5.735l12.23-2.164,0-.045a6.885,6.885,0,0,0,2.935-.948l65.811-38.272c2.247-1.306,3.5-5.327,2.851-9.009l-2.506-14.164Z" transform="translate(2492.224 494.926)" fill="#cb6ce6"></path>
                                                <path id="Caminho_88" data-name="Caminho 88" d="M-2448.843-446.562h-13.645a3.913,3.913,0,0,1-3.9-3.9h0a3.911,3.911,0,0,1,3.9-3.9h13.645a3.912,3.912,0,0,1,3.9,3.9h0A3.913,3.913,0,0,1-2448.843-446.562Z" transform="translate(2534.827 561.816)" fill="#fff"></path>
                                                <path id="Caminho_89" data-name="Caminho 89" d="M-2455.843-457.6h-13.645a3.913,3.913,0,0,1-3.9-3.9h0a3.911,3.911,0,0,1,3.9-3.9h13.645a3.911,3.911,0,0,1,3.9,3.9h0A3.913,3.913,0,0,1-2455.843-457.6Z" transform="translate(2523.284 543.62)" fill="#fff"></path>
                                                <path id="Caminho_90" data-name="Caminho 90" d="M-2446.7-451.767h-21.83a4.1,4.1,0,0,1-4.093-4.093h0a4.1,4.1,0,0,1,4.093-4.093h21.83a4.106,4.106,0,0,1,4.1,4.093h0A4.106,4.106,0,0,1-2446.7-451.767Z" transform="translate(2524.542 552.597)" fill="#fff"></path>
                                              </svg>
                                            <div class="card-body">
                                            <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Automações</h5>
                                            <br>
                                            <a href="#" id="LinkCards" style="background: var(--background-vendx); border: none;" class="btn btn-primary w-75">Saiba Mais</a>
                                            </div>
                                        </div>
                                  <!--Automações-->
                                  <!--Trafego-->
                                    <div id="Cards05" class="card bg-black text-center d-flex justify-content-center" style="width: 18rem;">
                                        <br>
                                        <svg class="w-100 p-3" xmlns="http://www.w3.org/2000/svg" width="256.602" height="153.846" viewBox="0 0 256.602 153.846">
                                            <g id="Grupo_56" data-name="Grupo 56" transform="translate(2758.716 485.787)">
                                              <path id="Caminho_102" data-name="Caminho 102" d="M-2608.409-455.62q-17.666,32.285-35.333,64.579c-1.5,2.766-4.166,5.268-7.469,5.357-3.142.163-5.841-2.129-7.25-4.764q-19.837-36.072-39.695-72.123c-1.752-2.9-1.982-7.045.565-9.573a8.76,8.76,0,0,1,5.284-2.467q13.633,24.786,27.279,49.564c1.088,2.037,3.173,3.809,5.6,3.687,2.547-.066,4.6-2,5.759-4.133q12.357-22.639,24.71-45.289l12.886.83a9.983,9.983,0,0,1,7.981,4.3C-2606.131-462.63-2606.681-458.624-2608.409-455.62Zm-32.013-14.484a4.341,4.341,0,0,0-3.474-1.874q-15.991-1.038-31.985-2.076a4.319,4.319,0,0,0-3.49,1.107,3.44,3.44,0,0,0-.244,4.166q8.633,15.713,17.288,31.415a3.6,3.6,0,0,0,3.158,2.079,4.058,4.058,0,0,0,3.248-2.334q7.686-14.052,15.366-28.115A4.266,4.266,0,0,0-2640.422-470.1Z" transform="translate(104.735 19.763)" fill="#cb6ce6"></path>
                                              <path id="Caminho_103" data-name="Caminho 103" d="M-2682.079-442.211h-14.257a4.087,4.087,0,0,1-4.075-4.075h0a4.085,4.085,0,0,1,4.075-4.075h14.257a4.086,4.086,0,0,1,4.075,4.075h0A4.087,4.087,0,0,1-2682.079-442.211Z" transform="translate(103.102 62.644)" fill="#fff"></path>
                                              <path id="Caminho_104" data-name="Caminho 104" d="M-2689.079-453.246h-14.257a4.087,4.087,0,0,1-4.075-4.075h0a4.085,4.085,0,0,1,4.075-4.075h14.257a4.085,4.085,0,0,1,4.075,4.075h0A4.087,4.087,0,0,1-2689.079-453.246Z" transform="translate(90.724 43.131)" fill="#fff"></path>
                                              <path id="Caminho_105" data-name="Caminho 105" d="M-2679.556-447.4h-22.813a4.291,4.291,0,0,1-4.28-4.277h0a4.291,4.291,0,0,1,4.28-4.277h22.813a4.289,4.289,0,0,1,4.277,4.277h0A4.289,4.289,0,0,1-2679.556-447.4Z" transform="translate(92.071 52.758)" fill="#fff"></path>
                                              <path id="Caminho_106" data-name="Caminho 106" d="M-2610.113-352.814v14.755a6.124,6.124,0,0,1-6.119,6.118h-65.559a77.151,77.151,0,0,1-76.926-76.923,76.745,76.745,0,0,1,22.589-54.336,76.749,76.749,0,0,1,54.336-22.587h41.361V-458.8h-42.131a49.718,49.718,0,0,0-35.263,14.669,49.7,49.7,0,0,0-14.669,35.263,50.074,50.074,0,0,0,49.932,49.932h66.329A6.124,6.124,0,0,1-2610.113-352.814Z" transform="translate(0 0)" fill="#cb6ce6"></path>
                                              <path id="Caminho_107" data-name="Caminho 107" d="M-2685.671-479.669v14.755a6.124,6.124,0,0,1-6.119,6.118h-24.2v-26.991h24.2A6.124,6.124,0,0,1-2685.671-479.669Z" transform="translate(75.558 0)" fill="#fff"></path>
                                              <path id="Caminho_108" data-name="Caminho 108" d="M-2685.671-433.845v14.755a6.124,6.124,0,0,1-6.119,6.118h-24.2v-26.991h24.2A6.124,6.124,0,0,1-2685.671-433.845Z" transform="translate(75.558 81.031)" fill="#fff"></path>
                                            </g>
                                          </svg>
                                        <div class="card-body">
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Tráfego</h5>
                                        <h5 style="color: var(--roxo-vendex); font-weight: 700;" class="card-title">Pago</h5>
                                        <br>
                                        <a href="#" id="LinkCards" style="background: var(--background-vendx); border: none;" class="btn btn-primary w-75">Saiba Mais</a>
                                        </div>
                                    </div>
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
                <section class="d-flex justify-content-center align-items-center" style="height: 34rem;">
                    <article style="background: var(--background-vendx02);" class=" container-md d-flex justify-content-evenly  align-items-center">
                        <!--Texto-->
                            <div>
                                <span id="SessaoTexto" class="text-light">
                                    <h4>Entre em</h4>
                                    <h3 class="text-black">Contato Conosco</h3>
                                    <br>
                                    <span >
                                        <p>Temos uma equipe altamente capacitada para atendê-</p>
                                        <p>los, com as melhores soluções personalizadas para o seu</p>
                                        <p>negócio.</p>
                                    </span>
                                    <br>
                                    <button id="Btnconato03" type="button" class="btn btn-outline-light">Contato</button>
                                </span>
                            </div>
                        <!--Texto-->
                        <!--img-->
                            <div class="SectionContato">
                                <span class="position-relative" style="bottom: 10rem;">
                                    <img  class="w-100" src="./img/home-entre-em-contato.webp" alt="">
                                </span> 
                            </div>
                        <!--img-->
                    </article>
                </section>
            <!--Contato-->
            <!--Numeros-->
                <section style="background: url(./img/background-numeros.webp); background-size: cover;">
                    <!--Mapa-->
                        <article class="container-md d-flex justify-content-evenly align-items-center text-light">
                            <!--Texto-->
                                <span id="SessaoTexto">
                                    <!--Titulo-->
                                        <h4 >A Vendex</h4>
                                        <h2 style="color: var(--roxo-vendex);">EM NÚMEROS</h2> 
                                    <!--Titulo-->
                                    <br>
                                    <!--Legenda-->
                                        <span>
                                            <p>A Vendex tem uma variedade de serviços personalizados como</p>
                                            <p>alternativas para solucionar as necessidades de nossos</p>
                                            <p>clientes, porém, são os números a melhor expressão de nossos</p>
                                            <p>resultados.</p>
                                        </span>
                                    <!--Legenda-->
                                    <br>
                                    <!--Numeros-->
                                        <div id="NumerosSessao" class="d-flex">
                                            <span>
                                                <h1 style="color: var(--rosa-vendex);">+51</h1>
                                                <p >Clientes Ativos</p>
                                            </span>
                                            <span>
                                                <h1 style="color: var(--rosa-vendex);">+178</h1>
                                                <p>Contas Gerenciadas</p>
                                            </span>
                                        </div>
                                        <br>
                                        <div id="NumerosSessao" class="d-flex">
                                            <span>
                                                <h1 style="color: var(--rosa-vendex);">+27Milhões</h1>
                                                <p>Reais Faturados</p>
                                            </span>
                                            <span>
                                                <h1 style="color: var(--rosa-vendex);">+321Mil</h1>
                                                <p>Pedidos Entregues</p>
                                            </span>
                                        </div>
                                    <!--Numeros-->    
                                </span>    
                            <!--Texto-->
                            <!--Img-->
                                <img class="w-50"  src="./img/mapa-02.webp" alt="Imagem 01">
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
                <section>
                    <article>
                        <!--Texto-->
                        <div>
                            <span class="d-flex flex-column align-items-center text-center">
                                <!--Titulo-->
                                    <h4 class="text-light">Entre em</h4>
                                    <h3 style="color: var(--roxo-vendex);">CONTATO</h3>
                                <!--Titulo-->
                                <!--Texto-->
                                    <span class="p-3">
                                        <p class="text-light">Nossa equipe está pronta para atendê-lo, informe-nos qual o seu problema ou dúvida, entraremos em contato muito rápido!</p>
                                    </span>
                                <!--Texto-->
                            </span>  
                        </div>
                        <!--Texto-->
                        <!--Formulario-->
                            <form class="d-flex flex-column justify-content-center container-md" action="">
                                <!--Nome-->
                                    <input placeholder="Nome Completo:" type="text" name="" id="">
                                <!--Nome-->
                                <br>
                                <!--Email-->
                                <input placeholder="Seu E-mail" type="email" name="" id="">
                                <!--Email-->
                                <br>
                                <!--Telefone-->
                                <input placeholder="Telefone para Contato" type="tel" name="" id="">
                                <!--Telefone-->
                                <br>
                                <!--Faturamento-->
                                    <select name="" id="" >
                                        <option value="0">Selecione o seu faturamento mensal</option>
                                        <option value="">0</option>
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                <!--Faturamento-->
                                <br>
                                <!--Empresa-->
                                <input placeholder="Nome da Empresa" type="text" name="" id="">
                                <!--Empresa-->
                                <br>
                                <!--Aceito-->
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label text-light" for="customCheck1">Aceito receber comunicações.</label>
                                    </div>
                                <!--Aceito-->
                                <br>
                                <!--Button-->
                                    <button id="BtnFormulario" class="w-25 p-1" type="submit">Enviar</button>
                                <!--Button-->
                            </form>
                        <!--Formulario-->
                    </article>
                </section>
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