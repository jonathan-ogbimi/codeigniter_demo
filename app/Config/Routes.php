<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
// Authentication

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
#$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
#$routes->get('/', 'Home::index');

// Codeigniter SLAM Demo
// Users
$routes->get('users', 'UserController::index', ['filter' => 'authGuard']);
$routes->get('add-user', 'UserController::create', ['filter' => 'authGuard']);
$routes->post('create-user', 'UserController::store', ['filter' => 'authGuard']);
$routes->get('edit-user/(:num)', 'UserController::singleUser/$1', ['filter' => 'authGuard']);
$routes->post('update-user', 'UserController::update', ['filter' => 'authGuard']);
$routes->get('delete-user/(:num)', 'UserController::delete/$1', ['filter' => 'authGuard']);

// Assets
$routes->get('assets', 'AssetController::index', ['filter' => 'authGuard']);
$routes->get('add-asset', 'AssetController::create', ['filter' => 'authGuard']);
$routes->post('create-asset', 'AssetController::store', ['filter' => 'authGuard']);
$routes->get('edit-asset/(:num)', 'AssetController::singleAsset/$1', ['filter' => 'authGuard']);
$routes->post('update-asset', 'AssetController::update', ['filter' => 'authGuard']);
$routes->get('delete-asset/(:num)', 'AssetController::delete/$1', ['filter' => 'authGuard']);

// REST APIs
$routes->group('api', static function ($routes) {
    $routes->post('asset', 'AssetController::create_asset');
    $routes->put('asset', 'AssetController::update_asset');
    $routes->get('asset', 'AssetController::get');
    //$routes->post('blog', 'Admin\Blog::index');
});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
