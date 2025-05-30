<?php
$host = "localhost";
$usuario = "root"; // ou outro usuário
$senha = "Murillo10@";       // ou a senha do seu MySQL
$banco = "sistema_escolar";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}
?>
