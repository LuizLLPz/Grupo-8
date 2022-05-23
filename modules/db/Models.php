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

        public function bindData($data)
        {
            $this->data = [
                'id' => uniqid($data['nome']),
                'nome' => $data['nome'],
                'sobrenome' => $data['sobrenome'],
                'email' => $data['email'],
                'cpf' => $data['cpf'],
                'senha' => password_hash($data['senha'], PASSWORD_BCRYPT),
                'fotoPerfil' => '  '
            ];
        }
    }

    class Anuncio extends Models {
        public function __construct($form=true) {
            $this->tableName = 'Anuncio';
            if($form) {
                $this->data = [
                    'id' => uniqid($_POST['titulo']),
                    'titulo' => $_POST['titulo'],
                    'descricao' => $_POST['conteudo'],
                    'data' => date('Y-m-d H:i:s'),
                    'usuario_id' => $_SESSION['user']['id']
                ];
            }
        }

        public function bindData($data)
        {
           
            $this->data = [
                'cod' => uniqid($data['titulo']),
                'titulo' => $data['titulo'],
                'descricao' => $data['descricao'],
                'foto' => NULL,
                'data_publicacao' => date('Y-m-d H:i:s'),
            ];
        }
    }
    
?>