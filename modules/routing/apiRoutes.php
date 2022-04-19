<?php

/*

- Arquivo para definir os controladores para rotas de API do webiste

*/
$router->post('/api/register', function() {
    return './modules/routing/api/register.php';
});
?>