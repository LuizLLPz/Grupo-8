//Editar aqui :)

export const btn_excluir_card = () => {
    const cardConfig_excluir = document.querySelectorAll(".card_config-excluir");
    cardConfig_excluir.forEach(element => {
        element.addEventListener("click", () => {
            console.log("Excluir");
        })
    });
}