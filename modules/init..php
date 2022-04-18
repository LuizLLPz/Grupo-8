<?php
    require 'modules/db/Connection.php';
    require 'modules/db/QueryBuilder.php';
    $env = parse_ini_file('./.env');
    echo var_dump($env);

    $connect_details = [
        'tipo' => "mysql:host={$env['DB_HOST']};",
        'database' => "dbname={$env['DB_NAME']};",
        'user' => $env['DB_USER'],
        'password' => $env['DB_PASS'],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],  
    ];

    $conn = Connection::connect($connect_details);
    $qb = new QueryBuilder($conn);
    $usuarios = $qb->getClient()->prepare('SELECT * FROM usuarios')->execute()->fetchAll();
?>