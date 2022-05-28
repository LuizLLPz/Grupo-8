<?php
/*
- Arquivo para definir os controladores para cada rota do website

- Para definir uma rota basta chamar a função do router com báse no método HTTP que será usado ao acessar tal rota

*/

$router->get(BASE_URL, fn() => CONTROLLERS_PATH.'index.php'); # É chamado o arquivo index.php ao acessar a rota / pelo método http GET

$router->get(BASE_URL.'forum', fn() => CONTROLLERS_PATH.'forum.php');

$router->get(BASE_URL.'cadastro', fn() => CONTROLLERS_PATH.'cadastro.php');

$router->get(BASE_URL.'login', fn() => CONTROLLERS_PATH.'login.php');

$router->get(BASE_URL.'perfil', fn() => CONTROLLERS_PATH.'perfil.php');

$router->get(BASE_URL.'formularioProduto', fn() => CONTROLLERS_PATH.'formularioProduto.php');

?>