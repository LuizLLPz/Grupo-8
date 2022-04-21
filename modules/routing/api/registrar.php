<?php
    //Show errors    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $usr = new Usuario();
    $usr->insert($qb);
?>
    <h1>
        Usuário cadastrado com sucesso!
    </h1>