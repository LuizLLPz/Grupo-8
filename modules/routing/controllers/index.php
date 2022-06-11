<?php 
    /* Esse é um controlador base do Website
        - Cada controlador deve definir um dicionário de contexto contendo informações relevantes para renderização da página
        - Esse controlador renderiza o componente head.php
        - Esse controlador renderiza a página index.php
    */
    $usr = new Usuario(false);
    $context = [
        'title' => 'Página inicial - Update Donate',
        'usuarios' =>  $usr->selectAll($qb),
        'styles' => [
            STYLES_PATH . 'form.css',
            STYLES_PATH . 'index.css',
        ],
    ];
    ?>
    <?php
    require COMPONENTS_PATH . 'head.php';
    require COMPONENTS_PATH . 'navbar.php';
    require PAGES_PATH . 'index.php';
?>

