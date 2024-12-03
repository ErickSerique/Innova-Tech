const form = document.getElementById("form");
const senha = document.getElementById("senha");
const login = document.getElementById("login");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    if (checkInputs()) {
        form.submit(); // Envia o formulário se as validações forem concluídas
    }
});

function checkInputs() {
    const loginValue = login.value.trim();
    const senhaValue = senha.value.trim();
    let isValid = true;

    if (loginValue === "") {
        setErrorFor(login, "O email é obrigatório.");
        isValid = false;
    } else if (!checkEmail(loginValue)) {
        setErrorFor(login, "Formato de email inválido.");
        isValid = false;
    } else {
        setSuccessFor(login);
    }

    if (senhaValue === "") {
        setErrorFor(senha, "A senha é obrigatória.");
        isValid = false;
    } else if (senhaValue.length < 6) {
        setErrorFor(senha, "A senha precisa ter no mínimo 6 caracteres.");
        isValid = false;
    } else {
        setSuccessFor(senha);
    }

    return isValid; // Retorna true apenas se todos os campos forem válidos
}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector("small");
    small.innerText = message;
    formControl.className = "form-outline error";
}

function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = "form-outline success";
}

function checkEmail(email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

