
const b = document.querySelectorAll(".b p")
const c = document.querySelector(".b h3")
var limiteCaracteres = 10;
var acimaLimite = b[0].innerText.length > limiteCaracteres
var pontos = acimaLimite ? "..." : ''
b[0].innerText = b[0].innerText.substring(0, limiteCaracteres) + pontos
limiteCaracteres = 12
b[0].innerText = b[0].innerText.substring(0, limiteCaracteres) + pontos
limiteCaracteres = 12
acimaLimite = c.innerText.length > limiteCaracteres
pontos = acimaLimite ? "..." : ''
c.innerText = c.innerText.substring(0, limiteCaracteres) + pontos
acimaLimite = c.innerText.length > limiteCaracteres
pontos = acimaLimite ? "..." : ''
c.innerText = c.innerText.substring(0, limiteCaracteres) + pontos


// fechar e abrir o config

let abaAtual = null 
const perfil_aba = document.querySelectorAll(".perfil_aba")

const iconFechar = document.getElementById("config_fechar")
const open_config = document.getElementById("open_config")
const perfil_config = document.getElementById('perfil_config')
iconFechar.addEventListener('click', () => {

  perfil_config.classList.toggle('perfil_config-dados-ativado')
  const aba_principal = document.getElementById("dados_conta")
  abaAtual.classList.toggle("none")
  aba_principal.classList.toggle("none")
  abaAtual = aba_principal;

});


open_config.addEventListener('click', () => {
  
  perfil_config.classList.toggle('perfil_config-dados-ativado')
});

// Trocar abas



const perfil_config_dados = document.querySelectorAll(".perfil_config-dados")
perfil_config_dados.forEach(e =>{
  if(e.classList.value != "perfil_config-dados none"){
    abaAtual = e
  }
});

perfil_aba.forEach(item_lista => {
  
  item_lista.addEventListener('click', (event)=> {
    // event.target.classList.toggle("press")
    const aba = document.getElementById(event.target.dataset.type)
    aba.classList.toggle("none")
    abaAtual.classList.toggle("none")
    abaAtual = document.getElementById(event.target.dataset.type)
  })
});


$('#adicionarAnuncio').click(function () {
  window.location.href = '/grupo/formularioProduto';
});