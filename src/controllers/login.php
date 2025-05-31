<?php
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

$usuario = trim($data['usuario'] ?? '');
$senha   = trim($data['senha']   ?? '');

if (!$usuario || !$senha) {
    echo json_encode([
      'success' => false,
      'message' => 'Usuário e senha são obrigatórios.'
    ]);
    exit;
}

// inclui aqui seu connection.php
require_once __DIR__ . '/../../db/connection.php';

// busca hash no banco
$stmt = $pdo->prepare('SELECT senha_hash FROM usuarios WHERE usuario = ?');
$stmt->execute([$usuario]);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$row || !password_verify($senha, $row['senha_hash'])) {
    echo json_encode([
      'success' => false,
      'message' => 'Usuário ou senha inválidos.'
    ]);
    exit;
}

// tudo ok: inicia sessão e devolve sucesso
session_start();
$_SESSION['usuario'] = $usuario;

echo json_encode([
  'success' => true,
  'message' => 'Login realizado com sucesso!'
]);