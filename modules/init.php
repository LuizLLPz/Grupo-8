<?php
require 'App.php';
require 'modules/db/Connection.php';
require 'modules/db/QueryBuilder.php';
require 'modules/db/ImageUploader.php';
$env = '';
if (file_exists('.env')) {
    $env = parse_ini_file('.env');
} else {
    $env = [
        'DB_HOST' => 'localhost:3306',
        'DB_USER' => 'root',
        'DB_PASSWORD' => '',
        'DB_NAME' => 'update_donate',
        'FIRST_RUN' => 'true',
    ];
}
session_start();

define('CONTROLLERS_PATH', './modules/routing/controllers/');
define('API_CONTROLLERS_PATH', './modules/routing/api/');
define('MODELS_PATH', './modules/db/models/');
define('PAGES_PATH', './client/pages/');
define('COMPONENTS_PATH', './client/components/');
define('STYLES_PATH', './client/assets/css/');
define('SCRIPTS_PATH', './client/assets/js/');
define('IMAGES_PATH', './client/assets/images/');
define('BASE_URL', $env['BASE_URL']);

require 'modules/db/Models.php';

return new QueryBuilder(Connection::connect(
    [
        'tipo' => "mysql:host={$env['DB_HOST']};",
        'database' => "dbname={$env['DB_NAME']};",
        'user' => $env['DB_USER'],
        'password' => $env['DB_PASSWORD'],
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ],
    ]
));
