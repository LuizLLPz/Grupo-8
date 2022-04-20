<?php
    //Show errors    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $table = 'Usuario';
    $data = [
        'id' => uniqid($_POST['nome']),
        'nome' => $_POST['nome'],
        'sobrenome' => $_POST['sobrenome'],
        'email' => $_POST['email'],
        'cpf' => $_POST['cpf'],
        'password' => password_hash($_POST['password'], PASSWORD_ARGON2I),
        'foto_perfil' => '  '
    ];
    try {
        $qb->insert($table, $data);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>
    <h1>
        Usuário cadastrado com sucesso!
    </h1>