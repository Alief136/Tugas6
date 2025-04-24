<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Profil::index');
$routes->get('mata-kuliah/rpl', 'MataKuliah::rpl');
$routes->get('mata-kuliah/sim', 'MataKuliah::sim');
$routes->get('mata-kuliah/mbd', 'MataKuliah::mbd');
$routes->get('mata-kuliah/mp-si', 'MataKuliah::mp_si');
$routes->get('mata-kuliah/pemweb2', 'MataKuliah::pemweb2');
$routes->get('mata-kuliah/vdi', 'MataKuliah::visdat');
$routes->get('kontak', 'Kontak::index');
