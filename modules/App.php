<?php
class App {
    public static function apiServe() {
        header ("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
        //check if post is empity
        $data =  empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
        return $data;
    }

    public static function apiResponse($data) {
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }

    public static function formatVar($data, $changeDoc = false) {
        if($changeDoc) {
            header('Content-Type: text/html');
        }
        //check if response header is defined to json
        if(!isset($_SERVER['HTTP_ACCEPT']) || $_SERVER['HTTP_ACCEPT'] != 'application/json') {
            echo '<pre> '. print_r($data, true) . '</pre>';
        } else {
            echo print_r($data, true);
        }
    }
}