// Validação + AJAX para login
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('loginForm');
  const globalMessage = document.getElementById('globalMessage');

  form.addEventListener('submit', async e => {
    e.preventDefault();
    clearErrors();
    globalMessage.textContent = '';

    const usuario = document.getElementById('email');
    const senha   = document.getElementById('senha');
    let valid = true;

    if (!usuario.value.trim()) {
      showError(usuario, 'Por favor, informe o usuário.');
      valid = false;
    }
    if (!senha.value.trim()) {
      showError(senha, 'Por favor, informe a senha.');
      valid = false;
    }
    if (!valid) return;

    try {
      const response = await fetch('/src/controllers/login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          usuario: usuario.value.trim(),
          senha: senha.value.trim()
        })
      });
      const data = await response.json();
      globalMessage.textContent = data.message;
      globalMessage.className = data.success ? 'success' : 'error';

      if (data.success) {
        setTimeout(() => {
          window.location.href = '/telas/home/home.php';
        }, 800);
      }
    } catch (err) {
      console.error(err);
      globalMessage.textContent = 'Erro de conexão, tente novamente.';
      globalMessage.className = 'error';
    }
  });

  function showError(input, message) {
    const span = input.nextElementSibling;
    span.textContent = message;
    input.classList.add('input-error');
  }

  function clearErrors() {
    document.querySelectorAll('.error-message')
            .forEach(el => el.textContent = '');
    document.querySelectorAll('.input-error')
            .forEach(el => el.classList.remove('input-error'));
  }
});