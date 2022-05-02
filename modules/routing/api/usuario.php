<?php
header("Access-Control-Allow-Origin: *");
//header('Content-Type: application/json');

switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        //if(isset($_GET['id'])) {
       ///     $usuario = new Usuario(false);
          ///  $usuario->selectUnique($qb, 'id', $_GET['id']);
         //   echo json_encode($usuario->data);
       /// } else {
        //    $usuario = new Usuario();
            $resposta = [
                "error" => "Usuário não encontrado"
            ];
            echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
        //}
        break;


    case 'POST':
        $usuario = new Usuario();
        echo json_encode($usuario->insert($qb), JSON_UNESCAPED_UNICODE);        
        break;

    case 'PUT':
        $usuario = new Usuario(false);
        //$usuario->update($qb);
        echo json_encode($usuario->data);
        break;


    case 'DELETE':
        $usuario = new Usuario(false);
        $usuario->deleteUnique($qb, 'id', $_GET['id']);
        echo json_encode($usuario->data);
        break;


}