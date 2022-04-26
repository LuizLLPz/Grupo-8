<?php
    $context = '';
    if(array_key_exists('user', $_SESSION)) {
        $context = [
            'title' => "UPDATE - {$_SESSION['user']['nome']} {$_SESSION['user']['sobrenome']}",
            'user' => $_SESSION['user']
        ];
        require COMPONENTS_PATH . 'head.php';
        require COMPONENTS_PATH . 'navbar.php';
        require PAGES_PATH . 'perfil.php';
    } else {
        $context = [
            'title' => '404 - Documento não encontrado!'
        ];
        require COMPONENTS_PATH . 'head.php';
        require COMPONENTS_PATH . 'navbar.php';
        require PAGES_PATH. '404.php';
    }

    
?>