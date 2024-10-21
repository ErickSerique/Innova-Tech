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

document.getElementById('submitBtn').addEventListener('click', function() {
  // Obtenção de elementos
  var name = document.getElementById('form3Example1cg').value.trim();
  var email = document.getElementById('form3Example3cg').value.trim();
  var password = document.getElementById('form3Example4cg').value;
  var confirmPassword = document.getElementById('form3Example4cdg').value;
  var checkbox = document.getElementById('form2Example3cg');
  
  // Mensagens de erro
  var nameError = document.getElementById('nameError');
  var emailError = document.getElementById('emailError');
  var passwordError = document.getElementById('passwordError');
  var confirmPasswordError = document.getElementById('confirmPasswordError');
  var checkboxError = document.getElementById('checkboxError');

  // Regex para validação de email
  var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
  
  // Estado de validação
  var isValid = true;

  // Validação do nome (não pode estar vazio)
  if (name === "") {
      nameError.style.display = 'block';
      isValid = false;
      event.preventDefault();
  } else {
      nameError.style.display = 'none';
  }

  // Validação do email
  if (email === "" || !emailPattern.test(email)) {
      emailError.style.display = 'block';
      isValid = false;
      event.preventDefault();
  } else {
      emailError.style.display = 'none';
  }

  // Validação da senha (mínimo de 6 caracteres)
  if (password.length < 6) {
      passwordError.style.display = 'block';
      isValid = false;
      event.preventDefault();
  } else {
      passwordError.style.display = 'none';
  }

  // Validação da confirmação de senha
  if (password !== confirmPassword) {
      confirmPasswordError.style.display = 'block';
      isValid = false;
      event.preventDefault();
  } else {
      confirmPasswordError.style.display = 'none';
  }

  // Validação do checkbox (obrigatório)
  if (!checkbox.checked) {
      checkboxError.style.display = 'block';
      isValid = false;
      event.preventDefault();
  } else {
      checkboxError.style.display = 'none';
  }

  // Se todas as validações forem bem-sucedidas, envia o formulário
  if (isValid) {
      document.getElementById('registrationForm').submit();
  }
});