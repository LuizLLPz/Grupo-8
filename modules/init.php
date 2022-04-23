<?php
    require 'modules/db/Connection.php';
    require 'modules/db/QueryBuilder.php';
    require 'modules/db/Models.php';
    $env = parse_ini_file('./.env');
    session_start();
    define('CONTROLLERS_PATH', './modules/routing/controllers/');
    define('PAGES_PATH', './client/pages/');
    define('STYLES_PATH', './client/assets/css/');
    define('IMAGES_PATH', './client/assets/images/');
    define('SCRIPTS_PATH', './client/assets/js/');
    define('COMPONENTS_PATH', './client/components/');

    
    return new QueryBuilder(Connection::connect(
    [
        'tipo' => "mysql:host={$env['DB_HOST']};",
        'database' => "dbname={$env['DB_NAME']};",
        'user' => $env['DB_USER'],
        'password' => $env['DB_PASSWORD'],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],  
    ]
    ));

?>