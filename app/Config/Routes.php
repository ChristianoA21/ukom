<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/admin/dashboard', 'Admin::dashboard');
$routes->get('/admin/', 'Admin::dashboard');
$routes->get('/admin/daftarBuku', 'Admin::daftarBuku');
$routes->get('/admin/kategoriBuku', 'Admin::kategoriBuku');
$routes->post('/admin/tambahBuku', 'Admin::tambahBuku');
$routes->post('/admin/editBuku/(:num)', 'Admin::editBuku/$1');
$routes->get('/admin/hapusBuku/(:num)', 'Admin::hapusBuku/$1');
$routes->get('/admin/user', 'Admin::user');
$routes->post('/admin/editUser/(:num)', 'Admin::editUser/$1');
$routes->get('/admin/hapusUser/(:num)', 'Admin::hapusUser/$1');

$routes->get('/', 'Home::index');
$routes->get('/login', 'Home::login');
$routes->get('/register', 'Home::register');
$routes->get('/daftarBuku', 'Home::daftarBuku');
$routes->get('/logout', 'Home::logout');

$routes->post('proses_register', 'Auth\ProsesRegister::proses_register');
$routes->post('proses_login', 'Auth\prosesLogin::proses_login');

