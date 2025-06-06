<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="/PI/telas/cadastroprof/style/style.css">
    <script>
    // Busca automática de endereço pelo CEP usando ViaCEP
    function buscarCEP() {
        const cep = document.getElementById('cep').value.replace(/\D/g, '');
        if (cep.length === 8) {
            fetch(`https://viacep.com.br/ws/${cep}/json/`)
                .then(response => response.json())
                .then(data => {
                    if (!data.erro) {
                        document.getElementById('rua').value = data.logradouro || '';
                        document.getElementById('bairro').value = data.bairro || '';
                        document.getElementById('cidade').value = data.localidade || '';
                        document.getElementById('estado').value = data.uf || '';
                    }
                });
        }
    }

    function mostrarFormulario() {
        var tipo = document.getElementById('tipo_cadastro').value;
        document.getElementById('form-aluno').style.display = tipo === 'aluno' ? 'block' : 'none';
        document.getElementById('form-usuario').style.display = tipo === 'usuario' ? 'block' : 'none';
        document.getElementById('form-professor').style.display = tipo === 'professor' ? 'block' : 'none';
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
        <h2>Cadastro</h2>
        <div style="margin-bottom: 24px;">
            <label for="tipo_cadastro"><strong>Tipo de Cadastro:</strong></label>
            <select id="tipo_cadastro" name="tipo_cadastro" onchange="mostrarFormulario()">
                <option value="">Selecione...</option>
                <option value="aluno">Aluno</option>
                <option value="usuario">Usuário</option>
                <option value="professor">Professor</option>
            </select>
        </div>

        <!-- Formulário de Aluno -->
        <form id="form-aluno" style="display:none;">
            <h3>Cadastro de Aluno</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="nome_social">Nome Social</label>
                    <input type="text" id="nome_social" name="nome_social" placeholder="(opcional)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required placeholder="exemplo@email.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" maxlength="14" required placeholder="000.000.000-00">
                </div>
                <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento</label>
                    <input type="date" id="data_nascimento" name="data_nascimento" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nome_mae">Nome da Mãe</label>
                    <input type="text" id="nome_mae" name="nome_mae" required>
                </div>
                <div class="form-group">
                    <label for="cpf_mae">CPF da Mãe</label>
                    <input type="text" id="cpf_mae" name="cpf_mae" maxlength="14" required placeholder="000.000.000-00">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nome_pai">Nome do Pai</label>
                    <input type="text" id="nome_pai" name="nome_pai">
                </div>
                <div class="form-group">
                    <label for="cpf_pai">CPF do Pai</label>
                    <input type="text" id="cpf_pai" name="cpf_pai" maxlength="14" placeholder="000.000.000-00">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" id="nacionalidade" name="nacionalidade" required>
                </div>
                <div class="form-group">
                    <label for="naturalidade">Naturalidade</label>
                    <input type="text" id="naturalidade" name="naturalidade" placeholder="Cidade/Estado de nascimento" required>
                </div>
            </div>
            <h3 style="margin-top:24px;">Endereço</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9" required onblur="buscarCEP()" placeholder="00000-000">
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" name="rua" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" maxlength="2" required>
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <!-- Formulário de Usuário -->
        <form id="form-usuario" style="display:none;">
            <h3>Cadastro de Usuário</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_nome">Nome Completo</label>
                    <input type="text" id="usuario_nome" name="usuario_nome" required>
                </div>
                <div class="form-group">
                    <label for="usuario_nome_social">Nome Social</label>
                    <input type="text" id="usuario_nome_social" name="usuario_nome_social" placeholder="(opcional)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_email">E-mail</label>
                    <input type="email" id="usuario_email" name="usuario_email" required placeholder="exemplo@email.com">
                </div>
                <div class="form-group">
                    <label for="usuario_cpf">CPF</label>
                    <input type="text" id="usuario_cpf" name="usuario_cpf" maxlength="14" required placeholder="000.000.000-00">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_nacionalidade">Nacionalidade</label>
                    <input type="text" id="usuario_nacionalidade" name="usuario_nacionalidade" required>
                </div>
                <div class="form-group">
                    <label for="usuario_naturalidade">Naturalidade</label>
                    <input type="text" id="usuario_naturalidade" name="usuario_naturalidade" placeholder="Cidade/Estado de nascimento" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_tipo">Tipo de Usuário</label>
                    <select id="usuario_tipo" name="usuario_tipo" required>
                        <option value="">Selecione...</option>
                        <option value="admin">Administrador</option>
                        <option value="professor">Professor</option>
                        <option value="secretaria">Secretaria</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="usuario_data_nascimento">Data de Nascimento</label>
                    <input type="date" id="usuario_data_nascimento" name="usuario_data_nascimento" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_login">Login</label>
                    <input type="text" id="usuario_login" name="usuario_login" required>
                </div>
                <div class="form-group">
                    <label for="usuario_senha">Senha</label>
                    <input type="password" id="usuario_senha" name="usuario_senha" required>
                </div>
            </div>
            <h3 style="margin-top:24px;">Endereço</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_cep">CEP</label>
                    <input type="text" id="usuario_cep" name="usuario_cep" maxlength="9" required onblur="buscarCEP()" placeholder="00000-000">
                </div>
                <div class="form-group">
                    <label for="usuario_rua">Rua</label>
                    <input type="text" id="usuario_rua" name="usuario_rua" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_numero">Número</label>
                    <input type="text" id="usuario_numero" name="usuario_numero" required>
                </div>
                <div class="form-group">
                    <label for="usuario_bairro">Bairro</label>
                    <input type="text" id="usuario_bairro" name="usuario_bairro" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="usuario_cidade">Cidade</label>
                    <input type="text" id="usuario_cidade" name="usuario_cidade" required>
                </div>
                <div class="form-group">
                    <label for="usuario_estado">Estado</label>
                    <input type="text" id="usuario_estado" name="usuario_estado" maxlength="2" required>
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>

        <form id="form-professor" style="display:none;">
            <h3>Cadastro de Professor</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="prof_nome">Nome Completo</label>
                    <input type="text" id="prof_nome" name="prof_nome" required>
                </div>
                <div class="form-group">
                    <label for="prof_nome_social">Nome Social</label>
                    <input type="text" id="prof_nome_social" name="prof_nome_social" placeholder="(opcional)">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="prof_email">E-mail</label>
                    <input type="email" id="prof_email" name="prof_email" required placeholder="exemplo@email.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="prof_cpf">CPF</label>
                    <input type="text" id="prof_cpf" name="prof_cpf" maxlength="14" required placeholder="000.000.000-00">
                </div>
                <div class="form-group">
                    <label for="prof_nacionalidade">Nacionalidade</label>
                    <input type="text" id="prof_nacionalidade" name="prof_nacionalidade" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="prof_naturalidade">Naturalidade</label>
                    <input type="text" id="prof_naturalidade" name="prof_naturalidade" placeholder="Cidade/Estado de nascimento" required>
                </div>
                <div class="form-group">
                    <label for="prof_instituicao_formacao">Instituição de Formação</label>
                    <input type="text" id="prof_instituicao_formacao" name="prof_instituicao_formacao" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="prof_nivel_escolaridade">Nível de Escolaridade</label>
                    <input type="text" id="prof_nivel_escolaridade" name="prof_nivel_escolaridade" placeholder="Ex: Graduação, Mestrado, Doutorado" required>
                </div>
                <div class="form-group">
                    <label for="prof_formacao_academica">Formação Acadêmica</label>
                    <input type="text" id="prof_formacao_academica" name="prof_formacao_academica" placeholder="Ex: Licenciatura em Matemática" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="prof_disciplina">Disciplina</label>
                    <input type="text" id="prof_disciplina" name="prof_disciplina" required>
                </div>
            </div>
            <h3 style="margin-top:24px;">Endereço</h3>
            <div class="form-row">
                <div class="form-group">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9" required onblur="buscarCEP()" placeholder="00000-000">
                </div>
                <div class="form-group">
                    <label for="rua">Rua</label>
                    <input type="text" id="rua" name="rua" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero" required>
                </div>
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input type="text" id="bairro" name="bairro" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade" required>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado" maxlength="2" required>
                </div>
            </div>
            <button type="submit">Salvar</button>
        </form>
    </div>
    <script>
        // Exibe o formulário correto ao recarregar a página se já houver valor selecionado
        window.onload = function() {
            mostrarFormulario();
        }
    </script>
</body>
</html>