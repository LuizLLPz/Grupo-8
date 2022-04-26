<?php
    //Show errors    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    $usr = new Usuario();
    $usr->insert($qb);
    $context = [
        'title' => 'Página secundaria - Update Donate',
        'usuarios' =>  $usr->selectAll($qb),
    ];
    echo "<script>
            window.location = '/grupo/login';
        </script>"

?>