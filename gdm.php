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
    <title>Gestão de Marketplace - Vendex</title>
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
                                <h1 style="padding-bottom: 2rem; font-weight: 700;">Gestão de Marketplace</h1>
                            <!--Titulo-->
                            <!--Texto-->
                                <strong ><p style="font-weight: 900; font-size: 1.1rem">Descubra o que nossos especialistas podem</p>
                                <p style="font-weight: 900; font-size: 1.1rem">fazer por sua empresa!</p></strong>
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
                                <h4 class="text-light">Gestão para Marketplace</h4>
                                <h3>CADASTRO DE PRODUTOS</h3>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Nossa equipe será responsável pela gestão dos seus canais de</p>
                                    <p>vendas em todos os seus marketplaces de ponta a ponta!</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Seremos responsáveis por todas as ações desde a</p>
                                    <p>implementação / integração do seu ERP, bem como a criação /</p>
                                    <p>configuração de sua empresa nos marketplaces, (com seleção</p>
                                    <p>do layout de seu e-commerce logo, cores e textos).</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Faremos os cadastros e configuração de seus produtos na</p>
                                    <p>plataforma do ERP / e-commerce, com descrição personalizada</p>
                                    <p>e utilizando-se de técnicas de SEO, para otimização de imagens</p>
                                    <p>e de conteúdos, com precificação específica para cada canal.</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Contamos com gestores de e-commerce online para executar</p>
                                    <p>os processos operacionais com foco no cliente e no crescimento</p>
                                    <p>sólido, reportando os resultados semanalmente. Nosso time</p>
                                    <p>utiliza de ferramentas de desenvolvimento próprias para</p>
                                    <p>garantir que seu preço de venda seja ideal e que sua a margem</p>
                                    <p>de lucro seja a melhor da sua categoria!</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                    <!--Img-->
                        <img style="width: 30% !important; border-radius: 16px" class="w-25" id="Img" src="./img/gestao-marketplace-servicos.webp" alt="Imagem 01">
                    <!--Img-->
                </article>
            </section>
        <!--Sobre Nós-->
        <!--Serviços-->
            <section class="p-5">
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Img-->
                        <img style="width: 40% !important; border-radius: 0px" class="w-25" id="Img" src="./img/gestao-marketing-servicos.webp" alt="Imagem 01">
                    <!--Img-->
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <h4 class="text-light">Gestão completa do seu funil de vendas</h4>
                                <h3>CRIAÇÃO DE ESTRATÉGIA</h3>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Ranqueamento dos Anúncios:</strong> Quem não é visto, não é</p>
                                    <p>lembrado, concorda?</p>
                                    <p>Aqui na Vendex, nossos especialistas dominam as técnicas e</p>
                                    <p>algoritmos dos marketplaces para posicionar sempre seus</p>
                                    <p>anúncios nas primeiras páginas e assim vender muito. Nosso</p>
                                    <p>objetivo aqui é garantir que seus produtos sejam vistos por</p>
                                    <p>seus clientes no momento da busca, otimizando assim a</p>
                                    <p>conversão de vendas.</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Gestão e Estratégias de Campanhas de ADS:</strong>A gestão eficiente</p>
                                    <p>das estratégias de campanhas é fundamental para o sucesso</p>
                                    <p>nos marketplaces. Nosso time irá criar e administrar suas</p>
                                    <p>campanhas buscando garantir o máximo retorno dos seus</p>
                                    <p>investimentos</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Estratégias de ACOS:</strong>Nossa prioridade é a saúde financeira do</p>
                                    <p>das estratégias de campanhas é fundamental para o sucesso</p>
                                    <p>nos marketplaces. Nosso time irá criar e administrar suas</p>
                                    <p>campanhas buscando garantir o máximo retorno dos seus</p>
                                    <p>investimentos</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Estratégias SEO:</strong>A análise de SEO é um processo essencial no</p>
                                    <p>marketing digital que envolve a avaliação detalhada de um</p>
                                    <p>site ou conteúdo online para otimizar sua visibilidade nos</p>
                                    <p>mecanismos de busca, como o Google.</p>
                                    <p>Com essa estratégia vamos aumentar o tráfego orgânico dos</p>
                                    <p>seus anúncios, melhorar o posicionamento nos resultados de</p>
                                    <p>pesquisa e, consequentemente, aumentar o funil de vendas.</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                </article>
            </section>
        <!--Serviços-->
        <!--Integralçao-->
            <section class="p-3">
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <h4 class="text-light">Gestão para Marketplace</h4>
                                <h3>GESTÃO E INTEGRAÇÃO DE ERP</h3>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Integração do sistema ERP com todos os marketplaces:</strong> o ERP</p>
                                    <p>para marketplaces é um sistema de gestão integrada para</p>
                                    <p>quem vende online em pelo menos uma plataforma de e-</p>
                                    <p>commerce compartilhada, que gerencia seu estoque sem</p>
                                    <p>burocracia.</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Melhoria de processo de expedição utilizando o ERP:</strong>o</p>
                                    <p>controle do processo de expedição é extremamente</p>
                                    <p>importante, deve oferecer agilidade e qualidade, entregando o</p>
                                    <p>produto do cliente no prazo acordado, gerando a satisfação</p>
                                    <p>para o consumidor final, evitando danos irreparáveis na</p>
                                    <p>imagem da empresa.</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Relatórios de performance:</strong>os relatórios gerados pelo sistema</p>
                                    <p>ERP detalham com segurança e assertividade as informações</p>
                                    <p>necessárias para a tomada de decisões, em todos os setores</p>
                                    <p>administrativos da empresa, conduzindo-a ao sucesso!</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Como utilizar o sistema de forma otimizada:</strong>o sistema de</p>
                                    <p>gestão ERP agrupa todos os setores administrativos de uma</p>
                                    <p>empresa, integralizando em um único software, distribuindo as</p>
                                    <p>informações com precisão, eficiência e agilidade.</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                    <!--Img-->
                        <img style="width: 30% !important; border-radius: 0px" class="w-25" id="Img" src="./img/gestao-erp-servicos.webp" alt="Imagem 01">
                    <!--Img-->
                </article>
            </section>
        <!--Integralçao-->
        <!--Parceiros-->
            <section class="p-3">
                <?php echo $Parceiros ?>
            </section> 
        <!--Parceiros-->
        <!--Contato-->
            <?php echo $contato ?>
        <!--Contato-->
        <!--Gestao-->
            <section>
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Img-->
                        <img style=" border-radius: 0px" class="w-50" id="Img" src="./img/gestao-trafego-servicos.webp" alt="Imagem 01">
                    <!--Img-->
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <span class="text-light">
                                    <h4>Gestão e Alta Performance. Aqui</h4>
                                    <h4>trabalhamos com dados</h4>
                                </span> 
                                <span>   
                                    <h3>A Vendex possui</h3>
                                    <h3>especialistas em dados,</h3>
                                    <h3>garantindo assim racional</h3>
                                    <h3>para as decisões!</h3>
                                </span>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Estratégias de curva ABC:</strong>A curva ABC ou Classificação ABC, é</p>
                                    <p>uma metodologia que permite o ranqueamento das informações</p>
                                    <p>identificando assim os produtos com maior potencial de receita</p>
                                    <p>para sua empresa. Utilizamos esta ferramenta para controle de</p>
                                    <p>estoque ou para organizar processos internos do seu negócio,</p>
                                    <p>gerando assim vantagem competitiva.</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Análise de Concorrência:</strong>Nosso time trabalha para trazer para</p>
                                    <p>sua empresa uma visão 360° de todo dinamismo do seu</p>
                                    <p>mercado. Entendendo no detalhe o posicionamento dos seus</p>
                                    <p>concorrentes vai nos permitir traçar estratégias diferenciadas e</p>
                                    <p>também antecipar tendências.</p>
                                </span>
                            <!--Legenda-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p><strong style="color: var(--rosa-vendex);">Estratégia de Categorias / Nicho e Produtos:</strong>Conhecer com</p>
                                    <p>profundidade o mercado que está inserido nos permite atuar de</p>
                                    <p>forma mais específica, objetiva e assertiva as demandas do seu</p>
                                    <p>cliente. Nossa análise detalhada nos permite a tomada de</p>
                                    <p>decisões de forma mais personalidade para seu negócio.</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                </article>
            </section>
        <!--Gestao-->
        <!--Clientes-->
            <section class="p-5">
                <article class="p-3">
                    <!--Texto-->
                    <div>
                        <span class="d-flex flex-column align-items-center text-center text-light">
                            <h4>Somos a Melhor Solução</h4>
                            <!--Titulo-->
                                <h3 style="color: var(--roxo-vendex); padding-bottom: 1rem">CONHEÇA OS BENEFÍCIOS</h3>
                            <!--Titulo-->
                            <!--Texto-->
                                <span>
                                    <p>Desenvolvemos um trabalho com uma equipe experiente em estruturação de vendas de e-commerce nos mais renomados</p>
                                    <p>marketplaces e os benefícios são apenas uma consequência.</p>
                                </span>
                            <!--Texto-->
                        </span>
                    </div>
                    <!--Texto-->
                    <br>
                    <!--icons-->
                        <article style="gap: 2rem;" class="container-md d-flex justify-content-center">
                            <div style="gap: 1rem;" class="d-flex flex-row">
                                <span id="IconDiferenciais01" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
                                    <span style="background: #404040; padding: 1.2rem 1.1rem; border-radius: 15px;" class="justify-content-center align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 87.112 87.111">
                                            <path id="sale" d="M76.223,43.556,87.112,54.445,73.5,59.889l2.722,16.333L59.889,73.5,54.445,87.112,43.556,76.223,32.667,87.112,27.222,73.5,10.889,76.223l2.722-16.333L0,54.445,10.889,43.556,0,32.667l13.611-5.444L10.889,10.889l16.333,2.722L32.667,0,43.556,10.889,54.445,0l5.444,13.611,16.333-2.722L73.5,27.222l13.611,5.444ZM29.945,21.778a7.04,7.04,0,0,0-5.786,3.189,12.485,12.485,0,0,0-2.381,7.7,12.526,12.526,0,0,0,2.381,7.7,6.843,6.843,0,0,0,11.571,0,12.526,12.526,0,0,0,2.381-7.7,12.485,12.485,0,0,0-2.381-7.7,7.04,7.04,0,0,0-5.786-3.189Zm27.222,0H54.445a1.6,1.6,0,0,0-.639.128q-.3.128-.467.213a1.743,1.743,0,0,0-.467.467q-.3.382-.382.511t-.382.68q-.3.552-.382.724L27.648,62.611a1.407,1.407,0,0,0,.254,1.87,2.793,2.793,0,0,0,2.042.852h2.722a2.86,2.86,0,0,0,.554-.044,1.354,1.354,0,0,0,.467-.213,2.58,2.58,0,0,0,.382-.3,2.9,2.9,0,0,0,.341-.467q.213-.339.3-.511t.341-.6q.256-.423.341-.6L59.466,24.5a1.407,1.407,0,0,0-.254-1.87,2.793,2.793,0,0,0-2.042-.852Zm0,21.778a7.04,7.04,0,0,0-5.786,3.189A12.485,12.485,0,0,0,49,54.445a12.526,12.526,0,0,0,2.381,7.7,6.843,6.843,0,0,0,11.571,0,12.526,12.526,0,0,0,2.381-7.7,12.485,12.485,0,0,0-2.381-7.7A7.04,7.04,0,0,0,57.167,43.556Zm0,16.333q-1.106,0-1.914-1.616a8.573,8.573,0,0,1-.808-3.872,8.3,8.3,0,0,1,.808-3.828Q56.061,49,57.167,49t1.914,1.573a8.3,8.3,0,0,1,.808,3.828,8.573,8.573,0,0,1-.808,3.872Q58.273,59.889,57.167,59.889ZM29.945,38.111q-1.106,0-1.914-1.616a8.573,8.573,0,0,1-.808-3.872,8.3,8.3,0,0,1,.808-3.828q.808-1.573,1.914-1.573T31.859,28.8a8.3,8.3,0,0,1,.808,3.828,8.573,8.573,0,0,1-.808,3.872Q31.05,38.111,29.945,38.111Z" fill="#b56afc"></path>
                                        </svg>
                                    </span>
                                    <span class="text-light">
                                        <p>Aumento das</p>
                                        <p>Vendas</p>
                                    </span>
                                </span>
                                    <br>
                                    <span id="IconDiferenciais01" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
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
                                <div style="gap: 1rem;" class="d-flex flex-row">
                                    <span id="IconDiferenciais01" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
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
                                <span id="IconDiferenciais01" style="gap: 1rem;" class="d-flex justify-content-center align-items-center">
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
                </article>
            </section>
        <!--Clientes-->
    </main>
</body>
    <?php echo $headjs ?>
</html>