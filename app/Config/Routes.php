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

// ROUTES WEB
$routes->get('dashboard', 'petshop::dashboard');
$routes->get('about', 'petshop::about');
$routes->get('price', 'petshop::price');
$routes->get('member', 'petshop::member');
$routes->get('toko', 'petshop::toko');
$routes->get('cart', 'petshop::cart');
$routes->get('checkout2', 'petshop::checkout2');

// ROUTES PEGAWAI
$routes->get('pegawai', 'Pegawai::index');
$routes->get('create', 'Pegawai::create');
$routes->post('store', 'Pegawai::store');
$routes->get('pegawai/edit/(:num)', 'Pegawai::edit/$1');
$routes->post('pegawai/update/(:num)', 'Pegawai::update/$1');
$routes->get('pegawai/delete/(:num)', 'Pegawai::delete/$1');

// ROUTES LOGIN DAN REGISTER
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Login::index');
$routes->post('/login/process', 'Login::process');
$routes->get('/logout', 'Login::logout');

// ROUTES PELANGGAN
$routes->get('/daftarpelanggan', 'Pelanggan::daftarpelanggan');
$routes->get('/pelanggan/create', 'Pelanggan::create');
$routes->post('/daftarpelanggan', 'Pelanggan::store');
$routes->post('pelanggan/update/(:num1)', 'Pelanggan::update/$2');

// ROUTES IMAGE UPLOAD
$routes->get('/upload', 'Berkas::upload');
$routes->get('/save', 'Berkas::save');
$routes->get('/download', 'Berkas::download');
$routes->get('/berkas/edit/(:num2)', 'Berkas::edit/$2');
$routes->post('berkas/update/(:num1)', 'Berkas::update/$2');
$routes->get('berkas/delete/(:num)', 'Berkas::delete/$1');

// ROUTES CHECKOUT
$routes->get('/checkout', 'Checkout::checkout');
$routes->post('/checkout/processcheckout', 'Checkout::processcheckout');

// ROUTES INVOICE
$routes->get('/slippembayaran', 'Slip::slippembayaran');
$routes->post('/slip/process', 'Slip::process');












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