<?php
// Localização: C:/xampp/htdocs/PI/src/controllers/logout.php
session_start();
session_unset();
session_destroy();

// Limpa cookies de sessão (segurança extra)
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

header('Location: /PI/telas/login/login.html');
exit;
?>