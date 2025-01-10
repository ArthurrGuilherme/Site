<?php 
    include '../shared/shared.php';
    include '../shared/head.php';
    include '../shared/Lps.php';
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendex - Painel</title>
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
    <?php echo $headpainel ?>
            <!--Main-->
                <main class="col">
                    <div class="container">
                        <h3 class="p-2">Vagas Vendex</h3>
                        <form method="POST" action="../sql/create.php">
                            <div class="">
                                <label for="titulo" class="form-label"></label>
                                <input placeholder="Vaga disponivel" type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="mb-1">
                                <label for="descricao" class="form-label"></label>
                                <textarea placeholder="Adicione as responsabilidades da vaga:" class="form-control" id="descricao" name="descricao" rows="4" required></textarea>
                            </div>
                            <div class="mb-1">
                                <label for="requisitos" class="form-label"></label>
                                <textarea placeholder="Adicione os Requisitos da vaga:" class="form-control" id="requisitos" name="requisitos" rows="4" required></textarea>
                            </div>
                            <div class="mb-1">
                                <label for="beneficios" class="form-label"></label>
                                <textarea placeholder="Adicione os oferecemos da vaga:" class="form-control" id="beneficios" name="beneficios" rows="4" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </main>
            <!--Main-->
        </div>
    </div>
</body>
</html>