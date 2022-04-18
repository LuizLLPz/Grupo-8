<?php 
    class QueryBuilder {
        private $conn; 
        public function __construct($conn) {
            $this->conn = $conn;
        }
        public function getClient() {
            return $this->conn;
        }

        public function createTable ($tableName, $columns) {
        }
    }
?>