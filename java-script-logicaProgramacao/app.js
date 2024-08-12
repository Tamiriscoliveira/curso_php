alert('Bem Vindo ao Jogo do Número Secreto !!!');
let numeroSecreto = parseInt(Math.random() * 10 + 1);
console.log(numeroSecreto);
let chute;
let tentativas = 1

//enquanto chute não for igual ao numero secreto
while (chute != numeroSecreto) {
    chute = prompt('Escolha um número entre 1 e 5');
    // se o chute for igual ao numero secreto
    if (chute == numeroSecreto) {
        break;
    } else {
        if (chute > numeroSecreto) {
            alert(`o numero secreto é menor que  o ${chute}`);
        } else {
            alert(`o numero secreto é maior que o ${chute}`);
        }
        //tentativas = tentativas + 1;
        tentativas++;
    }
}

//operador ternario
let palavraTentativa = tentativas > 1 ? 'tentativas' : 'tentativa';
alert(`Isso ai! você descobriu o número secreto ${numeroSecreto} com ${tentativas} ${palavraTentativa}`);

//if (tentativas > 1) {
//    alert(`Isso ai! você descobriu o número secreto ${numeroSecreto} com ${tentativas} tentativas`);
//} else {
//    alert(`Isso ai! você descobriu o número secreto ${numeroSecreto} com ${tentativas} tentativa`);
//}









