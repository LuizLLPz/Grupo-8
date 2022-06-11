<?php
$data = App::apiServe();

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
            App::apiResponse($resposta);
            }
        break;


    case 'POST':
        $usuario = new Usuario(false);
        $usuario->bindData($data);
        App::apiResponse($usuario->insert($qb));
        break;


    case 'PUT':
        $usuario = new Usuario(false);
        $usuario->bindData(array_merge($data, ['senha' => $_SESSION['user']['senha'], 'id' => $_SESSION['user']['id']]), true);  
        $usuario->editUnique($qb);
        App::apiResponse(["status" => "success", "message" => "Usuário atualizado com sucesso!"]);
        break;

 
    case 'PATCH':
        $usuario = new Usuario(false);
        $usuario->bindFew($data);  
        $usuario->editUnique($qb);
        App::apiResponse(["status" => "success", "message" => "Usuário atualizado com sucesso!"]);
        break;


    case 'DELETE':
        $usuario = new Usuario(false);
        $usuario->deleteUnique($qb, 'id', $_SESSION['user']['id']);
        unset($_SESSION['user']);
        App::apiResponse(["status" => "sucess"]);
        break;


}