<?php 
    class QueryBuilder {
        private $conn; 
        public function __construct($conn) {
            $this->conn = $conn;
        }
        public function insert($table, $data) {
            $query = $this->conn->prepare("INSERT INTO {$table} VALUES (:id, :nome, :sobrenome, :email, :cpf, :senha, :foto_perfil, DEFAULT)");
            $query->execute($data);

        }
        public function selectAll($table) {
            $query = $this->conn->prepare("SELECT * FROM {$table}");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        public function selectUnique($table, $field, $value) {
            $query = $this->conn->prepare("SELECT * FROM {$table} WHERE {$field} = :{$field}");
            $query->execute([$field => $value]);
            return $query->fetch(PDO::FETCH_ASSOC);
        }
    }
?>