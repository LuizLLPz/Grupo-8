const data = [{
    titulo: "Titilo 1",
    categoria: "Cards",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/200/100",
},
{
    titulo: "Titulo 2",
    categoria: "Cards",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/300/300",
},
{
    titulo: "Titulo 3",
    categoria: "Cards",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/600/300",
},
{
    titulo: "Titulo 4",
    categoria: "Cards",
    data: "01/01/2019",
    descricao: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, illo ea impedit quaerat ab totam similique placeat excepturi nihil quo velit incidunt debitis saepe veritatis quos labore porro, dicta iste?",
    imagem: "https://picsum.photos/4000/4000",
}]

window.onload = () => {

    const perfil_card = document.getElementById("perfil_card-anuncios");
    perfil_card.innerHTML = "";
    data.forEach(element => {
        
        perfil_card.innerHTML += `
            <div class="card_anuncio">
                <div class="card_anuncio-texto"> 
                    <h1 class="texto_card titulo">${element.titulo}</h1>
                    <h3 class="texto_card categoria">${element.categoria}</h3>
                    <h3 class="texto_card data">xx/xx/xxxx</h3>
                    <p class="descricao">${element.descricao}</p>
                </div>
                <div class="card_anuncio-img">
                    <div class="azul">
                        <img class="imagem_doacao" src="${element.imagem}">
                    </div>
                </div>
                <div class="card_anuncio-config">
                    <div class= "card_anuncio-botoes">
                        dvnkvdfkj
                    </div>
                </div>
            </div>
        `
    });

    const card_anuncio = document.querySelectorAll(".card_anuncio-botoes")

    console.log(card_anuncio)
}

