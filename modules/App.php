<?php
class App {
    public static function apiServe() {
        header ("Access-Control-Allow-Origin: *");
        $data = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);
        if (!$data) {
            $data = ($_GET);
        }
        return $data;
    }


    public static function apiResponse($data, $statusCode = 200) {
        header("Content-type: application/json");
        if ($statusCode != 200) {
            http_response_code($statusCode);
        }
        die(json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)); //Short circuits the pipeline with a response
    }

    public static function formatVar($data, $changeDoc = false, $die =false) {
        if($changeDoc) {
            header('Content-Type: text/html');
        }
        if((!isset($_SERVER['HTTP_ACCEPT']) || $_SERVER['HTTP_ACCEPT'] != 'application/json') && $changeDoc) {
            $res = '<pre> '. print_r($data, true) . '</pre>';
        } else {
            $res = print_r($data, true);
        }
        if ($die) {
            die($res);
        } else {
            echo $res;
        }
    }

    public static function encodeBlob($donation) {
            $donation['foto'] = base64_encode($donation['foto']);
            return $donation;
    }
}