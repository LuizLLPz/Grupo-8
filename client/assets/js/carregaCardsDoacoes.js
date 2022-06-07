const doacoes_cards = document.querySelector('.doacoes_cards');

$.ajax({
    type: "GET",
    url: "api/doacao",
    success: function (response) {
        doacoes_cards.innerHTML = ""

        let contador = 0;
        response.forEach(element => {
            // Imagem   for example     <img src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjNy7KHhM_eAhWGzIMKHUg2CdUQjRx6BAgBEAU&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F569098237501098984%2F&psig=AOvVaw2X_qZzZ_X_X_X_XQZz_Z_E&ust=1560795909824000" alt="">
            doacoes_cards.innerHTML += `
            <div class="card">
                <div class="card_anuncio">
                    <div class="card_anuncio-texto"> 
                        <h1 class="texto_card titulo">${element.titulo}</h1>
                        <h3 class="texto_card categoria">Categotia ${contador++}</h3>
                        <h3 class="texto_card data">${element.data_publicacao}</h3>
                        <p class="descricao">${element.descricao}</p>
                        <p class="texto_card estado">Estado: EsttadoX</p>
                        <p class="texto_card cidade">Cidade: CidadeX</p>
                    </div>
                    
                    <div class="card_anuncio-img">
                        <div class="img-card">
                            <div class="fundo_perfil">
                                <div class="foto_perfil_doacao">
                                    <img src="foto_perfil" src="".jpg"> 
                                </div>
                            </div>
                        </div>
                        <div class="azul">
                            <p class="texto_doacao nome_usuario">${element.usuario}</p>
                            <p class="texto_doacao denunciar">Denunciar</p>
                            <div class="foto_anuncio_daocao">
                                <img class="imagem_doacao" src="https://picsum.photos/300/300">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `
        });
    }
});

