function iniciarModal() {
    alert('ok');
    $('.modal').removeClass('hidden');
}

$('adicionarAnuncio').click(function () {
    //redirect to add formulario produto route
    window.location.href = '/formularioProduto';
});