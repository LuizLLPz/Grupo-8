<?php
/*
- Arquivo para definir os controladores para cada rota do website

- Para definir uma rota basta chamar a função do router com báse no método HTTP que será usado ao acessar tal rota

*/

$router->get('/', function() {
    return  CONTROLLERS_PATH.'index.php'; # É chamado o arquivo index.php ao acessar a rota / pelo método http GET
});

$router->get('/registrar', function() {
    return  CONTROLLERS_PATH.'registrar.php'; 
});
?>