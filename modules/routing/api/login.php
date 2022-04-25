<?php 
    $usr = new Usuario(false);
    $usrResult = $usr->selectUnique($qb, 'email', $_POST['email']);
    if (!empty($usrResult)) {
        if (password_verify($_POST['password'], $usrResult['senha'])) {
            $_SESSION['user'] = $usrResult;
            ?>
            <script>
                window.location.href = '/projetoDisciplina/perfil';
            </script>
            <?php
        } else {
            echo 'Senha incorreta';
        }
    } else {
        echo 'Usuário não encontrado';
    }
?>