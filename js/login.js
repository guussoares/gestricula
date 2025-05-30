// Validação de formulário de login
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  const inputUsuario = document.getElementById('usuario');
  const inputSenha = document.getElementById('senha');

  form.addEventListener('submit', (e) => {
    // Limpa possíveis mensagens de erro anteriores
    clearErrors();

    let valid = true;

    // Verifica se o campo usuário não está vazio
    if (!inputUsuario.value.trim()) {
      showError(inputUsuario, 'Por favor, informe seu usuário.');
      valid = false;
    }

    // Verifica se o campo senha não está vazio
    if (!inputSenha.value.trim()) {
      showError(inputSenha, 'Por favor, informe sua senha.');
      valid = false;
    }

    // Se houver erro, previne o envio do formulário
    if (!valid) {
      e.preventDefault();
    }
  });

  function showError(input, message) {
    // Cria um elemento <span> para exibir a mensagem de erro
    const error = document.createElement('span');
    error.className = 'error-message';
    error.innerText = message;
    input.classList.add('input-error');

    // Insere a mensagem logo após o campo
    input.parentNode.insertBefore(error, input.nextSibling);
  }

  function clearErrors() {
    // Remove todas as mensagens e estilos de erro
    document.querySelectorAll('.error-message').forEach(el => el.remove());
    document.querySelectorAll('.input-error').forEach(el => el.classList.remove('input-error'));
  }
});