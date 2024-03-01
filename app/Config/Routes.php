<?php

use CodeIgniter\Router\RouteCollection;

// Contollers
use App\Controllers\AuthController;
use App\Controllers\Home;


/**
 * @var RouteCollection $routes
 */

/**
 * Route untuk page 
 * ----
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('/auth', [AuthController::class, 'index']);

/**
 * End 
 * */

/**
 * Route logic system POST | PUT | DELETE
 */

$routes->post('path', [AuthController::class, 'post']);

/**
 * End 
 * */

 /** Handle 404 page */
$routes->set404Override(function () {
    return view('404page');
});
