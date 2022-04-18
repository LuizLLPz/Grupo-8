<?php 
    class Connection {
        public __construct() {
            $this->db = new PDO('mysql:host=localhost;dbname=donate', 'root', '');
        }
    }    
?>