<?php 
    class QueryBuilder {
        private $conn; 
        public function __construct($conn) {
            $this->conn = $conn;
        }
        public function insert($table, $data) {
           echo('<pre>'.var_dump($data).'</pre>');
           $base = 'INSERT INTO '.$table.' (';
           $keys =  array_keys($data);
           foreach ($keys as $key) {
             if ($key != end($keys)) {
                 $base .= $key.', ';
             } else {
                 $base .= $key.') VALUES (';
             }
           }
           $last = end($keys);
           echo '<pre>'.var_dump($last).'</pre>';

           foreach($keys as $key) {
               if ($data[$key] == 'DEFAULT') {
                   $base.= 'DEFAULT';
               } else {
                   $base.=':'.$key;
               }

                if ($key != $last) {
                     $base.=', ';
                } else {
                    echo "mierda";
                     $base.=')';
                }
            }
            $query = $this->conn->prepare($base);
            $query->execute($data);
            return $data;
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

        public function deleteUnique($table, $field, $value) {
            $query = $this->conn->prepare("DELETE FROM {$table} WHERE {$field} = :{$field}");
            $query->execute([$field => $value]);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>