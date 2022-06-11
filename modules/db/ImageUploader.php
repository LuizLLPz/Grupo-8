<?php

class ImageUploader {
    static function upload($qb, $file) {
        $file['name'] = uniqid(explode('.', $file['name'])[0]). '.' . explode('.', $file['name'])[1];
        return ($qb->insert('foto', ['cod' => $file['name'], 'foto_arquivo' => file_get_contents($file['tmp_name'])]));
    }

    static function delete($qb, $anuncio) {
        return ($qb->deleteUnique('cod', $anuncio));
    }
}