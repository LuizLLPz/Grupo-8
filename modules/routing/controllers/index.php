<?php 
    /* Esse é um controlador base do Website
        - Cada controlador deve definir um dicionário de contexto contendo informações relevantes para renderização da página
        - Esse controlador renderiza o componente head.php
        - Esse controlador renderiza a página index.php
    */
    $context = [
        'title' => 'Página inicial - Update Donate',
        'usuarios' =>  $qb->selectAll('Usuario'),
    ];
    require COMPONENTS_PATH . 'head.php';
    require COMPONENTS_PATH . 'navbar.php';
    require PAGES_PATH . 'index.php';
?>

