<?php
    require 'modules/db/Connection.php';
    require 'modules/db/QueryBuilder.php';
    $env = parse_ini_file('./.env');
    $host = $env['DB_HOST'];
    define('CONTROLLERS_PATH', './modules/routing/controllers/');
    define('PAGES_PATH', './client/pages/');
    define('COMPONENTS_PATH', './client/components/');
    
    $dbname = $env['DB_NAME'];
    $user = $env['DB_USER'];
    $password = $env['DB_PASSWORD'];

    $connect_details = [
        'tipo' => "mysql:host={$host};",
        'database' => "dbname={$dbname};",
        'user' => $user,
        'password' => $password,
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],  
    ]; 

    return new QueryBuilder(Connection::connect($connect_details));
?>