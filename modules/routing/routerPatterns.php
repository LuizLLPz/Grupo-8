<?php
#Arquivo para definir os controladores do mvc
require 'Router.php';
$router = new Router();
$router->get('/', function() {
    return './modules/routing/controllers/index.php';
});
?>