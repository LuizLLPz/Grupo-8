<?php

use function PHPSTORM_META\type;

    $context = '';
    if(array_key_exists('user', $_SESSION)) {
        $context = [
            'title' => "UPDATE - {$_SESSION['user']['nome']} {$_SESSION['user']['sobrenome']}",
            'scripts' => [
                // SCRIPTS_PATH . 'perfil.js',
                SCRIPTS_PATH . 'validador.js',
                SCRIPTS_PATH . 'perfilFunc.js',
                SCRIPTS_PATH . 'editarCardFunc.js',
                SCRIPTS_PATH . 'carregarCardsPerfil.js',
                SCRIPTS_PATH . 'formDoacaoContador.js',

                
            ],
            'styles' => [
                STYLES_PATH . 'form.css',
                STYLES_PATH.'perfilConfig.css',
                STYLES_PATH.'perfil.css',
                STYLES_PATH.'perfilEditarCard.css',
                STYLES_PATH.'cardDoacao.css',

            ],
            'user' => $_SESSION['user'],
        ];
        require COMPONENTS_PATH . 'head.php';
        require COMPONENTS_PATH . 'navbar.php';
        require PAGES_PATH . 'perfil.php';
        
    } else {
        $context = [
            'title' => '404 - Documento não encontrado!',

        ];
        require COMPONENTS_PATH . 'head.php';
        require COMPONENTS_PATH . 'navbar.php';
        require PAGES_PATH. '404.php';
    }
?>