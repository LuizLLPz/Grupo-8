<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        if (array_key_exists('scripts', $context)) {
            foreach ($context['scripts'] as $script) {
                echo "<script src='$script' defer></script>";
            }
        }
        if (array_key_exists('styles', $context)) {
            foreach ($context['styles'] as $style) {
                echo "<link rel='stylesheet' href='$style'>";
            }
        }
    ?>
    <style>
        <?php require STYLES_PATH . 'main.css'; ?>
    </style>
    <script src="<?= SCRIPTS_PATH ?>iconFunc.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    </script>
    <title><?=$context['title']?></title>
</head> 