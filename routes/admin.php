<?php

use Admin\Test\Controllers\Admin\DashboardController;
use Admin\Test\Controllers\Admin\ProductController;
use Admin\Test\Controllers\Admin\UserController;

$router->before('GET|POST', '/admin/*.*', function() {
    if (! isset($_SESSION['user'])) {
        header('location: ' . url('login') );
        exit();
    }
});

$router->mount('/admin', function () use ($router) {

    $router->get('/',               DashboardController::class . '@dashboard');

    // CRUD USER
    $router->mount('/users', function () use ($router) {
        $router->get('/',               UserController::class . '@index');
        $router->get('/create',         UserController::class . '@create');
        $router->post('/store',         UserController::class . '@store');
        $router->get('/{id}/show',      UserController::class . '@show');
        $router->get('/{id}/edit',      UserController::class . '@edit');
        $router->post('/{id}/update',   UserController::class . '@update');
        $router->get('/{id}/delete',    UserController::class . '@delete');
    });

    // CRUD PRODUCT
    $router->mount('/products', function () use ($router) {
        $router->get('/',               ProductController::class . '@index');
        $router->get('/create',         ProductController::class . '@create');
        $router->post('/store',         ProductController::class . '@store');
        $router->get('/{id}/show',      ProductController::class . '@show');
        $router->get('/{id}/edit',      ProductController::class . '@edit');
        $router->post('/{id}/update',   ProductController::class . '@update');
        $router->get('/{id}/delete',    ProductController::class . '@delete');
    });
    
});