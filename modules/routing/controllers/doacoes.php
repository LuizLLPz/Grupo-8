<?php
$context = [
    'title' => 'Doações - Update Donate',
    'styles' => [
        //SYLES_PATH.'arquivo.css',
        STYLES_PATH.'form.css',
        STYLES_PATH.'doacoes.css',

    ],
    'scripts' => [
        // SCRIPTS_PATH.'arquivo.js',
        SCRIPTS_PATH.'carregaCardsDoacoes.js',

    ],
];

?>
<?php
    require COMPONENTS_PATH . 'head.php';
    require COMPONENTS_PATH . 'navbar.php';
    require PAGES_PATH . 'doacoes.php';
?>