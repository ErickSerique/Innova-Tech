const form = document.getElementById("form");
const senha = document.getElementById("senha");
const login = document.getElementById("login");

form.addEventListener("submit", (e) => {
    e.preventDefault();
    checkInputs();
});

function checkInputs() {
    const loginValue = login.value;
    const senhaValue = senha.value;

    if (loginValue === "") {
        setErrorFor(login, "O nome de login é obrigatório.");
    } else if (loginValue.length < 6) {
        setErrorFor(login, "O login precisa ser maior que 6 caracteres.");
    } else {
        setSuccessFor(login);
    }

    if (senhaValue === "") {
        setErrorFor(senha, "A senha é obrigatória.");
    } else if (senhaValue.length < 6) {
        setErrorFor(senha, "A senha precisa ter no mínimo 6 caracteres.");
    } else {
        setSuccessFor(senha);
    }

    const formControls = form.querySelectorAll(".form-outline");
    const formIsValid = [...formControls].every((formControl) => {
        return formControl.className === "form-outline success";
    });

    if (formIsValid) {
        console.log("O formulário está 100% válido!");
        window.location.href = "";
    }
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
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

