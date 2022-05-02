window.onload = () => {
    const iconFechar = document.getElementById("config_fechar")
    const open_config = document.getElementById("open_config")
    const perfil_config = document.getElementById('perfil_config')
    iconFechar.addEventListener('click', () => {
      console.log('sn')
      perfil_config.classList.toggle('perfil_config-ativado')
    })
    open_config.addEventListener('click', () => {
        console.log('sn')
        perfil_config.classList.toggle('perfil_config-ativado')
    })
}