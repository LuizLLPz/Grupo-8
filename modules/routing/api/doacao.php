<?php
//switch for the request method
$data = App::apiServe();
$image = $_FILES['imagem'];

switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        $anuncio = new Anuncio(false);
        App::apiResponse($anuncio->selectAll($qb));
        break;


    case 'POST':
        if (!isset($_SESSION['user'])) {
            App::apiResponse(['error' => 'Para acessar esse recurso é necessário estar logado!'], 401);
        }
        $anuncio = new Anuncio(false);
        $imgres = [];
        if (isset($_FILES['imagem'])) {
            $imgres = ImageUploader::upload($qb, $image);
            $imgres = ['foto' => $imgres['cod']];
        } else {
            App::apiResponse(["status" => "error", 
                              "message"=> "Por favor insira uma imagem para seu anúncio!"],
            400);
        }
        
        $data = App::apiServe();
        if (isset($imgres['foto'])) {
            $anuncio->bindData([
                'titulo' => $data['titulo'],
                'descricao' => $data['descricao'],
                'foto' => $imgres['foto'],
                'usuario' => $_SESSION['user']['id']
            ]);
        } else {
            App::apiResponse(["status" => "error", 
                              "message"=> "Ocorreu um erro ao tentar processar sua requisição!"],
            500);
        }
        if ($_SESSION['user']['tipo'] == 'Donatário') {
            App::apiResponse(["status" => "error", 
                              "message"=> "Para realizar essa ação você deve ser doador!"],
            403);
        }
        App::apiResponse($anuncio->insert($qb));
        break;
}
