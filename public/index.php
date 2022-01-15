<?php

require_once __DIR__ . '/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/tasks', 'tasks');
$app->router->post('/addTask', [SiteController::class, 'handleTask']);
$app->router->get('/addTask', [SiteController::class, 'addTask']);


$app->run();
