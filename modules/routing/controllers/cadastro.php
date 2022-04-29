<?php
    $context = [
        'title' => 'Registrar - Update Donate',
        'scripts' => [
            SCRIPTS_PATH . 'mascaraCPF.js',
            SCRIPTS_PATH . 'validador.js',
        ]
    ];
?>  <style>
        <?php include STYLES_PATH.'form.css'; ?>
    </style>
<?php
    require COMPONENTS_PATH . 'head.php';
    require COMPONENTS_PATH . 'navbar.php';
    require PAGES_PATH . 'cadastro.php';
?>