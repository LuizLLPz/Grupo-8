<?php

/*

- Arquivo para definir os controladores para rotas de API do webiste

*/
$router->post(BASE_URL.'api/registrar', function() {
    return './modules/routing/api/registrar.php';
});

$router->post(BASE_URL.'api/login', function() {
    return './modules/routing/api/login.php';
});
?>