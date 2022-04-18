<?php 
    class Connection {
        public static function connect($connect_details) {
            try {
                return new PDO(
                    $connect_details['tipo'],
                    $connect_details['database'],
                    $connect_details['user'],
                    $connect_details['password'],
                );
            } catch (PDOException $e) {
                echo 'Connection failed: ' . $e->getMessage();
            }
        }
    }
?>