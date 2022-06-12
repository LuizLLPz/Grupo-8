const doacao_input = document.getElementById('pesquisar');
const doacoes_cards = document.querySelector('.doacoes_cards'); 

const img = document.getElementById("img");

img.addEventListener('click', () => { console.log(img)});


doacao_input.addEventListener('input', e => {
    const pesquisa = e.target.value.trim().toLowerCase();
    
    const listaCrds = Array.from(doacoes_cards.children);
    
    let doacao_select = document.getElementById('doacao_select');
    doacao_select = doacao_select.options[doacao_select.selectedIndex].value;
    
    switch (doacao_select) {
        case "sem" :
            listaCrds.filter(element => {
                
                if (element.children[0].children[0].children[0].textContent.toLowerCase().includes(pesquisa)) {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            break;
        case 'categoria':
            listaCrds.filter(element => {
                if (element.children[0].children[0].children[1].textContent.toLowerCase().includes(pesquisa)) {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            break;
        case 'cid':
            listaCrds.filter(element => {
                if (element.children[0].children[0].children[4].textContent.toLowerCase().includes(pesquisa)) {
                    element.style.display = "block";
                } else {
                    element.style.display = "none";
                }
            });
            break;
    }
});
