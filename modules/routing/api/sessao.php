<?php
$data = App::apiServe();

switch($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        $usr = new Usuario(false);
        if(!$data) {
            $data['email'] = $_POST['email'];
            $data['password'] = $_POST['password'];
        }
        $result = $usr->selectUnique($qb, 'email', $data['email']);
        if (!empty($result)) {
            if(password_verify($data['password'], $result['senha'])) {
                $_SESSION['user'] = $result;
                $resposta = [
                   "status" => "success",
                   "message" => "Usuário logado com sucesso!"
                ];
                App::apiResponse($resposta);
                break;
            } else {
                $resposta = [
                    "error" => "Informações Incorretas"
                ];
                App::apiResponse($resposta);
                break;
            }
        }   else {
            $resposta = [
                "error" => "Informações Incorretas"
            ];
            App::apiResponse($resposta);
            break;
        }    
    case 'DELETE':
        unset ($_SESSION['user']);
        break;
}