const editar_card = document.getElementById('editar_card')
const editarAnuncio = document.querySelectorAll('#editarAnuncio')

const editarCard_fechar = document.getElementById('editarCard_fechar')

editarCard_fechar.addEventListener('click', () => {

    editar_card.classList.toggle('editar_card-dados-ativado')

})


editarAnuncio.forEach(anuncio => anuncio.addEventListener('click', () => {
    
    editar_card.classList.toggle('editar_card-dados-ativado')

}))

function toogleEditarCard(){
    editar_card.classList.toggle('editar_card-dados-ativado')
}

// editarAnuncio.addEventListener('click', ()=>{
//     console.log(editarAnuncio);
// })
