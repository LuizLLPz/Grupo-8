<?php
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
            'fotoPerfil' => '  ',
        ];
    }
}

public function bindData($data, $edit = false)
{
    $this->data = [
        'nome' => $data['nome'],
        'sobrenome' => $data['sobrenome'],
        'email' => $data['email'],
        'cpf' => $data['cpf'],  
        'senha' => $edit ? $data['senha'] : password_hash($data['senha'], PASSWORD_BCRYPT),
        'fotoPerfil' => '  '
    ];
    $this->data = array_merge(["id" => $edit ? $data['id'] : uniqid($data['nome'])], $this->data);
}

public function bindFew($data) {

    $this->data = [
        'id' => isset($data['id']) ? $data['id'] : $_SESSION['user']['id'],
        'nome' => isset($data['nome']) ? $data['nome'] : $_SESSION['user']['nome'],
        'sobrenome' => isset($data['sobrenome']) ? $data['sobrenome'] : $_SESSION['user']['sobrenome'],
        'email' => isset($data['email']) ? $data['email'] : $_SESSION['user']['email'],
        'cpf' => isset($data['cpf']) ? $data['cpf'] : $_SESSION['user']['cpf'],
        'senha' => isset($data['senha']) ? $data['senha'] : $_SESSION['user']['senha'],
        'fotoPerfil' => isset($data['fotoPerfil']) ? $data['fotoPerfil'] : $_SESSION['user']['fotoPerfil'],
        'tipo' => isset($data['tipo']) ? $data['tipo'] : $_SESSION['user']['tipo']
    ];
}
}