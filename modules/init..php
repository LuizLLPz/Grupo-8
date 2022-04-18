<?php
    
    require 'modules/db/Connection.php';
    $db_client = Connection::connect("teste");
    echo '<h1>'.$db_client.'</h1>';
?>