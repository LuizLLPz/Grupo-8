<?php

    /* Arquivo inicial do projeto PHP
    
        - Para definir rotas editar o arquivo  modules/routing/routes.php
        - Para definir rotas de API editar o arquivo  modules/routing/apiRoutes.php

        - Para inserir páginas adicionar arquivos na pasta client/pages
        - Para inserir componentes adicionar arquivos na pasta client/components
    
    */ 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $qb = require './modules/init.php';
    require './modules/routing/Router.php';
    $router = new Router();
    require './modules/routing/routes.php';
    require './modules/routing/apiRoutes.php';
    require($router->redirect($url, $_SERVER['REQUEST_METHOD']));
?>

