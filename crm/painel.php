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
    <head>
        <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Vendex Company</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <span class="ms-1 d-none d-sm-inline">Site</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" class="nav-link px-0 align-middle">
                                <span class="ms-1 d-none d-sm-inline">Blog</span> </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <span class="ms-1 d-none d-sm-inline">Cases</span></a>
                        </li>
                        <li>
                            <a href="../sql/vagasbd.php" class="nav-link px-0 align-middle ">
                                <span class="ms-1 d-none d-sm-inline">Vagas</span>
                            </a>
                        </li>
                    </ul>
                <hr>
                <div class="dropdown pb-4">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1">loser</span>
                    </a>
                </div>
                </div>
            </div>
    </head>
            <!--Main-->
                <main class="col py-3">
                    <div class="container mt-5">
                        <h1>Adicionar Vaga</h1>
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