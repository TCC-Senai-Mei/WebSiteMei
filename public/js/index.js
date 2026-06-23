// Executa o script assim que o DOM estiver totalmente carregado
document.addEventListener("DOMContentLoaded", () => {
    
    // 1. MAPEAMENTO DE ELEMENTOS (BOTÕES E VISÕES)
    const btnMei = document.getElementById("btn-mei");
    const btnServidor = document.getElementById("btn-servidor");
    const backButtons = document.querySelectorAll(".btn-back");

    const mainView = document.getElementById("main-view");
    const meiView = document.getElementById("mei-view");
    const servidorView = document.getElementById("servidor-view");

    // 2. FUNÇÃO AUXILIAR PARA TROCAR DE TELA
    function switchView(targetView) {
        // Remove a classe ativa de todas as visões
        mainView.classList.remove("active");
        meiView.classList.remove("active");
        servidorView.classList.remove("active");

        // Adiciona a classe ativa apenas na visão desejada
        targetView.classList.add("active");
    }

    // 3. EVENTOS DE CLIQUE PARA ENTRAR NAS TELAS DE LOGIN
    btnMei.addEventListener("click", () => {
        switchView(meiView);
    });

    btnServidor.addEventListener("click", () => {
        switchView(servidorView);
    });

    // 4. EVENTO PARA OS BOTÕES "VOLTAR"
    backButtons.forEach(button => {
        button.addEventListener("click", () => {
            switchView(mainView);
        });
    });

    // 5. FUNCIONALIDADE EXTRA: MOSTRAR/OCULTAR SENHA (ÍCONE DE OLHO)
    const togglePasswordIcons = document.querySelectorAll(".toggle-password");

    togglePasswordIcons.forEach(icon => {
        icon.addEventListener("click", function() {
            // Encontra o input de senha que está no mesmo container do ícone clicado
            const passwordInput = this.previousElementSibling;
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                this.textContent = "🙈"; // Altera o ícone para feedback visual
            } else {
                passwordInput.type = "password";
                this.textContent = "👁️";
            }
        });
    });
});