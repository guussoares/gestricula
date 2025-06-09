<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/PI/telas/cadastroprof/style/style.css">
    <script>
    function mostrarFormulario() {
        var tipo = document.getElementById('tipo_cadastro').value;
        document.getElementById('form-turma').style.display = tipo === 'turma' ? 'block' : 'none';
        document.getElementById('form-disciplina').style.display = tipo === 'disciplina' ? 'block' : 'none';
        document.getElementById('form-curso').style.display = tipo === 'curso' ? 'block' : 'none';
    }
    </script>
</head>
<body>
    <header class="topo">
        <div class="logo">
            <img src="/PI/telas/home/imgs/logosanquim.webp" width="200px" />
        </div>
    </header>
    <div class="onda-topo">
        <svg width="100%" height="250px" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="none">
            <path fill="#ffc544" d="M0,0 C300,100 1140,0 1440,100 L1440,0 L0,0 Z"></path>
            <path fill="#ffd984" d="M0,100 C400,200 1040,50 1440,150 L1440,0 L0,0 Z" opacity="0.8"></path>
            <path fill="#ffc544" d="M0,150 C500,250 940,150 1440,200 L1440,0 L0,0 Z" opacity="0.3"></path>
        </svg>
    </div>
    <div class="centro">
        <h2>Cadastro Docente</h2>
        <div style="margin-bottom: 24px;">
            <label for="tipo_cadastro"><strong>Tipo de Cadastro:</strong></label>
            <select id="tipo_cadastro" name="tipo_cadastro" onchange="mostrarFormulario()">
                <option value="">Selecione...</option>
                <option value="turma">Turma</option>
                <option value="disciplina">Disciplina</option>
                <option value="curso">Curso</option>
            </select>
        </div>

        <!-- Formulário de Turma -->
        <form id="form-turma" style="display:none;">
            <h3>Cadastro de Turma</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="codigo_turma">Código da Turma</label>
                    <input type="text" id="codigo_turma" name="codigo_turma" required placeholder="Ex: ADS2025N1">
                </div>
                <div class="form-group">
                    <label for="curso_vinculado">Curso Vinculado</label>
                    <input type="text" id="curso_vinculado" name="curso_vinculado" required placeholder="Ex: Análise e Desenvolvimento de Sistemas">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="semestre_ano">Semestre/Ano Letivo</label>
                    <input type="text" id="semestre_ano" name="semestre_ano" required placeholder="Ex: 1º semestre de 2025">
                </div>
                <div class="form-group">
                    <label for="turno_turma">Turno</label>
                    <select id="turno_turma" name="turno_turma" required>
                        <option value="">Selecione...</option>
                        <option value="matutino">Matutino</option>
                        <option value="vespertino">Vespertino</option>
                        <option value="noturno">Noturno</option>
                        <option value="integral">Integral</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="disciplinas_ofertadas">Disciplinas Ofertadas</label>
                    <textarea id="disciplinas_ofertadas" name="disciplinas_ofertadas" rows="2" placeholder="Ex: Matemática Aplicada - Prof. João; Lógica - Prof. Maria"></textarea>
                </div>
                <div class="form-group">
                    <label for="professor_responsavel">Professor Responsável / Orientador</label>
                    <input type="text" id="professor_responsavel" name="professor_responsavel" placeholder="Nome do professor">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="horario_aulas">Horário das Aulas</label>
                    <textarea id="horario_aulas" name="horario_aulas" rows="2" placeholder="Ex: Seg/Qua 19h-21h"></textarea>
                </div>
                <div class="form-group">
                    <label for="numero_vagas">Número de Vagas</label>
                    <input type="number" id="numero_vagas" name="numero_vagas" min="1" required placeholder="Ex: 40">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="periodo_inicio">Período de Início</label>
                    <input type="month" id="periodo_inicio" name="periodo_inicio" required>
                </div>
                <div class="form-group">
                    <label for="periodo_fim">Período de Fim</label>
                    <input type="month" id="periodo_fim" name="periodo_fim" required>
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <!-- Formulário de Disciplina -->
        <form id="form-disciplina" style="display:none;">
            <h3>Cadastro de Disciplina</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="codigo_disciplina">Código da Disciplina</label>
                    <input type="text" id="codigo_disciplina" name="codigo_disciplina" required placeholder="Ex: MAT101">
                </div>
                <div class="form-group">
                    <label for="nome_disciplina">Nome da Disciplina</label>
                    <input type="text" id="nome_disciplina" name="nome_disciplina" required placeholder="Ex: Matemática Aplicada">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="carga_horaria">Carga Horária Total</label>
                    <input type="number" id="carga_horaria" name="carga_horaria" min="1" required placeholder="Ex: 60">
                </div>
                <div class="form-group">
                    <label for="tipo_disciplina">Tipo</label>
                    <select id="tipo_disciplina" name="tipo_disciplina" required>
                        <option value="">Selecione...</option>
                        <option value="teorica">Teórica</option>
                        <option value="pratica">Prática</option>
                        <option value="mista">Mista</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="descricao_ementa">Descrição / Ementa</label>
                    <textarea id="descricao_ementa" name="descricao_ementa" rows="2" placeholder="Breve descrição da disciplina"></textarea>
                </div>
                <div class="form-group">
                    <label for="pre_requisitos">Pré-requisitos</label>
                    <input type="text" id="pre_requisitos" name="pre_requisitos" placeholder="(opcional)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="departamento_responsavel_disc">Departamento Responsável</label>
                    <input type="text" id="departamento_responsavel_disc" name="departamento_responsavel_disc" required placeholder="Ex: Departamento de Exatas">
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <!-- Formulário de Curso -->
        <form id="form-curso" style="display:none;">
            <h3>Cadastro de Curso</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="codigo_curso">Código do Curso</label>
                    <input type="text" id="codigo_curso" name="codigo_curso" required placeholder="Ex: ADS">
                </div>
                <div class="form-group">
                    <label for="nome_curso">Nome do Curso</label>
                    <input type="text" id="nome_curso" name="nome_curso" required placeholder="Ex: Análise e Desenvolvimento de Sistemas">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="descricao_curso">Descrição</label>
                    <textarea id="descricao_curso" name="descricao_curso" rows="2" placeholder="Breve descrição do curso"></textarea>
                </div>
                <div class="form-group">
                    <label for="grau_curso">Grau</label>
                    <select id="grau_curso" name="grau_curso" required>
                        <option value="">Selecione...</option>
                        <option value="tecnologo">Tecnólogo</option>
                        <option value="bacharelado">Bacharelado</option>
                        <option value="licenciatura">Licenciatura</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="duracao_curso">Duração</label>
                    <input type="text" id="duracao_curso" name="duracao_curso" required placeholder="Ex: 6 semestres">
                </div>
                <div class="form-group">
                    <label for="coordenador_curso">Coordenador do Curso</label>
                    <input type="text" id="coordenador_curso" name="coordenador_curso" required placeholder="Nome do coordenador">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="departamento_responsavel_curso">Departamento Responsável</label>
                    <input type="text" id="departamento_responsavel_curso" name="departamento_responsavel_curso" required placeholder="Ex: Departamento de Exatas">
                </div>
                <div class="form-group">
                    <label for="grade_curricular">Grade Curricular</label>
                    <textarea id="grade_curricular" name="grade_curricular" rows="2" placeholder="Ex: MAT101, LÓGICA, PROGRAMAÇÃO..."></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="turnos_curso">Turno(s)</label>
                    <select id="turnos_curso" name="turnos_curso" required>
                        <option value="">Selecione...</option>
                        <option value="matutino">Matutino</option>
                        <option value="vespertino">Vespertino</option>
                        <option value="noturno">Noturno</option>
                        <option value="integral">Integral</option>
                    </select>
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>
    <script>
        window.onload = function() {
            mostrarFormulario();
        }
    </script>
</body>
</html>