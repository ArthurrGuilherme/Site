function iniciarContagem(idContador, maxValor, intervalo) {
    let contadorElement = document.getElementById(idContador);
    let contagem = 0;

    contadorElement.style.display = 'block';
    contadorElement.textContent = contagem;

    const interval = setInterval(() => {
        if (contagem < maxValor) {
            contagem++;
            contadorElement.textContent = contagem;
        } else {
            clearInterval(interval);
        }
    }, intervalo);
}

document.getElementById('sessaocliente').addEventListener('mouseenter', () => {
    iniciarContagem('contador01', 51, 100);
    iniciarContagem('contador02', 27, 190);
    iniciarContagem('contador03', 178, 30);
    iniciarContagem('contador04', 321, 17);
});