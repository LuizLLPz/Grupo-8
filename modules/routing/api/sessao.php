<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

switch($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $usr = new Usuario(false);
        $data = json_decode(file_get_contents('php://input'), true);
        if(!$data) {
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
        }
        $result = $usr->selectUnique($qb, 'email', $data['email']);
        if (!empty($result)) {
            if(password_verify($data['password'], $result['senha'])) {
                $_SESSION['user'] = $result;
                $resposta = [
                   
                ];
                echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
                break;
            } else {
                $resposta = [
                    "error" => "Informações Incorretas"
                ];
                echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
                break;
            }
        }   else {
            $resposta = [
                "error" => "Informações Incorretas"
            ];
            echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
            break;
        }    
    case 'DELETE':
        unset ($_SESSION['user']);
        break;
}