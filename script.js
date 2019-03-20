function validar(frmteste) {
    var nome = fmrteste.nome.value;
    var idade = fmrteste.idade.value;
    var cidade = fmrteste.cidade.value;
    var cpf = fmrteste.cpf.value;
    var email = fmrteste.email.value;
    var mensagem = fmrteste.mensagem.value;


    if (nome === '' || nome.length < 3) {
        alert("Por favor, indique o seu nome corretamente");
        return false;
    }

    if (idade === '' || (idade.value < 0 || idade.value > 150)) {
        alert("Por favor, indique a sua idade corretamente");
        return false;
    }

    if (cidade === '' || cidade.value < 3) {
        alert("Por favor, indique a sua cidade corretamente");
        return false;
    }

    if (cpf === '' || (cpf.length < 10 || cpf.length > 11)) {  // 123 123 123 23
        alert("Por favor, indique o seu CPF corretamente");
        return false;
    }

    if ((email === '') || (fmrteste.email.includes('@')) || (fmrteste.email.includes('.com'))) {
        alert("Por favor, indique o seu email corretamente");
        return false;
    }
    if (mensagem === '' || mensagem.value < 1) {
        alert("Por favor, deixa uma mensagem para nós");
        return false;
    }
}