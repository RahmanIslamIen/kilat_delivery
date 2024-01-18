<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

// seluruh route
$routes->get('/', 'DashboardLaporanController::index');
$routes->get('/download-laporan-excel', 'LaporanController::index');
$routes->get('/tambah-data', 'TambahPengiriman::index');
$routes->post('/tambah-data', 'TambahPengiriman::save');
$routes->get('/detail-data/(:any)', 'DashboardLaporanController::detailData/$1');
