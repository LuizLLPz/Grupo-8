const editar_card = document.getElementById('editar_card');

const btn_sair = document.querySelectorAll('#btn_sair');

const voltarPerfil = document.querySelectorAll('#voltarPerfil');



// Cancelar edição / sair
voltarPerfil.forEach(element => { 

    element.addEventListener('click', () => {
        window.location.href = "/grupo/perfil";
    })
})

// Cancelar edição / sair
btn_sair.forEach(element => {
    element.addEventListener('click', () => {
        editar_card.classList.toggle('editar_card-dados-ativado')
    })
});


// Mostrar campos de edição do card
export function btn_editar_card() {
    const editar_card = document.getElementById('editar_card')
    
    const cardConfig_editar = document.querySelectorAll(".card_config-editar");
    const editarCard_fechar = document.getElementById('editarCard_fechar')

    editarCard_fechar.addEventListener('click', () => {    
        editar_card.classList.toggle('editar_card-dados-ativado')
    })
    
    cardConfig_editar.forEach(anuncio => anuncio.addEventListener('click', () => {    
        editar_card.classList.toggle('editar_card-dados-ativado')
    }))
}

