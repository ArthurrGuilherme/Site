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
    </main>
</body>
    <?php echo $headjs ?>
</html>