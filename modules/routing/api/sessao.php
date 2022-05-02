<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

switch($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $usr = new Usuario(false);
        $result = $usr->selectUnique($qb, 'email', $_POST['email']);
        if (!empty($result)) {
            if(password_verify($_POST['password'], $result['senha'])) {
                $_SESSION['user'] = $result;
                $resposta = [
                   
                ];
                echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
            } else {
                $resposta = [
                    "error" => "Informações Incorretas"
                ];
                echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
            }
        }   else {
            $resposta = [
                "error" => "Informações Incorretas"
            ];
            echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
        }    
}