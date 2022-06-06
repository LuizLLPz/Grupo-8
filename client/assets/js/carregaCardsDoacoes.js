const doacoes_cards = document.querySelector('.doacoes_cards');

$.ajax({
    type: "GET",
    url: "api/doacao",
    success: function (response) {
        doacoes_cards.innerHTML = ""

        response.forEach(element => {

            doacoes_cards.innerHTML += `
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

        const img = document.getElementById("img")

        img.addEventListener('click', () => { console.log(img);})
    }
});

