<?php
class App {
    public static function apiServe() {
        header ("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
        $data = json_decode(file_get_contents('php://input'), true);
        return $data;
    }

    public static function apiResponse($data) {
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
}