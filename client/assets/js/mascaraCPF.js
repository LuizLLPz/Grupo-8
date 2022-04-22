window.onload = ()=>{
    const cpfInput = document.getElementById("cpf")
    cpfInput.addEventListener('blur', ()=>{
        const valor = cpfInput.value
        cpfInput.value = valor.replace(/^(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4")
    })

}