<?php

use CodeIgniter\Router\RouteCollection;

// Contollers
use App\Controllers\AuthController;
use App\Controllers\Home;
use App\Controllers\FeedbackLibraryController;
use App\Controllers\PeminjamanController;
use App\Controllers\BooksController;
use App\Controllers\UsersController;



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

$routes->get('/admin/peminjaman', [PeminjamanController::class, 'index']); //
$routes->get('/admin/peminjaman/deleted', [PeminjamanController::class, 'deleted']); //
$routes->get('/admin/peminjaman/{action}', [PeminjamanController::class, 'pageCreateOrUpdate']); //
$routes->post('/admin/peminjaman/{id}', [PeminjamanController::class, 'detail']); //
$routes->post('/admin/peminjaman', [PeminjamanController::class, 'create']); //
$routes->delete('/admin/peminjaman/{id}', [PeminjamanController::class, 'delete']); //

$routes->get('/admin/books',[BooksController::class, 'indexAdm']); // done
$routes->get('/admin/books/form',[BooksController::class, 'form']); // done
$routes->get('/admin/books/deleted',[BooksController::class, 'deleted']); //
$routes->get('/admin/books/{action}',[BooksController::class, 'pageCreateOrUpdate']); //
$routes->get('/admin/books/{id}',[BooksController::class, 'detail']); //
$routes->post('/admin/books',[BooksController::class, 'create']);  //
$routes->put('/admin/books/{id}',[BooksController::class, 'update']); //
$routes->delete('/admin/books/{id}',[BooksController::class, 'delete']); //

$routes->get('/admin/users', [UsersController::class, 'index']); //
$routes->get('/admin/users/deleted', [UsersController::class, 'deleted']); //
$routes->get('/admin/users/{action}', [UsersController::class, 'pageCreateOrUpdate']); //
$routes->get('/admin/users/{id}', [UsersController::class, 'detail']); //
$routes->post('/admin/users', [UsersController::class, 'create']); //
$routes->put('/admin/users/{id}', [UsersController::class, 'update']); //
$routes->delete('/admin/users/{id}', [UsersController::class, 'delete']); //

// Info Spesial Route
$routes->get('/admin/peminjaman/detail/deadline', [PeminjamanController::class, 'over_deadline']); //
$routes->get('/admin/books/comment', [BooksController::class, 'comment']); //
$routes->get('/me', [BooksController::class, 'me']); //
$routes->put('/me', [BooksController::class, 'updateProfile']); //

// $routes->get('/admin/users', [])

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
