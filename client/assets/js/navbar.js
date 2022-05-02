const btnLogin = document.querySelectorAll('.cabecalho_btn');
btnLogin.forEach(btn => {
    btn.addEventListener('click', () => {
        if (!window.location.href.includes('login')) {
            window.location = '/grupo/login';
        }
    });
});