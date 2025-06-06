<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Professor</title>
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
        <h2>Cadastro de Professor</h2>
        <form>
            <div class="form-row">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required placeholder="exemplo@email.com">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" maxlength="14" required required placeholder="000.000.000-00">
                </div>
                <div class="form-group">
                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" id="nacionalidade" name="nacionalidade" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="naturalidade">Naturalidade</label>
                    <input type="text" id="naturalidade" name="naturalidade" placeholder="Cidade/Estado de nascimento" required>
                </div>
                <div class="form-group">
                    <label for="instituicao_formacao">Instituição de Formação</label>
                    <input type="text" id="instituicao_formacao" name="instituicao_formacao" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="nivel_escolaridade">Nível de Escolaridade</label>
                    <input type="text" id="nivel_escolaridade" name="nivel_escolaridade" placeholder="Ex: Graduação, Mestrado, Doutorado" required>
                </div>
                <div class="form-group">
                    <label for="formacao_academica">Formação Acadêmica</label>
                    <input type="text" id="formacao_academica" name="formacao_academica" placeholder="Ex: Licenciatura em Matemática" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="disciplina">Disciplina</label>
                    <input type="text" id="disciplina" name="disciplina" required>
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
</body>
</html>