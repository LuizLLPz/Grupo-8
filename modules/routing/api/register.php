<?php
    //Show errors    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $qb = require '../modules/init.php';
    $table = 'Usuario';
    $data = [
        'nome' => $_POST['name'],
        'sobrenome' => '',
        'email' => $_POST['email'],
        'cpf' => $_POST['cpf'],
        'senha' => $_POST['password'],
        'foto_perfil' => '  '
    ];
    
    echo '<a href="index.php">Voltar</a>';
?>