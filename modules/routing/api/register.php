<?php
    //Show errors    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $table = 'Usuario';
    $data = [
        'nome' => $_POST['name'],
        'sobrenome' => '',
        'email' => $_POST['email'],
        'cpf' => $_POST['cpf'],
        'senha' => $_POST['password'],
        'foto_perfil' => '  '
    ];
    $qb->insert($table, $data);
    echo '<a href="//">Voltar</a>';
?>