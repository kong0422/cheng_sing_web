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

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/dev', 'Home::dev');
$routes->get('/exhibition', 'Exhibition::index');
$routes->get('/news', 'News::index');
$routes->get('/news/(:num)', 'News::Info/$1');
$routes->get('/coupon', 'Coupon::index');
$routes->get('/coupon/(:num)', 'coupon::Info/$1');
$routes->get('/activity', 'Activity::index');
$routes->get('/activity/(:num)', 'Activity::Info/$1');
$routes->get('/member', 'Member::index');
// $routes->get('/member/login', 'Member::index');
// $routes->get('/member/logout', 'Member::index');
$routes->get('/vendor', 'Vendor::index');
$routes->get('/vendor/(:num)', 'Vendor::Info/$1');
$routes->get('/faq', 'Faq::index');
$routes->get('/contact', 'Contact::index');


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
