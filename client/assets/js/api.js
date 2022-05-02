function logout() {
    $.ajax(
        {
            type: 'GET',
            url: 'api/deslogar',
        }
    );
    window.location.href = '/grupo/'

}

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
                    alert("Erro: " + resp.error);
                } else {
                    window.location.href = '/grupo/perfil';
                }
            }
        }
    );
});




