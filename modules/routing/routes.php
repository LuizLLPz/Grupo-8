<?php
/*
- Arquivo para definir os controladores para cada rota do website

- Para definir uma rota basta chamar a função do router com báse no método HTTP que será usado ao acessar tal rota

*/

$router->get(BASE_URL, function() {
    return  CONTROLLERS_PATH.'index.php'; # É chamado o arquivo index.php ao acessar a rota / pelo método http GET
});

$router->get('/forum', function() {
    return  CONTROLLERS_PATH.'forum.php';
});

$router->get('/cadastro', function() {
    return  CONTROLLERS_PATH.'cadastro.php'; 
});

$router->get('/login', function() {
    return  CONTROLLERS_PATH.'login.php'; 
});

$router->get('/perfil', function() {
    return  CONTROLLERS_PATH.'perfil.php'; 
});
?>