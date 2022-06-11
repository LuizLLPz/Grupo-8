<?php 
    abstract class Models {
        protected $tableName;
        protected $data;

        public abstract function bindData($data);

        public function insert($qb) {
            return $qb->insert($this->tableName, $this->data);
        }

        public function selectAll($qb) {
            return $qb->selecionaTudo($this-> tableName);
        }

        public function selectUnique($qb, $field, $value) {
            return $qb->selecionaUnico($this->tableName, $field, $value);
        }

        public function deleteUnique($qb, $field, $value) {
            $qb->deleteUnique($this->tableName, $field, $value);
        }

        public function editUnique($qb) {
            $qb->editUnique($this->tableName, $this->data);
        }
}

require MODELS_PATH.'Usuario.php';
require MODELS_PATH.'Anuncio.php';

    