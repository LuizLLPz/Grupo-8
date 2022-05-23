<?php


//switch for the request method
$data = App::apiServe();
switch ($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        $anuncio = new Anuncio(false);
        App::apiResponse($anuncio->selectAll($qb));
        break;

    case 'POST':
        $anuncio = new Anuncio(false);
        $anuncio->bindData($data);
        App::apiResponse($anuncio->insert($qb));
        break;
}
