//Editar aqui :)

export const btn_excluir_card = () => {
    const cardConfig_excluir = document.querySelectorAll(".card_config-excluir");
    cardConfig_excluir.forEach(element => {
        element.addEventListener("click", ({target}) => {
            swal({
                title: 'Você tem certeza em deletar o anuncio?',
                text: 'Essa ação não pode ser revertida!',
                icon: 'warning',
                buttons: true,
                dangerMode: true,
        
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax(
                        {
                            type: 'DELETE',
                            data: "id="+target.childNodes[1].textContent,
                            url: 'api/doacao',
                        }
                    );
                    swal('Anuncio excluído com sucesso', 'texto', 'success').then(()=>{
                        window.location. reload();
                    })
                    $('.swal-text').html(''+ $('.perfil_nome').text() +' <span>&#128557</span>');
                } else {
                    swal('Você cancelou a exclusão');
                }
            });
        })
    });
}