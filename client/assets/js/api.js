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

function resLogin() {
    $.ajax(
        {
            type: 'GET',
            url: 'api/login',
            success: function (resp) {
                console.log(resp)
            }
        }
    );
}

