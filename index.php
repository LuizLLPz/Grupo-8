<?php
    //Show errors 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    require './modules/routing/routerPatterns.php';
    require($router->redirect($url, $_SERVER['REQUEST_METHOD']));
?>

