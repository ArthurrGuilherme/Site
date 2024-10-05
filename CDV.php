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
    <title>Consultoria de Vendas - Vendex</title>
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
        <section  style="background: url(./img/bn-gestao.webp); background-size: cover">
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
                                <span style="padding-bottom: 2rem; font-weight: 700;">
                                    <h1>Consultoria de</h1>
                                    <h1 >Venda em Marketplace</h1>
                                </span>
                            <!--Titulo-->
                            <!--Texto-->
                                <strong ><p style="font-weight: 700; font-size: 1.1rem">A mais completa assessoria em vendas!</p>
                            <!--Texto-->
                        </article>
                    <!--Estrutura texto-->
                </section>
            <!--Apresentação-->
        </section>
    <!--Container principal das paginas estaticas-->  
    <main>
        <!--Performance-->
            <section class="p-5">
                <article>
                    <!--Texto-->
                    <div>
                        <span class="d-flex flex-column align-items-center text-center">
                            <!--Titulo-->
                                <h4 class="text-light">UM TIME DE ALTA PERFORMANCE!</h4>
                            <!--Titulo-->
                            <!--Texto-->
                                <span class="text-light">
                                    <p>Com uma equipe experiente em otimização de vendas, oferecemos o melhor treinamento para seus sellers, no</p>
                                    <p>gerenciamento do seu e-commerce nos melhores marketplaces.</p>
                                </span>
                            <!--Texto-->
                        </span>
                    </div>
                </article>
            </section>
        <!--Performance-->
        <!--Sobre Nós-->
            <section>
                <article class="container-md d-flex justify-content-evenly align-items-center">
                    <!--Texto-->
                        <span class="d-flex flex-column" id="SessaoTexto" style="color: var(--roxo-vendex); gap: 0.6rem">
                            <!--Titulo-->
                                <h4 class="text-light">Consultoria de Venda</h4>
                                <span>
                                    <h3>APRENDA COM</h3>
                                    <h3>OS MELHORES</h3>
                                    <h3>EM MARKETPLACE</h3>
                                </span>
                            <!--Titulo-->
                            <!--Legenda-->
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Contamos com uma equipe especializada e certificada no</p>
                                    <p>fornecimento de consultoria em vendas, com metodologias</p>
                                    <p>eficientes e práticas, para capacitar os seus sellers em todas as</p>
                                    <p>etapas de estruturação do seu e-commerce nas melhores</p>
                                    <p>plataformas de Marketplaces, com garantia de excelentes</p>
                                    <p>resultados.</p>
                                </span>
                                <span style="font-size: 0.8rem;" class="text-light">
                                    <p>Nossos resultados podem ser medidos pela satisfação de</p>
                                    <p>nossos clientes, comprovando nossa eficácia no gerenciamento</p>
                                    <p>de e-commerce nos mais variados segmentos, em todas as</p>
                                    <p>plataformas de marketplaces, com total sucesso.</p>
                                </span>
                            <!--Legenda-->
                        </span>    
                    <!--Texto-->
                    <!--Img-->
                        <img style="width: 35% !important; border-radius: 16px"  id="Img" src="./img/servicos-consultoria-venda.webp" alt="Imagem 01">
                    <!--Img-->
                </article>
            </section>
        <!--Sobre Nós-->
    </main>
    <!--Footer-->
        <?php echo $footer ?>  
    <!--Footer-->
</body>
    <?php echo $headjs ?>
</html>