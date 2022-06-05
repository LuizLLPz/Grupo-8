$(".cep").blur(function(evento){
    let cepValor = evento.target.value;
    cepValor = cepValor.replace(/[^\d]+/g,'');
    if($(".cep").val().length > 8){
        $(".cep").val(cepValor);
    }
    if(cepValor.length == 8){
        $.getJSON("https://viacep.com.br/ws/"+ cepValor +"/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
                
                $("#cidade").val(dados.localidade);
                $("#estado").val(estados[dados.uf]);
                
            }

        });

    }
})

const estados = {
    "AC": "Acre",
    "AL": "Alagoas",
    "AP": "Amapá",
    "AM": "Amazonas",
    "BA": "Bahia",
    "CE": "Ceará",
    "DF": "Distrito Federal",
    "ES": "Espírito Santo",
    "GO": "Goiás",
    "MA": "Maranhão",
    "MT": "Mato Grosso",
    "MS": "Mato Grosso do Sul",
    "MG": "Minas Gerais",
    "PA": "Pará",
    "PB": "Paraíba",
    "PR": "Paraná",
    "PE": "Pernambuco",
    "PI": "Piauí",
    "RJ": "Rio de Janeiro",
    "RN": "Rio Grande do Norte",
    "RS": "Rio Grande do Sul",
    "RO": "Rondônia",
    "RR": "Roraima",
    "SC": "Santa Catarina",
    "SP": "São Paulo",
    "SE": "Sergipe",
    "TO": "Tocantins",
}
