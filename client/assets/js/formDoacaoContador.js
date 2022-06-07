const descricao = document.getElementById('descricao');

descricao.addEventListener('keyup', function () {
    const descricaoValor = descricao.value;
    const descricaoContador = document.getElementById('descricaoContador');
    descricaoContador.innerHTML = `${descricaoValor.length}/150`;
    if(descricaoValor.length > 140){
        descricaoContador.style.color = 'red';
    }else{
        descricaoContador.style.color = 'black';
    }
});