<?php

use CodeIgniter\Router\RouteCollection;

// Contollers
use App\Controllers\AuthController;
use App\Controllers\Home;
use App\Controllers\FeedbackLibraryController;
use App\Controllers\PeminjamanController;
use App\Controllers\BooksController;
use App\Controllers\UserController;
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

$routes->get('/admin/peminjaman', [PeminjamanController::class, 'index']); //
$routes->get('/admin/peminjaman/deleted', [PeminjamanController::class, 'deleted']); //
$routes->get('/admin/peminjaman/{action}', [PeminjamanController::class, 'pageCreateOrUpdate']); //
$routes->post('/admin/peminjaman/(:num)', [PeminjamanController::class, 'detail']); //
$routes->post('/admin/peminjaman', [PeminjamanController::class, 'create']); //
$routes->delete('/admin/peminjaman/(:num)', [PeminjamanController::class, 'delete']); //

$routes->get('/admin/books',[BooksController::class, 'indexAdm']); // done
$routes->get('/admin/books/form',[BooksController::class, 'form']); // done
$routes->get('/admin/books/deleted',[BooksController::class, 'deleted']); // done
$routes->post('/admin/books/forgedelete',[BooksController::class, 'forgedelete']); // done
$routes->post('/admin/books/restore',[BooksController::class, 'restore']); // done
$routes->get('/admin/books/{action}',[BooksController::class, 'pageCreateOrUpdate']); // done
$routes->post('/admin/books',[BooksController::class, 'create']);  // done
$routes->post('/admin/books/update/(:num)',[BooksController::class, 'update']); // done
$routes->post('/admin/books/delete',[BooksController::class, 'delete']); // done

$routes->get('/admin/users', [UsersController::class, 'index']); //
$routes->get('/admin/users/deleted', [UsersController::class, 'deleted']); //
$routes->get('/admin/users/{action}', [UsersController::class, 'pageCreateOrUpdate']); //
$routes->get('/admin/users/(:num)', [UsersController::class, 'detail']); //
$routes->post('/admin/users', [UsersController::class, 'create']); //
$routes->post('/admin/users/(:num)', [UsersController::class, 'update']); //
$routes->delete('/admin/users/(:num)', [UsersController::class, 'delete']); //

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

//  User Routes

$routes->get('/profile/dashboard', [UserController::class, 'pageProfile']);
$routes->get('/profile/edit/dashboard', [UserController::class, 'pageEditProfile']);
$routes->get('/backpack/dashboard', [UserController::class, 'backpackPage']);
$routes->get('/(:any)/dashboard', [AuthController::class, 'dashboardUserPage'], ['filter' => AuthMiddlewareUserOnly::class]);
$routes->get('/dashboard/checkout', [UserController::class, 'checkoutPage'], ['filter' => AuthMiddlewareUserOnly::class]);
$routes->get('/(:any)/book/(:num)/(:any)', [BooksController::class, 'detailBook'], ['filter' => AuthMiddlewareUserOnly::class]);
// $routes->get('/(:any)/book/(:num)', [AuthController::class, 'dashboardUserPage'], ['filter' => AuthMiddlewareUserOnly::class]);
$routes->post('/likeBook', [UserController::class, 'likeBook']);
$routes->post('/pinjamBook', [UserController::class, 'addSession']);
$routes->post('/sendComment', [UserController::class, 'sendComment']);




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
