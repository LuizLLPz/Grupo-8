<?php 
    class QueryBuilder {
        private $conn; 
        public function __construct() {
            $this->conn = new Connection();
        }

        public function createTable ($tableName, $columns) {
        }
    }
?>