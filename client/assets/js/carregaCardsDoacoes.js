const doacoes_cards = document.querySelector('.doacoes_cards');

const data = [{
    
    titulo: "Xto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Texto Text", 
    categoria: "1",
    data: "01/01/2019",
    descricao: "Ssumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/200/100",
},
]

doacoes_cards.innerHTML = ""

data.forEach(element => {

    doacoes_cards.innerHTML += `
    <div class="card">
        <div class="card_anuncio">
            <div class="card_anuncio-texto"> 
                <h1 class="texto_card titulo">${element.titulo}</h1>
                <h3 class="texto_card categoria">${element.categoria}</h3>
                <h3 class="texto_card data">${element.data}</h3>
                <p class="descricao">${element.descricao}</p>
            </div>
            
            <div class="card_anuncio-img">
                <div class="fundo_perfil">
                    <div class="foto_perfil_doacao">
                    <img src="foto_perfil" src="images/perfil.jpg">
                </div>
            </div>
        
                <div class="azul">
                    <div class="foto_anuncio_daocao">
                        <p class="texto_doacao nome_usuario">Usuario</p>
                        <p class="texto_doacao avaliacao">Avaliação</p>
                        <img class="imagem_doacao" src="${element.imagem}">
                    </div>
                </div>
            </div>
    </div>
    `
});

const img = document.getElementById("img")

img.addEventListener('click', () => { console.log(img);})