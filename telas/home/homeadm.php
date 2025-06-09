<?php
// Página inicial do administrador
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema Escolar - Home Administrador</title>
    <link rel="stylesheet" href="style/home.css" />
    <script src="/PI/telas/home/js/script.js" defer></script>
</head>

<body>
    <header class="topo">
        <div class="onda-topo">
            <svg width="100%" height="250px" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none">
                <path fill="#ffc544" d="M0,0 C300,100 1140,0 1440,100 L1440,0 L0,0 Z"></path>
                <path fill="#ffd984" d="M0,100 C400,200 1040,50 1440,150 L1440,0 L0,0 Z" opacity="0.8"></path>
                <path fill="#ffc544" d="M0,150 C500,250 940,150 1440,200 L1440,0 L0,0 Z" opacity="0.3"></path>
            </svg>
        </div>
        <div class="logo-container">
            <img src="/PI/telas/home/imgs/logosanquim.webp" alt="Logo da Escola" class="logo" />
        </div>
    </header>
    
    <div style="padding-left:50px; padding-right:50px;">
        <a href="/PI/src/controllers/logout.php" class="logout-topo">SAIR</a>
        <nav class="menu">
            <a href="/PI/telas/home/homeadm.php">INÍCIO</a>
            <a href="/PI/telas/cadastro/cadastro.php">CADASTROS</a>
            <a href="/PI/telas/cadastrodocente/cadastrodocente.php">CADASTRO DOCENTE</a>
            <a href="/PI/telas/usuarios/usuarios.php">USUÁRIOS</a>
            <a href="/PI/telas/professores/professores.php">PROFESSORES</a>
            <a href="/PI/telas/alunos/alunos.php">ALUNOS</a>
            <a href="/PI/telas/turmas/turmas.php">TURMAS</a>
            <a href="/PI/telas/disciplinas/disciplinas.php">DISCIPLINAS</a>
            <a href="/PI/telas/cursos/cursos.php">CURSOS</a>
            <a href="/PI/telas/secretariaacademica/secretariaacademica.php">SECRETARIA</a>
            <a href="/PI/telas/relatorios/relatorios.php">RELATÓRIOS</a>
            <a href="/PI/telas/configuracoes/configuracoes.php">CONFIGURAÇÕES</a>
            <a href="/PI/telas/backup/backup.php">BACKUP</a>
            <a href="/PI/telas/logs/logs.php">LOGS</a>
            <a href="/PI/telas/avisos/avisos.php">AVISOS</a>
        </nav>
    </div>

    <main>
        <div style="text-align: center; padding: 20px;">
            <h1>Bem-vindo, Administrador!</h1>
            <p>Gerencie usuários, cadastros, cursos, turmas e configurações do sistema através do menu acima.</p>
        </div>
    </main>
    
    <footer class="rodape">
        <p>&copy; 2025 Sanquim. Todos os direitos reservados.</p>
    </footer>
</body>
</html>