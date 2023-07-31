<?php

namespace Config;

use App\Controllers\EmailController;
use App\Controllers\Home;

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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/lucky-number', [Home::class, 'lucky_number']);
$routes->get('/table-alternative-row-bg', [Home::class, 'table_alternative_row_bg']);
$routes->get('/credit-card', [Home::class, 'credit_card']);
$routes->post('/credit-card/store', [Home::class, 'credit_store']);

# Tutorial 5
$routes->get('/toto-bet-slip', [Home::class, 'toto_bet_slip']);
$routes->get('/toto-results', [Home::class, 'toto_result']);


$routes->get('/email', [EmailController::class, 'index']);
$routes->get('/email/create', [EmailController::class, 'create']);
$routes->get('/email/(:num)', [EmailController::class, 'show']);
$routes->get('/email/(:num)/edit', [EmailController::class, 'edit']);
$routes->delete('/email/(:num)', [EmailController::class, 'destroy']);
$routes->post('/email/store', [EmailController::class, 'store']);
$routes->post('/email/(:num)', [EmailController::class, 'update']);

$routes->get('/creditView', [Home::class, 'creditView']);
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
