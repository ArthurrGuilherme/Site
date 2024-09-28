let contadorElement = document.getElementById('contador');
        let contagem = 0;
        const maxClientes = 51;

        function iniciarContagem() {
            contagem = 0; // Reinicia a contagem
            contadorElement.style.display = 'block'; // Mostra o contador
            contadorElement.textContent = contagem; // Reseta o texto do contador
        
            const interval = setInterval(() => {
                if (contagem < maxClientes) {
                    contagem++;
                    contadorElement.textContent = contagem;
                } else {
                    clearInterval(interval);
                }
            }, 100); // Ajuste o intervalo conforme necessário
        }
        

        // Simulação de entrar na seção (substitua por sua lógica real)
        document.getElementById('sessaocliente').addEventListener('mouseenter', iniciarContagem);