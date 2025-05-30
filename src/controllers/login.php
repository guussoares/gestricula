<?php
session_start();
require_once("../db/conexao.php");

if (empty($_POST['email']) || empty($_POST['senha'])) {
    echo "Por favor, preencha email e senha.";
    exit();
}

$email = $_POST['email'];
$senha = hash("sha256", $_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $email, $senha);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $_SESSION['usuario'] = $email;
    header("Location: ../telas/home/index.html"); // ajuste para sua estrutura!
    exit();
} else {
    echo "Login inválido!";
}
?>