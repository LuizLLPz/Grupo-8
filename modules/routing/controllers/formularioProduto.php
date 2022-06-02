<?php
$context = [
    'title' => 'Criar doação - Update Donate',
    'styles' => [
        STYLES_PATH.'form.css',
        STYLES_PATH.'perfil.css',
        STYLES_PATH.'CadastroProduto.css'
    ],
    'scripts' => [
        // SCRIPTS_PATH.'arquivo.js',
        SCRIPTS_PATH.'validador.js',
        SCRIPTS_PATH.'editarCardFunc.js'
    ],
];

?>
<?php
    require COMPONENTS_PATH . 'head.php';
    require COMPONENTS_PATH . 'navbar.php';
    require PAGES_PATH . 'formularioProduto.php';
?>