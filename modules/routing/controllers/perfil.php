<?php
    $context = '';
    if(array_key_exists('user', $_SESSION)) {
        $context = [
            'title' => "UPDATE - {$_SESSION['user']['nome']} {$_SESSION['user']['sobrenome']}",
            'scripts' => [
                // SCRIPTS_PATH . 'perfil.js',
                SCRIPTS_PATH . 'validador.js',
                SCRIPTS_PATH . 'buttonConfgcloseopen.js',
                
            ],
            'styles' => [
                STYLES_PATH . 'form.css',
            ],
            'user' => $_SESSION['user']
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