function voltaPerfil(){
    window.location.href = '../grupo/perfil'
}

function btn_editar_card() {
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

const data = [{
    
    titulo: "Xto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Text", 
    categoria: "1",
    data: "01/01/2019",
    descricao: "Ssumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/200/100",
},
{
    titulo: "Titulo 2",
    categoria: "2",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/300/300",
},
{
    titulo: "Titulo 3",
    categoria: "3",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/600/300",
},
{
    titulo: "Titulo 4",
    categoria: "4",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/4000/4000",
}]

window.onload = () => {

    const perfil_card = document.getElementById("perfil_card-anuncios");
    perfil_card.innerHTML = "";
    data.forEach(element => {
        
        perfil_card.innerHTML += `
        <div class="card">
            <div class="card_config">
                <p class="card_config-editar" id ='editarAnuncio'>Editar</p>
                <p class="card_config-excluir">Excluir</p>
            </div>
            <div class="card_anuncio">
                <div class="card_anuncio-texto"> 
                    <h1 class="texto_card titulo">${element.titulo}</h1>
                    <h3 class="texto_card categoria">${element.categoria}</h3>
                    <h3 class="texto_card data">${element.data}</h3>
                    <p class="descricao">${element.descricao}</p>
                </div>
                <div class="card_anuncio-img">
                    <div class="azul">
                        <img class="imagem_doacao" src="${element.imagem}">
                    </div>
                </div>
            </div>
        </div>
        `
    });


    btn_editar_card();

    const cardConfig_excluir = document.querySelectorAll(".card_config-excluir");

    cardConfig_excluir.forEach(element => {
        element.addEventListener("click", () => {
            console.log(element)
        })
    });

}

