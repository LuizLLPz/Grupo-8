function logout() {
    $.ajax(
        {
            type: 'DELETE',
            url: 'api/sessao',
        }
    );
    window.location.href = '/grupo/'

}

$('.form_atualizar').submit(function (e) {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(e.target).entries());
    $.ajax(
        {
            type: 'PUT',
            url: 'api/usuario',
            data: JSON.stringify(data),
            success: function (data) {
                console.log("resultado "+ JSON.stringify(data));
                $('#user').text(data.nome);
            }
        }
    );
});

$('.form_login').submit(function (e) {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(e.target).entries());
    $.ajax(
        {
            type: 'POST',
            url: 'api/sessao',
            data: data,
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




