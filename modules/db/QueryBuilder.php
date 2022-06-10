<?php 
class QueryBuilder {
    private $conn; #Conexão com o banco de dados 
    public function __construct($conn) {
        /** Construtor para o QueryBuilder 
        * Necessita de uma nova conexão para criar a instância
        **/
        $this->conn = $conn;
    }

    
    public function selecionaTudo($tabela) {
        /**
        * Seleciona todos os valores de uma tabela
        **/
        $query = $this->conn->prepare("SELECT * FROM {$tabela}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function selecionaUnico($tabela, $campo, $valor) {
        /**
        * Seleciona um único valor de uma tabela 
        **/
        $query = $this->conn->prepare("SELECT * FROM {$tabela} WHERE {$campo} = :{$campo} LIMIT 1");
        $query->execute([$campo => $valor]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }


    public function selecionaCompleto($campos = "all", $tabela, $relacoes, $campo = null, $valor = null, $ordem = null) {
        /**
        * Seleção completa de valores em uma tabela, aceita múltiplos parâmetros para projeção e suporta join 
        **/
        $stmt = $campos == "all" ? "SELECT * FROM {$tabela}" : "SELECT {$campos} FROM {$tabela}";
        foreach ($relacoes as $relation) {
            $stmt.= " JOIN {$relation[1]} ON {$relation[0]}.{$relation[2]} = {$relation[1]}.{$relation[3]} ";
        }
        if ($campo != null && $valor != null) {
            $stmt.= " WHERE {$campo} = :{$campo} ";
        }
        $stmt.= !$ordem ?  "ORDER BY {$ordem} ": "";
        $query = $this->conn->prepare($stmt);
        if ($campo != null && $valor != null) {
            $query->bindParam(":{$campo}", $valor);
        }
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
        
    }


    public function insert($table, $data) {         
    $stmt = 'INSERT INTO '.$table.' (';
    $keys =  array_keys($data);
    foreach ($keys as $key) {
        if ($key != end($keys)) {
            $stmt .= $key.', ';
        } else {
            $stmt .= $key.') VALUES (';
        }
    }
    $last = end($keys);
    foreach($keys as $key) {
            if ($data[$key] == 'DEFAULT') {
            $stmt.= 'DEFAULT';
            } else {
                $stmt.=':'.$key;
            }
            if ($key != $last) {
                $stmt.=', ';
            } else {
                $stmt.=')';
            }
        }
        $query = $this->conn->prepare($stmt);
        try {
            /* Tenta executar o SQL, sujeito a erros */
            $query->execute($data);
        } catch (PDOException $e) {
            /* Trata o erro e envia o código de resposta ao usuário */
            $message = ["message" => "Erro ao realizar cadastro"];
            echo $e->getMessage();
            if ($e->getCode() == 23000) {
                $message = ["message" => "Dados indisponíveis"];
            }
            return array_merge(["status" => "error"], $message);
        }
        return array_merge($data, ['status' => "sucess"]);
    }
    

    public function deleteUnique($table, $field, $value) {
        $query = $this->conn->prepare("DELETE FROM {$table} WHERE {$field} = :{$field}");
        $query->execute([$field => $value]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }


    public function editUnique($table, $data) {
        $stmt = 'UPDATE '.$table.' SET ';
        $keys =  array_keys($data);
        $end = end($keys);
        foreach ($keys as $key) {
            if ($key != $end) {
                $stmt .= $key.' = :'.$key.', ';
            } else {
                $stmt .= $key.' = :'.$key;
            }
        }
        $stmt .= ' WHERE id = :id';
        $query = $this->conn->prepare($stmt);
        $query->execute($data);
        $_SESSION['user'] = $this->selecionaUnico($table, 'id', $data['id']);
    }
}
