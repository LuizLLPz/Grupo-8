const doacoes_cards = document.querySelector('.doacoes_cards');

$.ajax({
    type: "GET",
    url: "api/doacao",
    success: function (response) {
        doacoes_cards.innerHTML = ""

        response.forEach(({titulo, data, descricao, categoria, usuario, foto_perfil, foto}) => {
            // Imagem   for example     <img src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjNy7KHhM_eAhWGzIMKHUg2CdUQjRx6BAgBEAU&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F569098237501098984%2F&psig=AOvVaw2X_qZzZ_X_X_X_XQZz_Z_E&ust=1560795909824000" alt="">
            doacoes_cards.innerHTML += `
            <div class="card">
                <div class="card_anuncio">
                    <div class="card_anuncio-texto"> 
                        <h1 class="texto_card titulo">${titulo}</h1>
                        <h3 class="texto_card categoria">Sem categoria</h3>
                        <h3 class="texto_card data">${data.split('-').reverse().join('/')}</h3>
                        <p class="descricao">${descricao}</p>
                    </div>
                    
                    <div class="card_anuncio-img">
                        <div class="img-card">
                            <div class="fundo_perfil">
                                <div class="foto_perfil_doacao">
                                    <img src="${foto_perfil != null  ? `data:imag/png;base64, ${foto}` : 
                                    "./client/assets/images/perfil-de-usuario.png"}" alt=""> 
                                </div>
                            </div>
                        </div>
                        <div class="azul">
                            <p class="texto_doacao nome_usuario">${usuario}</p>
                            <p class="texto_doacao denunciar">Denunciar</p>
                            <div class="foto_anuncio_daocao">
                                <img class="imagem_doacao" src="data:image/png;base64, ${foto}" alt="">
                            </div>
                        </div>
                    </div>
            </div>
            `
        });
    }
});

const img = document.getElementById("img")

img.addEventListener('click', () => { console.log(img);})