<?php
    //Show errors    
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usr = new Usuario();
        $usr->insert($qb);
    } else {
        echo '403';
    }
    ob_flush(); 
    flush();
    usleep(15000000);
    echo "<script>
             window.location = '/grupo/login';
         </script>"

?>