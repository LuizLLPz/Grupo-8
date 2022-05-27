function logout() {
    $.ajax(
        {
            type: 'DELETE',
            url: 'api/sessao',
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
            success: function (data) {
                if (data.status === 'sucess') {
                    swal("Concluído!", "Cadastro realizado com sucesso!", "success").then(
                        function () {
                            window.location.href = '/grupo/login';
                        }
                    );
                } else {
                    swal("Erro!", data.message, "error");
                }
            }

        }
    );
    
    
})

$('.form_atualizar').submit(function (e) {
    e.preventDefault();
    const data = Object.fromEntries(new FormData(e.target).entries());
    $.ajax(
        {
            type: 'PUT',
            url: 'api/usuario',
            data: JSON.stringify(data),
            success: function (data) {
                if (data.status === 'success') {
                    swal('Sucesso', data.message, 'success').then(() => {
                        location.reload();
                    });
                    
                } else {
                    swal('Erro', data.message, 'error');
                }
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

$('.deletar_usuario').click( function(){
    swal({
        title: 'Você tem certeza em deletar a conta?',
        text: 'Essa ação não pode ser revertida!',
        icon: 'warning',
        buttons: true,
        dangerMode: true,

    }).then((willDelete) => {
        if (willDelete) {
            $.ajax(
                {
                    type: 'DELETE',
                    url: 'api/usuario',
                }
            );
            swal('Conta excluida com sucesso', 'texto', 'success').then(()=>{
                window.location.href = '/grupo/'
            })
            $('.swal-text').html('Iremos sentir sua falta '+ $('.perfil_nome').text() +' <span>&#128557</span>');
        } else {
            swal('Você cancelou a exclusão');
        }
    });
});




