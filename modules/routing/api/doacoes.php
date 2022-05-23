<?php


//switch for the request method
$data = App::apiServe();
switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
       echo App::apiResponse($data);
       break;
}
