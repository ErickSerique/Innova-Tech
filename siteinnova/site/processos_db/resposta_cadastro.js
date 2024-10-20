document.getElementById('formCadastro').addEventListener('submit', function(event) {
    var checkbox = document.getElementById('form2Example3cg');
    var errorMessage = document.getElementById('error-message');
    
    if (!checkbox.checked) {
      event.preventDefault(); // Impede o envio do formulário
      errorMessage.style.display = 'block'; // Exibe a mensagem de erro
    } else {
      errorMessage.style.display = 'none'; // Esconde a mensagem de erro se o checkbox estiver marcado
    }
  });