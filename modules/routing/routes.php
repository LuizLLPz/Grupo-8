<?php
/*
- Arquivo para definir os controladores para cada rota do website

- Para definir uma rota basta chamar a função do router com báse no método HTTP que será usado ao acessar tal rota

*/

$router = new Router();
$router->get('/', function() {
    return './modules/routing/controllers/index.php'; # É chamado o arquivo index.php ao acessar a rota / pelo método http GET
});
?>