<?php


use Admin\Test\Controllers\Client\ChitietspController;
use Admin\Test\Controllers\Client\ContactController;
use Admin\Test\Controllers\Client\DangkiController;
use Admin\Test\Controllers\Client\GioithieuController;
use Admin\Test\Controllers\Client\HomeController;
use Admin\Test\Controllers\Client\LoginController;

$router->get( '/',                  HomeController::class       . '@index');
$router->get( '/gioithieu',         GioithieuController::class  . '@showgioithieu');

$router->get( '/chitietsp/{id}',    ChitietspController::class  . '@show');

$router->get('/contact',            ContactController::class    . '@index');
$router->post('/contact/store',     ContactController::class    . '@store');

$router->get( '/dangki',            DangkiController::class     . '@showdangki');
$router->get( '/login',             LoginController::class      . '@showFormLogin');
$router->post( '/handle-login',     LoginController::class      . '@login');
$router->get( '/logout',            LoginController::class      . '@logout');