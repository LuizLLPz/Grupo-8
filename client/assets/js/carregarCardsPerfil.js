import { btn_editar_card }  from './editarCardFunc.js';
import { btn_excluir_card } from './deletarCardFunc.js';

//Mostra os cards do usuário
const perfil_card = document.getElementById("perfil_card-anuncios");

$.ajax({
    type: "GET",
    url: "api/doacao",
    data: 'modo=autor',
    success: function (response) {
        perfil_card.innerHTML = "";
        response.forEach(({id, titulo, data, descricao, foto}) => {
        perfil_card.innerHTML += `
        <div class="card">
            <div class="card_config">
                <p class="card_config-editar" id ='editarAnuncio'>Editar
                    <span hidden>${id}</span>
                </p>
                <p class="card_config-excluir">Excluir
                    <span hidden>${id}</span>
                </p>
            </div>
            <div class="card_anuncio">
                <div class="card_anuncio-texto"> 
                    <h1 class="texto_card titulo">${titulo}</h1>
                    <h3 class="texto_card categoria">Hardware</h3>
                    <h3 class="texto_card data">${data.split('-').reverse().join('/')}</h3>
                    <p class="descricao">${descricao}</p>
                </div>
            <div class="card_anuncio-img">
                <div class="azul">
                    <img class="imagem_doacao" src="data:image/png;base64, ${foto}" alt="">
                </div>
            </div>
        </div>
    </div>
    `
    });

    // Prepara o card para os eventos de click, assim mostrando o formulário de edição
    btn_editar_card();
    // Prepara o card para os eventos de click, assim mostrando o formulário de edição
    btn_excluir_card();
    }
});


