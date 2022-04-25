function logout() {
    $.ajax(
        {
            type: 'GET',
            url: 'api/deslogar',
        }
    );
    window.location.href = '/grupo/'
}