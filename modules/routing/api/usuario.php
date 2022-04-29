<?php
    if($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        $user->deleteUnique($_POST['id']);  
        header('Location: /usuario');
    }
?> 