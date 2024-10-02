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
            <?php echo "$contato" ?>
        <!--Contato-->
        <!--Integralçao-->
            <section>
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Img-->
                        <img style="width: 30% !important; border-radius: 0px" class="w-25" id="Img" src="./img/gestao-erp-servicos.webp" alt="Imagem 01">
                    <!--Img-->
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
                </article>
            </section>
        <!--Integralçao-->
    </main>
</body>
    <?php echo $headjs ?>
</html>