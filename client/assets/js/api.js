function logout() {
    $.ajax(
        {
            type: 'GET',
            url: 'api/deslogar',
        }
    );
    window.location.href = '/grupo/'

}

$(".form_cadastro").submit(function (e){
    e.preventDefault();
    const data = Object.fromEntries(new FormData(e.target).entries());
    $.ajax(
        {
            type: 'POST',
            url: 'api/usuario',
            data: data,
        }
    );
    
    window.location.href = '/grupo/login';
    alert('Cadastro concluido')
})

function setUser() {
    $.ajax(
        {
            type: 'PATCH',
            url: 'api/usuario',
            success: function (data) {
                $('#user').text(data.nome);
            }
        }
    );
}

$('.form_login').submit(function (e) {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(e.target).entries());
    $.ajax(
        {
            type: 'POST',
            url: 'api/sessao',
            data,
            success: function (resp) {
                if(resp.error) {
                    const form_erro = document.getElementById('form_erro-cont')
                    form_erro.parentElement.classList.toggle('form_span-erro')
                } else {
                    window.location.href = '/grupo/perfil';
                }
            }
        }
    );
});




