<?php
/*
- Arquivo para definir os controladores para cada rota do website

- Para definir uma rota basta chamar a função do router com báse no método HTTP que será usado ao acessar tal rota

*/

$router->get(BASE_URL, function() {
    return  CONTROLLERS_PATH.'index.php'; # É chamado o arquivo index.php ao acessar a rota / pelo método http GET
});

$router->get(BASE_URL.'forum', function() {
    return  CONTROLLERS_PATH.'forum.php';
});

$router->get(BASE_URL.'cadastro', function() {
    return  CONTROLLERS_PATH.'cadastro.php'; 
});

$router->get(BASE_URL.'login', function() {
    return  CONTROLLERS_PATH.'login.php'; 
});

$router->get(BASE_URL.'perfil', function() {
    return  CONTROLLERS_PATH.'perfil.php'; 
});
?>