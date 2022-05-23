<?php

/*

- Arquivo para definir os controladores para rotas de API do webiste

*/

$router->api(BASE_URL.'api/deslogar', fn() => API_CONTROLLERS_PATH.'deslogar.php');

$router->api(BASE_URL.'api/sessao', fn() => API_CONTROLLERS_PATH.'sessao.php');

$router->api(BASE_URL.'api/usuario', fn() => API_CONTROLLERS_PATH.'usuario.php');

$router->api(BASE_URL.'api/doacoes', fn() => API_CONTROLLERS_PATH.'doacoes.php');
