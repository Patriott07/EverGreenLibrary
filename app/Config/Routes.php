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
use App\Filters\IsLoginMiddleware;

/**
 * @var RouteCollection $routes
 */

/**
 * Route untuk page 
 * ----
 */
$routes->get('/', [Home::class, 'index']);

$routes->get('/signup', [AuthController::class, 'registrasipage'], ['filter' => ThrowToDashbaordWhenAuth::class]);
$routes->get('/signin', [AuthController::class, 'loginpage'], ['filter' => ThrowToDashbaordWhenAuth::class]);

$routes->get('/admin/dashboard', [AuthController::class, 'dashboardAdminPage'], ['filter' => AuthMiddlewareAdminOnly::class]);


// action (Accept orders And Accept returns)
$routes->post('/admin/peminjaman/accept/order', [PeminjamanController::class, 'acceptOrder']); // edit
$routes->post('/admin/peminjaman/accept/return', [PeminjamanController::class, 'acceptReturn']); // edit


$routes->get('/admin/peminjaman', [PeminjamanController::class, 'index'], ['filter' => AuthMiddlewareAdminOnly::class]); // edit
$routes->post('/admin/peminjaman/(:num)', [PeminjamanController::class, 'detail']); //
$routes->post('/admin/peminjaman', [PeminjamanController::class, 'create']); //
$routes->delete('/admin/peminjaman/(:num)', [PeminjamanController::class, 'delete']); //

$routes->get('/admin/books',[BooksController::class, 'indexAdm'], ['filter' => AuthMiddlewareAdminOnly::class]); // done
$routes->get('/admin/books/form',[BooksController::class, 'form'], ['filter' => AuthMiddlewareAdminOnly::class]); // done
$routes->get('/admin/books/deleted',[BooksController::class, 'deleted'], ['filter' => AuthMiddlewareAdminOnly::class]); // done
$routes->post('/admin/books/forgedelete',[BooksController::class, 'forgedelete']); // done
$routes->post('/admin/books/restore',[BooksController::class, 'restore']); // done

$routes->post('/admin/books',[BooksController::class, 'create']);  // done
$routes->post('/admin/books/update/(:num)',[BooksController::class, 'update']); // done
$routes->post('/admin/books/delete',[BooksController::class, 'delete']); // done



/**
 * End  - Route untuk page
 * */

//  User Routes
$routes->get('/profile/dashboard', [UserController::class, 'pageProfile']);
$routes->get('/profile/edit/dashboard', [UserController::class, 'pageEditProfile']);

$routes->get('/backpack/dashboard', [UserController::class, 'backpackPage'], ['filter' => AuthMiddlewareUserOnly::class]); // edit this
$routes->get('/my-order/dashboard', [UserController::class, 'orderPage'], ['filter' => AuthMiddlewareUserOnly::class]); // edit this
$routes->get('/backpack/items/(:num)/delete', [UserController::class, 'deleteBackpackItems'], ['filter' => AuthMiddlewareUserOnly::class]); // edit this

$routes->get('/(:any)/dashboard', [AuthController::class, 'dashboardUserPage'], ['filter' => AuthMiddlewareUserOnly::class]);
$routes->get('/dashboard/checkout', [UserController::class, 'checkoutPage'], ['filter' => AuthMiddlewareUserOnly::class]);
$routes->get('/(:any)/book/(:num)/(:any)', [BooksController::class, 'detailBook'], ['filter' => AuthMiddlewareUserOnly::class]);
// $routes->get('/(:any)/book/(:num)', [AuthController::class, 'dashboardUserPage'], ['filter' => AuthMiddlewareUserOnly::class]);
$routes->post('/likeBook', [UserController::class, 'likeBook']);
$routes->post('/pinjamBook', [UserController::class, 'addSession']);
$routes->post('/sendComment', [UserController::class, 'sendComment']);
$routes->post('/pinjam', [UserController::class, 'createOrder']); //main pinjam
$routes->post('/return', [UserController::class, 'returnOrder']); //main return


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
