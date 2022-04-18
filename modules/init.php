<?php
    require 'modules/db/Connection.php';
    require 'modules/db/QueryBuilder.php';
    $env = parse_ini_file('./.env');
    $host = $env['DB_HOST'];
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

    $conn = Connection::connect($connect_details);
    $qb = new QueryBuilder($conn);
    $usuarios = $qb->getClient()->prepare('SELECT * FROM usuarios')->execute()->fetchAll();
    echo "<pre> ".var_dump($usuarios)." </pre>";
?>