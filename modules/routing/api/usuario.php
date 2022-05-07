<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

switch($_SERVER['REQUEST_METHOD']) {

    case 'GET':
        if(isset($_GET['id'])) {
            $usuario = new Usuario(false);
            $usuario->selectUnique($qb, 'id', $_GET['id']);
            echo json_encode($usuario->data);
        } else {
            $usuario = new Usuario();
            $resposta = [
                "error" => "Usuário não encontrado"
            ];
            echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
            }
        break;


    case 'POST':
        $usuario = new Usuario();
        echo json_encode($usuario->insert($qb), JSON_UNESCAPED_UNICODE);        
        break;


    case 'PUT':
        $usuario = new Usuario(false);
        $usuario->bindData(array_merge((array) json_decode(file_get_contents("php://input", true)), ["id" => $_SESSION['user']['id']]));
        $usuario->editUnique($qb);
        echo json_encode(["status" => "success", "message" => "Usuário atualizado com sucesso!"], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT
        | JSON_UNESCAPED_SLASHES);
        break;


    case 'DELETE':
        $usuario = new Usuario(false);
        $usuario->deleteUnique($qb, 'id', $_SESSION['user']['id']);
        unset($_SESSION['user']);
        echo json_encode(["status" => "sucess"], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
        break;


}