<?php 
    $usuarios = $qb->selectAll('Usuario');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form action="/api/register" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="text" name="cpf" placeholder="CPF">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Enviar">
    </form>
    <?php foreach ($usuarios as $usuario): ?>
        <h1>
            <?php echo $usuario['nome']; ?>
        </h1>
        <p>
            <?php echo $usuario['email']; ?>
        </p>
    <?php endforeach; ?>
</body>
</html>