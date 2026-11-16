<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->post('/registrasi', 'RegistrasiController::registrasi');
$routes->post('/login', 'LoginController::login');

$routes->post('produk', 'ProdukController::create');     // Tambah produk
$routes->get('produk', 'ProdukController::list');  // lihat semua produk
$routes->get('/produk/(:num)', 'ProdukController::detail/$1'); // lihat 1 produk
$routes->put('produk/(:num)', 'ProdukController::ubah/$1');  // ubah 1 produk
$routes->delete('produk/(:num)', 'ProdukController::hapus/$1');  // hapus 1 produk