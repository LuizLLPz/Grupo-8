const btnLogin = document.querySelectorAll('.cabecalho_btn');

btnLogin.forEach(btn => {
    btn.addEventListener('click', () => {
        if (!window.location.href.includes('login')) {
            window.location = '/grupo/login';
        }
    });
});

const icon = document.getElementById("icon-home");

const home = document.getElementById("cabecalho_conteudo");
icon.addEventListener("mousedown", () => {
  home.classList.toggle("ativado");
});