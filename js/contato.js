let contadorElement = document.getElementById('contador');
        let contagem = 0;
        const maxClientes = 51;

        function iniciarContagem() {
            contagem = 0; 
            contadorElement.style.display = 'block'; 
            contadorElement.textContent = contagem; 
        
            const interval = setInterval(() => {
                if (contagem < maxClientes) {
                    contagem++;
                    contadorElement.textContent = contagem;
                } else {
                    clearInterval(interval);
                }
            }, 100); 
        }
        

        
        document.getElementById('sessaocliente').addEventListener('mouseenter', iniciarContagem);