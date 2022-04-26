<?php

/*

- Arquivo para definir os controladores para rotas de API do webiste

*/

$router->api(BASE_URL.'api/deslogar', fn() => API_CONTROLLERS_PATH.'deslogar.php');

$router->api(BASE_URL.'api/login', fn() => API_CONTROLLERS_PATH.'login.php');

$router->api(BASE_URL.'api/registrar', fn() => API_CONTROLLERS_PATH.'registrar.php');

$router->api(BASE_URL.'api/usuario', fn() => API_CONTROLLERS_PATH.'usuario.php');

?>