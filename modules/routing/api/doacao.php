<?php
//switch for the request method
$data = App::apiServe();


switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        $anuncio = new Anuncio(false);
        if (isset($data['modo'])) {
            $resp = $anuncio->obterAnuncios($qb, $_SESSION['user']['id']);
        } else $resp = ($anuncio->obterAnuncios($qb));
        $resp = array_map("App::encodeBlob", $resp);
        App::apiResponse($resp, 200);
        break;


    case 'POST':
        $image = $_FILES['imagem'];
        if (!isset($_SESSION['user'])) {
            App::apiResponse(['error' => 'Para acessar esse recurso é necessário estar logado!'], 401);
        }
        $anuncio = new Anuncio(false);
        $imgres = [];
        if (isset($_FILES['imagem'])) {
            $imgres = ImageUploader::upload($qb, $image);
            $imgres = ['foto' => $imgres['cod']];
        } else {
            App::apiResponse(
                [
                    "status" => "error",
                    "message" => "Por favor insira uma imagem para seu anúncio!"
                ],
                400
            );
        }

        $data = App::apiServe();
        if (isset($imgres['foto'])) {
            $anuncio->bindData([
                'titulo' => $data['titulo'],
                'descricao' => $data['descricao'],
                'foto' => $imgres['foto'],
                'categoria' => $data['categoria'],
                'cidade' => $data['cidade'],
                'usuario' => $_SESSION['user']['id']
            ]);
        } else {
            App::apiResponse(
                [
                    "status" => "error",
                    "message" => "Ocorreu um erro ao tentar processar sua requisição!"
                ],
                500
            );
        }
        if ($_SESSION['user']['tipo'] == 'Donatário') {
            App::apiResponse(
                [
                    "status" => "error",
                    "message" => "Para realizar essa ação você deve ser doador!"
                ],
                403
            );
        }
        App::apiResponse($anuncio->insert($qb));
        break;


    case 'PUT':
        $doacao = new Anuncio(false);
        $doacao->bindData($data, true);
        $doacao->editUnique($qb);
        App::apiResponse(["status" => "success", "message" => "Doação atualizada com sucesso!"]);
        break;


    case 'DELETE':
        $data['id'] = explode("=", file_get_contents('php://input'), 2)[1];
        $anuncio = new Anuncio(false);
        $anuncio->deleteUnique($qb, 'cod', $data['id']);
        App::apiResponse(["status" => "sucess"]);
        break;
}
