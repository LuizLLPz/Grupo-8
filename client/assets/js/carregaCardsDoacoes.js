const doacoes_cards = document.querySelector('.doacoes_cards');

$.ajax({
    type: "GET",
    url: "api/doacao",
    success: function (response) {
        console.log(response);
        doacoes_cards.innerHTML = ""

        response.forEach(element => {

            doacoes_cards.innerHTML += `
            <div class="card">
                <div class="card_anuncio">
                    <div class="card_anuncio-texto"> 
                        <h1 class="texto_card titulo">${element.titulo}</h1>
                        <h3 class="texto_card categoria">Hardware</h3>
                        <h3 class="texto_card data">${element.data_publicacao}</h3>
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
                                <p class="texto_doacao nome_usuario">${element.nome}</p>
                                <p class="texto_doacao avaliacao">Avaliação</p>
                                <img class="imagem_doacao" src="data:image/png;base64, ${element.foto_arquivo}">
                            </div>
                        </div>
                    </div>
            </div>
            `
        });

     
    }, error: function (response) {
        switch (response.status) {
            case 401:
                alert("Usuário não autenticado");
                break;
            case 404:
                alert("Nenhum usuário encontrado");
                break;
            case 403:
                alert("Não autorizado mesmo tendo logado");
                break;         
            case 500:
                alert("Ocorreu um erro no servidor");
                break;
            default:
                alert("Erro desconhecido");
                break;
        }        
    }
});

const img = document.getElementById("img")

img.addEventListener('click', () => { console.log(img);})