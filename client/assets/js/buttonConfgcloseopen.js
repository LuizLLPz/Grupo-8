// fechar e abrir o config

const iconFechar = document.getElementById("config_fechar")
const open_config = document.getElementById("open_config")
const perfil_config = document.getElementById('perfil_config')
iconFechar.addEventListener('click', () => {

  perfil_config.classList.toggle('perfil_config-dados-ativado')
})
open_config.addEventListener('click', () => {
  
  perfil_config.classList.toggle('perfil_config-dados-ativado')
})

// Trocar abas

let abaAtual = null 

const perfil_aba = document.querySelectorAll(".perfil_aba")

const perfil_config_dados = document.querySelectorAll(".perfil_config-dados")
perfil_config_dados.forEach(e =>{
  if(e.classList.value != "perfil_config-dados none"){
    abaAtual = e
  }
})

perfil_aba.forEach(item_lista => {
  
  item_lista.addEventListener('click', (event)=> {
    // event.target.classList.toggle("press")
    const aba = document.getElementById(event.target.dataset.type)
    aba.classList.toggle("none")
    abaAtual.classList.toggle("none")
    abaAtual = document.getElementById(event.target.dataset.type)
  })
})
