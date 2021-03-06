<?php

use \app\core\Application;
use \app\controllers\SiteController;
use \app\controllers\AuthController;
use app\models\User;

require_once __DIR__.'/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
	"userClass" => User::class,
	"db" => [
		"dsn" => $_ENV["DB_DSN"],
		"user" => $_ENV["DB_USER"],
		"password" => $_ENV["DB_PASSWORD"]
	]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [SiteController::class, "home"]);
$app->router->get('/treeView', [SiteController::class, "treeView"]);

$app->router->post('/login', [AuthController::class, "login"]);
$app->router->post('/register', [AuthController::class, "register"]);
$app->router->post('/logout', [AuthController::class, "logout"]);

$app->run();
