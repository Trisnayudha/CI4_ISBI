<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Home Controller
$routes->get('/', 'Home::index');


//Berita Controller
$routes->get('/Berita', 'Berita\BeritaController::index');
$routes->get('/Berita/create', 'Berita\BeritaController::create');
$routes->get('/Berita/(:segment)', 'Berita\BeritaController::edit/$1');
$routes->post('/Berita/store', 'Berita\BeritaController::store');
$routes->delete('/Berita/(:num)', 'Berita\BeritaController::destroy/$1');
$routes->post('/Berita/update/(:num)', 'Berita\BeritaController::update/$1');

//Kategori Controller
$routes->get('/Kategori', 'Kategori\KategoriController::index');
$routes->get('/Kategori/create', 'Kategori\KategoriController::create');
$routes->get('/Kategori/(:segment)', 'Kategori\KategoriController::edit/$1');
$routes->post('/Kategori/store', 'Kategori\KategoriController::store');
$routes->delete('/Kategori/(:num)', 'Kategori\KategoriController::destroy/$1');
$routes->post('/Kategori/update/(:num)', 'Kategori\KategoriController::update/$1');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
