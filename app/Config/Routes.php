<?php

use CodeIgniter\Router\RouteCollection;

// Contollers
use App\Controllers\AuthController;
use App\Controllers\Home;
use App\Controllers\FeedbackLibraryController;


// Middleware / filter
use App\Filters\AuthMiddlewareAdminOnly;
use App\Filters\AuthMiddlewareUserOnly;
use App\Filters\SetCookieMiddleware;
use App\Filters\ThrowToDashbaordWhenAuth;

/**
 * @var RouteCollection $routes
 */

/**
 * Route untuk page 
 * ----
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('/auth', [AuthController::class, 'index']);

$routes->get('/signup', [AuthController::class, 'registrasipage'], ['filter' => ThrowToDashbaordWhenAuth::class]);
$routes->get('/signin', [AuthController::class, 'loginpage'], ['filter' => ThrowToDashbaordWhenAuth::class]);

$routes->get('/admin/dashboard', [AuthController::class, 'dashboardAdminPage'], ['filter' => AuthMiddlewareAdminOnly::class]);
$routes->get('/(:any)/dashboard', [AuthController::class, 'dashboardUserPage'], ['filter' => AuthMiddlewareUserOnly::class]);

$routes->get('/debug', [AuthController::class, 'debugCo']);
/**
 * End  - Route untuk page
 * */




/**
 * Route logic system POST | PUT | DELETE
 */

$routes->post('/auth/register', [AuthController::class, 'register']);
$routes->post('/auth/login', [AuthController::class, 'login']);
$routes->post('/auth/logout', [AuthController::class, 'logout']);

$routes->post('/form/feedback/evergreen', [FeedbackLibraryController::class, 'post'], ['filter', AuthMiddlewareUserOnly::class]);
/**
 * End 
 * */

/** Handle 404 page */
$routes->set404Override(function () {
    return view('404page');
});
