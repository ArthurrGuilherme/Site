<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $requisitos = $_POST['requisitos'];
    $beneficios = $_POST['beneficios'];

    $sql = "INSERT INTO vagas (titulo, descricao, requisitos, beneficios) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$titulo, $descricao, $requisitos, $beneficios]);

    header('Location: ../vaga.php');
}
?>
