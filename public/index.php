<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function () {
    return 'Hello World';
});

$app->router->get('/', [\app\controllers\SiteController::class, 'home']);
$app->router->get('/contact', [\app\controllers\SiteController::class, 'contact']);
$app->router->post('/contact', [\app\controllers\SiteController::class, 'handleContact']);

$app->router->get('/login', [\app\controllers\AuthController::class, 'login']);
$app->router->post('/login', [ \app\controllers\AuthController::class, 'login']);
$app->router->get('/register', [ \app\controllers\AuthController::class, 'register']);
$app->router->get('/register', [ \app\controllers\AuthController::class, 'register']);

$app->run();