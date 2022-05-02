<?php 
    $usr = new Usuario(false);
    header('Content-type: application/json');
    $usrResult = $usr->selectUnique($qb, 'email', $_POST['email']);
    if (!empty($usrResult)) {
        if (password_verify($_POST['password'], $usrResult['senha'])) {
            $_SESSION['user'] = $usrResult;
            ?>
            <script>
                window.location.href = '/grupo/perfil';
            </script>
            <?php
        } else {
            $resposta = [
                "error" => "Usuário não encontrado"
            ];
            echo json_encode($resposta, JSON_UNESCAPED_UNICODE);
        }
    }
?>