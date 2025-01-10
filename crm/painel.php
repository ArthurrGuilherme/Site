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
                        <h1 class="p-2">Vagas Vendex</h1>
                        <form method="POST" action="../sql/create.php">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <input type="text" class="form-control" id="titulo" name="titulo" required>
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <textarea class="form-control" id="descricao" name="descricao" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="requisitos" class="form-label">Requisitos</label>
                                <textarea class="form-control" id="requisitos" name="requisitos" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="beneficios" class="form-label">Benefícios</label>
                                <textarea class="form-control" id="beneficios" name="beneficios" rows="5" required></textarea>
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