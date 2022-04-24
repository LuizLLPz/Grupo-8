console.log('Olá')
const icon = document.getElementById("icon-home")
const home = document.getElementById("cabecalho_conteudo")
icon.addEventListener('click', ()=> {
    home.classList.toggle("ativado")
})
