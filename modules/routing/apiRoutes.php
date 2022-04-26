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

$router->get(BASE_URL.'api/deslogar', function() {
    return './modules/routing/api/deslogar.php';
});

$router->patch(BASE_URL.'api/usuario', function() {
    return './modules/routing/api/usuario.php';
});
?>