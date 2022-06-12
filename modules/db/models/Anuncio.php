<?php
class Anuncio extends Models
{
    public function __construct($form = true)
    {
        $this->tableName = 'Anuncio';
        if ($form) {
            $this->data = [
                'id' => uniqid($_POST['titulo']),
                'titulo' => $_POST['titulo'],
                'descricao' => $_POST['conteudo'],
                'data' => date('Y-m-d H:i:s'),
                'categoria' => $_POST['categoria'],
                'usuario' => $_SESSION['user']['id'],
            ];
        }
    }

    public function obterAnuncios($qb, $usuario = null)
    {
        if ($usuario != null) {
            return $qb->selecionaCompleto(
                'Anuncio.cod as id, Anuncio.titulo, Anuncio.categoria, Anuncio.descricao, Anuncio.data_publicacao as data, 
                     Usuario.nome as usuario, foto.foto_arquivo as foto',
                $this->tableName,
                [
                    ["Anuncio", "Usuario", "usuario", "id"],
                    ["Anuncio", "foto", "foto", "cod"],
                ],
                "usuario",
                $usuario,
                'data desc'
            );
        }
        return $qb->selecionaCompleto(
            'Anuncio.cod as id, Anuncio.titulo, Anuncio.categoria, Anuncio.descricao, Anuncio.data_publicacao as data, 
                 Usuario.nome as usuario, foto.foto_arquivo as foto, Anuncio.cidade',
            $this->tableName,
            [
                ["Anuncio", "Usuario", "usuario", "id"],
                ["Anuncio", "foto", "foto", "cod"],
            ],
            null,
            null,
            'data desc'
        );
    }

    public function editUnique($qb) {
        return $qb->editUnique($this->tableName, $this->data, 'cod');
    }

    public function bindData($data, $edit = false) {
        $this->data = !$edit ? [
            'cod' => uniqid($data['titulo']),
            'titulo' => $data['titulo'],
            'descricao' => $data['descricao'],
            'foto' => $data['foto'],
            'categoria' => $data['categoria'],
            'usuario' => $_SESSION['user']['id'],
            'data_publicacao' => date('Y-m-d H:i:s'),
            'cidade' => $data['cidade']
        ] : [
            'cod' => ($data['cod']),
            'titulo' => $data['titulo'],
            'descricao' => $data['descricao'],
            'categoria' => $data['categoria'],
            'cidade' => $data['cidade']

        ];
        //die(App::formatVar($this->data));
    }

}
