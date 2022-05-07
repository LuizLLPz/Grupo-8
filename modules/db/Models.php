<?php 
    class Models {
        protected $tableName;
        protected $data;

        public function bindData($data) {
            $this->data = $data;
        }

        public function insert($qb) {
            return $qb->insert($this->tableName, $this->data);
        }

        public function selectAll($qb) {
            return $qb->selectAll($this-> tableName);
        }

        public function selectUnique($qb, $field, $value) {
            return $qb->selectUnique($this->tableName, $field, $value);
        }

        public function deleteUnique($qb, $field, $value) {
            $qb->deleteUnique($this->tableName, $field, $value);
        }

        public function editUnique($qb) {
            $qb->editUnique($this->tableName, $this->data);
        }
        

    }

    class Usuario extends Models {


        public function __construct($form=true) {
            $this->tableName = 'Usuario';
            if($form) {
                $this->data = [
                    'id' => uniqid($_POST['nome']),
                    'nome' => $_POST['nome'],
                    'sobrenome' => $_POST['sobrenome'],
                    'email' => $_POST['email'],
                    'cpf' => $_POST['cpf'],
                    'senha' => password_hash($_POST['senha'], PASSWORD_BCRYPT),
                    'fotoPerfil' => '  '
                ];
            }
        }
    }
?>