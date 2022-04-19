<?php 
    $context = [
        'title' => 'Página inicial - Update Donate',
        'usuarios' =>  $qb->selectAll('Usuario'),
    ];
    require COMPONENTS_PATH . 'head.php';
    require PAGES_PATH . 'index.php';
?>

