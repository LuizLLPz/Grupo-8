<?php 
    class QueryBuilder {
        private $conn; 
        public function __construct($conn) {
            $this->conn = $conn;
        }
        public function insert($table, $data) {
            $query = $this->conn->prepare("INSERT INTO {$table} VALUES ('DEFAULT', :nome, :sobrenome, :email, :cpf, :password, :foto_perfil, DEFAULT)");
            $query->execute($data);

        }
        public function selectAll($table) {
            $query = $this->conn->prepare("SELECT * FROM {$table}");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>