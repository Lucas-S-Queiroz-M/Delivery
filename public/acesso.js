const isLoginValido = (login) => {
    return (login.length >= 6 && login.length <= 15);
}

const isTamanhoSenhaValido = (senha) => {
    return (senha.length >= 8 && senha.length <= 20);
}

const isSenhaComCaracterEspecial = (senha) => {
    return (senha.includes('@') || senha.includes('#') || senha.includes('&'));
}

const isDadosValidos = (login, senha) => {
    if (!isLoginValido(login)) {
        alert('O login deve ter entre 6 e 15 caracteres');
        return false;
    }
    if (!isTamanhoSenhaValido(senha)) {
        alert('A senha deve ter entre 8 e 20 caracteres');
        return false;
    }
    if (!isSenhaComCaracterEspecial(senha)) {
        alert('A senha deve ter pelo menos um desses caracteres: @, # ou &!');
        return false;
    }
    return true;
}

const signForm = document.querySelector('#signup-form')
signForm.addEventListener('submit', e => {
    e.preventDefault();
    const loginValue = signForm.login.value;
    const senhaValue = signForm.senha.value;
    if (isDadosValidos(loginValue, senhaValue)) {
        signForm.submit();
    }
})