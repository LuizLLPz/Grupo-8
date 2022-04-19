<?php 
    $context = ['usuarios' =>  $qb->selectAll('Usuario')];
    require PAGES_PATH . 'index.php';
?>

