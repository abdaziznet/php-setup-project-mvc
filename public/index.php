<?php

use abdaziznet\belajarphpmvc\controller\ProductController;
use abdaziznet\belajarphpmvc\Router;
use abdaziznet\belajarphpmvc\controller\HomeController;
use abdaziznet\belajarphpmvc\middleware\AuthMiddleware;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/router.php';
require_once __DIR__ . '/../app/controller/HomeController.php';
require_once __DIR__ . '/../app/controller/ProductController.php';
require_once __DIR__ . '/../app/middleware/AuthMiddleware.php';

Router::add('GET', '/', HomeController::class, 'index');
Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);
Router::add('GET', '/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)', ProductController::class, 'categories', [AuthMiddleware::class]);

Router::run();
