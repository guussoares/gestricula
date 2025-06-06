<?php
// Código PHP aqui se necessário
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistema Escolar - Tela Principal</title>
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
        <!-- Primeira linha de navegação -->
        <a href="/PI/telas/home/home.php">INÍCIO</a>
        <a href="/PI/telas/diario/diario.php">DIÁRIO</a>
        <a href="/PI/telas/mencoes/mencoes.php">MENÇÕES</a>
        <a href="/PI/telas/professores/professores.php">PROFESSORES</a>
        <a href="/PI/telas/cadastro/cadastro.php">CADASTRO</a>
        <a href="/PI/telas/rematricula/rematricula.php">REMATRÍCULA</a>
        <a href="/PI/telas/meucurso/meucurso.php">CURSO</a>
        <a href="/PI/telas/minhaturma/minhaturma.php">TURMA</a>
        <a href="/PI/telas/avisos/avisos.php">AVISOS</a>
        <a href="/PI/telas/meusprofessores/meusprofessores.php">PROFESSORES</a>
        <a href="/PI/telas/historicorendimento/historicorendimento.php">HISTÓRICO</a>
        <a href="/PI/telas/secretariaacademica/secretariaacademica.php">SECRETARIA</a>
        <a href="/PI/telas/muralnotas/muralnotas.php">NOTAS</a>
        <a href="/PI/telas/materiaisdidaticos/materiaisdidaticos.php">MATERIAIS</a>
        <a href="/PI/telas/disciplinasfaltas/disciplinasfaltas.php">FALTAS</a>
    </nav>
    </div>

    <main>
        <div style="flex: center; text-align: center; padding: 20px;">
            <h1>Bem-vindo ao Sistema Acadêmico</h1>
            <p>Selecione uma das opções no menu acima para navegar pelo sistema.</p>
        </div>
    <footer class="rodape">
        <p>&copy; 2025 Sanquim. Todos os direitos reservados.</p>
    </footer>
</html></body></html>